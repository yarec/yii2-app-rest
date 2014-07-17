<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1;dbname=yii2rest',
    'username' => 'yii2rest',
    'password' => '123456',
    'charset' => 'utf8',
];

/*
CREATE TABLE `xuser` (
    `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(30) NULL DEFAULT NULL,
    `last_name` VARCHAR(30) NULL DEFAULT NULL,
    `email` VARCHAR(30) NULL DEFAULT NULL,
    `admin` TINYINT(1) NULL DEFAULT NULL,
    `last_login` TIME NULL DEFAULT NULL,
    `is_active` TINYINT(1) NULL DEFAULT NULL,
    `pass` VARCHAR(100) NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;
INSERT INTO `xuser`  VALUES ('1', 'bob', 'willen', 'bob@gmail.com', 1, '14:10:54', 1, 'e10adc3949ba59abbe56e057f20f883e');

grant all privileges on *.* to yii2rest@'%' identified by '123456';
grant all privileges on *.* to yii2rest@'localhost' identified by '123456';
flush privileges;
*/
