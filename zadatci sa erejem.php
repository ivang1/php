/** U ovom zadatku bilo je potrebno napraviti html sučelje koje predaje vrijednost unosa php kodu koji kroz listu ispisuje vrijednost pridrućenu tom indeksu */
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vjezba</title>
    <style>
        .poravnanje{
            display: flex;
            justify-content: center;
        }

    </style>
</head>
<body>
<h1 class="poravnanje">Ispis ocjena</h1>
<div class="poravnanje" style="height: 100px;"></div>
<div class="poravnanje">
    <form action="zadatci.php" method="get">
        <input type="number" name="polje" id="inp" placeholder="Unesite ocjenu" class="poravnanje">
        <br>
        <br>
        <input type="submit"  class="poravnanje">
    </form>
</div>
<?php
$brojke=array("1","2","3","4","5");
$broj=$_GET["polje"];
if (in_array($broj, $brojke)){
    $broj-=1;
}else{
    $broj=5;
}

$ocjene=array("Nedovoljan ispod 50%", "Dovoljan 50%-60%", "Dobar 61%-70%", "Vrlodobar 71%-85", "Odličan 86%- 100%", "Liiik to nije ocjena");
echo $ocjene[$broj];
?>
</body>

</html>
