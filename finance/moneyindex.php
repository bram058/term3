<?php
  require_once("moneydata.php"); // THIS IS THE CONNECT TO DATABASE FILE //
  $amount = '';
  $receiver = '';
  $id = null;
  $date = null;
  // still need to work on tags //

  $editmode = isset($_GET["action"]) && $_GET["action"] == 'edit';
  $id = isset($_GET['id']) ? $_GET['id'] : -1;
  if ($editmode) {
    $table = "Finance";
    $sql = "SELECT * FROM $table WHERE (`id` = '$id')";
    $result = mysqli_query($link, $sql);

    while ($data = mysqli_fetch_assoc($result)) {
      $id = $data["id"];
      $amount = $data["amount"];
      $receiver = $data["receiver"];
    }
  }
 ?>

<!DOCTYPE html>
<html>
<style>
body{
  background-color: black;
  font-family: monospace;
  color: white;
}

#rcorners1 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px;
    width: 680px;
    height: 265px;
    font-family: monospace;
    color: white;
  }

  #rcorners2 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px;
    width: 300px;
    height: 45px;
    font-family: monospace;
    text-align: center;
    color: white;
  }


</style>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=chrome">
</head>
<body>

    
    <form method="post" action="money.php">
    <p id="rcorners1"><font size="5"> Upload Form </font><br><br>
    <input type="text" value="<?=$amount?>" name="amount" placeholder="amount"><br>
    <input type="hidden" value="<?=$id?>" name="id"><br>
    <textarea name="receiver" rows="8" cols="80" placeholder="text input area"><?= $receiver ?></textarea>
    <select name="tag" size="6">
    </select> </br>
    <input type="date" name="date" value="<?= $date ?>"><br>
    <button type="submit">Submit</button>
  </form>
  </p>
 
 <a href="../mainsite.php">Go to the homepage</a>

</p>
</body>
</html>
