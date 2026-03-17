<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
  if(isset($_POST['gagzavna'])){
    $qulebi=$_POST['qulebi'];
    echo $qulebi;
    $shefaseba = '';
    if ($qulebi >= 91){
        $shefaseba = 'A-friadi';   
    } elseif($qulebi >= 81){
        $shefaseba = 'B-dzalian kargi';
    } elseif($qulebi >= 71){
        $shefaseba = 'C-kargi';
    } elseif($qulebi >= 61){
        $shefaseba = 'D-damakmayofilebeli';
    }elseif($qulebi >=51){
        $shefaseba = 'E-sakmarisi';
    }
    echo $shefaseba;
  }
  
?>
<body>
    <form  method="post">
        <input type="text" name="name">
        <br><br>
        <input type="text" name="Lname">
        <br><br>
        <input type="text" name="">
        <br><br>
        <input type="text">
        <br><br>
        <input type="text">
        <br><br>
        qulebi:<input type="number" name="qulebi">
        <br><br>
        <button type="submit" name="gagzavna">send</button>
    </form>
    <table border='2'>
   
    <tbody>
        <tr>
            <td><?php echo $shefaseba; ?></td>
             <td><?php echo $qulebi; ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>