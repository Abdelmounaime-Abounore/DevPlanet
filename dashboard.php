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

<h3>Articles Settings</h3>
<div class="input-group d-flex justify-content-center my-5">
  <div class="form-outline w-25">
    <input type="search" id="form1" class="form-control" placeholder="Search Articles By Category.." />
  </div>
    <button type="button" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
    </button>
</div>
<div class="w-75 m-auto">
    <?php if($articles==false) $count_article=0;
    else $count_article=count(($articles));
     ?>
    <h5 class="text-center text-md-start">Total of Articles(<?= $count_article ?>)</h5>
</div>
<div class="table-responsive my-5">
    <?php if(isset($_GET['msg'])){ ?>
        <h5><?= $_GET['msg'] ?></h5>
    <?php } ?>
    <table class="table bg-light my-3 w-75 m-auto text-center">
        <tr>
            <th class="p-4">Title</th>
            <th class="p-4">Date Of Publication</th>
            <th class="p-4">Category</th>
            <th class="p-4">Update</th>
            <th class="p-4">Delete</th>
        </tr>
        <tbody>
        <?php if($articles!=false){ foreach($articles as $art){ ?>
        <tr>
            <td class="p-4"><?= $art['title'] ?></td>
            <td class="p-4"><?= $art["publishDate"] ?></td>
            <td class="p-4"><?= $art["category"] ?></td>
            <td class="p-4"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update">Update</button></td>
            <td class="p-4"><a href="classes/traitement.php?action=delete_art&id=<?= $art['id'] ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php }} ?>
    </tbody>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="" action="" id="">
                <div class="modal-header">
                    <h5 class="modal-title">Article update</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="" id=""/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select" name="" id="">
                            <option value="">Please select</option>
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <label class="for-label">Photo</label>
                        <input type="file" class="form-control p-2" id="formGroupExampleInput3">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Article content</label>
                        <textarea type="text" class="form-control" name="" id=""></textarea>
                        <!-- <textarea class="form-control" rows="10" name="description" id="task_description"></textarea> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require "./footer.php" ; ?>
<script type="text/javascript">
  history.pushState({},"","./dashboard.php");
</script>


<!-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> -->