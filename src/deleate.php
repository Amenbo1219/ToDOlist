<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>削除ログ</title>
  </head>
  <body>
    <?php
    echo '
    <br>
    <div class="container">
      <div class="alert alert-dark" role="alert">
      <h2 class="alert-heading mb-0">削除ログ</h2><hr>';
    require_once 'control_db.php';
    $sql =  new control_db();
    $sql->connect_db();
    $id_list = $_POST["q"];$num_id = count($id_list);
    for ($i=0;$i<$num_id;$i++){
        $id = (int)($id_list[$i]);
        $row = $sql->pick_col($id);
        $row = $row['task'];
        echo '<p class="mb-0">'.$row.'を削除しました' .'</p>
        </div>';
        $sql->deleate_cols($id);
    }
    echo '<a class="btn btn-outline-dark btn-sm" href="todo.php"> 戻る</a>
    </div>';
    $sql->close_db();
    // var_dump($_POST["q"]);