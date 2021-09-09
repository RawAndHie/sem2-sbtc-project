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
                            <li class="breadcrumb-item active">Yêu cầu trao đổi</li>
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
                            <h1>
                                <a href="/detail/{{$requestDetail->myRequest->id}}"> {{$requestDetail->myRequest->title}}</a>
                            </h1>
                            <p class="info-posting-time">Ngày tạo : {{$requestDetail->created_at}}</p>
                            <p><a href="/detail/{{$requestDetail->trade_id}}">Xem bài viết của bạn</a></p>
                            <p><a href="/detail/{{$requestDetail->trade_request_id}}">Xem bài viết muốn trao đổi với
                                    bạn</a></p>
                            <div class="info-post">
                                <div class="box-title">
                                    <h2 class="title">Trạng thái:</h2>
                                </div>
                                <div class="box-information {{$requestDetail->myRequest->statusColor}}">
                                    {{$requestDetail->myRequest->statusName}}
                                </div>
                                <div class="line-break"></div>
                            </div>
                            <div class="line-break"></div>
                            <div class="info-post">
                                <div class="box-title">
                                    <h2 class="title">Lời nhắn:</h2>
                                </div>
                                <div class="box-information">
                                    {{$requestDetail->messenger_request}}
                                </div>
                                <div class="line-break"></div>
                                <div class="box-module box-supplier-fluid-2">
                                    <div class="box-body">
                                        <div class="box-img">
                                            <a href="" title="" class="box">
                                                <img src="{{$requestDetail->findAccountRequest->image_avatar}}">
                                            </a>
                                        </div>
                                        <div class="info-supplier">
                                            <p class="info-item">
                                                <span class="info-label">Người yêu cầu:</span>
                                                <a href="/personal">{{$requestDetail->findAccountRequest->full_name}}</a>
                                            </p>
                                            <div class="border-line"></div>
                                            <p class="info-item">
                                                <div>
                                                <span class="info-label">Yêu cầu trao đổi: </span>
                                                    <a href="/pending-detail/{{$requestDetail->id}}/accept" class="btn btn-success"><i class="fas fa-check"></i> Đồng ý</a>
                                                    <a href="/pending-detail/{{$requestDetail->id}}/cancel" class="btn btn-warning"><i class="fas fa-window-close"></i>Từ chối</a>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
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
