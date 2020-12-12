<?php
class class_accessencapsulation{
    private $fullname = "Kyaw kyaw Aung";
    public function getter(){
        echo $this->fullname;
    }

}
$obj = new class_accessencapsulation;
echo "This is Accessen Capsulation";
echo "<br/>";
$obj->getter();
echo "<hr/>";
