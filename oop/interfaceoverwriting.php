<?php
interface role{
    public function creatrole();
    public function readrole($id);
    public function updaterole($id,$request);
    public function deleterole($id);
}
class startrole implements role{
    private $id;
    private $request;

    public function creatrole()
    {
       echo "i am from creat role". "<br/>";
    }

    public function readrole($id)
    {
        $this->id = $id;

        echo "i am from read role and i have to read record id =". $this->id."<br/>";
    }

    public function updaterole($id,$request)
    {
        $this->id = $id;
        $this->request = $request;
        echo "i am from update role and i have to update record id=".$this->id."and".$this->request."<br/>";
    }

    public function deleterole($id)
    {
    $this->id=$id;
    echo "i am from delete role and i have to delete id=".$this->id."<br/>";
    }
}
$obj = new startrole();
$obj->creatrole();
$obj->readrole(14);
$obj->updaterole(15,"aungaung");
$obj->deleterole(17);