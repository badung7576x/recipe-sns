@extends('layouts.master')
@section('content')
  <div class="l-contents">
    <div class="l-contents__right">
      <section class="c-side-block--user">
        <div class="inner">
          <div class="p-user-profile--side">
            <img src="{{ asset('images/common/avatar.png') }}" class="p-user-profile--side__image" width="500" height="500"  />
            <div class="p-user-profile--side__contents">
              <h2 class="p-user-profile--side__name">{{ $user->fullname ?? '' }}</h2>
              <ul class="p-user-profile__follow">
                <li style="margin-left: 5%; width: 85%;"><a href="#">レシピ数<span>545</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="l-contents__right" style="width: 760px">
      <section class="c-side-block--user margin-L10" style="height: max-content;">
        <div class="inner">
          <div class="p-user-profile--side">
            <div class="p-user-profile--side__contents">
              <div class="p-user-profile--side__heading01" style="font-size: 25px">
                自己紹介
                <div class="btn btnLarge" style="float:right;">
                  <a href="#" class="btn-inner">編集</a>
                </div>
              </div>
              <div class="p-user-profile--side__contents--text margin-T40">
                <p>無し</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div class="l-contents">
    <div class="l-contents__main">
      <div class="p-user--recipe">
        <section class="p-user__inner" id="p-user__recipe">
          <h2 class="p-user__title" style="text-align: center;">レシピ一覧</h2>
          <div class="btnFrame" style="margin: right;">
            <div class="btn margin-T10 margin-B10 margin-L10 margin-R10 btnLogin" style="float:right;">
              <a href="#" class="btn-inner">レシピを投稿する</a>
            </div>
          </div>
          <ul class="c-user-recipe-list--box">
            @for ($i = 0; $i < 3; $i++)
              <li class="c-user-recipe-list--box__li recipe-426656">
                <div class="c-user-recipe-list--box__photo">
                  <a href="#">
                    <img src="{{ asset('images/common/banhmi.jpg') }}" width="150" height="200"  /></a>
                </div>
                <div class="c-user-recipe-list--box__box">
                  <p class="c-user-recipe-list--box__recipe-tit"><a href="#" class="recipe-titlelink">ベトナムのパン（バインミー）</a>
                  </p>

                  <ul class="c-user-recipe-list--box__date">
                    <li class="recipe-registdate">2021年11月26日 19:09</li>
                    <li class="recipeTime">20分</li>
                  </ul>

                  <div class="c-user-recipe-list--box__comment">
                    「バインミー」は、フランスパンにさまざまな具材をはさんだサンドイッチです。ベトナムでは、食パンのこともバインミーといいます。ホーチミンやハノイでは、街のいたる所にバインミーを販売するワゴンが見られます。バインミーは、ベトナム人の定番メニューとして親しまれています。
                  </div>
                  <div class="btn margin-All5 btnLarge" style="float:right;">
                    <a href="#" class="btn-inner">編集</a>
                  </div>
                  <div class="btn margin-All5 btnLarge" style="float:right;">
                    <a href="#" class="btn-inner">削除</a>
                  </div>
                </div>
              </li>
            @endfor
          </ul>
        </section>
      </div>

    </div>
  </div>
@endsection
