<?php
class returndatatype{
    public function stroutput($req) : string{
        echo "original req". "<br/>";
        var_dump($req);
        echo "<br/>";
        echo"Return Output";
        return $req;
    }
    public function intoutput($req) : int{
        echo "original req". "<br/>";
        var_dump($req);
        echo "<br/>";
        echo"Return Output";
        return $req;
    }
    public function booloutput($req) : bool{
        echo "original req". "<br/>";
        var_dump($req);
        echo "<br/>";
        echo"Return Output";
        return $req;
    }
}
$obj = new returndatatype();
//$test = $obj->stroutput(243);
//var_dump($test);
//$test = $obj->intoutput(23);
//var_dump($test);
$test = $obj->booloutput(True);
var_dump($test);