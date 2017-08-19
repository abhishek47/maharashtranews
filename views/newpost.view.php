<?php include 'views/partials/header.php'; ?>


  <?php include 'views/partials/shortbanner.php'; ?>



<div class="container"> 
  <br><br>
  <form method="POST" action="post.php">
  <div class="form-group">
    <label for="title">Article Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="titlehelp" placeholder="Enter Title">
    <small id="titlehelp" class="form-text text-muted">The title to be given to the article.</small>
  </div>


   <div class="form-group">
    <label for="title">Article Body</label>
    <textarea rows="10" name="body" class="form-control"></textarea>
    <small id="titlehelp" class="form-text text-muted">The title to be given to the article.</small>
  </div>



   <div class="form-group">
    <label for="category">Article Category</label>
    <select  class="form-control" name="category" aria-describedby="categoryhelp"> 
      <option value="nashik">Nashik</option>
      <option value="mumbai">Mumbai</option>
      <option value="pune">Pune</option>
      <option value="maharashtra">Maharashtra</option>
      <option value="india">India</option>
      <option value="others">Others</option>
      
    </select>
    <small id="categoryhelp" class="form-text text-muted">The category that article belongs to.</small>
  </div>
  
  <button type="submit" class="btn btn-primary">Post Article</button>
</form>
     
     <br><br><br>

</div><!-- /.container -->

<?php include 'views/partials/footer.php'; ?>    
