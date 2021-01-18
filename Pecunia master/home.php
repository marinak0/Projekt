<?php
include "php/spajanje_baza.php";

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>
<? 
if(isset($_POST['tecajevi_botun'])){
    $valuta = mysqli_real_escape_string($conn,$_POST['valuta']);
    $kupovni = mysqli_real_escape_string($conn,$_POST["kupovni"]);
    $srednji = mysqli_real_escape_string($conn,$_POST["srednji"]);
    $prodajni = mysqli_real_escape_string($conn,$_POST["prodajni"]);


    if($valuta != "" && $kupovni != ""&& $srednji != ""&& $prodajni != "")
{
    $update=mysqli_query("UPDATE pecunia_db.valuta SET kupovni_devize = '".$kupovni."', srednji_devize='".$srednji."', prodajni_devize='".$prodajni."' WHERE valuta = '".$valuta."'");
    
}else{
    echo "Nijedno polje ne smije ostati prazno";
}
}

?>
<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href="css/home.css" />
    </head>
    <body>
        <h1>Ažuriranje tečajne liste</h1>
        <form method='post' action="">

        <div class="valuta">
        <h3>Unesite valutu koju želite ažurirati:</h3>
        <input type="text" name="valuta" placeholder="Valuta">
        <input class="valutaBotun" type="submit" value="Unesi" name="sifra_botun">
        </div>

        <div class="tecajevi">
        <h3>Unesite nove vrijednosti kupovnog, srednjeg i prodajnog tečaja:</h3>
            <input type="number" name="kupovni" placeholder="Kupovni tečaj">
            <input type="number" name="srednji" placeholder="Srednji tečaj">
            <input type="number" name="prodajni" placeholder="Prodajni tečaj">
        </div>
        
            <input class="botun" type="submit" value="Submit" name="tecajevi_botun">
            <input class="botun" type="submit" value="Logout" name="but_logout">
           
        </form>
    </body>
</html>