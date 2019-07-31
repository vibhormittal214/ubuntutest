<?php
     $a=5;
     function test1($a){
     	echo $a;
          echo "no2";
     }
     function test2(){
     	echo "hello";
     	$c=3;
     	test1($b);
          echo "yes1";
     }
     ?>