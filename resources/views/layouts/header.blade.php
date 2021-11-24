<header>
    <article class="hNavArea">
        <div class="logo">
            <a href="{{ route('index') }}" style="font-size: 30px!important;">
                <h3>Stars</h3>
            </a>
        </div>
        <div class="searchArea">
            <form name="search_form" class="csSearch" method="get" action="#" itemprop="potentialAction" itemscope="itemscope">
                <div class="horizontal-block">
                    <select name="type" id="type">
                        <option value="" selected="">レシピから検索</option>
                        <option value="記事">記事から検索</option>
                        <option value="Artist">Artistから検索</option>
                    </select>
                    <input type="text" name="q" id="headerkeyword" autocomplete="off" value="" placeholder="料理名・食材名・イベント名" itemprop="query-input" class="ui-autocomplete-input"
                        role="textbox" aria-autocomplete="list" aria-haspopup="true">
                    <input type="submit" id="global-search-submit" value=" " name="">
                </div>
            </form>
        </div>
        <div class="float-R">
            <ul class="rightNavArea">
                <li class="hIconFeature"><a href="{{ route('signup') }}"><i class="fa-solid fa-user-plus"></i>無料会員登録</a></li>
                <li class="hIconLogin"><a href="{{ route('login') }}"><i class="fa-solid fa-arrow-right-to-bracket"></i>ログイン</a></li>
            </ul>
        </div>
    </article>
    <nav class="gNav">
        <ul>
            <li><a href="#">レシピ</a></li>
            <li><a href="#">ランキング</a></li>
            <li><a href="#">おすすめ</a></li>
            <li><a href="#">Artist</a></li>
            <li><a href="#">Starsとは</a></li>
        </ul>
    </nav>
</header>
