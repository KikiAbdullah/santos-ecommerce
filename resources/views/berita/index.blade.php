@extends('layouts.app')

@section('hero')
<!--Hero Section-->
<div class="hero-section hero-background style-02">
    <h1 class="page-title">Berita</h1>
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="{{ url('/') }}" class="permal-link">Home</a></li>
            <li class="nav-item"><span class="current-page">Berita</span></li>
        </ul>
    </nav>
</div>
@endsection

@section('content')
<div class="page-contain blog-page left-sidebar">
    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">

                <ul class="posts-list main-post-list">
                    @foreach($berita as $data_berita)
                    <li class="post-elem">
                        <div class="post-item style-left-info">
                            <div class="thumbnail">
                                <a href="{{ route('berita.detail', encrypt($data_berita['id'])) }}" class="link-to-post"><img src="{{ $data_berita['image'] }}" width="370" height="270" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h4 class="post-name"><a href="{{ route('berita.detail', encrypt($data_berita['id'])) }}" class="linktopost">{{ $data_berita['judul'] }}</a></h4>
                                <p class="post-archive"><b class="post-cat">{{ $data_berita['tags'] }}</b><span class="post-date"> / {{ $data_berita['create'] }}</span></p>
                                <p class="excerpt">{!! $data_berita['isi'] !!}</p>
                                <div class="group-buttons">
                                    <a href="{{ route('berita.detail', encrypt($data_berita['id'])) }}" class="btn readmore">read more</a>
                                    <a href="#" class="btn count-number liked"><i class="biolife-icon icon-heart-1"></i><span class="number">20</span></a>
                                    <a href="#" class="btn count-number commented"><i class="biolife-icon icon-conversation"></i><span class="number">06</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <div class="biolife-panigations-block ">
                    <ul class="panigation-contain">
                        <li><span class="current-page">1</span></li>
                        <li><a href="#" class="link-page">2</a></li>
                        <li><a href="#" class="link-page">3</a></li>
                        <li><span class="sep">....</span></li>
                        <li><a href="#" class="link-page">20</a></li>
                        <li><a href="#" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>

            <!-- Sidebar -->
            <aside id="sidebar" class="sidebar blog-sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">

                <div class="biolife-mobile-panels">
                    <span class="biolife-current-panel-title">Sidebar</span>
                    <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
                </div>

                <div class="sidebar-contain">

                    <!--Search Widget-->
                    <div class="widget search-widget">
                        <div class="wgt-content">
                            <form action="#" name="frm-search" method="get" class="frm-search">
                                <input type="text" name="s" value="" placeholder="SEARCH..." class="input-text">
                                <button type="submit" name="ok"><i class="biolife-icon icon-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <!--Categories Widget-->
                    <div class="widget biolife-filter">
                        <h4 class="wgt-title">Categories</h4>
                        <div class="wgt-content">
                            <ul class="cat-list">
                                <li class="cat-list-item"><a href="#" class="cat-link">Beauty (30)</a></li>
                                <li class="cat-list-item"><a href="#" class="cat-link">Fashion (50)</a></li>
                                <li class="cat-list-item"><a href="#" class="cat-link">Food (10)</a></li>
                                <li class="cat-list-item"><a href="#" class="cat-link">Life Style (60)</a></li>
                                <li class="cat-list-item"><a href="#" class="cat-link">Travel (10)</a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Posts Widget-->
                    <div class="widget posts-widget">
                        <h4 class="wgt-title">Recent post</h4>
                        <div class="wgt-content">
                            <ul class="posts">
                                <li>
                                    <div class="wgt-post-item">
                                        <div class="thumb">
                                            <a href="#"><img src="{{ asset('assets/images/blogpost/post-wgt-01.jpg') }}" width="80" height="58" alt=""></a>
                                        </div>
                                        <div class="detail">
                                            <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World</a></h4>
                                            <p class="post-archive">22 Jan 2019<span class="comment">15 Comments</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wgt-post-item">
                                        <div class="thumb">
                                            <a href="#"><img src="{{ asset('assets/images/blogpost/post-wgt-02.jpg') }}" width="80" height="58" alt=""></a>
                                        </div>
                                        <div class="detail">
                                            <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World</a></h4>
                                            <p class="post-archive">06 Apr 2019<span class="comment">06 Comments</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wgt-post-item">
                                        <div class="thumb">
                                            <a href="#"><img src="{{ asset('assets/images/blogpost/post-wgt-03.jpg') }}" width="80" height="58" alt=""></a>
                                        </div>
                                        <div class="detail">
                                            <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World</a></h4>
                                            <p class="post-archive">12 May 2019<span class="comment">08 Comments</span></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--Twitter Widget-->
                    <div class="widget twitter-widget">
                        <h4 class="wgt-title">Latest Tweets</h4>
                        <div class="wgt-content">
                            <ul class="content">
                                <li>
                                    <div class="wgt-twitter-item">
                                        <div class="author"><a href="#"><img src="{{ asset('assets/images/blogpost/author.png') }}" width="38" height="38" alt="author"></a></div>
                                        <div class="detail">
                                            <h4 class="account-info">
                                                <a href="#" class="ath-name">Braum J. Teran</a>
                                                <a href="#" class="ath-taglink">@real BraumTeran</a>
                                            </h4>
                                            <p class="tweet-content">@jakedonham President XI told me he appreciates that the U.S.<br /><a href="#">http://company/googletzd</a></p>
                                            <div class="tweet-count">
                                                <a class="btn responsed"><i class="fa fa-comment" aria-hidden="true"></i>2.9N</a>
                                                <a class="btn liked"><i class="fa fa-heart" aria-hidden="true"></i>10N</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wgt-twitter-item">
                                        <div class="author"><a href="#"><img src="{{ asset('assets/images/blogpost/author.png') }}" width="38" height="38" alt="author"></a></div>
                                        <div class="detail">
                                            <h4 class="account-info">
                                                <a href="#" class="ath-name">Braum J. Teran</a>
                                                <a href="#" class="ath-taglink">@real BraumTeran</a>
                                            </h4>
                                            <p class="tweet-content">@jakedonham President XI told me he appreciates that the U.S.<br /><a href="#">http://company/googletzd</a></p>
                                            </p>
                                            <div class="tweet-count">
                                                <a class="btn responsed"><i class="fa fa-comment" aria-hidden="true"></i>2.9N</a>
                                                <a class="btn liked"><i class="fa fa-heart" aria-hidden="true"></i>10N</a>
                                            </div>
                                            <div class="viewall">
                                                <a href="#" class="view-all">view all</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--Comments Widget-->
                    <div class="widget comment-widget">
                        <h4 class="wgt-title">Recent Comments</h4>
                        <div class="wgt-content">
                            <ul class="comment-list">
                                <li>
                                    <p class="cmt-item"><a href="#" class="auth-name"><i class="biolife-icon icon-conversation"></i>Jessica Alba</a><a href="#" class="link-post">on Healthy Organics</a></p>
                                </li>
                                <li>
                                    <p class="cmt-item"><a href="#" class="auth-name"><i class="biolife-icon icon-conversation"></i>Jessica Alba</a><a href="#" class="link-post">on Best Organics</a></p>
                                </li>
                                <li>
                                    <p class="cmt-item"><a href="#" class="auth-name"><i class="biolife-icon icon-conversation"></i>Jessica Alba</a><a href="#" class="link-post">on Healthy Organics</a></p>
                                </li>
                                <li>
                                    <p class="cmt-item"><a href="#" class="auth-name"><i class="biolife-icon icon-conversation"></i>Jessica Alba</a><a href="#" class="link-post">on Healthy Organics</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </aside>
        </div>
    </div>
</div>
@endsection