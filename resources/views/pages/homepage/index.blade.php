@extends('layouts.master')
@section('content')
  <div class="l-contents" style="min-height: 650px">
    <div class="l-contents__main" style="">
      <div class="p-top" style="width: 744px;">
        <section class="p-top__box">
          <div class="c-top-heading">
            <h2 class="c-top-heading__title">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 42.46 43.57"
                style="enable-background:new 0 0 42.46 43.57;" xml:space="preserve" class="icon-seasonal-calender">
                <rect x="9.42" y="1.17" class="st-cale-01" width="31.87" height="39.4"></rect>
                <path class="st-cale-02" d="M33.56,37.51H1.69c3-7.38,5.73-36.35,5.73-36.35h31.87C39.29,1.17,37.08,30.63,33.56,37.51z"></path>
                <g>
                  <rect class="st-cale-04" x="7.29" y="1.17" width="32" height="6.31"></rect>
                </g>
                <g>
                  <path class="st-cale-04"
                    d="M15.93,27.94l0.14-0.78c2.18-0.1,2.37-0.34,2.64-1.85l1.33-7.61c0.19-1.07-0.18-1.16-1.02-1.26l-0.61-0.11l0.12-0.69 c1.65-0.19,3.53-0.61,4.85-1.05L21.5,25.31c-0.27,1.56-0.18,1.75,1.95,1.85l-0.14,0.78H15.93z">
                  </path>
                </g>
                <g>
                  <path class="st-cale-02" d="M13.42,43.57"></path>
                </g>
                <g>
                  <path class="st-cale-02" d="M9.42,40.57"></path>
                </g>
              </svg>
              旬の一週間レシピ
            </h2>
            <a href="{{ route('recipe.all') . '?type=thisweek' }}" class="c-readmore--02">旬のレシピ一覧へ</a>
          </div>
          <!--旬のレシピスライダー-->
          @if (count($recipesThisWeek) > 0)
            <div class="p-top__slider">
              <div class="swiper-container mySwiper c-slider-seasonal">
                <ul class="swiper-wrapper">
                  @foreach ($recipesThisWeek as $recipe)
                    <li class="swiper-slide">
                      <div class="c-slider-seasonal__image">
                        <div class="c-slider-seasonal__st">
                          <span class="recipe-time"><i class="icon-timer"></i>{{ convert_time($recipe->cooking_time) }}</span>
                          <span class="recipe-favorite"><i class="icon-heart"></i>{{ $recipe->like }}</span>
                        </div>
                        <a class="recipe-image" href="{{ route('recipe.show', $recipe->id) }}">
                          <img src="{{ $recipe->image }}" height="150px" width="300px"> </a>
                        <a class="user-name" href="{{ route('recipe.list', $recipe->user->id) }}">
                          <img src="{{ $recipe->user->avatar ?? asset('images/common/avatar.png') }}" width="26" height="26"
                            class="user-icon">{{ $recipe->user->fullname ?? '' }}</a>
                      </div>
                      <div class="c-slider-seasonal__cont">
                        <div class="recipe-week">
                          <p>
                            <span class="day">{{ \Carbon\Carbon::parse($recipe->created_at)->day }}</span><br>
                            <span class="dow">{{ \Carbon\Carbon::parse($recipe->created_at)->format('M') }}</span>
                          </p>
                        </div>

                        <div class="c-slider-seasonal__info">
                          <a class="recipe-title" href="{{ route('recipe.show', $recipe->id) }}">
                            <h3 class="recipe-title">{{ $recipe->name }}</h3>
                          </a>
                        </div>
                      </div>
                    </li>
                  @endforeach
                </ul>
              </div>
              <div class="swiper-button-next swiper-button-next--seasonal">
                <i class="icon-angle-right"></i>
              </div>
              <div class="swiper-button-prev swiper-button-prev--seasonal">
                <i class="icon-angle-right"></i>
              </div>
              <div class="swiper-pagination swiper-pagination--seasonal" style="width: 20%"></div>
            </div>
          @else
            <li class="">
              <p class="c-user-recipe-list--box__recipe-tit" style="color: red;text-align:center">レシピはありません</p>
            </li>
          @endif
        </section>

        <section class="p-top__box">

          <!--新着レシピ一覧ー-->
          <div class="c-top-heading">
            <h2 class="c-top-heading__title">新着レシピ</h2>
            <a href="{{ route('recipe.all') }}" class="c-readmore">新着レシピ一覧へ</a>
          </div>
          <ul class="c-top-list--recipe">
            @foreach ($newRecipes as $recipe)
              <li>
                <div class="c-top-list--recipe__img-wrap">
                  <a href="{{ route('recipe.show', $recipe->id) }}">
                    <img src="{{ $recipe->image }}" class="recipe-image" height="150px" width="300px"> </a>
                  <a class="c-top-list--recipe__user-name" href="{{ route('recipe.list', $recipe->user->id) }}">
                    <img src="{{ $recipe->user->avatar ?? asset('images/common/avatar.png') }}" class="user-icon" width="52" height="52"> {{ $recipe->user->fullname }}
                  </a>
                </div>
                <div class="c-top-list--recipe__cont">
                  <div class="inner">
                    <span class="time-stamp">{{ \Carbon\Carbon::parse($recipe->created_at)->format('d/m/Y') }}</span>
                    <span class="recipe-time"><i class="icon-timer"></i>{{ convert_time($recipe->cooking_time) }}</span>
                  </div>
                  <a class="recipe-title" href="{{ route('recipe.show', $recipe->id) }}">
                    <h3>
                      {{ $recipe->name }}</h3>
                  </a>
                </div>
              </li>
            @endforeach
          </ul>
        </section>
      </div>
    </div>
    <div class="l-contents__right">
      <div class="c-side-block">
        <div class="inner">
          <p class="c-side-block__tit--nobd">トップのユーザー
            {{-- <a href="/ranking?ranking_type=D#PostRank" class="c-side-block__more">一覧へ</a> --}}
          </p>
          <ul class="c-ranking--artist">
            @foreach ($topUsers as $item)
              <li>
                <a href="{{ route('recipe.list', $item->id) }}">
                  <span class="c-ranking__icon">{{ $loop->iteration }}</span>
                  <img src="{{ $item->avatar ?? asset('images/common/avatar.png') }}" height="100px" class="artist-photo " width="100px">
                  <p class="artist-name">{{ $item->fullname ?? '' }}</p>
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="c-side-block">
        <div class="inner">
          <p class="c-side-block__tit--nobd">広告</p>
          <a><img src="https://i.ibb.co/B4gGdnK/naninune.png" style="max-width: 100%;"></a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
@endsection
