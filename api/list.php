<?php
   $redis = new Redis();
   $redis->connect('127.0.0.1', 6379);
   //存储数据到列表中
   echo json_encode($redis->lrange("game-user-list", 0 , 30));
?>