<html>
 <head><title>Pengolahan Form</title></head>
 <body>
 <FORM ACTION="" METHOD="POST" NAME="input">
 Nama Anda : <input type="text" name="nama"><br>
 Nilai 1: <input type="text" name="NIlai 1"><br>
 Nilai 2: <input type="text" name="Nilai 2"><br>
 <input type="submit" name="Input" value="Input">
 </FORM>
 </body>
</html>

<?php
if (isset($_POST['Input'])) {
 $nama = $_POST['nama'];
 echo "Nama Anda : <b>$nama</b><br>"; 
 $nilai1 = $_POST['NIlai 1'];
 echo "Nilai 1 : <b> $nilai1</b><br>";
 $nilai2 = $_POST['NIlai 2'];
 echo "Nilai 2 : $nilai2 <br>";
 
}
?>