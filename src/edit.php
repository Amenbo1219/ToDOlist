<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
  </head>
  <body>
    <?php
	    require_once 'control_db.php';
      $id = ($_GET["id"]);
      $sql =  new control_db();
      $sql->connect_db();
      $row = $sql->pick_col($id);
      // $id = $row["id"];
      $task = $row["task"];$deadline = $row["deadline"];
      $deadline = date('Y-m-d\TH:i:s', strtotime($deadline));//phpのデータをHTMLのdateに変換する．
          echo '
          <h1>編集</h1>
          <form action="submit.php" method="post">
          <p>id:<input type=number name="id" value = "'.$id.'" readonly="readonly"></p>
                  <p>タスク:<input type="text" name="task" value = "'.$task.'" required></p>
                  <p>期限:<input type="datetime-local" name="time" value = "'.$deadline.'"></p><br>
                  <a href="todo.php"> キャンセル</a> <input type="submit">
          </form>';
    ?>
  </body>
</html>