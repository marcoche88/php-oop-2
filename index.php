<!-- 
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. 
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare utilizzando il try catch -->

<?php
require_once __DIR__ . '/product/Product.php';
require_once __DIR__ . '/product/Movie.php';
require_once __DIR__ . '/product/Music.php';
require_once __DIR__ . '/product/Book.php';

// creo una nuova istanza della classe Movie
$movie1 = new Movie("Il Signore degli Anelli - La Compagnia dell'Anello", 10, 47, "Peter Jackson");

// inizializzo array contenente gli attori del film
$list_actors = ['Viggo Mortensen', 'Liv Tyler', 'Cate Blanchett', 'Ian McKellen', 'Christopher Lee', 'Sean Bean', 'Orlando Bloom'];

// prova ad aggiungere la lista di attori, se c'è un errore viene stampato un messaggio a schermo
try {
    $movie1->set_actors($list_actors);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>

<body>
    <!-- prodotti film -->
    <section id="movie-products">
        <h1>Sezione Film</h1>
        <ul>
            <li>Titolo:<?php echo $movie1->get_title() ?></li>
            <li>Prezzo: <?php echo $movie1->get_price() ?>€</li>
            <li>Quantità disponibile: <?php echo $movie1->get_quantity() ?></li>
            <li>Regista: <?php echo $movie1->get_director() ?></li>
            <li>
                Attori:
                <?php
                $actors = $movie1->get_actors();
                foreach ($actors as $actor) {
                    echo $actor . ', ';
                }
                ?>
            </li>
        </ul>
    </section>
    <hr>
</body>

</html>