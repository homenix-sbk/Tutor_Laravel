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
    @include('components.headTeacher')
    <div id="wrapper" class="fade-in">
        <div class="align-center">
            <h2 class="teacher">家庭教師・登録フォーム</h2>
            <p>家庭教師登録は無料です。ぜひご登録ください。</p>
        </div>
        <div class="container">
            <form action="/teacher/add" method="post">
                <table>
                    <tr>
                        <th>お名前&emsp;<span class="red">※</span></th>
                        <td><input type="text" name="name" /></td>
                    </tr>
                    <tr>
                        <th>ふりがな&emsp;<span class="red">※</span></th>
                        <td><input type="text" name="kana" /></td>
                    </tr>
                    <tr>
                        <th>
                        <div class="ribbon"><span>公開</span></div>
                            年齢&emsp;<span class="red">※</span>
                        </th>
                        <td><input type="text" name="age" /></td>
                    </tr>
                    <tr>
                        <th>
                            <div class="ribbon"><span>公開</span></div>
                            性別&emsp;<span class="red">※</span>
                        </th>
                        <td>
                            <input type="radio" name="gender" value="male" />男性
                            <input type="radio" name="gender" value="female" />女性
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div class="ribbon"><span>公開</span></div>
                            都道府県&emsp;<span class="red">※</span>
                        </th>
                        <td>
                        {{-- Form::select('pref', \App\Prefecture::select('id', 'name')->get()->pluck('name','id')->prepend( "選択してください", ""), null, ['class' => 'form-control']) --}}
                        </td>
                    </tr>
                </table>
                <div class="btn__area">
                    <button type="submit" id="submit" disabled>送信する</button>
                </div>
            </form>
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