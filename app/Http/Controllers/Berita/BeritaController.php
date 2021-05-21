<?php

namespace App\Http\Controllers\Berita;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BeritaController extends Controller
{
    function __construct()
    {
        $this->client = new Client(['base_uri' => config('app.api')]);
    }
    public function index()
    {
        try {
            $response = $this->client->post('berita', [
                'form_params' => [
                    'token' => Session::get('token')
                ]
            ]);
            $res = json_decode((string) $response->getBody(), true);

            if ($res['status']) {
                $berita = $res['data'];
                return view('berita.index', compact('berita'));
            }
        } catch (\Throwable $th) {
            return redirect('/');
        }
    }

    public function detail($id)
    {
        try {
            $response = $this->client->post('detail_berita', [
                'form_params' => [
                    'nomor' => decrypt($id),
                    'token' => Session::get('token')
                ]
            ]);
            $res = json_decode((string) $response->getBody(), true);

            if ($res['status']) {
                $berita = $res['data'];
                return view('berita.detail', compact('berita'));
            }
        } catch (\Throwable $th) {
            return redirect('berita');
        }
    }
}
