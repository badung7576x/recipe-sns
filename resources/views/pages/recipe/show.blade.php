@extends('layouts.master')
@section('content')
  <article class="baseWrap">
    <!-- 左カラム開始 -->
    <div class="mainWrap mainWrap--recipe">
      <section class="usrColWrap">
        <div class="usrCommonCol recipe">
          <div class="recipeNameArea">
            <ul class="scoreArea">
              <li>
                <span class="recipe-favorite"><i class="icon-heart"></i> {{ $recipe->like }}</span>
              </li>
            </ul>
            <h1 class="recipeName">{{ $recipe->name }}</h1>
          </div>
          <!-- 動画 -->
          <div class="recipeBlock thmbList recipeMainArea">

            <!-- レシピ写真 -->
            <div class="phtFrame">
              <div class="mainPhtFrame">
                <img src="{{ $recipe->image }}" width="380" id="main-pic">
              </div>
            </div>

            <!-- コメント/食材 -->
            <div class="detail">
              {{-- <div class="rightBtnArea">
                <div class="btn margin-B10 float-R">
                  <a href="#" class="btn-inner">このレシピを編集</a>
                </div>
              </div><!-- rightBtnArea --> --}}

              <div class="ingredientArea">
                <div class="ingredient">
                  <h2 class="heading">材料</h2>
                </div>
                <div class="ingredient">
                  <h3 class="recipeTime"><i class="icon-timer"></i>{{ convert_time($recipe->cooking_time) }}</h3>
                </div>
              </div>

              <table>
                <tbody>
                  @foreach ($recipe->recipe_materials as $item)
                    <tr class="ingre_group_ ">
                      <td class="group_ingredient">
                        <div>{{ $item->name }}</div>
                      </td>
                      <td class="group_amount">{{ $item->quantity }} {{ $item->unit }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              @if (!empty($recipe->note))
                <div class="balloonComment-right margin-T20">
                  <h3 class="editorsComment">ノート</h3>

                  <p class="commentTxt">
                    {{ $recipe->note }}
                  </p>
                </div>
              @endif
            </div><!-- detail -->

          </div><!-- recipeBlock thmbList recipeMainArea -->
        </div><!-- usrCommonCol recipe-->


        <!-- 作り方 -->
        <div class="usrCommonCol step">

          <div class="stepBlock">
            <p class="ttl">作り方</p>
            <table>
              <tbody>
                @foreach ($recipe->recipe_steps as $step)
                  <tr>
                    <td>
                      <p>{{ $step->step }}</p>
                    </td>
                    <td>
                      {{ $step->description }}
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- stepBlock -->
        </div><!-- usrCommonCol recipe-->

      </section><!-- usrColWrap -->
      <hr>
      <section class="otherRecipeList otherRecipeList--recipe">
        <div class="ttl review">
          <h2>このレシピのコメントや感想を伝えよう！</h2>
        </div>
        <div class="changeBox">
          @auth
            <div class="reviewArea">
              <form id="comment" action="{{ route('recipe.comment', $recipe->id) }}" method="post">
                @csrf
                <textarea name="comment" id="comment-content" placeholder="このレシピの感想を入力する">{{ old('comment', '') }}</textarea>
                @error('comment')
                  <p class="error-msg" role="alert">
                    {{ $message }}
                  </p>
                @enderror
                <div class="btn btnThin float-R margin-T10">
                  <button type="button" class="btn-inner" onclick="submitComment(event)">このレシピの感想を送る</button>
                </div>
              </form>
            </div>
          @endauth
          <div class="review">
            <h2>コメント{{ count($recipe->comments) }}件</h2>
          </div>
          <ul class="reviewSentArea readmore-js-section" id="reviewBox">
            <!-- コメント▼ -->
            @foreach ($recipe->comments as $comment)
              <li class="reviews">
                <div class="thmbList review-first">
                  <div class="phtFrame"><a href="#"><img src="{{ $comment->user->avatar ?? asset('images/common/avatar.png') }}" width="50" height="50"
                        class="scoreUsrPht "></a></div>
                  <div class="detail balloonComment-right">
                    <div class="reviewTxt">
                      <h4 class="usrName"><a href="{{ route('recipe.list', $comment->user->id) }}">{{ $comment->user->fullname }}<span>さん</span></a></h4>
                      <p class="detailTxt">{{ $comment->content }}</p>
                      <div class="niceArea">
                        <p class="daily">{{ \Carbon\Carbon::parse($comment->created_at)->format('H:i d/m/Y') }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            @endforeach
            <!-- レビュー▲ -->
          </ul>

        </div><!-- changeBox -->
      </section><!-- otherRecipeList -->

    </div><!-- mainWrap -->
    <!-- 左カラムここまで -->

    <!-- 右カラム -->
    <div class="sideWrap sideWrap--recipe">
      <section>
        <ul class="profile">
          <li class="ttl">
            <h2>プロフィール</h2>
          </li>
          <li>
            <a href="{{ route('recipe.list', $recipe->user->id) }}">
              <div class="thmbList">
                <div class="phtFrame">
                  <img src="{{ $recipe->user->avatar ?? asset('images/common/avatar.png') }}" width="80" height="80" alt="あみん" class="">
                </div>
                <div class="detail">
                  <p class="usrName">{{ $recipe->user->fullname ?? '' }}</p>
                  <p class="subttl">{{ $recipe->user->description }}</p>
                </div>
              </div>
            </a>
            <div class="btn margin-T20 btnThin"><a href="{{ route('recipe.list', $recipe->user->id) }}" class="btn-inner">
                {{ $recipe->user->fullname }}のレシピ一覧へ</a>
            </div>
          </li>
        </ul>
      </section>

      <section>
        <ul class="recipes">
          <li class="ttl nadiaNewRecipe">
            新着レシピ
          </li>
          @foreach ($newRecipes as $recipe)
            <li class="thmbList">
              <div class="phtFrame"><a href="#"><img src="{{ $recipe->image }}" width="60"></a></div>
              <div class="detail">
                <p class="recipeName"><a href="{{ route('recipe.show', $recipe->id) }}">{{ $recipe->name }}</a></p>
                <p class="recipeTime"><span>{{ \Carbon\Carbon::parse($recipe->created_at)->format('d/m/Y ') }}</span> <i
                    class="icon-timer margin-L10"></i>{{ convert_time($recipe->cooking_time) }}</p>
              </div>
            </li>
          @endforeach
        </ul>
        @if (!empty($recipe->user->banner))
          <div class="c-side-block">
            <div class="inner">
              <p class="c-side-block__tit--nobd">広告</p>
              <a><img src="{{ $recipe->user->banner }}" style="max-width: 100%;"></a>
            </div>
          </div>
        @endif
      </section>

    </div>
  </article>

  <script>
    function submitComment(e) {
      var name = $('#comment-content').val().trim();
      if (name == '') {
        alert('コメントを入力してください');
        return false;
      } else {
        $('#comment').submit();
      }
    }
  </script>
@endsection
