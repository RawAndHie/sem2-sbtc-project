@extends('client.layout.master')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12 col-left pr-0">
                    <div class="main-left">
                        <div class="wrap-items">
                            <div class="box-title">
                                <h2 class="title">Tin mới nhất</h2>
                            </div>
                            <div class="list-item-post">
                                @foreach($list as $item)
                                    <div class="item-post">
                                        <a href="#" class="item-image">
                                            <img src="{{ $item->image }}" alt="">
                                        </a>
                                        <div class="item-info">
                                            <h3>
                                                <a href="#">{{ $item->title }}</a>
                                            </h3>
                                            <div class="price">
                                                <p>
                                                    {{ $item->content }}
                                                </p>
                                            </div>
                                            <p style="font-size: 15px">Đăng bởi : {{ $account }} </p>

                                            <p class="location">
                                                {{ $item->address }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-none d-md-block">
                    <div class="main-right">
                        <div class="sidebar">
                            <div class="box-title">
                                <h2 class="title">Tin nổi bật</h2>
                            </div>
                            <div class="list-item-sidebar">
                                <div class="item-post">
                                    <a href="#" class="item-image">
                                        <img src="images/product-1.jpg" alt="">
                                    </a>
                                    <div class="item-info">
                                        <h3>
                                            <a href="#">Chính chủ bán nhà có sẵn hợp đồng cho thuê 35 triệu</a>
                                        </h3>
                                        <div class="price">
                                            <p>
                                                16.500 VNĐ
                                            </p>
                                        </div>
                                        <p class="location">
                                            Phường Linh Xuân, Quận Thủ Đức, TP Hồ Chí Minh
                                        </p>
                                    </div>
                                </div>
                                <div class="item-post">
                                    <a href="#" class="item-image">
                                        <img src="images/product-1.jpg" alt="">
                                    </a>
                                    <div class="item-info">
                                        <h3>
                                            <a href="#">Chính chủ bán nhà có sẵn hợp đồng cho thuê 35 triệu</a>
                                        </h3>
                                        <div class="price">
                                            <p>
                                                16.500 VNĐ
                                            </p>
                                        </div>
                                        <p class="location">
                                            Phường Linh Xuân, Quận Thủ Đức, TP Hồ Chí Minh
                                        </p>
                                    </div>
                                </div>
                                <div class="item-post">
                                    <a href="#" class="item-image">
                                        <img src="images/product-1.jpg" alt="">
                                    </a>
                                    <div class="item-info">
                                        <h3>
                                            <a href="#">Chính chủ bán nhà có sẵn hợp đồng cho thuê 35 triệu</a>
                                        </h3>
                                        <div class="price">
                                            <p>
                                                16.500 VNĐ
                                            </p>
                                        </div>
                                        <p class="location">
                                            Phường Linh Xuân, Quận Thủ Đức, TP Hồ Chí Minh
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
