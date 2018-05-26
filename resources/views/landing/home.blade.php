@extends('landing.layout')

@section('css')
    <link href="/css/style.css" rel="stylesheet" type="text/css">
@endsection

@section('content_header')
<div id="content_head"><div id="content_head_text"><span>Department of Bangla | বাংলা বিভাগ</span></div></div>
@endsection

@section('content_body')
    <div id="content">
        <div id="content_left">
            <span><p>ঐতিহাসিক চিত্রের সূচনা লিখিবার জন্য সম্পাদক-দত্ত অধিকার পাইয়াছি, আর কোনো প্রকারের অধিকারের দাবি রাখি না। কিন্তু আমাদের দেশের সম্পাদক ও পাঠকবর্গ লেখকগণকে যেরূপ প্রচুর পরিমাণে প্রশ্রয় দিয়া থাকেন তাহাতে অনধিকার প্রবেশকে আর অপরাধ বলিয়া জ্ঞান হয় না।

                এই ঐতিহাসিক পত্রে আমি যদি কিছু লিখিতে সাহস করি তবে তাহা সংক্ষিপ্ত সূচনাটুকু। কোনো শুভ অনুষ্ঠানের উৎসব-উপলক্ষে ঢাকীকে মন্ত্রও পড়িতে হয় না, পরিবেশনও করিতে হয় না– সিংহদ্বারের বাহিরে দাঁড়াইয়া সে কেবল আনন্দধ্বনি ঘোষণা করিতে থাকে। সে যদিচ কর্তাব্যক্তিদের মধ্যে কেহই নহে, কিন্তু সর্বাগ্রে উচ্চকলরবে কার্যারম্ভের সূচনা তাহারই হস্তে।

                যাঁহারা কর্মকর্তা, গীতা তাঁহাদিগকে উপদেশ দিয়াছেন যে: কর্মণ্যেবাধিকারস্তে মা ফলেষু কদাচন। অর্থাৎ, কর্মেই তোমার অধিকার আছে, ফলে কদাচ নাই। আমরা কর্মকর্তা নহি। আমাদের একটা সুবিধা এই যে, কর্মে আমাদের অধিকার নাই, কিন্তু ফলে আছে! সম্পাদক-মহাশয় যে অনুষ্ঠান ও যেরূপ আয়োজন করিয়াছেন তাহার ফল বাংলার, এবং আশা করি অন্য দেশের, পাঠকমণ্ডলী চিরকাল ভোগ করিতে পারিবেন।

                অদ্য “ঐতিহাসিক চিত্রে’র শুভ জন্মদিনে আমরা যে আনন্দ করিতে উদ্যত হইয়াছি তাহা কেবলমাত্র সাহিত্যের উন্নতিসাধনের আশ্বাসে নহে। তাহার আর-এ</p></span>
            </div>
            <div id="content_right">
                <div id="content_right_header">
                    <div id="content_right_head_pin"></div>
                    <div id="content_right_notice">Notice Board</div>
                </div>
                <div id="content_right_content">
                    <div class="textSlide">
                        <p>বিষয়ঃ বেসরকারী বিশ্ববিদ্যালয় আইন অনুযায়ী প্রয়োজনীয় ব্যবস্থা গ্রহণ প্রসঙ্গে। <br>
                            <br>জরুরী প্রজ্ঞাপন : ১লা আগষ্ট ২০১৬ যথাযথ মর্যাদার সাথে গুলশান ও শোলাকিয়ায় হত্যাকান্ডে ...<br>
                            <br>বিষয়ঃ বেসরকারী বিশ্ববিদ্যালয় আইন অনুযায়ী প্রয়োজনীয় ব্যবস্থা গ্রহণ প্রসঙ্গে। <br>
                            <br>জরুরী প্রজ্ঞাপন : ১লা আগষ্ট ২০১৬ যথাযথ মর্যাদার সাথে গুলশান ও শোলাকিয়ায় হত্যাকান্ডে ...<br>
                            <br>বিষয়ঃ বেসরকারী বিশ্ববিদ্যালয় আইন অনুযায়ী প্রয়োজনীয় ব্যবস্থা গ্রহণ প্রসঙ্গে। <br>
                            <br>জরুরী প্রজ্ঞাপন : ১লা আগষ্ট ২০১৬ যথাযথ মর্যাদার সাথে গুলশান ও শোলাকিয়ায় হত্যাকান্ডে ...<br>
                            <br>বিষয়ঃ বেসরকারী বিশ্ববিদ্যালয় আইন অনুযায়ী প্রয়োজনীয় ব্যবস্থা গ্রহণ প্রসঙ্গে। <br>
                            <br>জরুরী প্রজ্ঞাপন : ১লা আগষ্ট ২০১৬ যথাযথ মর্যাদার সাথে গুলশান ও শোলাকিয়ায় হত্যাকান্ডে ...</p>
                        </div>
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
