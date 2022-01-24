<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>家庭教師マッチング</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('components.header')
    <div id="wrapper" class="fade-in">
        <div class="align-center">
            <p class="sub-title">About us</p>
            <h2 class="student" >家庭教師紹介システム</h2>
        </div>
        <div class="container">        
            <section>
                <div class="step">
                    <div class="stepNum">1</div>
                </div>
                <label class="process__title">登録フォームに必要事項を入力し送信</label>
                <div class="process__text">
                    <div class="lineArea"></div>
                    <p>登録フォームに必要事項を入力後、確認画面で間違いがないことを確認し送信ください。<br>
                    送信内容は、SSLによって暗号化されていますので、ご安心ください。<br>
                    なお、別のページに移るときに、ブラウザの設定によってメッセージが出ることがありますが、送信データを暗号化している影響ですので心配する必要はありません。
                    </p>
                </div>
                <div class="step">
                    <div class="stepNum">2</div>
                </div>
                <label class="process__title">家庭教師リストへの掲載と登録メールの確認</label>
                <div class="process__text">
                    <div class="lineArea"></div>
                    <p>家庭教師リストに、あなたの情報が掲載されますのでご確認ください。<br>
                    登録後直ちに登録完了のメールが自動的に送信される設定になっています。もしもメールが届かない場合は、入力されたメールアドレスが間違っている可能性がありますので、お問い合わせフォームよりご連絡下さい。
                    </p>
                </div>
                <div class="step">
                    <div class="stepNum">3</div>
                </div>
                <label class="process__title">生徒の紹介</label>
                <div class="process__text">
                    <div class="lineArea"></div>
                    <p>あなたに依頼されたい生徒が現れた場合、メールか電話にてお知らせしますので、お引き受けになるおつもりがあるかどうかを速やかに返信してください。<br>
                    依頼者の希望によって複数の先生に打診した場合、早くお返事をくださった先生から順に面接し、依頼者の希望に叶う先生が見つかった時点で決定になることがあります。その場合、後からお返事をくださった先生との面接はありません。<br>
                    または、依頼者の希望による別のケースとして、引き受け可能とのお返事をくださった先生方すべてと面接、体験授業をした上で、１番良いと思われる先生に決定される場合もありますのでご了承ください。
                    </p>
                </div>
                <div class="step">
                    <div class="stepNum">4</div>
                </div>
                <label class="process__title">生徒のご家庭への連絡と面接</label>
                <div class="process__text">
                    <div class="lineArea"></div>
                    <p>あなたから生徒のご家庭に連絡し、面接の日時等をお決めください。面接の際、指導の方針や曜日時間、条件などについて話し合ってください。<br>
                    面接の結果は、直接生徒のご家庭から知らされる場合もありますし、弊社を通して知らされることもあります。残念ながら不採用の場合には、別件の紹介をお待ちください。
                    </p>
                </div>
                <div class="step">
                    <div class="stepNum">5</div>
                </div>
                <label class="process__title">指導開始</label>
                <div class="process__text">
                    <div class="lineArea"></div>
                    <p>無事、ご家庭との契約が成立した場合は弊社までご連絡ください。期待に添えるよう、誠実に指導を行ってください。<br>
                    授業料（および交通費）は、生徒のご家庭より直接お受け取りください。
                    </p>
                </div>
                <div class="btn__area">
                    <div class="btn btn__orange">
                        <a href="/teacher/add">家庭教師に登録する</a>
                    </div>
                </div>
            </section>
        </div>
    </div><!-- wrapper_End -->
    @include('components.footer')
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/reload.js') }}"></script>
    <script src="{{ asset('js/openNav.js') }}"></script>
    <script src="{{ asset('js/activeNav.js') }}"></script>
    <script src="{{ asset('js/gotoTop.js') }}"></script>
    <script src="{{ asset('js/scroll.js') }}"></script>
    <script src="{{ asset('js/getStepJson.js') }}"></script>
</body>
</html>

