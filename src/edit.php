<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>編集</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container"><br>
      <div class="alert alert-dark" role="alert">
        <h2 class="alert-heading mb-0">編集</h2>
      </div>
      <!-- <div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </svg>
        <div>
          現在，フォームの締め切り日時を未入力で送信後，事前に入力していた締め切り日が読み込まれないバグが発生しております．<br>
          お手数ですが，締め切り日時を入力してから送信をクリックしていただきますようよろしくお願い申し上げます．
        </div>
      </div> -->
    <?php
	    require_once 'control_db.php';
      $id = ($_GET["id"]);
      $sql =  new control_db();
      $sql->connect_db();
      $row = $sql->pick_col($id);
      // $id = $row["id"];
      $task = $row["task"];$deadline = $row["deadline"];
      $deadline = date('Y-m-d\TH:i:s', strtotime($deadline));//phpのデータをHTMLのdateに変換する．
      echo '確認用：元々設定していた時間'.$deadline.'
      <form action="submit.php" method="post">
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label" id="IntInput">ID</label>
              <input type="number" class="form-control" id="formGroupExampleInput" name="id" value = '.$id.' readonly="readonly">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label" id="floatingInput">タスク</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="task" value = '.$task.'>
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label" id="date">締め切り</label>
              <input type="datetime-local" class="form-control" id="formGroupExampleInput" name="time" value='.$deadline.' placeholder="$now"></input>
            </div>
            <div class="mb-3"><br>
              <input class="btn btn-dark btn-sm" type="submit">
            </div><br>
      </form>';
    ?>
    </div>
  </body>
</html>