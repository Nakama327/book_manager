<!DOCTYPE html>
<html>
<head>
    <title>検索結果</title>
</head>
<body>
    <h2>検索結果:</h2>
    @if(isset($result) && !$result->isEmpty())
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
    @else
        <p>一致するデータが見つかりませんでした。</p>
    @endif
</body>
</html>