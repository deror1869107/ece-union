@extends('layouts.app')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{ URL::asset('img/imagee2.jpg') }}" alt="Chania" >
            <div class="carousel-caption">
                <h3>活動照、資訊</h3>
                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
            </div>
        </div>
        <div class="item">
            <img src="{{ URL::asset('img/imagee2.jpg') }}" alt="Chania"  >
            <div class="carousel-caption">
                <h3>營火照</h3>
                <p>系學會每個人都是系邊，把電機系的大家環繞在中間</p>
            </div>
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="col-lg-12 feature">
    <div class="col-lg-2"> </div>
    <div class="row col-lg-8">
        <div class="col-lg-4">
            <img src="{{ URL::asset('img/photo-camera.png') }}" width="145" height="145" >
            <h3>相簿</h3>
            <p> </p>
            <p class="buttonset">
                <a class="btn btn-default btn1" href="#" role="button">View details »</a>
            </p>
        </div>
        <div class="col-lg-4">
            <img src="{{ URL::asset('img/video-player.png') }}" width="145" height="145" >
            <h3>影片</h3>
            <p> </p>
            <p>
                <a class="btn btn-default btn1" href="#" role="button">View details »</a>
            </p>
        </div>
        <div class="col-lg-4">
            <a href="https://drive.google.com/drive/folders/0BzSV8iSSLSL5RWtqYU16Nzk4RVU">
                <img src="{{ URL::asset('img/cloud-computing.png') }}" width="145" height="145" >
            </a>
            <h3>考古題</h3>
            <p> </p>
            <p>
                <a class="btn btn-default btn1" href="https://drive.google.com/drive/folders/0BzSV8iSSLSL5RWtqYU16Nzk4RVU" role="button">View details »</a>
            </p>
            <div class="area"> </div>
        </div>
    </div>
</div>
@endsection
