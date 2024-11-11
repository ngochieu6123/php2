@extends('layouts.master')

@section('title')
Chi tiết
@endsection

@section('content')
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class=" col-lg-9   mb-5 mb-lg-0">
        <article>
          <div class="post-slider mb-4">
            <img src="{{ asset($products['img_thumbnail']) }}" class="card-img" alt="post-thumb">
          </div>

          <h1 class="h2">{{ $products['name'] }}</h1>
          <ul class="card-meta my-3 list-inline">
            <li class="list-inline-item">
            </li>
            <li class="list-inline-item">
              <i class="ti-timer"></i>{{ $products['created_at'] }}
            </li>
            <li class="list-inline-item">
              <h2>{{ $products['overview'] }}</h2>
            </li>
            <li class="list-inline-item">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="#">
                    @php
            foreach ($categories as $key => $value) {
              if ($products['category_id'] == $value['id']) {
              echo $value['name'];
              }
            }
            @endphp
                  </a></li>
              </ul>
            </li>
          </ul>
          <div class="content">
           <h4>{{ $products['content'] }}</h4>
          </div>
        </article>

      </div>



    </div>
  </div>
</section>
@endsection