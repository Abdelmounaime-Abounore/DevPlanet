<?php
include_once './navbar.html';
?>

<h3>Add a new Article</h3>
<form class="w-75 m-auto bg-light p-4 my-3" id="myForm">
  <div class="form-group my-3">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" class="form-control p-2" id="formGroupExampleInput" placeholder="Enter Title">
  </div>
  <div class="form-group my-3">
    <label for="formGroupExampleInput2">Category</label>
    <select class="form-control  form-control p-2">
        <option>Large select</option>
    </select>
  </div>
  <div class="form-group my-3">
    <label for="formGroupExampleInput2">Photo</label>
    <input type="file" class="form-control p-2" id="formGroupExampleInput3">
  </div>
  <div class="form-group my-3">
    <label for="formGroupExampleInput2">Article</label>
    <textarea type="textarea" class="form-control p-2" id="formGroupExampleInput3"></textarea>
  </div>
</form>
<div class="w-75 m-auto my-3">
  <button type="submit" class="btn btn-success">Add Article</button>
  <button type="submit" class="btn btn-light" id="duplicateButton">Add Another Field</button>
</div>

<?php require "./footer.php" ; ?>