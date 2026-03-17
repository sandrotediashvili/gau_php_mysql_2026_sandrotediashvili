<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    if(isset($_POST["submit"])){
        $array = [];
        $metia = 0;
        $naklebia = 0;
        $X = $_POST["X"];
        for ($i=0; $i<12; $i++){
            $array[$i] = rand(10,100);    
        }
     foreach ($array as $value) {
        echo $value . "<br>";
    }
        for ($i=0; $i<12; $i++){
         if($array[$i] > $X){
            $metia++;
         } elseif(
            $array[$i] < $X 
         ){
            $naklebia++;
         }
        
        }
        echo $metia . " metia";
        echo "<br>";
        echo $naklebia . " naklebia";
        
 }
?>
<body>
    <form  method="post">
        <input type="number" name="X" min="10" max="100">
        <input type="submit" name="submit">

    </form>
</body>
</html>