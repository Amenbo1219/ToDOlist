<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- bootstrap is CSS codes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ToDOリスト</title>
  </head>
  <body>
    <div class="container">
      <h1>ToDOリスト</h1>
      
        <?php
        require_once 'control_db.php';
        $sql =  new control_db();
        $sql->connect_db();
        $id_list = $sql->pick_id();
        $num_id = count($id_list);
        echo '<table border="0">
        <form action="deleate.php" method="post">        
                <tr>
                    <th>完了</th>
                    <th>タスク</th>
                    <th>締め切り</th>
                    <th>編集</th>
                </tr>';
        for ($i=0;$i<$num_id;$i++){
            $id = $id_list[$i];
            // echo $id . "<br>";
            $text = $sql->pick_col($id); 
            echo '<tr>
                    <td>  <input type="checkbox" class="check" name="q[]" value="'.$text['id'].'"</td>
                    <td>'.$text['task'].'</td>
                    <td>'.$text['deadline'].'</td>
                    <td><a href="edit.php?id='.$id.'"?>編集</td>
                    
                </tr>';
        }
        echo '<tr>
            <td><input type="submit" onClick="return isCheck()"></form></td>
            <td></td>
            <td></td>
            <td><a href="./insert.php">新規追加</a></td>
        </tr></table>';
        // $sql->select_db();
        $sql->close_db();?>
        <script src=app.js></script>
    </div>
  </body>
</html>