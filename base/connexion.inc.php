<?php
$user = 'hmoham03';  
$pass = '94430';  
try {
    $cnx = new PDO ('pgsql:host=sqletud.u-pem.fr; dbname=hmoham0\3_db', $user, $pass); 
}
catch (PDOException $e) {
    echo "ERREUR : La connexion a échouée";
}
?>

