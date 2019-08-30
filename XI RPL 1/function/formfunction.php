<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INI TUGAS AYE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <fieldset>
        <legend>
            Luas Persegi
            </legend>
        <form action="" method="get"
        <label for="">Sisi</label>
        <br>
        <input type="number" min="1" name"S" required>
        <br>
        <!-- <input type="submit" name="simpan" value="simpan" -->

        <form action="" method="get"
        <label for="">Diameter</label>
        <br>
        <input type="number" min="1" name="d" required>
        <br>
        <input type="submit" name="simpan" value="simpan"</form>
    </fieldset>

    <?php
    if (isset($_GET['simpan'])) {
        $sisi = $_GET['S'];
    }
        # code...
        ?>
        <?php
        function luas_lingkaran ($jari) {
        return 3.14 * $jari * $jari;
        }
        $arr = luas_lingkaran ($sisi);
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
        ?>
        <?php
    if (isset($_GET['d'])) {
        $Diameter = $_GET['d'];
        
    }
        ?>
        <?php
        function keliling_lingkaran ($kimi) {
            return 3.14 *$kimi * $kimi;
        }
        $arr = keliling_lingkaran ($Diameter);
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
        ?>

</body>
</html>
