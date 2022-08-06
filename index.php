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

// 変数定義
$userId = 'shaun';
$user_id = '393f40d1fc6e49a28c3b7979883e8979';
$tracks_id = '2TOrU6SsuWL3xuH085RmbS';
$playlist_id = '6jjYDGxVJsWS0a5wlVF5vS';


// getMySavedTracksお気に入り登録しt曲を返す
function getMySavedTracks($api){    
// トップ４曲の情報をオブジェクトで返す。'tracks'を'artistにへんこうすればアーティストが返ってくる
$top = $api->getMySavedTracks(['limit' => 50]);
echo '<pre>';
print_r($top);
//認証を受けたアカウントのプロフィールが表示される
echo '</pre>';
}


// Create Playlist $idこれはユーザーid
// ２publiにするか否か
// ３デフォルトはfalseです。trueプレイリストが共同である場合
function createPlaylists($api){
    $top = $api->createPlaylist(
        "新しいプレイリスト",
        true,  
        false,  
        "新しいプレイリストですよ（ここに駅間の説明とか時間入力するといいね）"
    );
    echo '<pre>';
    print_r($top);
    //認証を受けたアカウントのプロフィールが表示される
    echo '</pre>';
}


// addplaylists 
// $playlistId string - トラックを追加するプレイリストの ID。
// $tracks string|array - 追加するトラック ID、トラック URI、およびエピソード URI。
// $options 配列|オブジェクト- オプション。新しいトラックのオプション。
// int 位置 オプション。プレイリスト内のゼロベースのトラック位置。省略または false の場合、トラックが追加されます。
function addplaylist($api, $tracks_id, $playlist_id)
{
    // playlists/{plaulists_id}/tracks
    $top = $api->addPlaylistTracks(
        "$tracks_id",
        "$playlist_id"
    );
    // var_dump($top);
    echo '<pre>';
    print_r($top);
    //認証を受けたアカウントのプロフィールが表示される
    echo '</pre>';
    // 実行後にこれが表示される
    // https://accounts.spotify.com/authorize?client_id=393f40d1fc6e49a28c3b7979883e8979&response_
    // type=code&redirect_uri=http://localhost/geek/index.php&scope=user-top-read%&state=state 
    // https://accounts.spotify.com/authorize?client_id=393f40d1fc6e49a28c3b7979883e8979&response_
    // type=code&redirect_uri=http://localhost/geek/index.php&scope=$user-top-read%25&state=state
}


// userの個人情報を返す
function introgation($api)
{
    echo '<pre>';
    print_r($api->me()); //認証を受けたアカウントのプロフィールが表示される
    echo '</pre>';
}



// getUserPlaylistsユーザーのプレイリストを表示する
// $userId string - ユーザーの ID または URI。
// $options 配列|オブジェクト- オプション。トラックのオプション。
// int limit オプション。トラック数を制限します。
// int オフセット オプション。スキップするトラック数。
function getUserPlaylists($api)
{
    $top = $api->getUserPlaylists('shaun', ['limit' => 50]);
    echo '<pre>';
    print_r($top);
    //認証を受けたアカウントのプロフィールが表示される
    echo '</pre>';
}

// // getMySavedTracks→お気に入り登録しt曲を返す
// getMySavedTracks($api);

// // Create Playlist→これエラーなるんよね
// createPlaylists($api);

// addplaylists→プレイリストに曲を追加
addplaylist($api, $tracks_id, $playlist_id);

// // userの個人情報を返す
// introgation($api);

// // getUserPlaylists→ユーザーのプレイリストを表示する→ないプレイリストが表示される
// getUserPlaylists($api);


?>

<!-- https://accounts.spotify.com/authorize?client_id=393f40d1fc6e49a28c3b7979883e8979&response_type=code&redirect_uri=http://localhost/geek/index.php&scope=user-top-read%&state=state
https://accounts.spotify.com/authorize?client_id=393f40d1fc6e49a28c3b7979883e8979&response_type=code&redirect_uri=http://localhost/geek/index.php&scope=$user-top-read%25&state=state -->