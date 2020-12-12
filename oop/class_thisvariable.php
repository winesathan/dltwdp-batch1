<?php
class class_thisvariable{

    public $fullname = "Wine Sat Han";
    public function getname(){
//        echo $this->fullname;
        echo $this->fullname = "Ko Ko";
    }
}
$obj = new class_thisvariable;
echo "This is Class \$this variable";
echo "<br/>";
 $obj->getname();
 echo "<hr/>";