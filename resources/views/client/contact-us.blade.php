@extends('client.layout.master')
@section('content')
    <main>
        <div class="contain">
            <div class="contact3 py-5">
                <div class="row no-gutters">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-shadow">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0969489389!2d105.78010051415745!3d21.028806493154356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b32b842a37%3A0xe91a56573e7f9a11!2zOGEgVMO0biBUaOG6pXQgVGh1eeG6v3QsIE3hu7kgxJDDrG5oLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSAxMDAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1629874943930!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-box ml-3">
                                    <h1 class="font-weight-light mt-2">Liên hệ chúng tôi</h1>
                                    <form class="mt-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group mt-2">
                                                    <input class="form-control" type="text" placeholder="Tên">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mt-2">
                                                    <input class="form-control" type="email" placeholder="Địa chỉ email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mt-2">
                                                    <input class="form-control" type="text" placeholder="Số điện thoại">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mt-2">
                                                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-danger-gradiant mt-3 text-white border-0 px-3 py-2"><span> GỬI</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card mt-4 border-0 mb-4">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="card-body d-flex align-items-center c-detail">
                                                <div class="mr-3 align-self-center">
                                                    <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png">
                                                </div>
                                                <div class="">
                                                    <h6 class="font-weight-medium">Địa chỉ</h6>
                                                    <p>8A Tôn Thất Thuyết.
                                                        <br>Hà Nội</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="card-body d-flex align-items-center c-detail">
                                                <div class="mr-3 align-self-center">
                                                    <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon2.png">
                                                </div>
                                                <div class="">
                                                    <h6 class="font-weight-medium">Điện thoại</h6>
                                                    <p class="">036 546 9442
                                                        <br> 030 446 8851</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="card-body d-flex align-items-center c-detail">
                                                <div class="mr-3 align-self-center">
                                                    <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png">
                                                </div>
                                                <div class="">
                                                    <h6 class="font-weight-medium">Email</h6>
                                                    <p class="">
                                                        info@gmail.com
                                                        <br> sbtc@gmail.com
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
