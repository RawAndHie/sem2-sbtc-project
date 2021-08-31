@extends('client.layout.master')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12 col-left pr-0">
                    <div class="main-left">
                        {!! $list->contactUsPage !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
