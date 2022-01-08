@extends('layouts.master')
@section('content')
  <div class="l-contents" style="min-height: 550px;">
    <div class="l-contents__main">
      <div class="p-user--recipe">
        <section class="p-user__inner" id="p-user__recipe">
        <h2 class="p-user__title"><i class="icon-star"></i>トップのユーザー一覧</h2>
          
          <ul class="c-user-recipe-list--box">
            @foreach ($users as $item)
              <li class="c-user-recipe-list--box__li recipe-427015">
                <div class="c-user-recipe-list--box__photo">
                  <a href="{{ route('recipe.list', $item->id) }}">
                    <img src="{{ $item->avatar ?? asset('images/common/avatar.png') }}" width="100">
                  </a>
                </div>
                <div class="c-user-recipe-list--box__box">
                  <p class="c-user-recipe-list--box__recipe-tit">
                    <a href="{{ route('recipe.list', $item->id) }}" class="recipe-titlelink">{{ $item->fullname }}</a>
                  </p>
                  <div class="c-user-recipe-list--box__comment">
                    {{ $item->description }}
                  </div>
                </div>
              </li>
            @endforeach
          </ul>
        </section>
      </div>

    </div>
  </div>
@endsection
