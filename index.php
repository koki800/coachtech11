<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
for($i=1;$i<10;$i++){
  <table style="border:1px solid black">
    <tr>
      <th>$i</th>
        <td>$i*2</td>
        <td>$i*3</td>
        <td>$i*4</td>
        <td>$i*5</td>
        <td>$i*6</td>
        <td>$i*7</td>
        <td>$i*8</td>
        <td>$i*9</td>
    </tr>
  </table>
};
?>
</body>
</html>