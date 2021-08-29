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
<main class="main">

    <section class="post-information-area">
        <div class="area-inner">
            <h1 class="title-page">Đăng tin</h1>
            <div class="form-posting-area">
                <form action="/save-post-information.html" method="post" id="save_post"
                      class="form-posting form-horizontal">
                    <fieldset class="form-posting-inner">
                        <!-- Multiple Radios -->
                        <div class="form-group row">
                            <input type="hidden" name="_id" value="">
                            <input type="hidden" name="csrf_token">
                            <label class="col-md-12 control-label" for="parent_id">Chọn thông tin (<span
                                    style="color: red">*</span>):</label>
                            <div class="col-md-4" id="div_parent_id">
                                <select required id="parent_id" name="parent_id" class="form-control">
                                    <option value="" hidden disabled selected>Chọn danh mục</option>
                                    @foreach($category as $item)
                                        <option value="{{$item->id}}">{{$item->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4" id="div_child_group_id" style="display: none">
                                <select id="child_group_id" name="child_group_id" class="form-control">
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
                                <input id="frm_posting_so_nha" name="location_home_number" type="text" placeholder="Số nhà"
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

                        <!-- Textarea -->
                        <div class="form-group row" id="div__content__cke">
                            <label class="col-md-12 control-label" for="content">Mô tả chi tiết (<span
                                    style="color: red">*</span>):
                                <div class="word-count-cke">
                                    (
                                    <div id="myCounter"></div>
                                    /1000)
                                </div>
                            </label>
                            <div class="col-md-12" id="div-content-cke">
                            <textarea class="form-control" id="content" name="content"
                                      placeholder="Nhập mô tả bằng tiếng Việt có dấu"> </textarea>
                            </div>
                        </div>


                        <!-- File Button Upload Images -->
                        <div class="form-group">
                            <input type="hidden" name="imgUpload" id="imgUpload" placeholder="ID photo on the front">
                            <div name="previewDiv">

                            </div>
                            <button type="button" id="upload_widget" class="btn btn-sm btn-primary">Upload files</button>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn-post-information">Đăng tin</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
</main>
</div>

@include('client.layout.script-post')
</body>
