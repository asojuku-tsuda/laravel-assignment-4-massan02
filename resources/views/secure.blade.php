<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Page - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <div class="alert alert-success">
            <h1>認証成功！</h1>
            <p>これは課題10: ミドルウェア付きルートのサンプルページです。</p>
            <p>あなたは正常に認証されました。このページはauth.basicミドルウェアで保護されています。</p>
        </div>
        <a href="{{ route('home') }}" class="btn btn-primary">ホームに戻る</a>
    </div>
</body>
</html>
