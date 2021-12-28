@extends('layouts.master')
@section('content')
  <div class="ppBody" style="min-height: 650px">
    <form action="{{ route('signup-post') }}" method="post" accept-charset="utf-8">
      @csrf
      <div class="ppWrap" id="loginForm">
        <div class="ppTtl login">無料会社登録</div>
        @error('common')
          <p class="message-error">{{ $message }}</p>
        @enderror
        @if (session()->has('success'))
          <p class="message-success">{{ session('success') }}</p>
        @endif
        <div class="ppCont">
          <table class="loginTable">
            <tbody>
              <tr>
                <th>お名前</th>
                <td>
                  <div class="input password required">
                    <input name="fullname" type="text" value="{{ old('fullname', '') }}">
                    @error('fullname')
                      <p style="color:red;">{{ $message }}</p>
                    @enderror
                  </div>
                </td>
              </tr>
              <tr>
                <th>メールアドレス</th>
                <td>
                  <div class="input email required">
                    <input name="email" placeholder="example@xyz.com" type="email" value="{{ old('email', '') }}">
                    @error('email')
                      <p style="color:red;">{{ $message }}</p>
                    @enderror
                  </div>
                </td>
              </tr>
              <tr>
                <th>パスワード</th>
                <td>
                  <div class="input password required">
                    <input name="password" type="password">
                    @error('password')
                      <p style="color:red;">{{ $message }}</p>
                    @enderror
                  </div>
                </td>
              </tr>
              <tr>
                <th>確認用パスワード</th>
                <td>
                  <div class="input password required">
                    <input name="re_password" type="password">
                    @error('re_password')
                      <p style="color:red;">{{ $message }}</p>
                    @enderror
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="btnFrame">
            <div class="btn margin-T10 margin-B10 margin-L10 margin-R10 btnLogin">
              <a href="javascript:void();" onclick="$('form').submit();return false;" class="btn-inner">無料会社登録</a>
            </div>
          </div>

        </div>
      </div><!-- ppWrap -->
    </form>
  </div>
@endsection
