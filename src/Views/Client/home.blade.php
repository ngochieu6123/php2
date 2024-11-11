@extends('layouts.master')

@section('title')
Trang Chủ
@endsection

@section('content')
<section class="section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 mb-5 mb-lg-0">
                <h2 class="h5 section-title">Sản phẩm</h2>
                <div class="row">

                    @foreach ($products as $product)
                        <div class="col-lg-6 col-sm-6">
                            <article class="card mb-4">
                                <div class="post-slider slider-sm">
                                    <img src="{{ asset($product['img_thumbnail']) }}" class="card-img-top" alt="post-thumb">
                                </div>
                                <div class="card-body">
                                    <h3 class="h4 mb-3">
                                        <a class="post-title" href="post-details.html">{{ $product['name'] }}
                                        </a>
                                    </h3>

                                    <ul class="card-meta list-inline">
                                        <li class="list-inline-item">
                                            <i class=""></i>{{ $product['overview'] }}
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ti-calendar">-{{ $product['updated_at'] }}</i>
                                        </li>
                                        <li class="list-inline-item">
                                            <ul class="card-meta-tag list-inline">
                                                <li class="list-inline-item"><a>{{ $product['c_name'] }}</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                    <a href="{{ url("{$product['id']}/detail") }}" class="btn btn-outline-primary">Xem chi tiết</a>
                                </div>
                            </article>
                        </div>
                    @endforeach

                </div>
            </div>
            <aside class="col-lg-4 @@sidebar">
                <!-- Search -->
                <div class="widget">
                    <h4 class="widget-title"><span>Search</span></h4>
                    <form action="#!" class="widget-search">
                        <input class="mb-3" id="search-query" name="s" type="search"
                            placeholder="Type &amp; Hit Enter...">
                        <i class="ti-search"></i>
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                    </form>
                </div>

                <!-- Search -->

                <div class="widget">
                    <h4 class="widget-title"><span>Never Miss A News</span></h4>
                    <form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank"
                        class="widget-search">
                        <input class="mb-3" id="search-query" name="s" type="search" placeholder="Your Email Address">
                        <i class="ti-email"></i>
                        <button type="submit" class="btn btn-primary btn-block" name="subscribe">Subscribe
                            now</button>
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
                        </div>
                    </form>
                </div>

                <!-- categories -->
                <div class="widget widget-categories">
                    <h4 class="widget-title"><span>Categories</span></h4>
                    <ul class="list-unstyled widget-list">
                        @foreach ($products as $product)
                            <li><a href="#" class="d-flex">{{ $product['c_name'] }} <small class="ml-auto"></small></a>
                            </li>
                        @endforeach

                    </ul>
                </div>

                <!-- Social -->
                <div class="widget">
                    <h4 class="widget-title"><span>Social Links</span></h4>
                    <ul class="list-inline widget-social">
                        <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection