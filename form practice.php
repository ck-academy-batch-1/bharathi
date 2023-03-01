<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
  body{
  background-image:url(form1.jpg);
  background-size:100%;
  background-repeat:no-repeat;
  background-attachment:fixed;
  }</style>
   <title>form</title>

</head>
<body class=" container">

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $passwordErr = $addressErr = $usernameErr = "";
$name = $email = $gender = $comment = $address = $username = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  // && ($_POST["password"] == $_POST["cpassword"])
     //Validates password & confirm passwords.

     if (empty($_POST["password"])) {
      $passwordErr = "password is required";
     }else{
      $password = test_input($_POST["password"]);
     
    //  if(!empty($_POST["password"]) ) {
      
      // $cpassword = test_input($_POST["cpassword"]);
      if (strlen($_POST["password"]) <= '8') {
          $passwordErr = "Your Password Must Contain At Least 8 Characters!";
      }
      elseif(!preg_match("#[0-9]+#",$password)) {
          $passwordErr = "Your Password Must Contain At Least 1 Number!";
      }
      elseif(!preg_match("#[A-Z]+#",$password)) {
          $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
      }
      elseif(!preg_match("#[a-z]+#",$password)) {
          $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
      } else {
          $passwordErr = " ";
      }
  }
  
    if (empty($_POST["username"])) {
      $usernameErr = "userName is required";
    } else {
      $username = test_input($_POST["username"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
        $usernameErr = "Only letters and white space allowed";
      }
    }
  
 if (empty($_POST["email"])) {
   $emailErr = "Email is required";
  } else {
  $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed

       if(!preg_match(
        "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email))
        {
                  $emailErr = "Invalid email format";
                }
   }

   if (empty($_POST["address"])) {
    $addressErr = "address is required";
   } else {
   $address = test_input($_POST["address"]);

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }}

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <H1 style="padding-left: 250px;">Registration FORM</H1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">        
    <table style="margin-top: -140px;">
        <tr><td style="text-align: end;">username:</td><td><input type="text" name="username" class="form-control" style="width: 250px;margin: 0px 30px 20px 30px;"><span style="color:red;" class="error">
            <?php echo $usernameErr;?></span>
        </td></tr><br>
        <tr><td style="text-align: end;">password:</td><td><input type="password" name="password" class="form-control" style="width: 250px;margin: 0px 30px 20px 30px;"><span style="color:red;" class="error">
            <?php echo $passwordErr;?></span></td></tr><br>
      <tr><td style="text-align: end;">name:</td><td ><input type="text" name="name" class="form-control" style="margin: 0px 30px 20px 30px;width: 700px;"><span style="color:red;"  class="error">
            <?php echo $nameErr;?></span>
        </td></tr><br>
        <tr><td style="text-align: end;">address:</td><td ><input type="text" name="address" class="form-control" style="margin: 0px 30px 20px 30px;width: 700px;"><span style="color:red;" class="error">
            <?php echo $addressErr;?></span></td></tr><br>
        <tr><td style="text-align: end;">country:</td><td ><select class="form-control" style="margin: 0px 30px 20px 30px;width: 500px;">
            <option selected disabled>(please select a country)</option>
            <option>india</option>
            <option>usa</option>
        </select>
        </td></tr><br>
        <tr><td>zip code:</td><td ><input type="text" class="form-control"  style="margin: 0px 30px 20px 30px;width: 250px;" ></td></tr><br>
        <tr><td style="text-align: end;">email:</td><td ><input type="text" name="email" class="form-control" style="margin: 0px 30px 20px 30px;width: 700px;"> <span style="color:red;"  class="error">
         <?php echo $emailErr;?></span></td></tr><br>
        <tr><td style="text-align: end;">sex:</td><td><input style="margin-left: 30px;" type="radio" value="male" name="gender" class="form-check-inline">male
            <input type="radio" name="gender" value="female" class="form-check-inline">female<span style="color:red;"  class="error">
            <?php echo $genderErr;?></span></td></tr>
            <tr><td style="text-align: end;">language:</td><td><input style="margin-left: 30px;" type="checkbox" class="form-check-inline">english
                <input type="checkbox" class="form-check-inline">non-english</td></tr>
                <tr><td style="text-align: end;">about:</td><td ><textarea class="form-control" name="comment" rows="5" style="margin: 20px 30px 20px 30px;width: 700px;"></textarea></td></tr>
        </table>
        <button style="margin-left: 150px;margin-bottom: 60px;" type="submit" class="btn-outline-info">submit</button>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "username:  $username";
echo "<br>";
echo "name:  $name";
echo "<br>";
echo "email:  $email";
echo "<br>";
echo "address:  $address";
echo "<br>";
echo "gender:  $gender";
echo "<br>";
echo "about:  $comment";
echo "<br>";

?>
<br><br>
<p></p>
</body >
</html>
