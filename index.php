<!-- ① -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>本を探そう</title>
</head>
<body class="container">

    <header>
      <h1 class="page-header">Webアプリ開発ワークショップ</h1>
    </header>

    <div class="container">

        <h2 class="page-header">書籍リスト一覧</h2>
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>タイトル</th>
                <th>著者名</th>
                <th>金額</th>
                <th>登録日時</th>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>
    <footer>
        <small>Laravel@work.curriculum</small>
    </footer>
</body>
</html>
<!-- ② -->
@foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->name}}</td>
                <td>{{ $book->price}}円</td>
                <td>{{ $book->created_at }}</td>
            </tr>
@endforeach
