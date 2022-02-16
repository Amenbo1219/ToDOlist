<h1>ToDOリスト</h1>
<h3>2022年2月16日更新</h3>
<ul>
    <li>各サイトの表示がレスポンシブデザインに対応しました</li>
    <li>タスクの期限が終了すると，アクティブ判定になり，該当タスクの行が濃く表示されるようになりました．</li>
    <li>SQLの新設定ファイルtodo.sql.gzを追加しました．</li>
    <li>SQLの旧設定ファイルdb-confファイルを削除しました．</li>
    <li>本プログラムのフローチャートを含む構想図を追加しました．</li>
</ul>

# DEMO
![ホーム画面](/img/demo.png)

 
# NextStage

* このドキュメントに動画を加える！ 


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
左サイドバーのエクスポート>"todo.sql.gz"のファイルをインポートする．


 
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
