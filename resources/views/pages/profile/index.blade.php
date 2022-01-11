@extends('layouts.master')
@section('content')
  @include('pages.profile.profile_top')
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
                  <p class="c-user-recipe-list--box__recipe-tit"><a href="{{ route('recipe.show', $recipe->id) }}" class="recipe-titlelink">{{ $recipe->name }}</a>
                  </p>

                  <ul class="c-user-recipe-list--box__date">
                    <li class="recipe-registdate">{{ \Carbon\Carbon::parse($recipe->created_at)->format('d/m/Y') }}</li>
                    <li><span class="recipe-time"><i class="icon-timer"></i>{{ convert_time($recipe->cooking_time) }}</span></li>
                  </ul>

                  <div class="c-user-recipe-list--box__comment">
                    {{ $recipe->description }}
                  </div>
                  <div class="btn margin-All5 btnLarge" style="float:right;">
                    <a href="{{ route('recipe.edit', $recipe->id) }}" class="btn-inner">編集</a>
                  </div>
                  <div class="btn margin-All5 btnLarge" style="float:right;">
                    <a href="#" onclick="deleteRecipe({{ $recipe->id }})" class="btn-inner">削除</a>
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
  <script>
    function deleteRecipe(id) {
      if (window.confirm('本当に削除しますか？')) {
        let url = '{{ route('recipe.delete', ":id") }}';
        url = url.replace(':id', id);
        window.location.href = url;
      } else {
        return false;
      }
    }
  </script>
@endsection
