<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>新規追加</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src=app.js></script>
  </head>
  <body>
    <div class="container"><br>
      <div class="alert alert-dark" role="alert">
        <h2 class="alert-heading mb-9">新規追加</h2>
      </div>
        <form action="submit.php" method="post">
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">タスク</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name='task' placeholder="Type in Your Task">
          </div>
          
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">締め切り</label>
              <input type="datetime-local" name="time" class="form-control" id="formGroupExampleInput">
            </div>
          <input class="btn btn-dark btn-sm" type="submit">
        </form>
    </div>
  </body>
</html>