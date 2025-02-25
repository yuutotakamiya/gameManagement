<!DOCTYPE html>
<html lang="ja">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>アイテム一覧</title>
</head>
<body>
<header class="p-3 text-bg-dark">
    <h1>アイテム一覧</h1>
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/accounts/index" class="nav-link px-2 text-white">ユーザー一覧</a></li>
                <li><a href="/accounts/playerList" class="nav-link px-2 text-white">プレイヤー一覧</a></li>
                <li><a href="/accounts/itemList" class="nav-link px-2 text-secondary">アイテム一覧</a></li>
                <li><a href="/accounts/playeritemList"
                       class="nav-link px-2 text-white">所持アイテム一覧</a></li>
            </ul>
            <div class="text-end">
                <form method="post" action="{{url('accounts/dologout')}}">
                    @csrf
                    <button class="btn btn-warning btn btn-primary w-100 py-2" type="submit">ログアウト
                    </button>
                    <input type="hidden" name="action" value="dologout">
                </form>
            </div>
        </div>
    </div>
</header>
<h1>アイテム一覧</h1>
<table class="table table-bordered">
    @foreach($accounts as $itemList)
        <tr>
            <td>id:{{$itemList['id']}}</td>
            <td>名前:{{$itemList['name']}}</td>
            <td>種別:{{$itemList['type']}}</td>
            <td>効果値:{{$itemList['effect_size']}}</td>
            <td>説明:{{$itemList['Description']}}</td>
        </tr>
    @endforeach
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>

