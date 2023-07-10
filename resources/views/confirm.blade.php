<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会員登録確認画面</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <h1>会員情報確認画面</h1>
    {{-- 氏名 --}}
    <div class="name">
        <p>氏名</p>
        <p>{{ $inputs['name_sei'] }}　{{ $inputs['name_mei'] }}</p>
    </div>
    {{-- ニックネーム --}}
    <div class="form_row">
        <p>ニックネーム</p>
        <p>{{ $inputs['nickname'] }}</p>
    </div>



</body>

</html>
