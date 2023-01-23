<?php
    include_once "classes/Article.php";
    session_start();
    if (!isset($_SESSION["id"])){ 
        header("Location:../index.php");
        die;
    }
    $open_connexion=new conx();
    $article =new Article();
    $articles=$article->getSpecArticle($_GET['id']);
    include_once './navbar.php';

    $id = $_GET['id'];  
    ?>

<h3>Update Article</h3>
    <form method="post" action="classes/traitement.php"  id="">
        <?php if($articles!=false){ foreach($articles as $art){ ?>
        <div class="form-body w-50 m-auto">
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="<?= $art['title'] ?>"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" class="form-control" name="category" value="<?= $art['category'] ?>"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Article content</label>
                <textarea type="text" class="form-control" name="description"><?= $art['description'] ?></textarea>
            </div>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?= $id ?>">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
        <?php }} ?>
    </form>
<?php require "./footer.php" ; ?>


<!-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> -->