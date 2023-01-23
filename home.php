    <?php
    include_once "classes/Article.php";
    session_start();
    if (!isset($_SESSION["id"])){ 
        header("Location:../index.php");
        die;
    }
    $open_connexion=new conx();
    $article =new Article();
    $articles=$article->getArticles();
    include_once './navbar.php';
    ?>
    <h3>All development news articles</h3>

    <?php foreach($articles as $art){ ?>
        <div class="container my-5">
            <div class="row my-3">
                <h2><?= $art['title'] ?></h2>
                <h5>Categorie : <?= $art["category"] ?></h2>
                <p><?= $art['description'] ?></p>   
            </div>
        </div>
    <?php } ?>
        
<?php require "./footer.php" ; ?>