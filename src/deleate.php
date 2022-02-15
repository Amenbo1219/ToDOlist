<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    echo ' <h1>削除ログ</h1>';
    require_once 'control_db.php';
    $sql =  new control_db();
    $sql->connect_db();
    $id_list = $_POST["q"];$num_id = count($id_list);
    for ($i=0;$i<$num_id;$i++){
        $id = (int)($id_list[$i]);
        $row = $sql->pick_col($id);
        $row = $row['task'];
        echo '<p>'.$row.'を削除しました' .'</p>';
        $sql->deleate_cols($id);
    }
    echo '<a href="todo.php"> 戻る</a>';
    $sql->close_db();
    // var_dump($_POST["q"]);