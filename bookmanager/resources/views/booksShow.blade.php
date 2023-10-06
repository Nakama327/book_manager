<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍詳細</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous">
</head>
<body>
    <h1>書籍詳細</h1>
    <img src="{{ $record->image_path }}" alt="書籍画像">
    <table class="table">
        <tr><th>タイトル</th><td>{{ $record->title }}</td></tr>
        <tr><th>著者</th><td>{{ $record->author }}</td><th>出版社</th><td>{{ $record->publisher }}</td></tr>
        <tr><th>発刊日</th><td>{{ $record->date }}</td><th>ISBN</th><td>{{ $record->isbn }}</td></tr>
    </table>
    <br>
    <form action="/reviewCreate" method="post">
        @csrf
        <input type="hidden" name="book_id" value="{{ $record->id }}">
        <input type="submit" value="レビューを書く"></form>
    <br>
    <table class="table">
        @foreach($reviews as $review)
            <tr><th>おすすめ度：</th><td>{{ $review->recommend }}</td></tr>
            <tr><th>ユーザー名：</th><td>{{ $usernames[$review->user_id] }}</td></tr>
            <tr><th>コメント：</th><td>{{ $review->comment }}</td></tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
    @if(session('success'))
        <script>
            alert('{{ session('success_message') }}');
        </script>
    @endif
</body>
</html>