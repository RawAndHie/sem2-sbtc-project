@extends('client.layout.master')
@section('content')
    <div class="main-w3layouts wrapper">
        <h1>Đăng ký tài khoản</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/register" method="post">
                    @csrf
                    <div class="form-group">
                        <input  type="text" name="username" placeholder="Username" >
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" >
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" >
                    </div>

                    <div class="form-group">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password">
                    </div>

                    <div class="form-group">
                        <input type="text" name="fullName" placeholder="Fullname" >
                    </div>

                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Phone">
                    </div>

                    <div class="form-group">
                        <input type="text" name="id_number" placeholder="ID">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="idCard" id="imgUpload" placeholder="ID photo on the front">
                        <div id="previewDiv">

                        </div>
                        <button id="upload_widget" class="btn btn-sm btn-primary">Upload files</button>
                    </div>
                    <div class="wthree-text form-group">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>Tôi đồng ý với điều khoản và dịch vụ </span>
                        </label>
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" value="REGISTER">
                </form>
                <p>Đã có tài khoản? <a href="#"> Đăng nhập ngay!</a></p>
            </div>
        </div>
    </div>
    </div>

@endsection
