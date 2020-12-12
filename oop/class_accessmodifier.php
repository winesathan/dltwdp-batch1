<?php
class class_accessmodifier{
    public $fullname = "Wine Sat Han";
    public function getnum(){
        $num = 10;
        echo $num;
//        echo $fullname;Can't Print;

    }

}
$obj = new class_accessmodifier;
echo "This is Class Access Modifier". "<br/>";
echo $obj->fullname."<br/>";
$obj->getnum();
echo "<hr/>";