@extends('layouts.master')
@section('content')
  <div class="l-contents" style="min-height: 650px">
    <div class="l-contents__main">
      <div class="p-user--recipe">
        <section class="p-user__inner" id="p-user__recipe">
          <h2 class="p-user__title"><i class="icon-star"></i>トップのレシピ一覧</h2>
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
  </div>
@endsection
