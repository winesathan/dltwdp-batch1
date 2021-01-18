<?php
class datatypechecking{
    public function checktype($req){
        switch ($req){
            case is_string($req):
                echo "Input value is string type". "<br/>";
                break;
            case is_int($req):
                echo "Input value is integer type". "<br/>";
                break;
            case is_bool($req):
                echo "Input value is Boolen type". "<br/>";
                break;
            case is_float($req):
                echo "Input value is float type". "<br/>";
                break;
            case is_array($req):
                echo "Input value is array type". "<br/>";
                break;
        }
    }
}
$obj = new datatypechecking;
$obj -> checktype("aungaung");
$obj -> checktype(12);
$obj -> checktype(1.33);
$obj -> checktype("aungaung,maungmuang");