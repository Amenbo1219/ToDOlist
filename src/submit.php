<?php
require_once 'control_db.php';
    date_default_timezone_set('JST');
    $sql =  new control_db();
    $sql->connect_db();
    $id = (filter_input(INPUT_POST,'id'));//idが存在するかどうかの判定．
    if ($id != null){
        (int)($id);
    }
    $task = htmlspecialchars(@$_POST['task'], ENT_QUOTES, 'UTF-8');//HTMLから入力されたテキストデータの反映
    $deadline = date('Y-m-d\TH:i',strtotime($_POST['time']));//HTMLから入力されたDateデータをPHPのDATEデータに変換
    if ($deadline == '1970-01-01T00:00'){
        $deadline = null;//$deadlineが存在しなかったら（nullだったら，データを削除．）
    }
    echo $id.gettype($id);
    echo $task.gettype($task);
    echo $deadline.gettype($deadline); 
    if ($id==null){
        $sql->inseart_db($task,$deadline);
    } else {
        $sql->update_db($id,$task,$deadline);
    }
    echo '<h1>送信完了しました</h1>
    <a href="todo.php">完了</a>';

?>