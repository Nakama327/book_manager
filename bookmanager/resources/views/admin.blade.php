<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>管理者画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h1>管理者画面</h1>

    <!-- ドロップダウンメニュー -->
    <select id="formSelector">
        <option value="form1">新規登録</option>
        <option value="form2">削除</option>
        
    </select>

    <!-- フォーム1: 新規登録 -->
    <form id="form1" style="display: none;" action="{{ route('admin.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="image_path">画像ファイルパス</label>
            <input type="text" id="image_path" name="image_path">
        </div>
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="author">著者</label>
            <input type="text" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="publisher">出版社</label>
            <input type="text" id="publisher" name="publisher">
        </div>
        <div class="form-group">
            <label for="date">発売日</label>
            <input type="date" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" id="isbn" name="isbn" unique>
        </div>
        <button type="submit">新規登録</button>
    </form>
    @if(session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif
    <!-- フォーム2: 削除 -->
    <form id="form2" style="display: none;" action="{{ route('admin.destroy') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_delete">ID</label>
            <input type="text" id="id_delete" name="id_delete">
        </div>
        <div class="form-group">
            <label for="isbn_delete">ISBN</label>
            <input type="text" id="isbn_delete" name="isbn_delete" unique>
        </div>
        <button type="submit">削除</button>
    </form>

    <br><a href='/'>Top</a>
    <!-- JavaScriptを使ってフォームを切り替える -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('formSelector').addEventListener('change', function() {
            var selectedForm = this.value;
            document.getElementById('form1').style.display = 'none';
            document.getElementById('form2').style.display = 'none';

            if (selectedForm === 'form1') {
                document.getElementById('form1').style.display = 'block';
            } else if (selectedForm === 'form2') {
                document.getElementById('form2').style.display = 'block';
            }
        });
    </script>
</body>
</html>
