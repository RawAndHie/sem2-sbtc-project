<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">

<head>
    @include('client.layout.style-post')
</head>

<body class="raovat-body" id="raovat_body" itemscope itemtype="http://schema.org/WebPage">
<style>
    img {
        max-width: 20%;
    }
</style>
<main class="main">

    <section class="post-information-area">
        <div class="area-inner">
            <h1 class="title-page"><a href="/">Trang chủ</a></h1>
            <div class="form-posting-area">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/post/upload" method="post" class="form-posting form-horizontal">
                    @csrf
                    <div class="form-posting-inner">
                        <!-- Multiple Radios -->
                        <div class="form-group row">
                            <label class="col-md-12 control-label" for="parent_id" style="color: #0a6aa1">Tạo yêu cầu trao đổi </label>
                        </div>
                        <!-- Expand Value-->
                        <div class="form-group row" id="expand-value">
                        </div>
                        <!-- Text input-->
                        <div class="form-group row">
                            <label class="col-md-12 control-label" for="title">Lời nhắn(<span
                                    style="color: red">*</span>):</label>
                            <div class="col-md-12">
                                <input maxlength="70" required id="title" name="title" type="text" placeholder=""
                                       class="form-control input-md" value="">
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group row">
                            <label class="col-md-12 control-label">Lựa chọn bài viết của bạn (<span
                                    style="color: red">*</span>):</label>
                            <div class="col-md-12">
                                <form action="">
                                    <select>
                                        <option value="">Bài viết của bạn</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <input type="submit" value="ĐĂNG TIN" class="btn-post-information">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
</div>
@include('client.layout.script')
@include('client.layout.script-post')
</body>
