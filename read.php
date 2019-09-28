<?php require __DIR__.'\pdo-rdata\pdo-read-function.php' ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Artikel - Braders.com</title>
    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Addon CSS -->
    <link href="css/addon.css" rel="stylesheet">
    <link href="css/read-addon.css" rel="stylesheet">
    <link href="css/main.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>
<body>

    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1>Artikel dan Berita</h1>
                <p>Informasi terbaru tentang fashion bisa kamu temukan di sini.</em></p>
                <a class="btn-back" href="."> << Halaman Utama</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <?php
                    error_reporting(0);
                    $dbh = connect_to_db();
                    $id_article = (int)$_GET['articleid'];

                    if ( !empty($id_article) && $id_article > 0) {
                        $article = getAnArticle( $id_article, $dbh );
                        $article = $article[0];
                    }else{
                        $article = false;
                        echo "<strong>Wrong article!</strong>";
                    }
                    $other_articles = getOtherArticles( $id_article, $dbh );

                ?>
                <?php if ( $article && !empty($article) ) :?>
                <h2><?= stripslashes($article->judul) ?></h2>
                <p>- diterbitkan pada <?= date('d F Y', $article->tanggal) ?></p>
                <img class="img-fluid" src="img/articles/<?= stripslashes($article->tumbnail)?>"><br>
                <div>
                    <?= stripslashes($article->isi) ?>
                </div>
                <?php else:echo "<strong>No article!</strong>";?>
                <?php endif?>
                <br><br><hr class="styled"><h1>Artikel lain</h1><br>
                <div>
                    <?php if ( $other_articles && !empty($other_articles) ) :?>
                    <?php foreach ($other_articles as $key => $article) :?>
                    <h4><a href="read.php?articleid=<?= $article->idarticle ?>"><?= stripslashes($article->judul) ?></a></h4>
                    <p><?= stripslashes($article->isipendek) ?></p>
                    <p class="small">diterbitkan pada <?= date('d F Y', $article->tanggal) ?></p>
                    <?php endforeach?>
                    <?php endif?>
                </div>
                <hr class="styled">
            </div>
        </div>
    </div>

    <div class="footer">
        braders © <?= date("Y") ?> - all rights reserved.
    </div>

</body>
</html>