<?php
require_once __DIR__ . '/DBConnect.php';

$user_id = 1; //ログイン機能実装後、セッションから代入する
$costume_path = $_POST['example'];
echo "costume_path = " . $costume_path;

$buyflag = 0; //これが0なら購入可能

//値がからの時はデフォルトで指定されているsexyを入れる
if(empty($costume_path) == true){
    $costume_path = "./images/coat1.png";
}


// costume_pathからidを特定
$sql = "SELECT * FROM Costume WHERE costume_path = :costume_path";
$stmt = $pdo -> prepare($sql);
$stmt -> bindvalue(':costume_path', $costume_path);
$stmt->execute();
$costume = $stmt -> fetch();
var_dump($costume);


//userからユーザー情報取得
$sql = "SELECT * from Users where id = :id";
$stmt = $pdo -> prepare($sql);
$stmt -> bindvalue(':id', $user_id);
$stmt -> execute();
$user = $stmt -> fetch();

//ユーザーの購入可否を調べる

//既に購入していないかどうか
$sql = "SELECT * from Buy_costume where user_id = :user_id";
$stmt = $pdo -> prepare($sql);
$stmt -> bindvalue(':user_id', $user_id);
$stmt -> execute();
$buy_list = $stmt -> fetchAll();
foreach($buy_list as $list){
    if($costume['id'] == $list['costume_id']){
        $buyflag = 2;
    }
}

//残高が足りているか
if($user['money'] < $costume['costume_price']){
    $buyflag = 1;
}else if($buyflag == 0){
    //残高を減らす処理
    $new_money = $user['money'] - $costume['costume_price'];
    $sql = "UPDATE Users SET money=:money WHERE id = :user_id";
    $stmt = $pdo -> prepare($sql);
    $stmt -> bindvalue(':money', $new_money);
    $stmt -> bindvalue(':user_id', $user_id);
    $result = $stmt -> execute();

}


if($buyflag == 0){
    //buy_costumeへデータ登録
    $sql = "INSERT INTO Buy_costume (user_id, costume_id) VALUES (:user_id, :costume_id)";
    $stmt = $pdo -> prepare($sql);
    $stmt -> bindvalue(':user_id', $user_id);
    $stmt -> bindvalue(':costume_id', $costume['id']);
    $result = $stmt -> execute();
}
$id =$costume['id'];
setcookie('buyflag',$buyflag);
setcookie('costume',$id);
header("Location: ./dressbuy_finish.php");
exit();
