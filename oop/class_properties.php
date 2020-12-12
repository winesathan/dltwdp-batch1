<?php
class class_properties{
    var $firstname = "Wine Sat";
    var $lastname = "Han";
}
$obj = new class_properties;
echo "This is Class Properties";
echo "<br/>";
echo $obj->firstname . $obj->lastname;
?>