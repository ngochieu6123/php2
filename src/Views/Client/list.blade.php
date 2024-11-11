@extends('layouts.master')

@section('title')
    Danh Sách
@endsection

@section('content')
    <section class="section-sm">
        <div class="container">
            <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card border-0 rounded-0 text-center shadow-none overflow-hidden">
                        <a href="{{ url("{$product['id']}/detail") }}">
                            <span class="badge badge-primary">NEW</span>
                            <img src="{{ asset($product['img_thumbnail']) }}" alt="" class="card-img-top rounded-0" height="250px">
                            <div class="card-body">
                                <h4 class="text-uppercase mb-3">{{ $product['name']}}</h4>
                                <p class="h4 text-muted font-weight-light mb-3">{{ $product['c_name']}}</p>
                                <p class="h4">{{ $product['overview']}}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

                <div class="col-12 text-center mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item page-item active ">
                            <a href="#!" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
