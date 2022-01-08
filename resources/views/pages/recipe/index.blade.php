@extends('layouts.master')
@section('content')
  <div class="l-contents" style="min-height: 550px;">
    <div class="l-contents__main">
      <div class="p-user--recipe">
        <section class="p-user__inner" id="p-user__recipe">
          @if (!empty($currentUser))
            <h2 class="p-user__title"><i class="icon-star"></i>{{ $currentUser->fullname }}さんのレシピ</h2>
          @else
            @if (!empty($type) && $type == 'thisweek')
              <h2 class="p-user__title"><i class="icon-star"></i>旬のレシピ一覧</h2>
            @elseif(!empty($type) && $type == 'recommend')
              <h2 class="p-user__title"><i class="icon-star"></i>おすすめのレシピ一覧</h2>
            @elseif(!empty($type) && $type == 'search')
              <h2 class="p-user__title"><i class="icon-star"></i>「{{ $keyword }}」を検索する結果</h2>
            @else
              <h2 class="p-user__title"><i class="icon-star"></i>レシピ一覧</h2>
            @endif
          @endif
          <ul class="c-user-recipe-list--box">
            @forelse ($recipes as $recipe)
              <li class="c-user-recipe-list--box__li recipe-427015">
                <div class="c-user-recipe-list--box__photo">
                  <a href="{{ route('recipe.show', $recipe->id) }}">
                    <img src="{{ $recipe->image }}" width="200">
                  </a>
                </div>
                <div class="c-user-recipe-list--box__box">
                  <p class="c-user-recipe-list--box__recipe-tit">
                    <a href="{{ route('recipe.show', $recipe->id) }}" class="recipe-titlelink">{{ $recipe->name }}</a>
                  </p>

                  <ul class="c-user-recipe-list--box__date">
                    <li class="recipe-registdate">{{ \Carbon\Carbon::parse($recipe->created_at)->format('d/m/Y') }}</li>
                  </ul>
                  <div class="c-user-recipe-list--box__comment">
                    {{ $recipe->note }}
                  </div>
                </div>
              </li>
            @empty
              <li class="">
                <p class="c-user-recipe-list--box__recipe-tit" style="color: red;text-align:center">レシピはありません</p>
              </li>
            @endforelse
          </ul>
          {{ $recipes->links('layouts.paginate') }}
        </section>
      </div>

    </div>
    @if (!empty($currentUser))
      <div class="l-contents__right">
        <section class="c-side-block--user">
          <div class="inner">
            <div class="p-user-profile--side">
              <img src="{{ $currentUser->avatar ?? asset('images/common/avatar.png') }}" class="p-user-profile--side__image" width="500" height="500">
              <div class="p-user-profile--side__contents">
                <h2 class="p-user-profile--side__name">{{ $currentUser->fullname }}</h2>
                <ul class="p-user-profile__follow">
                  <li style="margin-left: 5%; width: 85%;"><a href="#">レシピ数<span>{{ $recipes->total() }}</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        @if (!empty($currentUser->banner))
          <div class="c-side-block">
            <div class="inner">
              <p class="c-side-block__tit--nobd">広告</p>
              <a><img src="{{ $currentUser->banner }}" style="max-width: 100%;"></a>
            </div>
          </div>
        @endif
      </div>

    @endif
  </div>
@endsection
