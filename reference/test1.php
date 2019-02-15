<?php
/**
 * Created by PhpStorm.
 * User: QingYuan Ke
 * Date: 2019/2/14
 * Time: 17:31
 */

function foo(&$var){
    $var ++;
}

function &bar(){
    $a = 5;
    echo $a;
    return $a;
}

foo(bar());
foo(bar());

//$a = 6;
//
//call_user_func_array('foo', array(&$a));
//
//echo $a;

/**
 * but if you call just like this, it would throw
 * exception.
 *
 * foo(&$a)
 *
 * maybe, this is just the version of the php problem.
 */