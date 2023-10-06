<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>レビューの投稿</title>
</head>
<body>
    <h1>レビューの投稿</h1>
    <form action="reviewStore" method="post">
        @csrf
        <div class="mb-3">
            <label for="recommend">おすすめ度</label>
            <input type="radio" name="recommend" value=1>1
            <input type="radio" name="recommend" value=2>2
            <input type="radio" name="recommend" value=3>3
            <input type="radio" name="recommend" value=4>4
            <input type="radio" name="recommend" value=5>5
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">コメント</label>
            <textarea name="comment" class="form-control" required></textarea>
        </div>
        <input type="hidden" name="book_id" value="{{ $book_id }}">
        <input type="submit" class="btn" value="投稿">
    </form>
</body>
</html>