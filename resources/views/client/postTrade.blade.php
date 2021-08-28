@extends('client.layout.master')
@section('content')
    <style>
        input {
            border: solid 1px black;
        }
    </style>
    <main class="main">
        <section class="post-information-area">
            <div class="area-inner">
                <h1 class="title-page">Đăng tin</h1>
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
                    <form action="/post" method="post" id="save_post" class="form-posting form-horizontal">
                        @csrf
                        <fieldset class="form-posting-inner">
                            <div class="form-group row" id="expand-value">
                            </div>
                            <!-- Title-->
                            <div class="form-group row">
                                <label class="col-md-12 control-label" for="title">Tiêu đề (<span
                                        style="color: red">*</span>):</label>
                                <div class="col-md-12">
                                    <input style="border: solid 1px rgb(27 24 24);" maxlength="70" id="title"
                                           name="title" type="text" placeholder="Vui lòng nhập tiêu đề bài viết"
                                           class="form-control input-md" value="">
                                </div>
                            </div>
                            <!-- Category-->
                            <div class="form-group row">
                                <input type="hidden" name="csrf_token">
                                <label class="col-md-12 control-label" for="parent_id">Chọn thông tin (<span
                                        style="color: red">*</span>):</label>
                                <div class="col-md-4" id="">
                                    <select id="" name="category_id" class="form-control">
                                        <option value="" hidden disabled selected>Chọn danh mục</option>
                                        @foreach($category as $categories)
                                            <option value="{{ $categories->category_id }}">
                                                {{ $categories->category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input style="border: solid 1px rgb(27 24 24);" id="frm_posting_so_nha"
                                           name="address" type="text"
                                           placeholder="Địa chỉ nhà"
                                           class="form-control input-md" value="">
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Map</label>
                                <input class="form-control" type="text" id="searchmap" placeholder="Nhập địa chỉ">
                                <div id="map-canvas"></div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-5">
                                    <label for="">Lat</label>
                                    <input class="form-control" type="text" id="lat" name="lat">
                                </div>

                                <div class="col-md-5">
                                    <label for="">Long</label>
                                    <input class="form-control" type="text" id="lng" name="lng">
                                </div>
                            </div>



                            <!-- Address-->
{{--                            <div class="form-group row">--}}
{{--                                <label class="col-md-12 control-label">Địa chỉ</label>--}}
{{--                                <input type="hidden" name="address" id="addressTrade">--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <label for="thanhpho"></label>--}}
{{--                                    <select class="form-control" id="thanhpho" name="thanhpho" size="5">--}}
{{--                                        <option>Chọn Tỉnh/TP</option>--}}
{{--                                        @foreach($thanhpho as $tp)--}}
{{--                                            <option value="{{ $tp->matp }}">{{ $tp->name }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-4">--}}
{{--                                    <select class="form-control" name="quanhuyen" id="quanhuyen">--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <select class="form-control" name="phuongxa" id="phuongxa">--}}

{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <input style="border: solid 1px rgb(27 24 24);" id="frm_posting_so_nha"--}}
{{--                                           name="diachi" type="text"--}}
{{--                                           placeholder="Số nhà"--}}
{{--                                           class="form-control input-md" value="">--}}
{{--                                    <span class="help-block"></span>--}}
{{--                                </div>--}}


{{--                            </div>--}}
                            <!-- Text input-->

                            <!-- Textarea -->

                            <div class="form-group row" id="div__content__cke">
                                <label class="col-md-12 control-label" for="description">Thông tin sản phẩm (<span
                                        style="color: red">*</span>):
                                    <div class="word-count-cke">
                                        (
                                        <div id="myCounter"></div>
                                        /1000)
                                    </div>
                                </label>
                                <div class="col-md-12" id="div-content-cke">
                            <textarea class="form-control" id="description" name="description"
                                      placeholder="Nhập mô tả bằng tiếng Việt có dấu"></textarea>
                                </div>
                            </div>

                            <div class="form-group row" id="div__content__cke">
                                <label class="col-md-12 control-label" for="content">Thông tin chi tiết (<span
                                        style="color: red">*</span>):
                                    <div class="word-count-cke">
                                        (
                                        <div id="myCounter"></div>
                                        /1000)
                                    </div>
                                </label>
                                <div class="col-md-12" id="div-content-cke">
                            <textarea class="form-control" name="content"
                                      placeholder="Nhập mô tả bằng tiếng Việt có dấu"></textarea>
                                </div>
                            </div>


                            <!-- File Button Upload Images -->
                            <div class="form-group">
                                <input type="hidden" name="imgUpload" id="imgUpload"
                                       placeholder="ID photo on the front">
                                <div name="previewDiv" id="previewDiv">

                                </div>
                                <button type="button" id="upload_widget" class="btn btn-sm btn-primary">Upload files
                                </button>
                            </div>

                            <input type="submit" value="ĐĂNG TIN">

                        </fieldset>
                    </form>
                </div>
            </div>

        </section>
    </main>
@endsection
