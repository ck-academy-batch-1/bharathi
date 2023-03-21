<?php
class stu{
    public $name;
    public $result;

    function __construct($n,$r){
    $this->name=$n;
    $this->result=$r;
    }
}


$stu1=new stu('bharathi','pass');
echo "name:".$stu1->name;
echo "<br>";
echo "result:".$stu1->result;
?>