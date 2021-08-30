<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">

<!-- Address-->
{{--                            <div class="form-group row">--}}
{{--                                <label class="col-md-12 control-label">Địa chỉ</label>--}}
{{--                              git  <input type="hidden" name="address" id="addressTrade">--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <label for="thanhpho"></label>--}}
{{--                                    <select class="form-control" id="thanhpho" name="thanhpho" size="5">--}}
{{--                                        <option>Chọn Tỉnh/TP</option>--}}
{{--                                        @foreach($thanhpho as $tp)--}}
{{--                                            <option value="{{ $tp->matp }}">{{ $tp->name }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
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
                <form action="/post" method="post" class="form-posting form-horizontal">
                    @csrf
                    <div class="form-posting-inner">
                        <!-- Multiple Radios -->
                        <div class="form-group row">
                            <label class="col-md-12 control-label" for="parent_id">Chọn thông tin (<span
                                    style="color: red">*</span>):</label>
                            <div class="col-md-4" id="div_parent_id">
                                <select required id="parent_id" name="category_id" class="form-control">
                                    <option selected>Chọn danh mục</option>
                                    @foreach($category as $item)
                                        <option value="{{$item->id}}">{{$item->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <!-- Expand Value-->
                        <div class="form-group row" id="expand-value">
                        </div>
                        <!-- Text input-->
                        <div class="form-group row">
                            <label class="col-md-12 control-label" for="title">Tiêu đề (<span
                                    style="color: red">*</span>):</label>
                            <div class="col-md-12">
                                <input maxlength="70" required id="title" name="title" type="text" placeholder=""
                                       class="form-control input-md" value="">
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group row">
                            <label class="col-md-12 control-label">Địa chỉ (<span
                                    style="color: red">*</span>):</label>
                            <div class="col-md-12">
                                <select name="calc_shipping_provinces" required="">
                                    <option value="">Tỉnh / Thành phố</option>
                                </select>
                                <select name="calc_shipping_district" required="">
                                    <option value="">Quận / Huyện</option>
                                </select>
                                <input class="billing_address_1" name="" type="hidden" value="">
                                <input class="billing_address_2" name="" type="hidden" value="">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="frm_posting_so_nha" name="address" type="text" placeholder="Số nhà"
                                       class="form-control input-md" value="">
                                <span class="help-block"></span>
                            </div>

                            <div class="col-md-8">
                                <input required id="location_street" name="location_street" type="text"
                                       placeholder="Đường, Phường/Xã" class="form-control input-md"
                                       value="">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <input required id="description" name="description" type="text"
                                       placeholder="Mong muốn trao đổi" class="form-control input-md"
                                       value="">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <!-- Textarea -->
{{--                        <div class="form-group row">--}}
{{--                            <label for="">Thông tin chi tiết</label>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <textarea name="content" id="ckeditorContent" cols="100" rows="8"></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="">Chỉnh sửa</label>
                            <div class="row">
                                <div class="col-md-9">
                                    <textarea name="content" id="ckeditorContent" cols="100" rows="8"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- File Button Upload Images -->
                        <div class="form-group">
                            <input type="hidden" name="imgUpload" id="imgUpload">
                            <div name="previewDiv" id="previewDiv">

                            </div>
                            <button type="button" id="upload_widget" class="btn btn-sm btn-primary">Upload files
                            </button>
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

@include('client.layout.script-post')
</body>
