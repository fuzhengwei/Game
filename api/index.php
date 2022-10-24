<?php
   $redis = new Redis();
   $redis->connect('127.0.0.1', 6379);
   echo "Connection to server successfully";
   //查看服务是否运行
   echo "Server is running: " . $redis->ping();
   //存储数据到列表中
   $redis->lpush("game-user-list", $_GET['user']);
   
   $now = new DateTime();
   $redis->incr("game-user-list-count".$now->format('Y-m-d'));
?>