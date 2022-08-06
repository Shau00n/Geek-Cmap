<?php


// ユーザーが保存した曲を返す。
function Saved($tracks){
    $url = "https://api.spotify.com/v1/me/tracks";
     
    //cURLセッションを初期化する
    $ch = curl_init();
     
    //URLとオプションを指定する
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     
    //URLの情報を取得する
    $res =  curl_exec($ch);
     
    //結果を表示する
    var_dump($res);
     
    //セッションを終了する
    curl_close($ch);
}

saved('ami');