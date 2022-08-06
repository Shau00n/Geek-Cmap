<?php


require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    '393f40d1fc6e49a28c3b7979883e8979',
    '2f9e216fb9e540b78674ffa16cfa3b2e',
    'http://localhost/geek/index.php'
);

// 'http://localhost/geek/index.php'

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


// function Saved(){    
// トップ４曲の情報をオブジェクトで返す。'tracks'を'artistにへんこうすればアーティストが返ってくる
// $top = $api->getMySavedTracks(['limit' => 50]);
// $top = $api->getMySavedTracks(['limit' => 50]);
// }


// // Create Playlist $idこれはユーザーid
// // ２publiにするか否か
// // ３デフォルトはfalseです。trueプレイリストが共同である場合
// $top = $api->createPlaylist(
//     "新しいプレイリスト",
//     true,  
//     false,  
//     "新しいプレイリストですよ（ここに駅間の説明とか時間入力するといいね）"
// );


// addplaylists 
// $playlistId string - トラックを追加するプレイリストの ID。
// $tracks string|array - 追加するトラック ID、トラック URI、およびエピソード URI。
// $options 配列|オブジェクト- オプション。新しいトラックのオプション。
// int 位置 オプション。プレイリスト内のゼロベースのトラック位置。省略または false の場合、トラックが追加されます。
function addplaylist($api)
{
    // playlists/{plaulists_id}/tracks
    $top = $api->addPlaylistTracks(
        '2TOrU6SsuWL3xuH085RmbS',
        '6jjYDGxVJsWS0a5wlVF5vS',
    );

    // var_dump($top);
    // echo '<pre>';
    // print_r($top);
    // //認証を受けたアカウントのプロフィールが表示される
    // echo '</pre>';
    // 実行後にこれが表示される
    // https://accounts.spotify.com/authorize?client_id=393f40d1fc6e49a28c3b7979883e8979&response_
    // type=code&redirect_uri=http://localhost/geek/index.php&scope=user-top-read%&state=state 
    // https://accounts.spotify.com/authorize?client_id=393f40d1fc6e49a28c3b7979883e8979&response_
    // type=code&redirect_uri=http://localhost/geek/index.php&scope=$user-top-read%25&state=state
}


addplaylist($api);

// foreach($top as $line){
//     echo $line;
// }

// var_dump(get_object_vars($top));

// var_dump($top);
// echo $top;
// echo '<pre>';
// print_r($top);
// //認証を受けたアカウントのプロフィールが表示される
// echo '</pre>';



?>

https://accounts.spotify.com/authorize?client_id=393f40d1fc6e49a28c3b7979883e8979&response_type=code&redirect_uri=http://localhost/geek/index.php&scope=user-top-read%&state=state
https://accounts.spotify.com/authorize?client_id=393f40d1fc6e49a28c3b7979883e8979&response_type=code&redirect_uri=http://localhost/geek/index.php&scope=$user-top-read%25&state=state