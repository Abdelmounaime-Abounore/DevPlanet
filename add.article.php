<?php
include_once "classes/Article.php";
session_start();
if (!isset($_SESSION["id"])){ 
    header("Location:../index.php");
    die;
}
include_once './navbar.php';
?>

<h3>Add a new Article</h3>

  <form class="myForm w-75 m-auto bg-light p-4 my-3" id="myForm" name="form" method="post" action="classes/traitement.php">
      <div class="div_form">
          <div class="form-group my-3">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control p-2" name="title[]" placeholder="Enter Title">
            <div id="titleError" class="text-danger" style='display: none;'>*The fields cannot be blank</div>
          </div>
          <div class="form-group my-3">
            <label for="formGroupExampleInput2">Category</label>
            <select class="form-control form-control p-2" name="category[]">
                <option id="">Select Your Choice ..</option>
                <option value="Web Developpment">Web Developpment</option>
                <option value="Mobile Developpment">Mobile Developpment</option>
                <option value="AI">AI</option>
                <option value="Cyber Security">Cyber Security</option>
            </select>
            <div id="categoryError" class="text-danger" style='display: none;'>*Select Your Category</div>
          </div>
          <div class="form-group my-3">
            <label for="formGroupExampleInput2">description</label>
            <textarea type="textarea" class="form-control p-2" name="description[]"></textarea>
            <div id="articleError" class="text-danger" style='display: none;'>*The fields cannot be blank</div>  
          </div>
      </div>
  </form>
<div class="w-75 m-auto my-3">
  <input type="hidden" name="action" value="add_article">
  <button type="submit" class="btn btn-success" onclick="fullArticleInput(event);">Add Article</button>
  <button type="submit" class="btn btn-light" id="duplicateButton">Add Another Field</button>
</div>
<script src="./js/forms.js"></script>
<?php require "./footer.php" ; ?>  