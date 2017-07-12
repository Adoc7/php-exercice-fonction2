<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>php-exercice-fonction2</title>
    <link rel="stylesheet" href="text.css"
          media="screen" title="no title" charset="utf-8">
</head>


<body>

<section>
<h1>Exo 2</h1>
    <br>

    <div>
    <h2>PHP</h2>
    <?php
    for ($i = 0 ; $i < 8 ; $i++){
        $tableau = array('camion', 'car', 'camping-car', 'fourgon', 'voiture', 'moto', 'scooter', 'velo');
        $tableau = ucfirst(strtolower($tableau[$i]."<br/>"));
        echo $tableau;
    }
    ?>
    </div>
    <br>
    <div>
    <h2>JAVASCRIPT</h2>

    <script type="text/javascript">
            var tableau = ['camion', 'car', 'camping-car', 'fourgon', 'voiture', 'moto', 'scooter', 'velo'];
            for (var i = 0; i < tableau.length; i++) {
                document.write(tableau[i].charAt(0).toUpperCase() + tableau[i].substring(1).toLowerCase()+ "<br/>");
            }
    </script>
</div>


</section>
<br>

<h1>Exo 1</h1>
<br>
<p id="alert" onclick="clic()">Cliquez sur moi !</p>
<script type="text/javascript">
    function clic() {
        var msg_alert= document.getElementById("alert").innerHTML = "Attention ! <br/> Le petit ordi surchauffe";
    }
</script>
<?php
function BoxAlert(){
    $BoxAlert = '<script type="text/javascript">document.write(msg_alert);</script>';
    return $BoxAlert;
}
$var_BoxAlert=BoxAlert();
echo $var_BoxAlert;
?>
</body>
</html>