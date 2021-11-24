<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>レシピサイト</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/normalize.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cs_search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/column.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/recipes-view.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" media="all">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>

<body id="pagetop">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>
</html>
