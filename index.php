<!-- 
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
 -->

<?php

require_once "classi/Products.php";
require_once "classi/Aliments.php";
require_once "classi/Games.php";
require_once "classi/Accessories.php";

$products = new Products("cibo", "alimento", "10");
$alimets = new Aliments("pollo", "1 mese");

/* $products->setName("cibo")->setType("aliments")->setPrice("10"); */

var_dump($products, $alimets);

?>