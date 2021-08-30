@extends('client.layout.master')
@section('content')
    <main>
        <div class="box-main">
            <div class="container-register">
                <div class="title">Đăng ký tài khoản</div>
                <div class="content">
                    <form action="/register" method="post">
                        @csrf
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Full Name</span>
                                <input type="text" name="fullName" placeholder="Enter your name">
                                @error('fullName')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Username</span>
                                <input type="text" name="username" placeholder="Enter your username">
                                @error('username')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input type="text" name="email" placeholder="Enter your email">
                                @error('email')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Phone Number</span>
                                <input type="text" name="phone" placeholder="Enter your number">
                                @error('phone')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Password</span>
                                <input type="password" name="password" placeholder="Enter your password">
                                @error('password')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Confirm Password</span>
                                <input type="password" name="password_confirmation"  placeholder="Confirm your password">
                                @error('password_confirmation')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">ID number</span>
                                <input type="text" name="id_number" placeholder="Enter your id">
                                @error('id_number')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-box">
                                <span class="details">Ảnh cccd</span>
                                <input type="hidden" name="imgUpload" id="imgUpload">
                                <div name="previewDiv" id="previewDiv">

                                </div>
                                <button type="button" id="upload_widget" class="btn btn-sm btn-primary">Upload files</button>
                                @error('imgUpload')
                                <div class="alert alert-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="rules">
                            <input type="checkbox" class="checkbox" required="">
                            <span>Tôi đồng ý với điều khoản và dịch vụ</span>
                        </div>
                        <div class="button">
                            <input type="submit" value="REGISTER">
                        </div>
                        <p class="link-login" >Đã có tài khoản? <a href="#"> Đăng nhập ngay!</a></p>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
