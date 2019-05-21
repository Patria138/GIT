<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
$nameErr = $NIMErr = $name = $NIM = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Silakan Isi Nama";
  } else {
    $name = test_input($_POST["name"]);
  }
  if (empty($_POST["NIM"])) {
    $NIMErr = "Silakan Isi NIM ";
  } else {
    $NIM = test_input($_POST["NIM"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>Tugas Pweb : </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name" size="10" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  NIM: <input type="text" name="NIM" size="10" value="<?php echo $NIM;?>">
  <span class="error">* <?php echo $NIMErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2>Selamat Datang</h2>";
echo $name;
echo "<br>";
echo $NIM;
?>

</body>
</html>
