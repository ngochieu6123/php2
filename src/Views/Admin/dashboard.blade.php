@extends('layouts.master')

@section('title')
Dashboard
@endsection
@section('content')
<div class="main_content_iner  ">
    <div class="container-fluid p-0 ">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h1 class="f_s_40 f_w_700 text_blue">Thống kê sản phẩm</h1><br>
                        <h3>Số lượng sản phẩm : {{ $products }}</h3><br>

                        <h3>Số lượng danh mục : {{ $categories }}</h3><br>

                        <h3>Số lượng người dùng : {{ $users }}</h3><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection