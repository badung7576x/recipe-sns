@extends('layouts.master')
@section('content')
  <div class="l-contents">
    <div class="l-contents__main">
      <div class="p-user--recipe">
        <section class="p-user__inner" id="p-user__recipe">
          <h2 class="p-user__title"><i class="icon-star"></i>{{ $currentUser->fullname }}さんのレシピ</h2>
          <ul class="c-user-recipe-list--box">
            @foreach ($recipes as $recipe)
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
            @endforeach
          </ul>
          {{ $recipes->links('layouts.paginate') }}
        </section>
      </div>

    </div>

    <div class="l-contents__right">

      <section class="c-side-block--user">
        <div class="inner">
          <div class="p-user-profile--side">
            <img src="{{ $currentUser->avatar ?? asset('images/common/avatar.png') }}"
            class="p-user-profile--side__image" width="500" height="500">
            <div class="p-user-profile--side__contents">
              <h2 class="p-user-profile--side__name">{{ $currentUser->fullname }}</h2>
              <ul class="p-user-profile__follow">
                <li style="margin-left: 5%; width: 85%;"><a href="#">レシピ数<span>{{ $recipes->total() }}</span></a></li>
              </ul>
            </div>
            {{-- <div class="p-user-profile--side__contents">
              <p class="p-user-profile--side__heading01">プロフィール</p>
              <div class="p-user-profile--side__contents--text">
                <p>11歳から6歳の４児ママです☆間違ったダイエットから心と身体を壊した自身の経験から、間違ったダイエットによる心への影響や食の大切さを伝えるべく、...</p>
              </div>
            </div> --}}
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
