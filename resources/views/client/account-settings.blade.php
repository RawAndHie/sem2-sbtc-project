@extends('client.layout.master')
@section('content')
    <main>
        <div class="box-main">
            <div class="wrapper bg-white mt-sm-5">
                <h1 class="pb-4 border-bottom">Cài đặt tài khoản</h1>
                <div class="d-flex align-items-start py-3 border-bottom">
                    <img src="{{URL::asset('images/customer.gif')}}" class="img" alt="">
                    <div class="pl-sm-4 pl-2" id="img-section">
                        <b>Ảnh đại diện</b>
                        <p>Cập nhật ảnh đại diện của bạn</p>
                        <button class="btn btn-sm btn-primary" id="upload_widget" type="button"><b>Tải lên</b></button>
                    </div>
                </div>
                <div class="py-2">
                    <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                        <div>
                            <b>Thông tin cơ bản</b>
                            <p>Một số thông tin sẽ được hiển thị công khai.</p>
                        </div>
                    </div>
                    <div class="row py-2">

                        <div class="col-md-6">
                            <label>Họ và tên</label>
                            <input type="text" class="bg-light form-control" value="Nguyễn Văn A">
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3">
                            <label>Tên tài khoản</label>
                            <input type="text" class="bg-light form-control" value="Nguyễn A">
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="text" class="bg-light form-control" value="abc@gmail.com">
                        </div>
                        <div class="col-md-6 pt-md-0 pt-3">
                            <label>Số điện thoại</label>
                            <input type="text" class="bg-light form-control" value="0373339087">
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label>Số căn cước công dân</label>
                            <input type="text" class="bg-light form-control" value="055764301345">
                        </div>
                    </div>

                    <div class="py-3 pb-4 border-bottom">
                        <button class="btn btn-primary mr-3" type="submit">Lưu thay đổi</button>
                    </div>
                    <div class="d-sm-flex align-items-center pt-3" id="change-password">
                        <div>
                            <b>Thay đổi mật khẩu</b>
                            <p>Giữ an toàn cho tài khoản bằng cách thay đổi mật khẩu thường xuyên.</p>
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6">
                        <label>Mật khẩu hiện tại</label>
                        <input type="password" class="bg-light form-control">
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label>Mật khẩu mới</label>
                        <input type="password" class="bg-light form-control">
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" class="bg-light form-control">
                    </div>
                </div>
                <div class="py-3 pb-4 border-bottom">
                    <button class="btn btn-primary mr-3" type="submit">Đổi mật khẩu</button>
                </div>
            </div>
        </div>
    </main>
@endsection
