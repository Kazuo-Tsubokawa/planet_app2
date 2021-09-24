<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>惑星情報登録</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>惑星情報登録</h1>
    <form action="/planets" method="POST">
        @csrf
        <p>
            <label for="janame">名前</label>
            <input type="text" name='janame' value="{{ old('janame') }}">
        </p>
        <p>
            <label for="enname">名前(英語)</label>
            <input type="text" name='enname' value="{{ old('enname') }}">
        </p>
        <p>
            <label for="radius">半径</label>
            <input type="text" name='radius' value="{{ old('radius') }}">
        </p>
        <p>
            <label for="weight">重量</label>
            <input type="text" name='weight' value="{{ old('weight') }}">
        </p>
        <input type="submit" value="登録">
    </form>
    <a href="/planets">戻る</a>
</body>

</html>
