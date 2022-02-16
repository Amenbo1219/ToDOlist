<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- bootstrap is CSS codes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src=app.js></script>
    
    <title>ToDOリスト</title>
  </head>
  <body>
    <div class="container"><br>
      <div class="alert alert-dark" role="alert">
        <h2 class="alert-heading mb-2">ToDOリスト</h2>
        <p class="ml-0">このサイトはToDOリストを表示するサイトです．タスクや締め切り日時の設定，表示，削除が行えます．</p><hr>
        <p class="mt-0 mb-0">タスクが完了したら，完了のチェックボックスを選択し，送信ボタンを押してください．</p>
      </div>
        <?php
        require_once 'control_db.php';  
        $sql =  new control_db();
        $sql->connect_db();
        $id_list = $sql->pick_id();
        $num_id = count($id_list);
        echo '<table  class="table table-hover" border="0">
        <form action="deleate.php" method="post">        
                <tr align="center">
                    <th>完了</th>
                    <th>タスク</th>
                    <th>締め切り</th>
                    <th>編集/追加</th>
                </tr>';
        for ($i=0;$i<$num_id;$i++){
            $id = $id_list[$i];
            // echo $id . "<br>";
            // print($text['deadline']);
            $text = $sql->pick_col($id);
            if ($text['deadline']!= ''){
              $nowtime = date("Y/m/d H:i:s");
              $nowtm = new DateTime($nowtime);
              $difftime = new DateTIme($text['deadline']);
              // echo($nowtm);
              if ($difftime<$nowtm){
                // print($text['deadline'].'<br>');
                $color = "table-active";
              }
              else{
                $color = "";
              }
            }
            else{
              $color = "";
            }
            echo '<tr class="'.$color.'" align="center" valign="middle">
                    <td>  <input type="checkbox" class="check" name="q[]" value="'.$text['id'].'"</td>
                    <td>'.$text['task'].'</td>
                    <td>'.$text['deadline'].'</td>
                    <td><a class="btn btn-outline-dark btn-sm" href="edit.php?id='.$id.'"?>編集</td>
                </tr>';
        }
        echo '<tr align="center" valign="middle">
            <td><input class="btn btn-dark btn-sm" type="submit" onClick="return isCheck()"></form></td>
            <td></td>
            <td></td>
            <td><a class="btn btn-outline-dark btn-sm"  href="./insert.php">追加</a></td>
        </tr></table>';
        // $sql->select_db();
        $sql->close_db();?>
    </div>
  </body>
</html>