<?php
     $a=5;
     function test1($a){
     	echo $a;
          echo "no";
     }
     function test2(){
     	echo "hello";
     	$b=3;
     	test1($b);
     }
     ?>