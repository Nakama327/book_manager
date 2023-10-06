<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
  </head>
  <body>
  <a href="/">Top</a>
  <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">e-mail:</label>
        <input type="text" id="email" name="email" required>
        <label for="password">password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">login</button>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if(isset($result) && !$result->isEmpty())
        <h2>検索結果:</h2>
        <table>
        <thead>
            <tr>
                <th>username</th>
                <th>password</th>
                <th>email</th>
                <th>se</th>
            </tr>
        </thead>
        <tbody>
            @foreach($result as $row)
                <tr>
                    <td>{{ $row->username }}</td>
                    <td>{{ $row->password }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->se }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
    crossorigin="anonymous"></script>
  </body>
</html>