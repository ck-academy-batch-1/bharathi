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
    
    <title>loops</title></head>
    <body>
        <h1>loops</h1>
        <?php
        $n=1;
        for($i=1;$i<=5;$i++)
        {
            for($j=1;$j<=$i;$j++){
                echo $n." ";
                $n++;
            }
            echo"<br>";
        }
        ?>
        <br><br>

<?php
$rows=7;
$cols=($rows*2)-1;
for($i=1;$i<=$rows;$i++){
    for($j=1;$j<=$cols;$j++){
        $diff=abs($j-($rows+1));
        $min=min($i- 1,$rows-$i);
        if($diff<=$min){
            echo ($min + 1 - $diff) * 3 . " ";
        }
        else{
            echo "&nbsp &nbsp";
        }
    }
    echo"<br>";
}
?>

</body>
</html>