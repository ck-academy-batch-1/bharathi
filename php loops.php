<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

  <title>loops</title>
  <body class="container">
  <h1>pyramid</h1>

<?php

for ($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo "*";
    }
    echo "<br>";
}
for ($k=5;$k>=1;$k--)
{
    for($l=1;$l<=$k;$l++)
    {
        echo "*";
    }
    echo "<br>";
}
?>

<h1>fibnocci series</h1>
<?php
        $num=0;
        $n1=0;
        $n2=1;
        
        echo $n1.'   '.$n2.'   ';
        while($num<15)
        {
            $n3=$n1+$n2;
            echo $n3;
            $n1=$n2;
            $n2=$n3;
            $num=$num+1;
        }
        ?>

<h1>prime number</h1>
<?php
echo "primenumber<br>";
   for($i=2;$i<=100;$i++)
   {
    for($j=2;$j<$i;$j++)
    {
        if($i%$j==0)
        {
            break;
        }
    }
    if($j==$i)
    {
        echo $i." ";
    }
   }









?>

</body>
</html>