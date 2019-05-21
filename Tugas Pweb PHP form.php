<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
$nameErr = $NIMErr = $name = $NIM = $error = $x = $d = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(strlen($_POST["name"])>10 || strlen($_POST["NIM"])>10){
    $error="Input Lebih Dari Sepuluh Kurangi";
  }
  else{
    $x="<h2>Selamat Datang</h2>";
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
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  NIM: <input type="text" name="NIM" value="<?php echo $NIM;?>">
  <span class="error">* <?php echo $NIMErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<?php
if(!empty($name) && !empty($NIM) ){
  echo $x;
  echo $name;
  echo "<br>";
  echo $NIM."<br>";
}
else{
  echo $error;
}
?>

</body>
</html>
