@extends('layouts.master')
@section('content')
  <div class="l-contents">
    <div class="l-contents__right">
      <section class="c-side-block--user">
        <div class="inner">
          <div class="p-user-profile--side">
            <img src="{{ $user->avatar ?? asset('images/common/avatar.png') }}" class="p-user-profile--side__image"/>
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
    <div class="l-contents__right" style="width: 760px">
      <section class="c-side-block--user margin-L10" style="height: max-content;">
        <div class="inner">
          <div class="p-user-profile--side">
            <div class="p-user-profile--side__contents">
              <div class="p-user-profile--side__heading01" style="font-size: 25px">
                自己紹介
                <div class="btn btnLarge" style="float:right;">
                  <a href="{{ route('user.edit', $user->id) }}" class="btn-inner">編集</a>
                </div>
              </div>
              <div class="p-user-profile--side__contents--text margin-T40">
                <p>{{ $user->description }}</p>
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
          @if (session()->has('success'))
            <p style="color: green;margin-left: 0; margin-bottom: 20px; text-align:center; font-size: 22px">
              {{ session('success') }}
            </p>
          @endif
          @error('error')
            <p class="error-msg" style="margin-left: 0; margin-bottom: 20px">
              {{ $message }}
            </p>
          @enderror
          <div class="btnFrame" style="margin: right;">
            <div class="btn margin-T10 margin-B10 margin-L10 margin-R10 btnLogin" style="float:right;">
              <a href="{{ route('recipe.create') }}" class="btn-inner">レシピを投稿する</a>
            </div>
          </div>
          <ul class="c-user-recipe-list--box">
            @foreach ($recipes as $recipe)
              <li class="c-user-recipe-list--box__li recipe-426656">
                <div class="c-user-recipe-list--box__photo">
                  <a href="#">
                    <img src="{{ $recipe->image }}" width="200" /></a>
                </div>
                <div class="c-user-recipe-list--box__box">
                  <p class="c-user-recipe-list--box__recipe-tit"><a href="#" class="recipe-titlelink">{{ $recipe->name }}</a>
                  </p>

                  <ul class="c-user-recipe-list--box__date">
                    <li class="recipe-registdate">{{ \Carbon\Carbon::parse($recipe->created_at)->format('d/m/Y') }}</li>
                    <li><span class="recipe-time"><i class="icon-timer"></i>{{ $recipe->cooking_time }}分</span></li>
                  </ul>

                  <div class="c-user-recipe-list--box__comment">
                    {{ $recipe->description }}
                  </div>
                  <div class="btn margin-All5 btnLarge" style="float:right;">
                    <a href="{{ route('recipe.edit', $recipe->id) }}" class="btn-inner">編集</a>
                  </div>
                  <div class="btn margin-All5 btnLarge" style="float:right;">
                    <a href="{{ route('recipe.delete', $recipe->id) }}" class="btn-inner">削除</a>
                  </div>
                </div>
              </li>
            @endforeach
          </ul>
          {{ $recipes->links('layouts.paginate') }}
        </section>
      </div>

    </div>
  </div>
@endsection
