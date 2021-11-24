@extends('layouts.master')
@section('content')
    <div class="ppBody" style="height: 500px">
        <form action="#" id="login_mypage" class="" method="post" accept-charset="utf-8">
            <div class="ppWrap" id="loginForm">
                <div class="ppTtl login">ログイン</div>
                <div class="ppCont">
                    <p class="subTtl">旬の一週間レシピ</p>
                    <table class="loginTable">
                        <tbody>
                            <tr>
                                <th>メールアドレス</th>
                                <td>
                                    <div class="input email required">
                                        <input name="email" placeholder="example@xyz.com" type="email" id="UserEmail" required="required">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>パスワード</th>
                                <td>
                                    <div class="input password required">
                                        <input name="password" type="password" id="UserPassword" required="required">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btnFrame">
                        <div class="btn margin-T10 margin-B10 margin-L10 margin-R10 btnLogin"><a href="javascript:void();" onclick="$('#login_mypage').submit();return false;"
                                class="btn-inner">ログイン</a></div>
                    </div>
                </div>
                <div class="ppCont">
                    <p class="subTtl">まだ会員登録をされていない方</p>
                    <p class="alignC">会員登録は無料です。是非ご登録ください。</p>
                    <div class="btnFrame">
                        <div class="btn margin-T10 margin-B10 margin-L10 margin-R10 btnRegister">
                            <a href="/register/normal?redirect=%2Ftimeline" class="btn-inner" target="_parent">無料会員登録</a>
                        </div>
                    </div>
                </div>
            </div><!-- ppWrap -->
        </form>
    </div>
@endsection
