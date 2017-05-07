@extends('user.master')
@section('title', 'Trang thi')
@section('content')
    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
                <li><a href="#">Thi online</a></li>
                <li><a href="#">Bài 1 : Sự đồng biến và nghịch biến của hàm số</a></li>
            </ul>
        </div>
    </div>
    <div id="section">
        <div class="container">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class=" text-center"><strong>Bài 1 : Sự đồng biến và nghịch biến của hàm số</strong></h3>
                    </div>
                    <div class="panel panel-info">
                        <table class="table table-striped ">
                            Kết quả làm bài: @if(isset($result)) {!! $result !!} @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection