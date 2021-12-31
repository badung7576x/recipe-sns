<div class="l-contents" style="min-height: 650px">
  <div class="l-contents__right">
    <section class="c-side-block--user">
      <div class="inner">
        <div class="p-user-profile--side">
          <img src="{{ $user->avatar ?? asset('images/common/avatar.png') }}" class="p-user-profile--side__image" />
          <div class="p-user-profile--side__contents">
            <h2 class="p-user-profile--side__name">{{ $user->fullname ?? '' }}</h2>
            <ul class="p-user-profile__follow">
              <li style="margin-left: 5%; width: 85%;"><a href="#">レシピ数<span>{{ $recipeCounts }}</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="l-contents__right" style="width: 345px">
    <section class="c-side-block--user margin-L10" style="height: max-content;">
      <div class="inner">
        <div class="p-user-profile--side">
          <div class="p-user-profile--side__contents">
            @if (session()->has('success-profile'))
              <p style="color: green;margin-left: 0; margin-bottom: 20px; text-align:center; font-size: 22px">
                {{ session('success-profile') }}
              </p>
            @endif
            <div class="p-user-profile--side__heading01" style="font-size: 25px">
              自己紹介
              <div class="btn btnThin" style="float:right;">
                <a href="{{ route('user.edit', $user->id) }}" class="btn-inner">編集</a>
              </div>
            </div>
            <div class="p-user-profile--side__contents--text">
              <p>{{ $user->description }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="l-contents__right" style="width: 400px">
    <section class="c-side-block--user margin-L10" style="height: max-content;">
      <div class="inner">
        <div class="p-user-profile--side">
          <div class="p-user-profile--side__contents">
            @if (session()->has('success-profile'))
              <p style="color: green;margin-left: 0; margin-bottom: 20px; text-align:center; font-size: 22px">
                {{ session('success-banner') }}
              </p>
            @endif
            <div class="p-user-profile--side__heading01" style="font-size: 25px">
              広告
              <div class="btn btnThin updateBtn" style="float:right;">
                <button class="btn-inner" onclick="showEditForm()">編集</button>
              </div>
              <div class="btn btnThin updateBtn d-none" style="float:right;">
                <a href="#" class="btn-inner" onclick="showEditForm()">キャンセル</a>
              </div>
            </div>
            <div class="userBanner">
              @if (!empty($user->banner))
                <div class="p-user-profile--side__contents--text">
                  <img src="{{ $user->banner }}" width="100%" />
                </div>
              @else
                <p>広告を設定していません。</p>
              @endif
            </div>
            <div class="userBanner d-none">
              <form action="{{ route('user.update.banner', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input id="image-banner" type="file" class="form-control" name="banner"><br>
                <img src="{{ $user->banner ?? asset('images/common/default.jpg') }}" id="banner-preview" width="100%" />
                @error('banner')
                  <p class="error-msg" style="margin-left: 0; margin-bottom: 20px">
                    {{ $message }}
                  </p>
                @enderror
                <div class="btn btnThin margin-T20" style="width: fit-content">
                    <button type="submit" class="btn-inner">編集</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<script>
  function readURL2(input) {
    if (input.files && input.files[0]) {
      let reader = new FileReader()
      reader.onload = function(e) {
        $('#banner-preview').attr('src', e.target.result)
      }
      reader.readAsDataURL(input.files[0])
    }
  }
  $("#image-banner").change(function() {
    readURL2(this)
  })

  function showEditForm() {
    $('.userBanner').toggleClass('d-none');
    $('.updateBtn').toggleClass('d-none');
  }
</script>
