@extends('client.layout.master')
@section('content')
    <main class="main">
        <style xmlns="http://www.w3.org/1999/html">
            span.txt-strike, span.txt-price-ads {
                float: right
            }

            .div-error-cke .ck.ck-editor__main > .ck-editor__editable {
                background-color: rgba(255, 0, 0, 0.05);
            }

            .ck.ck-editor__main > .ck-editor__editable {
                min-height: 200px;
            }

            .txt-greenl {
                color: var(--primary-1) !important;
                font-style: normal !important;
                padding-left: 5px;
            }


        </style>
        <section class="post-information-area">
            <div class="area-inner">
                <h1 class="title-page">Đăng tin</h1>
                <div class="form-posting-area">
                    <form action="/post" method="post" id="save_post"
                          class="form-posting form-horizontal">
                        <fieldset class="form-posting-inner">
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

                            <div class="form-group row">
                                <input type="hidden" name="_id" value="">
                                <input type="hidden" name="csrf_token">
                                <label class="col-md-12 control-label" for="parent_id">Chọn thông tin (<span
                                        style="color: red">*</span>):</label>
                                <div class="col-md-4" id="div_parent_id">
                                    <select required id="parent_id" name="parent_id" class="form-control">
                                        <option value="" hidden disabled selected>Chọn danh mục</option>
                                        @foreach($category as $categories)
                                            <option value="{{ $categories->category_id }}">{{ $categories->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-12 control-label">Địa chỉ (<span
                                        style="color: red">*</span>):</label>
                                <div class="col-md-4">
                                    <select required class="form-control"  name="city" multiple>
                                        <option value="" hidden disabled selected>Chọn Tỉnh/TP</option>
{{--                                        @foreach($thanhpho as $tp)--}}
{{--                                            <option value="{{ $tp->matp }}">{{ $tp->name }}</option>--}}
{{--                                        @endforeach--}}
                                        <option value="001">Hà Nội</option>--}}
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select required name="location_city_id" class="form-control">
                                        <option value="" hidden disabled selected>Chọn Quận/Huyện</option>
                                        @foreach($quanhuyen as $qh)
                                            <option value="{{ $qh->maqh }}">{{ $qh->name }}</option>
                                        @endforeach
                                    </select>
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
                            <div class="form-group row" id="div__upload__images">
                                <label class="col-md-12 control-label">Hình ảnh:</label>
                                <div class="col-md-12">
                                    <div class="wrap-upload-file">
                                        <div id="fileList">
                                            <ul id="list-images">
                                                <!-- Upload image -->
                                            </ul>
                                        </div>
                                        <!-- Upload image -->
                                        <label class="input-file-label" for="uploadcomment" style="position: relative">
                                    <span>
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M25 0.000732422L3.125 25.0007H15.625V37.5008H34.375V25.0007H46.875L25 0.000732422Z"
                                                  fill="#F2F5F8"/>
                                            <path d="M47 44H3V50H47V44Z" fill="#F2F5F8"/>
                                        </svg>
                                    </span>
                                            <span>Chọn ảnh để tải lên</span>
                                            <span>Lưu ý: Số lượng tối đa là 6 ảnh, dung lượng tối đa là <span>5MB/ 1 ảnh</span>, định dạng ảnh hỗ trợ là: JPG, JPEG, PNG</span>
                                            <input id="uploadcomment" name="fileupload" class="input-file-upload"
                                                   type="file" accept="image/png,image/x-png,image/gif,image/jpeg"
                                                   style="position: absolute;display: block;width: 100%;height: 100%;opacity: 0;">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" id="singlebutton" class="btn-post-information">Đăng tin</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
