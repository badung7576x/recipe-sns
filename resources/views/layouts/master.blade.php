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
    <link rel="stylesheet" href="{{ asset('css/column.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/user_recipe.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/recipes-view.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
</head>

<body id="pagetop">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>
</html>
