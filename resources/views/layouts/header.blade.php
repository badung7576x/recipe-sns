<header>
  <article class="hNavArea">
    <div class="logo">
      <a href="{{ route('index') }}" style="font-size: 30px!important;">
        <h3>Stars</h3>
      </a>
    </div>
    <div class="searchArea">
      <form name="search_form" class="csSearch" method="get" action="{{ route('recipe.search') }}">
        <div class="horizontal-block">
          <select name="type" id="type">
            <option value="name" @if (request()->type == 'name') selected @endif>料理名で検索</option>
            <option value="material" @if (request()->type == 'material') selected @endif>調理材料名で検索</option>
            <option value="user" @if (request()->type == 'user') selected @endif>アーティストで検索</option>
          </select>
          <input name="keyword" type="text" id="headerkeyword" value="{{ request()->keyword }}" placeholder="料理名・調理材料名・アーティスト">
        </div>
      </form>
    </div>
    <div class="float-R">
      <ul class="rightNavArea">
        @if (empty($user))
          <li class="hIconFeature"><a href="{{ route('signup') }}">無料会員登録</a></li>
          <li class="hIconLogin"><a href="{{ route('login') }}">ログイン</a></li>
        @else
          <li class="loginUsr">
            <script>
              function showPopup() {
                $('.myMenu').toggleClass('d-none');
              }
            </script>
            <a href="javascript:void();" onclick="showPopup()"> {{ $user->fullname }}</a>

            <ul class="myMenu d-none">
              <li>
                <a href="{{ route('user.profile') }}">プロフィール</a>
              </li>
              <li>
                <a href="{{ route('logout') }}">ログアウト</a>
              </li>
            </ul>
          </li>
          <li class="hIconFeature"><a href="{{ route('recipe.create') }}">レシピ投稿</a></li>
        @endif
      </ul>
    </div>
  </article>
  <nav class="gNav">
    <ul>
      <li><a href="{{ route('recipe.all') }}">レシピ</a></li>
      <script>
        function showRank() {
          $('.menuB').toggleClass('d-none');
        }
      </script>
      <li class="rankMenu">
        <a href="javascript:void();" onclick="showRank()">ランキング</a>
        <ul class="menuB d-none">
          <li>
            <a href="{{ route('rank.users') }}">ユーザー</a>
          </li>
          <li>
            <a href="{{ route('rank.recipes') }}">レシピ</a>
          </li>
        </ul>
      </li>
      <li><a href="{{ route('recipe.all') . '?type=recommend' }}">おすすめ</a></li>
      <li><a href="{{ route('user.list') }}">アーティスト</a></li>
      <li><a href="{{ route('introduce') }}">Starsとは</a></li>
    </ul>
  </nav>
  {{-- <script>
    $(document).ready(function() {
      $('input[name=keyword]').keydown(function(e) {
        var keyword = $('input[name=keyword]').val().trim();
        if (e.which == 13 && keyword != '') {
          $('#search_form').submit();
        }
      });
    });
  </script> --}}
</header>
