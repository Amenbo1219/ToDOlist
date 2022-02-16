<h1>ToDOリスト</h1>
<h3>2022年2月15日更新</h3>
<ul>
    <li>ToDOリストの基本機能を搭載しました．</li>
    <li>readmeファイルを追加しました</li>
    <li>DockerFile,Docker-Composeを追加しました</li>
    <li>SQLの設定ファイルdb-confファイルを追加しました．</li>
</ul>

# DEMO
![ホーム画面](/img/demo.png)

 
# NextStage
* CSSとJSを利用して見た目を整える
* 締め切り時間終了後のイベントを付与する．


# Requirement

"hoge"を動かすのに必要なライブラリなどを列挙する
 
* Docker version 20.10.12, build e91ed57
* docker-compose version 1.25.0, build unknown
* Docker-images:
    php:7.4-apache,mysql
* baseServer:ubuntuserver20.04.3x64,IntelArc
 
# Installation
* インストール方法

```bash
cd ToDOlist
docker-compose up -d
```
http://(host):8080にアクセス<br>
該当ページは以下でアクセス．
* データベース種別:MySQL
* サーバー:db
* ユーザー名:root
* パスワード:example
* データベース:空欄<br>
左サイドバーのインポート>"todo.sql.gz"のファイルをインポートする．


 
# Usage
* (host) = 自分のIPアドレス or DNS <br>
http://(host)/todo.php
にアクセスする
# Note
 
注意点などがあれば書く
現段階では試用版です．
本ソフトを利用していかなる損害が発生しても当方は責任を負いません．
 
# Author
 
作成情報を列挙する
 
* 作成者:Amembo
* E-mail:
c0b20140d0@edu.teu.ac.jp 
