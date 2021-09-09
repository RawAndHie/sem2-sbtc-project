@extends('client.layout.master')
@section('content')
    <style>
        img {
            max-width: 100%;
        }
    </style>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="beadcrumb">
                        <ol class="breadcrumb-inner">
                            <li class="breadcrumb-item">
                                <a href="/">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item active">request-detail</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="row bg-white m-0" id="details">
                <div class="col-lg-8 col-md-12 col-12 col-left pr-0">
                    <div class="main-left">
                        <div class="line-break"></div>
                        {{--                        detail--}}
                        <div class="details-post">
                            <h1>Đồng hồ CASIO</h1>
                            <p class="info-posting-time">2021-08-30 00:19:21</p>
                            <div class="line-break"></div>
                            <div class="info-post">
                                <div class="box-title">
                                    <h2 class="title">Sản phẩm muốn trao đổi:</h2>
                                </div>
                                <div class="box-information">
                                    Muốn đổi đồng hồ Rolex
                                </div>
                                <div class="line-break"></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--                right--}}
                <div class="col-lg-4 col-md-4 d-none d-lg-block">
                    <div class="main-right">
                        <div class="sidebar">
                            <div class="box-title">
                                <h2 class="title">Tin rao nổi bật</h2>
                            </div>
                            <div class="item-post">
                                <a href="#" class="item-image">
                                    <img
                                        src="https://res.cloudinary.com/iamraw/image/upload/v1630282760/xqkpcdssr4mdp2val5on.jpg"
                                        style="max-width: 30%" alt="">
                                </a>
                                <div class="item-info">
                                    <h3>
                                        <a href="#">Đồng hồ fake</a>
                                    </h3>
                                    <div class="price">
                                        <p>
                                            Muốn đổi đồng hồ real
                                        </p>
                                    </div>
                                    <p class="location">
                                        8 Tôn Thất Thuyết
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--                right--}}

            </div>
        </div>
    </main>
@endsection
