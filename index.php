<!-- 
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. 
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare utilizzando il try catch -->

<?php
// importo tutte le classi
require_once __DIR__ . '/product/Product.php';
require_once __DIR__ . '/product/Movie.php';
require_once __DIR__ . '/product/Music.php';
require_once __DIR__ . '/product/Book.php';
require_once __DIR__ . '/user/Discount.php';
require_once __DIR__ . '/user/User.php';
require_once __DIR__ . '/user/UserPremium.php';

// FILM
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

// MUSICA
// creo una nuova istanza della classe Music
$cd1 = new Music("Black Holes And Revelations", 7, 32, "Muse");

// inizializzo array contenente i brani del cd
$list_tracks = ['Take a Bow', 'Starlight', 'Supermassive Black Hole', 'Map Of The Problematique'];

// prova ad aggiungere la lista di brani, se c'è un errore viene stampato un messaggio a schermo
try {
    $cd1->set_tracks($list_tracks);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

// LIBRO
// creo una nuova istanza della classe Book
$book1 = new Book("Harry Potter e la Pietra Filosofale", 14, 54, "J.K. Rowling");

// UTENTE e UTENTE PREMIUM
// creo una nuova istanza della classe User
$user1 = new User('Luca', 'Rossi', 'luca.rossi@mail.it');

// creo una nuova istanza della classe UserPremium
$user2 = new UserPremium('Mario', 'Bianchi', 'm.bianchi@mail.com', 2009, 123);
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

    <!-- prodotti musica -->
    <section id="music-products">
        <h1>Sezione Musica</h1>
        <ul>
            <li>Titolo:<?php echo $cd1->get_title() ?></li>
            <li>Prezzo: <?php echo $cd1->get_price() ?>€</li>
            <li>Quantità disponibile: <?php echo $cd1->get_quantity() ?></li>
            <li>Artista: <?php echo $cd1->get_artist() ?></li>
            <li>
                Brani:
                <?php
                $tracks = $cd1->get_tracks();
                foreach ($tracks as $track) {
                    echo $track . ', ';
                }
                ?>
            </li>
        </ul>
    </section>
    <hr>

    <!-- prodotti libro -->
    <section id="book-products">
        <h1>Sezione Libri</h1>
        <ul>
            <li>Titolo:<?php echo $book1->get_title() ?></li>
            <li>Prezzo: <?php echo $book1->get_price() ?>€</li>
            <li>Quantità disponibile: <?php echo $book1->get_quantity() ?></li>
            <li>Scrittore: <?php echo $book1->get_writer() ?></li>
        </ul>
    </section>
    <hr>
    <hr>

    <!-- sezione user -->
    <section id="user">
        <h1>Utente</h1>
        <ul>
            <li>Nome: <?php echo $user1->get_full_name() ?></li>
            <li>E-mail: <?php echo $user1->get_email() ?></li>
        </ul>
    </section>

    <!-- sezione user premium -->
    <section id="user-premium">
        <h1>Utente Premium</h1>
        <ul>
            <li>Nome: <?php echo $user2->get_full_name() ?></li>
            <li>E-mail: <?php echo $user2->get_email() ?></li>
            <li>Anno iscrizione: <?php echo $user2->get_entry_year() ?></li>
            <li>Punti accumulati: <?php echo $user2->get_points() ?></li>
            <li>Extra: <?php echo $user2->get_info_discount() ?></li>
        </ul>
    </section>

</body>

</html>