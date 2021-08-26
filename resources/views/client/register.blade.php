@extends('client.layout.master')
@section('content')
    <div class="main-w3layouts wrapper">
        <h1>Doi do</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="#" method="post">
                    <input class="text" type="text" name="username" placeholder="Username" required="">
                    <input class="text email" type="email" name="email" placeholder="Email" required="">
                    <input class="text" type="password" name="password" placeholder="Password" required="">
                    <input class="text w3lpass" type="password" name="confirmPassword" placeholder="Confirm Password" required="">
                    <input class="text" type="text" name="fullName" placeholder="Fullname" required="">
                    <input class="text" type="text" name="Phone" placeholder="Phone" required="">
                    <input class="text" type="text" name="id_number" placeholder="ID" required="">
                    <input class="fileupload " type="file" name="id_image" placeholder="ID photo on the front" required="">
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions</span>
                        </label>
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" value="SIGNUP">
                </form>
                <p>Don't have an Account? <a href="#"> Login Now!</a></p>
            </div>
        </div>
    </div>
    </div>
@endsection
