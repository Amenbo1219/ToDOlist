<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
  </head>
  <body>
    <?php
        echo ' <h1>新規追加</h1>
        <form action="submit.php" method="post">
                <p>タスク:<input type="text" name="task" required></p>
                <p>期限:<input type="datetime-local" name="time"></p>
                <a href="todo.php"> キャンセル</a> <input type="submit">
        </form>';
    ?>
  </body>
</html>