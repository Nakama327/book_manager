<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>top</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
  </head>
  <body>
    <h1>書籍検索システム</h1>
    <a href="{{ route('loginView') }}">Login</a>
    <a href="{{ route('admin') }}">管理者用</a>
    <a href="{{ route('booksAll') }}">蔵書一覧</a>
    <div class="container">
      <!-- ここにページのコンテンツを表示 -->
      @if(session('error'))
        <script>
          alert('{{ session('error') }}');
        </script>
      @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
    crossorigin="anonymous"></script>
  </body>
</html>