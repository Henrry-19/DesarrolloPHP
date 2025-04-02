<main>
    <h1>La próxima película de Marvel</h1>
    <section>
        <img src="<?= $poster_url; ?>"  alt="Poster de <?= $title;?>" />
    </section> 
    <hgroup>
        <h3><?= $title;?> - <?= $until_message; ?></h3>
        <p>Fecha de estreno: <?= $release_date; ?></p>
        <p> La siguiente película de Marvel es: <?= $following_production; ?></p>

    </hgroup>
</main>