お名前：{{ $content['name_sei'] }}　{{ $content['name_mei'] }}
ニックネーム{{ $content['nickname'] }}
性別：@if ($content['gender'] == 1)
    男性
@else
    女性
@endif
パスワード：セキュリティのため非表示
メールアドレス：{{ $content['email'] }}
