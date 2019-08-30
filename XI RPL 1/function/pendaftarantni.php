<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TNI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="tnipro.php" method="post" name="input">
    
    <fieldset>
    <legend>Pendaftaran TNI</legend>
    <p>
        <label>No Pendaftaran :</label>
        <input type="number" name="npw" placeholder="isi nomernya">
    </p>
    <p>
        <label>Nama  :</label>
        <input type="text" name="nma" placeholder="Namanya">
    </p>
    <p>
        <label>Berat Badan</label>
        <input type="number" name="bb" placeholder="Beratnya berapa">
    </p>
    <p>
        <label>Tinggi Badan</label>
        <input type="number" name="tb" placeholder="Tingginya">
    </p>
    <p>
    <input type="submit" name="submit" value="Daftar" />
    </p>
    
    
    </form>
    </fieldset>
</body>
</html>