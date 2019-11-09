/*

  下記のコマンドを実行
$ mysql -u root < create_mydb.sql
$ mysql -u mydb_user -p mydb
  パスワード入力画面になるので、下記のpasswordを入力

*/

drop database if exists mydb;
create database mydb;
create user mydb_user@localhost IDENTIFIED BY 'PASSpass@999';
grant all privileges on mydb.* to mydb_user@localhost IDENTIFIED BY 'PASSpass@999';

CREATE TABLE `request` (
          `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT "ID",
          `user_name` VARCHAR(100) NOT NULL COMMENT "ユーザー名",
          `mail_address` VARCHAR(200) NOT NULL COMMENT "メールアドレス",
          `password` VARCHAR(100) NOT NULL COMMENT "パスワード",
          `created` datetime DEFAULT NULL COMMENT "登録日",
          `modified` datetime DEFAULT NULL COMMENT "更新日"
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


