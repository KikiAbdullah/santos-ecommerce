<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function __construct()
    {
        $this->client = new Client(['base_uri' => config('app.api')]);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function login_proses(Request $request)
    {
        $response = $this->client->post('login', [
            'form_params' => [
                'user' => $request->user,
                'pass' => $request->pass,
            ]
        ]);
        $res = json_decode((string) $response->getBody(), true);

        if ($res['status']) {
            $data = $res['data'];

            $user = $this->get_user($data['token']);

            Session::put('user', $user);

            return redirect('/');
        }
    }

    private function get_user($token)
    {
        try {
            $response = $this->client->post('detail_user', [
                'form_params' => [
                    'token' => $token,
                ]
            ]);
            $res = json_decode((string) $response->getBody(), true);

            return $res['data'];
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
