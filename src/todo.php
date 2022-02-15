<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
  </head>
  <body>
      <h1>ToDOリスト</h1>
      <script>
          function isCheck() {
            let arr_checkBoxes = document.getElementsByClassName("check");
            let count = 0;
            for (let i = 0; i < arr_checkBoxes.length; i++) {
                if (arr_checkBoxes[i].checked) {
                    count++;
                }
            }
            if (count > 0) {
                return true;
            } else {
                window.alert("1つ以上選択してください。");
                return false;
            };
        }
      </script>
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
        $sql->close_db();

        ?>
  </body>
</html>