@extends('admin.layout.master')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4">Config</h2>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-angle-right"></i>
                        Chỉnh sửa trang about us
                    </div>

                    <div class="card-body">
                        <form action="/admin/edit-about-us/" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Chỉnh sửa</label>
                                    <div class="row">
                                        <div class="col-md-9">
                                                <textarea name="aboutUsPage" id="ckeditorAboutUs" cols="100" rows="8">
                                                    {{$list->aboutUsPage}}
                                                </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; SBTCv2 2021</div>
                </div>
            </div>
        </footer>
    </div>
@endsection
