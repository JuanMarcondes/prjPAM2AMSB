<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Atividade.php" method="POST">
        kilometros<input type="text" name="txt_KM">
        Litros<input type="text" name="txt_Litros">
        <input type="submit" name="btn_enviar">
    </form>
    <?php
        $Km =$_POST ['txt_KM'];
        $L =$_POST ['txt_Litros'];
        $result = $Km/$L;
        echo "Você percorreu por litro: ".$result."Km";
    ?>

</body>
</html>