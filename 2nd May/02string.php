<?php
    $str='helloworld';
    echo $str;
    echo gettype($str);//string
    $num=100;
    echo gettype($num);//integer
    $num2=10.2;
    echo gettype($num2);//float
    $eat='今天中午吃啥？';
    $food='吃的剁椒鱼头';
    // 单引号
    echo '小明说：'.$eat.'我说'.$food;
    //双引号
    echo "小明说:$eat,我说:$food";
    ?>