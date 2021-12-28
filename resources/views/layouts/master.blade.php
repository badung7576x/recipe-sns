<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>レシピサイト</title>
  <link rel="stylesheet" href="{{ asset('css/normalize.min.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('css/base.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('css/pages-index.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cs_search.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/column.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('css/user.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('css/user_recipe.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('css/recipes-view.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" media="all">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
  {{-- <script src="{{ asset('js/swiper.min.js') }}"></script> --}}
  <style>
    /*ページ独自のリンク色、ボタンの色変更*/
    .baseWrap .wrapper a {
      color: #5A320A;
    }

    #contents .entry ul.entryBtn li a.btnA {
      background-color: #F3A002;
    }

    /*ページ独自の背景色*/
    #intro .index .checkWrap {
      background: #eaf1e9;
    }

    #contents .entry #recipeAlbum .right a:hover {
      background: #eaf1e9;
    }

    #contents .entry #article ul a li .right p.category span {
      background: #eaf1e9;
    }

    #contents .gastronome ul li .left a:hover {
      background: #eaf1e9;
    }

    #company>div {
      border: 5px solid #eaf1e9;
    }

    #intro .index ul {
      width: 370px !important;
    }

    .contents-list {
      width: 710px;
      margin: 40px auto;
    }

    .contents-list li {
      margin-bottom: 20px;
      font-size: 110%;
    }

    .contents-list li a {
      display: block;
      padding: 20px;
      background: #f8f8f8;
      transition: .2s;
    }

    .contents-list li a:hover {
      text-decoration: none;
      opacity: 0.7;
    }

    .contents-list__tit {
      font-size: 140%;
    }

    .img-bm {
      margin-bottom: 20px;
    }

    .merit-list li {
      margin: 0 0 15px 20px;
      list-style-type: decimal;
    }

    .merit-list span {
      color: #F3A002;
      font-weight: bold;
      padding: 10px 0;
      font-size: 120%;
    }

    .heading-04 {
      font-size: 20px;
      color: #111;
      font-weight: bold;
      line-height: 30px;
      margin: 0 0 20px;
    }

    .entryBtn {
      width: 50%;
      margin: 0 auto;
    }

    .entryBtn li {
      width: 100% !important;
    }

    .entryBtn li a {
      margin: 0 !important;
    }

    .to-contents-button {
      width: 200px;
      margin: 20px 0 0 0;
      background: #F3A002;
      color: #fff !important;
      padding: 10px !important;
      border-radius: 5px;
      letter-spacing: 1px;
      text-align: center;
      display: block;
      position: absolute;
      right: 0;
      transition: .2s;
    }

    .to-contents-button:hover {
      opacity: 0.7 !important;
      text-decoration: none !important;
    }

    .lowerEntry.img300 .right.txt {
      position: relative;
    }

    #main h1 {
      position: inherit !important;
      left: inherit !important;
      top: inherit !important;
    }

    .under-entryBtn {
      text-align: center;
      margin: 10px 0 0 0;
    }

    .artist-name {
      margin-bottom: 10px;
      font-size: 140%;
    }

    .otherBtn {
      margin: 20px auto;
      width: 50%;
    }

    .otherBtn a {
      display: block;
      padding: 20px 0 !important;
      text-align: center;
      border-radius: 5px;
      background: #f7f1eb;
      border: 1px solid #ebdfd4;
      font-size: 160%;
      transition: .2s;
    }

    .otherBtn a:hover {
      text-decoration: none !important;
      opacity: 0.7 !important;
    }

    .two-col-entry {
      display: -webkit-flex;
      display: -ms-flex;
      display: flex;
      flex-wrap: nowrap;
      justify-content: space-between;
    }

    .two-col-entry .entry-box {
      width: 280px;
    }

    .two-col-entry .entry-box p {
      margin: 10px 0 0 0;
    }

    .two-col-entry .entry-box-title {
      font-size: 20px;
      color: #111;
      font-weight: bold;
      line-height: 20px;
      margin: 0 0 20px;
      text-align: left;
    }

    .lowerEntry.border-b {
      border-bottom: 1px dashed #ddd;
      padding-bottom: 40px;
      margin-bottom: 40px !important;
    }

    .lowerEntry.border-b:first-child {
      border-top: 1px dashed #ddd;
    }

    .icon-entry-title {
      font-size: 20px;
      margin-bottom: 40px;
      font-weight: bold;
    }

    .icon-wrapper {
      display: -webkit-flex;
      display: -ms-flex;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .icon-entry-description {
      margin-bottom: 20px;
    }

    .icon-box {
      margin: 20px 0 40px 0;
      width: 31%;
    }

    .icon-wrapper.icon-pre>.icon-box {
      width: 30%;
    }

    .icon-pre .icon-title {
      text-align: left;
      padding-left: 37px;
    }

    .icon-pre .icon-box .icon-title span {
      /*background: linear-gradient(transparent 50%, #ffde9d 0%);*/
      line-height: 1.3em;
    }

    /*.icon-wrapper.icon-artist>.icon-box:nth-child(5),
    .icon-wrapper.icon-artist>.icon-box:nth-child(6),
    .icon-wrapper.icon-artist>.icon-box:nth-child(7) { width: 30%; }*/
    .icon-box .icon-image {
      width: 100%;
      text-align: center;
      margin-bottom: 20px;
    }

    .icon-box .icon-title {
      font-size: 16px;
      font-weight: bold;
      padding-left: 37px;
      height: 5em;
    }

    .icon-artist .icon-title {
      text-align: left;
      padding-left: 37px;
    }

    .icon-artist .icon-box .icon-title span {
      /*background: linear-gradient(transparent 50%, #ffde9d 0%);*/
      line-height: 1.3em;
    }

    .icon-box .icon-image img {
      width: 130px;
      height: 130px;
    }

    .font-small {
      font-size: 80%;
    }

    .icon-num {
      position: relative;
    }

    .icon-num span {
      padding: 3px 13px 3px 8px;
      font-size: 15px;
      font-weight: bold;
      font-style: italic;
      background: #5a320a;
      color: #fff;
      position: absolute;
      top: -3px;
      /* left: -24px; */
    }

    #contents .entry .textArea {
      font-size: 1.1em !important;
      line-height: 1.7 !important;
    }

    #contents .entry .textArea .lowerEntry .txt h4 {
      font-size: 20px !important;
    }

  </style>
</head>

<body id="pagetop">
  @include('layouts.header')
  @yield('content')
  @include('layouts.footer')
  <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
