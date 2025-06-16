@extends('layouts.main')
@section('title', 'About')
@section('main-container')

    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Blog details</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Blog details</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start blog-with-sidebar -->
    <section class="blog-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-md-9 blog-single-content">
                    <div class="post">
                        <div class="media">
                            <img src="{{ url('assets/images/blog-details/img-1.jpg')}}" alt class="img img-responsive">
                        </div>
                        <div class="post-title-meta">
                            <button class="btn">Construction</button>
                            <h2>Empowering Local Services in Pakistan: Build with Us</h2>
                            <ul>
                                <li><a href="{{ url('/')}}">Muhammad Jamil</a></li>
                                <li><a href="{{ url('/')}}">21 feb, 2020</a></li>
                            </ul>
                        </div>
                        <div class="post-body">
                            <p>Pakistan's evolving landscape demands reliable and accessible home services that cater to everyday needs. Our platform is designed to bridge the gap between skilled professionals and homeowners, ensuring that essential services are delivered with quality and efficiency. By leveraging local talent, we create opportunities that empower communities and enhance convenience for our users.</p>
                            <p>In a market often cluttered with unreliable options, our system ensures transparency, affordability, and trust. From Karachi to Lahore, Islamabad to Peshawar, we are proud to connect customers with experts across the nation. Together, we aim to redefine the standards of home services in Pakistan—one household at a time. </p>
                            <p> Join us as we work toward building a better tomorrow, driven by integrity and excellence.</p>
                        </div>
                        <div class="gallery-post">
                            <div class="gallery">
                                <div>
                                    <img src="{{ url('assets/images/blog-details/img-2.jpg')}}" alt class="img img-responsive">
                                </div>
                                <div>
                                    <img src="{{ url('assets/images/blog-details/img-3.jpg')}}" alt class="img img-responsive">
                                </div>
                            </div>

                            <h3>Why Quality Content Matters? </h3>
                            <p>Quality content is more than just words—it's the foundation of meaningful engagement. It is a well-known fact that a readers attention is drawn to structured and readable layouts, creating a better understanding of the message. Our platform emphasizes delivering content that is not only visually appealing but also purposeful.</p>
                        </div>
                    </div> <!-- end post -->

                    <div class="tag-share">
                        <div>
                            <span>Tags: </span>
                            <ul class="tag">
                                <li><a href="{{ url('/') }}">Business</a></li>
                                <li><a href="{{ url('/') }}">Article</a></li>
                                <li><a href="{{ url('/') }}">Blog</a></li>
                                <li><a href="{{ url('/') }}">Creative</a></li>
                            </ul>
                        </div>

                        <div>
                            <ul class="share">
                                <li><a href="{{ url('/') }}"><i class="fa fa-facebook"></i>Like</a></li>
                                <li><a href="{{ url('/') }}"><i class="fa fa-twitter"></i>Tweet</a></li>
                                <li><a href="{{ url('/') }}"><i class="fa fa-linkedin"></i>Share</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="comments">
                        <div class="title">
                            <h3><span>2</span> comments</h3>
                        </div>

                        <ol>
                            <li>
                                <div class="article">
                                    <div class="author-pic">
                                        <img src="{{ url('assets/images/blog-details/comments/img-1.jpg')}}" alt>
                                    </div>
                                    <div class="details">
                                        <div class="author-meta">
                                            <div class="name">
                                                <h4>Hasib sharif</h4>
                                            </div>
                                            <div class="date"><span>2 hours ago</span></div>
                                        </div>
                                        <div class="comment-content">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly believable. </p>
                                        </div>
                                        <div class="replay">
                                            <button>Replay</button>
                                        </div>
                                    </div>
                                </div>
                                <ol>
                                    <li>
                                        <div class="article">
                                            <div class="author-pic">
                                                <img src="{{ url('assets/images/blog-details/comments/img-2.jpg')}}" alt>
                                            </div>
                                            <div class="details">
                                                <div class="author-meta">
                                                    <div class="name">
                                                        <h4>Ahmad sharif</h4>
                                                    </div>
                                                    <div class="date"><span>2 hours ago</span></div>
                                                </div>
                                                <div class="comment-content">
                                                    <p>There are many variations of passages of Lorem Ipsum available, but
                                                        the majority have suffered alteration in some form, by injected
                                                        humour, or randomised words which don't look even slightly
                                                        believable. </p>
                                                </div>
                                                <div class="replay">
                                                    <button>Replay</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="article">
                                            <div class="author-pic">
                                                <img src="{{ url('assets/images/blog-details/comments/img-2.jpg')}}" alt>
                                            </div>
                                            <div class="details">
                                                <div class="author-meta">
                                                    <div class="name">
                                                        <h4>Ahmad sharif</h4>
                                                    </div>
                                                    <div class="date"><span>2 hours ago</span></div>
                                                </div>
                                                <div class="comment-content">
                                                    <p>There are many variations of passages of Lorem Ipsum available, but
                                                        the majority have suffered alteration in some form, by injected
                                                        humour, or randomised words which don't look even slightly
                                                        believable. </p>
                                                </div>
                                                <div class="replay">
                                                    <button>Replay</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <li>
                                <div class="article">
                                    <div class="author-pic">
                                        <img src="{{ url('assets/images/blog-details/comments/img-1.jpg')}}" alt>
                                    </div>
                                    <div class="details">
                                        <div class="author-meta">
                                            <div class="name">
                                                <h4>Hasib sharif</h4>
                                            </div>
                                            <div class="date"><span>2 hours ago</span></div>
                                        </div>
                                        <div class="comment-content">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly believable. </p>
                                        </div>
                                        <div class="replay">
                                            <button>Replay</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>

                        <div class="comment-respond">
                            <h3>Post your comment</h3>
                            <form class="clearfix">
                                <div class="col col-md-4">
                                    <input type="text" class="form-control" placeholder="username..">
                                </div>
                                <div class="col col-md-4">
                                    <input type="email" class="form-control" placeholder="email address..">
                                </div>
                                <div class="col col-md-4">
                                    <input type="text" class="form-control" placeholder="website..">
                                </div>
                                <div class="col col-xs-12">
                                    <textarea class="form-control" placeholder="write.."></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="btn theme-btn-s2">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end comments -->
                </div> <!-- end blog-content -->

                <div class="blog-sidebar col col-lg-3 col-lg-offset-1 col-md-3 col-sm-5">
                    <div class="widget search-widget">
                        <form class="form">
                            <input type="text" class="form-control" placeholder="Search here..">
                        </form>
                    </div>
                    <div class="widget category-widget">
                        <h3>Category</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">Architect <span class="badge">12</span></a></li>
                            <li><a href="{{ url('/') }}">Bulding <span class="badge">20</span></a></li>
                            <li><a href="{{ url('/') }}">Travel <span class="badge">8</span></a></li>
                            <li><a href="{{ url('/') }}">Renovation <span class="badge">45</span></a></li>
                            <li><a href="{{ url('/') }}">Repair <span class="badge">33</span></a></li>
                            <li><a href="{{ url('/') }}">Painting <span class="badge">12</span></a></li>
                        </ul>
                    </div>
                    <div class="widget recent-post-widget">
                        <h3>Recent post</h3>
                        <ul>
                            <li>
                                <div class="post-pic">
                                    <img src="{{ url('assets/images/blog/thumb/img-1.jpg')}}" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="{{ url('/') }}">Micenas placerat nibh loreming fentum</a></h4>
                                    <span>Sep 25, 2016</span>
                                </div>
                            </li>
                            <li>
                                <div class="post-pic">
                                    <img src="{{ url('assets/images/blog/thumb/img-2.jpg')}}" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="{{ url('/') }}">Integer suscipit sit amet</a></h4>
                                    <span>Sep 25, 2024</span>
                                </div>
                            </li>
                            <li>
                                <div class="post-pic">
                                    <img src="{{ url('assets/images/blog/thumb/img-3.jpg')}}" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="{{ url('/') }}">Praeent vehicula neget tempus</a></h4>
                                    <span>Sep 25, 2024</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget archive-widget">
                        <h3>Archive</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">September 2015 <span class="badge">12</span></a></li>
                            <li><a href="{{ url('/') }}">August 2015 <span class="badge">20</span></a></li>
                            <li><a href="{{ url('/') }}">July 2015 <span class="badge">8</span></a></li>
                            <li><a href="{{ url('/') }}">October 2014 <span class="badge">45</span></a></li>
                            <li><a href="{{ url('/') }}">January 2014 <span class="badge">33</span></a></li>
                            <li><a href="{{ url('/') }}">December 2013 <span class="badge">12</span></a></li>
                        </ul>
                    </div>
                    <div class="widget tag-widget">
                        <h3>Tags</h3>
                        <div class="all-tags">
                            <a href="{{ url('/') }}" class="btn">Team</a>
                            <a href="{{ url('/') }}" class="btn">Charity</a>
                            <a href="{{ url('/') }}" class="btn">Volunteer</a>
                            <a href="{{ url('/') }}" class="btn">Web</a>
                            <a href="{{ url('/') }}" class="btn">Human</a>
                            <a href="{{ url('/') }}" class="btn">Education</a>
                            <a href="{{ url('/') }}" class="btn">UI</a>
                            <a href="{{ url('/') }}" class="btn">Speech</a>
                            <a href="{{ url('/') }}" class="btn">News</a>
                            <a href="{{ url('/') }}" class="btn">2016</a>
                            <a href="{{ url('/') }}" class="btn">Welfare</a>
                            <a href="{{ url('/') }}" class="btn">Design</a>
                            <a href="{{ url('/') }}" class="btn">Event</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>

@endsection
