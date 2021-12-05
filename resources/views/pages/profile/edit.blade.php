@extends('layouts.master')
@section('content')
  <div class="ppBody">
    <form action="{{ route('user.edit', $currentUser->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="ppWrap" id="loginForm">
        <div class="ppTtl login">プロフィールの編集</div>
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
                <th>アバター</th>
                <td>
                  <input id="image-input" type="file" class="form-control" name="avatar"><br>
                  <img src="{{ $currentUser->avatar ?? asset('images/common/default.jpg') }}" id="image-preview" width="281px" />
                  @error('image')
                    <p class="error-msg" style="margin-left: 0;font-weight: normal; font-size: 14px">
                      {{ $message }}
                    </p>
                  @enderror
                </td>
              </tr>
              <tr>
                <th>お名前<span style="color: red;">*</span></th>
                <td>
                  <div class="input password">
                    <input name="fullname" type="text" value="{{ old('fullname', $currentUser->fullname) }}">
                    @error('fullname')
                      <p class="error-msg" style="margin-left: 0;font-weight: normal; font-size: 14px">
                        {{ $message }}
                      </p>
                    @enderror
                  </div>
                </td>
              </tr>
              <tr>
                <th>メールアドレス</th>
                <td>
                  <div class="input email">
                    <input name="email" type="email" value="{{ $currentUser->email }}" disabled>
                  </div>
                </td>
              </tr>
              <tr>
                <th>自己紹介</th>
                <td>
                  <div>
                    <textarea rows=3 name="description" style="margin-top:0;width: 265px">{{ old('description', $currentUser->description) }}</textarea>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="btnFrame">
            <div class="btn margin-T10 margin-B10 margin-L10 margin-R10 btnLogin">
              <a href="javascript:void();" onclick="$('form').submit();return false;" class="btn-inner">更新</a>
            </div>
          </div>

        </div>
      </div><!-- ppWrap -->
    </form>
  </div>
  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        let reader = new FileReader()
        reader.onload = function(e) {
          $('#image-preview').attr('src', e.target.result)
        }
        reader.readAsDataURL(input.files[0])
      }
    }
    $("#image-input").change(function() {
      readURL(this)
    })
  </script>
@endsection
