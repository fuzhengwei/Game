<?php

   $redis = new Redis();
   $redis->connect('127.0.0.1', 6379);
   $now = new DateTime();
   echo $now->format('Y-m-d'); 