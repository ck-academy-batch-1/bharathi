<?php
class car {
    public $model;
    public $speed;

    function set_model($m) {
        $this->model=$m;
    }

    function get_model() {
        return $this->model;
    }

    function set_speed($s) {
        $this->speed=$s;
    }

    function get_speed() {
        return $this->speed;
    }
}

$vehicle=new car();
$vehicle->set_model('suzuki');
$vehicle->set_speed('200cc');
echo "model:".$vehicle->get_model();
echo "<br>";
echo "speed:".$vehicle->get_speed();
?>
