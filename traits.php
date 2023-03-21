<?php
trait stu1{
    public function dept(){
        echo "all are good proffesionals"
    }
}
class stu{
    use stu1;
}


$stu1=new stu();
$stu1->dept();
?>