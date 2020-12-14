<?php
//1 = Method -> No body{}
//2 = Access modifier -> always public
interface news{
    public function creatpost();
    public function readpost();
    public function updatepost();
    public function deletepost();
}
class startnews implements news{

    public function creatpost()
    {
          echo "I am from creatpost";
    }

    public function readpost()
    {
        echo "I am from readpost";
    }

    public function updatepost()
    {
        echo "I am from updatepost";
    }

    public function deletepost()
    {
        echo "I am from deletepost";
    }
}
$obj = new startnews();
$obj->creatpost();
echo"<br/>";
$obj->readpost();
echo"<br/>";
$obj->updatepost();
echo"<br/>";
$obj->deletepost();
echo "<hr/>";