@extends('layouts.master')
@section('content')
  <div class="l-contents">
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
            <a href="#" class="c-readmore--02">旬のレシピ一覧へ</a>
          </div>
          <!--旬のレシピスライダー-->

          <div class="p-top__slider">
            <div class="swiper-container mySwiper c-slider-seasonal">
              <ul class="swiper-wrapper">
                @for ($i = 0; $i < 10; $i++)
                  <li class="swiper-slide">
                    <div class="c-slider-seasonal__image">
                      <div class="c-slider-seasonal__st">
                        <span class="recipe-time"><i class="icon-timer"></i>5分</span>
                        <span class="recipe-favorite"><i class="icon-heart"></i>229</span>
                      </div>
                      <a class="recipe-image" href="#">
                        <img src="{{ asset('images/common/banhmi.jpg') }}" height="auto" width="300" > </a>
                      <a class="user-name" href="#">
                        <img src="{{ asset('images/common/avatar.png') }}" width="26" height="26" class="user-icon" >名前</a>
                    </div>
                    <div class="c-slider-seasonal__cont">
                      <div class="recipe-week">
                        <p>
                          <span class="day">29</span><br>
                          <span class="dow">mon</span>
                        </p>
                      </div>

                      <div class="c-slider-seasonal__info">
                        <a class="recipe-title" href="{{ route('recipe') }}">
                          <h3 class="recipe-title">ベトナムのパン（バインミー）</h3>
                        </a>
                      </div>
                    </div>
                  </li>
                @endfor
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
        </section>

        <section class="p-top__box">

          <!--新着レシピ一覧ー-->
          <div class="c-top-heading">
            <h2 class="c-top-heading__title">新着レシピ</h2>
            <a href="#" class="c-readmore">新着レシピ一覧へ</a>
          </div>
          <ul class="c-top-list--recipe">
            @for ($i = 0; $i < 3; $i++)
              <li>
                <div class="c-top-list--recipe__img-wrap">
                  <a href="#">
                    <img src="{{ asset('images/common/banhmi.jpg') }}" class="recipe-image" height="auto" width="300" > </a>
                  <a class="c-top-list--recipe__user-name" href="#">
                    <img src="{{ asset('images/common/avatar.png') }}" class="user-icon" width="52" height="52" > パパイズム </a>
                </div>
                <div class="c-top-list--recipe__cont">
                  <div class="inner">
                    <span class="time-stamp">2021年11月25日</span><span class="recipe-time"><i class="icon-timer"></i>20分</span>
                  </div>
                  <a class="recipe-title" href="#">
                    <h3>
                      ベトナムのパン（バインミー）</h3>
                  </a>
                </div>
              </li>
              <li>
                <div class="c-top-list--recipe__img-wrap">
                  <a href="#">
                    <img src="{{ asset('images/common/hamburger.jpg') }}" class="recipe-image" height="auto" width="300" > </a>
                  <a class="c-top-list--recipe__user-name" href="#">
                    <img src="{{ asset('images/common/avatar.png') }}" class="user-icon" width="52" height="52" > パパイズム </a>
                </div>
                <div class="c-top-list--recipe__cont">
                  <div class="inner">
                    <span class="time-stamp">2021年11月25日</span><span class="recipe-time"><i class="icon-timer"></i>20分</span>
                  </div>
                  <a class="recipe-title" href="#">
                    <h3>
                      ベトナムのパン（バインミー）</h3>
                  </a>
                </div>
              </li>
              <li>
                <div class="c-top-list--recipe__img-wrap">
                  <a href="#">
                    <img src="{{ asset('images/common/pho.jpg') }}" class="recipe-image" height="auto" width="300" > </a>
                  <a class="c-top-list--recipe__user-name" href="#">
                    <img src="{{ asset('images/common/avatar.png') }}" class="user-icon" width="52" height="52" > パパイズム </a>
                </div>
                <div class="c-top-list--recipe__cont">
                  <div class="inner">
                    <span class="time-stamp">2021年11月25日</span><span class="recipe-time"><i class="icon-timer"></i>20分</span>
                  </div>
                  <a class="recipe-title" href="#">
                    <h3>
                      ベトナムのパン（バインミー）</h3>
                  </a>
                </div>
              </li>
              @endfor
          </ul>
        </section>
      </div>
    </div>
    <div class="l-contents__right">
      <div class="c-side-block">
        <div class="inner">
          <p class="c-side-block__tit--nobd">最近レシピが増えたArtist
            <a href="/ranking?ranking_type=D#PostRank" class="c-side-block__more">一覧へ</a>
          </p>
          <ul class="c-ranking--artist">
            @for ($i = 1; $i < 4; $i++)
              <li>
                <a href="#">
                  <span class="c-ranking__icon">{{ $i }}</span>
                  <img src="{{ asset('images/common/avatar.png') }}" height="auto" class="artist-photo " width="1000" >
                  <p class="artist-name">名前</p>
                </a>
              </li>
            @endfor
          </ul>
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
