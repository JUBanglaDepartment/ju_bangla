@extends('landing.layout')

@section('css')
    <link href="/css/style.css" rel="stylesheet" type="text/css">
@endsection

@section('content_header')
<div id="content_head"><div id="content_head_text"><span>Department of Bangla | বাংলা বিভাগ</span></div></div>
@endsection

@section('content_body')
    <div id="content">
        <div class="container">
            <div class="row">
                <h3 class="header"> Contact Information</h3>
                    Please contact through the following phone numers.
                    You can also mail us to the provided email address.
            </div>
        </div>
    </div>
@endsection

@section('header')
    <div id="header">
        <div id="header_content">
            <div id="header_logo"></div>
            <div id="header_text">
                <div id="header_text2"><span>“ মনুষ্যত্বের শিক্ষাটাই চরম শিক্ষা আর সমস্তই তার অধীন ”</span></div>
                <div id="header_text3"><span>-রবীন্দ্রনাথ ঠাকুর</span></div>
            </div>
        </div>
    </div>
@endsection

@section('menu')
    @include('landing.subview.menu')
@endsection

@section('banner')
    @include('landing.subview.banner')
@endsection

@section('footer')
    <div id="footer">
        <div id="footer_content">
            <div id="footer_text_left"><span>Jahangirnagar University, Savar, Dhaka-1342, Bangladesh.<br />Telephone: PABX: 880-2-7791045-51, 			Fax: 880-2-7791052</span></div>
            <div id="footer_text_right"><span>&copy; 2016 Jahangirnagar University</span></div>
        </div>
    </div>
@endsection
