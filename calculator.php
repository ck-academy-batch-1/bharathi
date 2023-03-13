<?php
$Number1 = isset($_POST['Number1']) ? $_POST['Number1'] : '';
$Number2 = isset($_POST['Number2']) ? $_POST['Number2'] : '';
$operator = isset($_POST['operator']) ? $_POST['operator'] : '';
$Result = '';

if(is_numeric($Number1) && is_numeric($Number2)){
  switch($operator){
    case 'Addition':
      $Result = $Number1 + $Number2;
      break;
    case 'Subtraction':
      $Result = $Number1 - $Number2;
      break;
    case 'Multiplication':
      $Result = $Number1 * $Number2;
      break;
    case 'Division':
      if($Number2 != 0){
        $Result = $Number1 / $Number2;
      }
      else{
        $Result = 'Division by zero error!';
      }
      break;
  }
}
?>

<html>
<body>

<form action="" method="post" id="quiz-form">
  <p>
    <input type="number" name="Number1" id="Number1" value="<?php echo $Number1; ?>">
    <i>text1</i>
  </p>
  <p>
    <input type="number" name="Number2" id="Number2" value="<?php echo $Number2; ?>">
    <i>text2</i>
  </p>
  <p>
    <input readonly="readonly" name="Result" value="<?php echo $Result; ?>">
    <i>answer</i>
  </p>
  <input type="submit" name="operator" value="Add" />
  <input type="submit" name="operator" value="Sub" />
  <input type="submit" name="operator" value="Multiple" />
  <input type="submit" name="operator" value="Divi" />
</form>

</body>
</html>
