<?php


require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    '393f40d1fc6e49a28c3b7979883e8979', 
    '2f9e216fb9e540b78674ffa16cfa3b2e',
    'http://localhost/geek/index.php'
);

$api = new SpotifyWebAPI\SpotifyWebAPI();

if (isset($_GET['code'])) {
    $session->requestAccessToken($_GET['code']);
    $api->setAccessToken($session->getAccessToken());

} else {
    header('Location: ' . $session->getAuthorizeUrl(array(
        'scope' => array( 
          'playlist-read-private', 
          'playlist-modify',
          'playlist-modify-private', 
          'playlist-modify-public',
          'user-read-private',
          'user-top-read',
          'user-library-read',
          '',
          ''

        )
    )));
    die();
}

// トップ４曲の情報をオブジェクトで返す。'tracks'を'artistにへんこうすればアーティストが返ってくる
$top = $api->getMySavedTracks(['limit' => 50]);

// function Saved(){    
//     $top = $api->getMySavedTracks('tracks', ['limit' => 50]);
// }

// function createPlaylist($id){
//     return 
// }


// // Create Playlist
// $top = $api->createPlaylist(
//     "新しいプレイリスト",
//     "新しいプレイリストですよ（ここに駅間の説明とか時間入力するといいね）",
//     false
// );





// foreach($top as $line){
//     echo $line;
// }

// var_dump(get_object_vars($top));

// var_dump($top);
// echo $top;
echo '<pre>';
    print_r($top);
     //認証を受けたアカウントのプロフィールが表示される
echo '</pre>';



?>

https://accounts.spotify.com/authorize?client_id=393f40d1fc6e49a28c3b7979883e8979&response_type=code&redirect_uri=http://localhost/geek/index.php&scope=user-top-read%&state=state
https://accounts.spotify.com/authorize?client_id=393f40d1fc6e49a28c3b7979883e8979&response_type=code&redirect_uri=http://localhost/geek/index.php&scope=$user-top-read%25&state=state
