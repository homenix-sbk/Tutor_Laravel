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
        <div class="main">
            <img src="./images/main_bg.png">
            <div class="main-img">
                <img src="./images/index_h2.png" alt="個人契約の家庭教師マッチングサイト紹介料14,800円だけ" width="970" height="300">
            </div>
            <p>入会金、中間マージン、教材販売などは一切ありません。<br>
                個人契約となりますので、時給と交通費は先生に直接お支払い下さい。</p>
        </div>
        <div class="container">
            <section class="flex1">
                <div class="img-box">
                    <img src="./images/index_01.jpg" alt="" width="640" height="427">
                </div>
                <div class="text-box">
                    <h3 class="align-center">中学受験・高校入試は個人指導で</h3>
                    <p>いい先生と個人契約できます！<br>ぴったりの先生がきっと見つかります！</P>
                    <div class="btn btn__green">
                        <a href="#">登録教師の情報を見る</a>
                    </div>
                </div>
            </section>
            <section class="flex2">
                <div class="img-box">
                    <img src="./images/index_02.jpg" alt="" width="640" height="427">
                </div>
                <div class="text-box">
                    <h3 class="align-center">紹介料は決定後の後払い</h3>
                    <p>何人面接しても不採用の場合は費用はかかりません。<br>
                        気になる先生は、まず体験授業から！<br>
                        先生とはご家庭で個人契約できます。</P>
                    <div class="btn btn__green">
                        <a ref="#">家庭教師を申し込む</a>
                    </div>
                </div>
            </section>
            <section class="flex1">
                <div class="img-box">
                    <img src="./images/index_03.jpg" alt="" width="640" height="427">
                </div>
                <div class="text-box">
                    <h3 class="align-center">サポートもしているので安心</h3>
                    <p>ご要望やご質問がございましたら、<br>お気軽にお問い合わせ下さい。</P>
                    <div class="btn btn__green">
                        <a href="#">お問い合わせ</a>
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
</body>
</html>

