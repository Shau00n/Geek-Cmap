<?php
require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    '{ecaf4790632c43daa7a38db33d08a80c}', 
    '{4e77afdd5f82437c89eb54b1c43b2f0a}', 
    '{YOUR_REDIRECt_URI}'
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
?>