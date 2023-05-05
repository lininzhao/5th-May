<?php
    $arr=[1,2,3];
    $arr1=array('name'=>'xiaoming','age'=>12,'gender'=>'male');
    $stu=array['name'=>'lihua','subject'=>'yuwen','grade'=>'2年级'];
    //输出方式
    var_dump($arr);
    var_dump($arr1);
    print_r($stu);
    //foreach循环
    foreach($stu as $item){
        echo $item;
    }
    foreach($arr1 as $key=>$value){
        echo "$key:$value <br/>";
    }
    ?>