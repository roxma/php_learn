<?php

class Foo{
    public static $v = "";
}


class Bar extends Foo{
    
}


Foo::$v = "Hello world";
Bar::$v = "Hei";
var_dump(Foo::$v);
var_dump(Bar::$v);
# string(3) "Hei"
# string(3) "Hei"
