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
require_once "classi/Users.php";
require_once "classi/PaymentMethod.php";

$user = new Users("Mario", "Rossi", "mariorossi@gmail.com");
var_dump($user);

$user->register("Lucia", "Bianchi", "luciabianchi@gmail.com");
var_dump($user);


$products = [
    new Aliments("Crocchette", 3.50, "pesce", "2022-12-31"),
    new Aliments("Bastoncini", 4.50, "pollo", "2022-11-25"),
    new Games("Palla", 7.40, "stoffa", "verde"),
    new Games("Fresbee", 5.90, "plastica riciclata", "giallo"),
];
var_dump($products);


?>