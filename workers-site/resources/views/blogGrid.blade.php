@extends('layouts.main')
@section('title', 'About')
@section('main-container')
        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Blog grid</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Blog grid</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start blog-grid-section -->
        <section class="blog-grid-section section-padding">
            <div class="container">
                <div class="news-grids">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ url('assets/images/blog/img-1.jpg') }}" alt>
                        </div>
                        <div class="entry-details">
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                    <li><i class="fa fa-comments"></i><a href="{{ url('/') }}">2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="entry-body">
                                <h3><a href="{{ url('/') }}">China's industrial profits grow faster in first eight months</a></h3>
                                <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ url('assets/images/blog/img-2.jpg')}}" alt>
                        </div>
                        <div class="entry-details">
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                    <li><i class="fa fa-comments"></i><a href="{{ url('/') }}">2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="entry-body">
                                <h3><a href="{{ url('/') }}">Exploring the wild side in an industrial jungle bengle</a></h3>
                                <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ url('assets/images/blog/img-3.jpg')}}" alt>
                        </div>
                        <div class="entry-details">
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                    <li><i class="fa fa-comments"></i><a href="{{ url('/') }}">2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="entry-body">
                                <h3><a href="{{ url('/') }}">Bus drivers in Liverpool vote for industrial action</a></h3>
                                <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ url('assets/images/blog/img-3.jpg')}}" alt>
                        </div>
                        <div class="entry-details">
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                    <li><i class="fa fa-comments"></i><a href="{{ url('/') }}">2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="entry-body">
                                <h3><a href="{{ url('/') }}">Bus drivers in Liverpool vote for industrial action</a></h3>
                                <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ url('assets/images/blog/img-2.jpg')}}" alt>
                        </div>
                        <div class="entry-details">
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                    <li><i class="fa fa-comments"></i><a href="{{ url('/') }}">2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="entry-body">
                                <h3><a href="{{ url('/') }}">Exploring the wild side in an industrial jungle bengle</a></h3>
                                <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ url('assets/images/blog/img-1.jpg')}}" alt>
                        </div>
                        <div class="entry-details">
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                    <li><i class="fa fa-comments"></i><a href="{{ url('/') }}">2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="entry-body">
                                <h3><a href="{{ url('/') }}">China's industrial profits grow faster in first eight months</a></h3>
                                <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end news-grids -->

                <div class="pagination-wrapper">
                    <ul class="pg-pagination">
                        <li>
                            <a href="{{ url('/') }}" aria-label="Previous">
                                <i class="fa fa-angle-double-left"></i>
                            </a>
                        </li>
                        <li class="active"><a href="{{ url('/') }}">1</a></li>
                        <li><a href="{{ url('/') }}">2</a></li>
                        <li><a href="{{ url('/') }}">3</a></li>
                        <li>
                            <a href="{{ url('/') }}" aria-label="Next">
                                <i class="fa fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-grid-section     -->
@endsection
