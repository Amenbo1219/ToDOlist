<?php
class control_db{
	public static $mysqli;//class変数
	public static $num_id;
	public function connect_db(){//DB接続
		$mysqli = new mysqli("db", "root", "example",'todo');
		self::$mysqli = $mysqli;//クラス変数に代入
	}
	public function inseart_db($task,$deadline){//データを挿入
		// バインドようにオブジェクトを生成
		$ss = self::$mysqli->prepare('INSERT INTO todo (task,deadline) VALUES(?,?)');
		// ぞれぞれの値に代入
		$ss -> bind_param('ss',$task,$deadline);
		$ss -> execute();//実行
	}
	public function update_db($id,$task,$deadline){//データのアップデート
		$iss = self::$mysqli->prepare('UPDATE todo SET
				task = ?,
				deadline = ?
				WHERE id = ?');
		$iss -> bind_param('ssi',$task,$deadline,$id);
		$iss -> execute();
	}
	public function pick_col($id){//指定された行を取り出す．
		$sql = 'SELECT * FROM todo where id  = '.$id;
		if ($result = self::$mysqli->query($sql)){
			$row = $result->fetch_assoc();
			// echo $row['id'] .$row['task'].$row['deadline'].'<br>'S
			return $row;
		}
	}
	public function pick_id(){
		$sql = 'SELECT (id) FROM todo ';
		$id_list = [];
		if ($result = self::$mysqli->query($sql)){
			while ($row = $result->fetch_assoc()){
				// echo $row['id'] .'<br>';
				$id_list[] = ($row['id']);
			}
			self::$num_id = count($id_list);
			// echo self::$num_id;
			return $id_list;
		}
	}
	public function deleate_cols($id){
		$sql = 'DELETE FROM todo WHERE id = '.$id;
		$result = self::$mysqli->query($sql);
	}
	public function select_db(){//表示
		$sql = 'SELECT * FROM todo';
		if ($result = self::$mysqli->query($sql)){
			while ($row = $result->fetch_assoc()){
				echo $row['id'] .$row['task'].$row['deadline'].'<br>';
			}
		}
	}
	public function close_db(){//接続終了
		self::$mysqli->close();
	}
}

