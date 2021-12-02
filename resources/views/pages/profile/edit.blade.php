@extends('layouts.master')
@section('content')
<div class="ppBody" style="height: 500px">
    <form action="{{ route('profile.edit.post') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      @csrf
      <div class="ppWrap" id="loginForm">
        <div class="ppTtl login">プロファイル編集</div>
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
                    <input name="fullname" type="text" value="{{ $user->fullname }}">
                    @error('fullname')
                      <p style="color:red;">{{ $message }}</p>
                    @enderror
                  </div>
                </td>
              </tr>
              <tr>
                <th>自己紹介</th>
                <td>
                  <div class="input description required">
                    <textarea name="description" type="text" style="background-color: white">{{ $user->description }}</textarea>
                    @error('description')
                      <p style="color:red;">{{ $message }}</p>
                    @enderror
                  </div>
                </td>
              </tr>
              <tr>
                <th>アバター</th>
                <td>
                  <div class="input image required">
                    <input name="image" type="file">
                    @error('image')
                      <p style="color:red;">{{ $message }}</p>
                    @enderror
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="btnFrame">
            <div class="btn margin-T10 margin-B10 margin-L10 margin-R10 btnLogin">
              <a href="javascript:void();" onclick="$('form').submit();return false;" class="btn-inner">編集</a>
            </div>
          </div>

        </div>
      </div><!-- ppWrap -->
    </form>
  </div>
@endsection
