<?php
require_once __DIR__ . '/DBConnect.php';


//ログインしているユーザー番号を取得
$user_id = 1; //ログイン機能を実装したらセッションから入れる

//そのユーザの適応中衣装を取得
$sql = 'select * from Users where id = 1';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$user = $stmt->fetch();
//var_dump($user);
$costume = $user['apply_costume'];
//ユーザーの現在の好感度を取得
$favorability = $user['Favorability'];
//表示する画像パスを返す
if($costume == 1){
    if($favorability>=150){
        $cos_path = './images/coat_highest.png';
    }else if($favorability >= 100){
        $cos_path = './images/coat_usually1.png';
    }else if($favorability >= 50){
        $cos_path = './images/coat_terrible.png';
    }else{
        $cos_path = './images/coat_bad.png';
    }
}else if($costume == 2){
    if($favorability>=150){
        $cos_path = './images/dress_highest.png';
    }else if($favorability >= 100){
        $cos_path = './images/dress_usually1.png';
    }else if($favorability >= 50){
        $cos_path = './images/dress_terrible.png';
    }else{
        $cos_path = './images/dress_bad.png';
    }
}else if($costume == 3){
    if($favorability>=150){
        $cos_path = './images/maid_highest.png';
    }else if($favorability >= 100){
        $cos_path = './images/maid_usually2.png';
    }else if($favorability >= 50){
        $cos_path = './images/maid_terrible.png';
    }else{
        $cos_path = './images/maid_bad.png';
    }
}else if($costume == 4){
    if($favorability>=150){
        $cos_path = './images/uniform_highest.png';
    }else if($favorability >= 100){
        $cos_path = './images/uniform_usually3.png';
    }else if($favorability >= 50){
        $cos_path = './images/uniform_terrible.png';
    }else{
        $cos_path = './images/uniform_bad.png';
    }
}

?>
