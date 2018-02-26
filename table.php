<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>สูตรคูณ</title>
   <style>
    button{
        margin-top: 10px;
    }
    a{
        text-decoration:none;
        
    }
   </style>
</head>
<body>
    <?php 
    if (!isset($_GET['x'])){?>
    <form method="get" action="">
        <p>x : <input type="text" name="x"></p>
        <p>y : <input type="text" name="y"></p>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php }
    else{
        if($_GET['x']=="" || $_GET['y'] == ""){
            header( "location: table.php" );
        }
        printTable($_GET['x'],$_GET['y']);
    }
    ?>
    <?php
    function printTable($x,$y){
        echo "<table border=1>";
        for($i=1; $i<=$x; $i++){
            echo "<tr>";
            for($j=1; $j<=$y; $j++){
                echo "<td align=center>".($i*$j)."</td>";
            }
        }
        echo "</table>";
        echo "<button><a href='table.php'>BACK</button>";
    }
    ?>
</body>
</html>