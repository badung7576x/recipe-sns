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
                  <h3 class="recipeTime"><i class="icon-timer"></i>{{ $recipe->cooking_time }}分</h3>
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
              <div class="balloonComment-right margin-T20">
                <h3 class="editorsComment">ノート</h3>

                <p class="commentTxt">
                  {{ $recipe->note }}
                </p>
              </div>
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

      <section class="otherRecipeList otherRecipeList--recipe">
        <div class="ttl review">
          <h2>このレシピのコメントや感想を伝えよう！</h2>
        </div>
        <div class="changeBox">
          <div class="reviewArea">
            <form action="#" id="reviewForm" method="get">
              <textarea name="comment" id="review-comment" placeholder="このレシピの感想を入力する"></textarea>
              <div id="review-message"></div>
              <div class="btn btnThin float-R margin-T10">
                <input type="submit" class="btn-inner" value="このレシピの感想を送る" onclick="">
              </div>
            </form>
          </div>
          <div class="ttl review">
            <h2>コメント1件</h2>
          </div>
          <ul class="reviewSentArea readmore-js-section" id="reviewBox">
            <!-- コメント▼ -->
            <li class="reviews review-31878">
              <form id="reviewReplyForm_31878" method="post">
                <div class="thmbList review-first">
                  <div class="phtFrame"><a href="#"><img src="{{ asset('images/common/avatar.png') }}" width="50" height="50" class="scoreUsrPht "></a></div>
                  <div class="detail balloonComment-right">
                    <div class="reviewTxt">
                      <p class="detailTxt">作りました。味は絶品です。病みつきになりますね。白菜1玉で作り置きしてもいいかも。小腹空いた時にも食べたい1品です。</p>
                      <div class="niceArea">
                        <p class="daily">2021.01.10 14:45</p>
                        <p class="usrName"><a href="#">エンジェル<span>さん</span></a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </li>
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
            <a href="#">
              <div class="thmbList">
                <div class="phtFrame">
                  <img src="{{ $recipe->user->avatar ?? asset('images/common/avatar.png') }}" width="80" height="80" alt="あみん" class="">
                </div>
                <div class="detail">
                  <p class="usrName">{{ $recipe->user->fullname ?? '' }}</p>
                  <p class="subttl">身近にあるもので家族が喜ぶ簡単おうちごはん</p>
                </div>
              </div>
            </a>
            <div class="btn margin-T20 btnThin"><a href="#" class="btn-inner">
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
                <p class="recipeTime"><span>{{ \Carbon\Carbon::parse($recipe->created_at)->format('d/m/Y ') }}</span> <i class="icon-timer margin-L10"></i>{{ $recipe->cooking_time }}分</p>
              </div>
            </li>
          @endforeach
        </ul>
      </section>

    </div>
  </article>
@endsection
