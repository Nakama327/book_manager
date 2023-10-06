<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>蔵書一覧</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
  </head>
  <body>
    <h1>蔵書一覧</h1>
    <a href='/'>Top</a>
    <table class="table">
        <tr><th>番号</th><th>タイトル</th><th>著者</th><th>発刊日</th></tr>
        @foreach($records as $record)
          <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->title }}</td>
            <td>{{ $record->author }}</td>
            <td>{{ $record->publisher }}</td>
            <td><a href="/booksShow/{{ $record->id }}">詳細を表示</a></td>
          </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
    crossorigin="anonymous"></script>
  </body>
</html>