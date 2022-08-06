<?php
require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    '393f40d1fc6e49a28c3b7979883e8979', 
    '2f9e216fb9e540b78674ffa16cfa3b2e',
    'http://localhost:8888/callback'
);
$api = new SpotifyWebAPI\SpotifyWebAPI();

if (isset($_GET['code'])) {
    $session->requestAccessToken($_GET['code']);
    $api->setAccessToken($session->getAccessToken());

} else {
    header('Location: ' . $session->getAuthorizeUrl(array(
        'scope' => array( 
          'playlist-read-private', 
          'playlist-modify-private', 
          'user-read-private',
          'playlist-modify',
          'user-top-read'
        )
    )));
    die();
}

// トップ４曲の情報をオブジェクトで返す。'tracks'を'artistにへんこうすればアーティストが返ってくる
$top = $api->getMyTop('tracks', ['limit' => 4]);


echo '<pre>';
    print_r($api->me()); //認証を受けたアカウントのプロフィールが表示される
echo '</pre>';



// ここに時間入力からの処理を書きます
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="" method = "get">
        <p>時間を入力して下さい（分）：<br>
        <input type="text" neme = "num"></p>
        <p><input type="submit" value="確認する"></p>
    </form>
</body>
</html>

<?php

$get_minutes = $_GET["num"];





