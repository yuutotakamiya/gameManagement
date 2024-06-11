<!DOCTYPE html>
<html lang="ja">
<head>
</head>
<body>
<h1>アカウント一覧</h1>
<table>

        @foreach($accounts as $account)
        <tr><td>名前:{{$account['name']}}</td><td>パス:{{$account['password']}}</td></tr>
        @endforeach

</table>
</body>
</html>
