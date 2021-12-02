@extends('layouts.master')
@section('content')
  <article class="baseWrap">
    <!-- 左カラム開始 -->
    <div class="mainWrap mainWrap--recipe">
      <section class="usrColWrap">
        <div class="usrCommonCol recipe">
          <div class="recipeNameArea">
            {{-- <ul class="scoreArea">
              <li>
                <div class="scoreList recipe-426736">
                  <div class="scoreBalloon cl-number">0</div>
                </div>
              </li>
            </ul> --}}
            <h1 class="recipeName">ベトナムのパン（バインミー）</h1>
          </div>
          <!-- 動画 -->
          <div class="recipeBlock thmbList recipeMainArea">

            <!-- レシピ写真 -->
            <div class="phtFrame">
              <div class="mainPhtFrame">
                <img src="{{ asset('images/common/banhmi.jpg') }}" width="380" id="main-pic">
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
                  <h2 class="heading">材料</h2>2人分
                </div>
                <div class="ingredient">
                  <h3 class="recipeTime"><i class="icon-timer"></i>10分</h3>
                </div>
              </div>

              <table>
                <tbody>
                  <tr class="ingre_group_ ">
                    <td class="group_ingredient">
                      <div><a href="#">白菜</a></div>
                    </td>
                    <td class="group_amount">300g</td>
                  </tr>
                  <tr class="ingre_group_ ">
                    <td class="group_ingredient">
                      <div><a href="#">白菜</a></div>
                    </td>
                    <td class="group_amount">300g</td>
                  </tr>
                  <tr class="ingre_group_ ">
                    <td class="group_ingredient">
                      <div><a href="#">ツナ缶</a></div>
                    </td>
                    <td class="group_amount">70g</td>
                  </tr>
                </tbody>
              </table>
              <div class="balloonComment-right margin-T20">
                <h3 class="editorsComment">ノート</h3>

                <p class="commentTxt">
                  めちゃくちゃ簡単でめちゃくちゃ美味しい、下手すりゃ永遠に食べてられるやつです！<br>
                  <br>
                  白菜を手軽に満足して食べたいなら絶対これ。<br>
                  <br>
                  白菜大量消費にもおすすめ。<br>
                  <br>
                  自信をもっておススメする副菜の1つです☆
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
                <tr>
                  <td>
                    <p>1</p>
                  </td>
                  <td>
                    本場ベトナムの定番「レバーパテのバインミー」のレシピをご紹介します。レバーパテは市販のものを使い、簡単で本格的な味わいを再現しました。
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>2</p>
                  </td>
                  <td>
                    本場ベトナムの定番「レバーパテのバインミー」のレシピをご紹介します。レバーパテは市販のものを使い、簡単で本格的な味わいを再現しました。
                  </td>
                </tr>
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
            <form action="#" id="reviewForm" method="post">
              <textarea name="comment" id="review-comment" placeholder="このレシピの感想を入力する"></textarea>
              <div id="review-message"></div>
              <div class="btn btnThin float-R margin-T10">
                <input type="submit" class="btn-inner" value="このレシピの感想を送る" onclick="">
              </div>
            </form>
          </div>
          <div class="ttl review">
            <h2>コメント2件</h2>
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
                  <img src="{{ asset('images/common/avatar.png') }}" width="80" height="80" alt="あみん" class="">
                </div>
                <div class="detail">
                  <p class="usrName">名前</p>
                  <p class="subttl">身近にあるもので家族が喜ぶ簡単おうちごはん</p>
                </div>
              </div>
            </a>
            <div class="btn margin-T20 btnThin"><a href="#" class="btn-inner">
                このABCのレシピ一覧へ</a>
            </div>
          </li>
        </ul>
      </section>

      <section>
        <ul class="recipes">
          <li class="ttl nadiaNewRecipe">
            Nadia新着レシピ
          </li>
          @for ($i = 0; $i < 3; $i++)
            <li class="thmbList">
              <div class="phtFrame"><a href="#"><img src="{{ asset('images/common/banhmi.jpg') }}" width="60"></a></div>
              <div class="detail">
                <p class="recipeName"><a href="#">ベトナムのパン（バインミー）</a></p>
                <p class="recipeTime"><i class="icon-timer"></i>10分</p>
              </div>
            </li>
          @endfor
        </ul>
      </section>

    </div>
  </article>
@endsection
