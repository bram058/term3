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
    width: 300px;
    height: 50px;
    text-align: center;
    color: white;
  }
</style>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
  </head>

  <body>
    <?php
      require_once("moneydata.php"); // THIS IS THE CONNECT TO DATABASE FILE //
      // Collects the data from the index.php submit //
      $amount = $_POST['amount'];
      $receiver = $_POST['receiver'];
      $id = $_POST["id"];
      $date = $_POST["date"];
      $table = "finance";

      // Insert stuff from the note in database //
      if ($id == -1) {
        $sql = "INSERT INTO $table (`date`, `amount`, `receiver`) Values ('$date', '$amount', '$receiver')";
        mysqli_query($link, $sql);
        echo "Upload succes!" . "</br>";
      }
      // Updates stuff from the note in database //
      else {
        $sql = "UPDATE $table SET `title` = '$title', `content` = '$content', `date` = '$date' WHERE (`id` = '$id')";
        mysqli_query($link, $sql);
        echo "Update succes!" . "</br>";
      }
    ?>
    <p id="rcorners1">
    <a href="moneyindex.php">Upload another transaction.</a>
    </p>
  </body>
</html>
