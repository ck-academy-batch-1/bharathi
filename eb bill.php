<?php
$bill_Amount='';
$bill ='';
if (isset($_POST['unit-submit'])) {
    $uniteb = $_POST['uniteb'];
    if (!empty($uniteb)) {
        $bill = Total_bill($uniteb);
        $bill_Amount  = 'Total amount of Unit = ' . $uniteb . ' The BILL AMOUNT is---> ' . $bill;
    }
}

function Total_bill($uniteb) {
$unit_Stage_one= 3;
$unit_Stage_two = 4;
$unit_Stage_three = 5;
$unit_Stage_four = 6;

if($uniteb <= 50) {
    $bill = ($uniteb * $unit_Stage_one);
}
else if($uniteb > 50 && $uniteb <= 100) {
    $bill = $uniteb * $unit_Stage_two;
   
}
else if($uniteb > 100 && $uniteb <= 200) {
   
    $bill = $uniteb * $unit_Stage_two ;
}
else {
    
    $bill = $uniteb * $unit_Stage_four;
}
return number_format((float)$bill, 2, '.', '');
}

?>

<body>

    <h1> Electricity Bill</h1>

    <form action="" method="post" id="quiz-form">
            <input type="number" name="uniteb" id="uniteb" placeholder="Please enter no. of Units" />
            <input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
    </form>

    <div>
        <?php echo '<br />' .$bill_Amount; ?>
    </div>
</body>
</html>