<?php
class datatypecasting{
    public function castingbyint(int $req){
        echo $req ."<br/>";
        var_dump($req);
    }
    public function castingbystring(string $req){
        echo $req ."<br/>";
        var_dump($req);
    }
    public function castingbybool(bool $req){
        echo $req ."<br/>";
        var_dump($req);
    }
    public function castingbyarray(array $req){
        echo "<pre>".print_r($req,true)."</pre>"."<br/>";
        var_dump($req);
    }
}
$obj = new datatypecasting();
$obj->castingbyint(123);
$obj->castingbyint(False);
echo "<hr/>";

$obj->castingbystring("winesathan");
//$obj->castingbystring(False);
echo "<hr/>";

//$obj->castingbybool(123);
$obj->castingbybool(False);
echo "<hr/>";
$gg = ["aungaung","maungmaung"];
////$obj->castingbyarray(123);
$obj->castingbyarray($gg);
echo "<hr/>";