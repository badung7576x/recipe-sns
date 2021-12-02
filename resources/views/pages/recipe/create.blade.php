@extends('layouts.master')
@section('content')
<div class="l-contents">
    <div class="l-contents__right">
        <section class="c-side-block--user">
            <div class="inner">
                <div class="p-user-profile--side">
                    <img src="{{ asset('images/common/avatar.png') }}" class="p-user-profile--side__image" width="500" height="500" />
                    <div class="p-user-profile--side__contents">
                        <h2 class="p-user-profile--side__name">{{ $user->fullname ?? '' }}</h2>
                        <ul class="p-user-profile__follow">
                            <li style="margin-left: 5%; width: 85%;"><a href="#">レシピ数<span>545</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="l-contents__right" style="width: 760px">
        <section class="c-side-block--user margin-L10" style="height: max-content;">
            <div class="inner">
                <div class="p-user-profile--side">
                    <div class="p-user-profile--side__contents">
                        <div class="p-user-profile--side__heading01" style="font-size: 25px">
                            自己紹介
                            <div class="btn btnLarge" style="float:right;">
                                <a href="#" class="btn-inner">編集</a>
                            </div>
                        </div>
                        <div class="p-user-profile--side__contents--text margin-T40">
                            <p>無し</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="l-contents">
    <div class="l-contents__main">
        <div class="p-user--recipe">
            <section class="p-user__inner" id="p-user__recipe">
                <h2>リスト　＞　レシピを登録する</h2><br><br>
                <div class="c-top-heading">
                    <h2 style="font-size: 26px; font-weight: bold;">レシピを投稿する</h2>
                    <span><i class="icon-calender" style="margin-right: 5px;"></i>2021.12.11</span>
                </div>
                <form style="font-size: large; margin-left: 15rem">
                    <input type="file" name="image" accept="image/png, image/jpeg"><br><br>
                    <table class="create-recipe">
                        <tr>
                            <td colspan="2" style="font-size: 20px; font-weight: bold;">
                                料理の情報
                                <hr>
                            </td>

                        </tr>
                        <tr>
                            <td class="create-recipe-td">料理の名前</td>
                            <td><input type="text" name="name" class="create-recipe-input" /></td>
                        </tr>
                        <tr>
                            <td class="create-recipe-td">料理のカテゴリー</td>
                            <td><input type="text" name="category" class="create-recipe-input" /></td>
                        </tr>
                        <tr>
                            <td class="create-recipe-td">予定時間</td>
                            <td><input type="text" name="time" class="create-recipe-input" /></td>
                        </tr>
                    </table>
                    <br>
                    <table class="create-recipe">
                        <tr>
                            <td colspan="2" style="font-size: 20px; font-weight: bold;">
                                やり方の順番
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td class="create-recipe-td">ステップ名</td>
                            <td style="padding: 1rem;">説明</td>
                        </tr>
                        <tr>
                            <td class="create-recipe-td recipe-step">1</td>
                            <td><input type="text" name="step[]" class="create-recipe-input" /></td>
                        </tr>
                        <tr>
                            <td class="create-recipe-td recipe-step">2</td>
                            <td><input type="text" name="step[]" class="create-recipe-input" /></td>
                        </tr>
                        <tr>
                            <td class="create-recipe-td recipe-step">3</td>
                            <td><input type="text" name="step[]" class="create-recipe-input" /></td>
                        </tr>
                        <tr style="cursor: pointer; " class="create-recipe-add-step">
                            <td colspan="2" style="text-align: center; ">
                                +
                            </td>
                        </tr>
                    </table>
                    <br>
                    <div style="width: 690px;">
                        <header style="font-size: 20px; font-weight: bold;"><i class="icon-memo" ></i>ノート</header>
                        <hr>
                        <textarea style="height: 200px;" name="note"></textarea>
                    </div>
                    <button type="submit" class="btn btnLarge"><span class="btn-inner">保存</span></button>
                </form>
            </section>
        </div>

    </div>
</div>
@endsection