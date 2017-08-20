<?php include 'views/partials/header.php'; ?>


  <?php include 'views/partials/shortbanner.php'; ?>



<div class="container"> 
  <br><br>
  <form method="POST" action="post.php">
  <div class="form-group">
    <label for="title">Article Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="titlehelp" placeholder="Enter Title" value="<?= $article->title; ?>">
    <small id="titlehelp" class="form-text text-muted">The title to be given to the article.</small>
  </div>


   <div class="form-group">
    <label for="title">Article Body</label>
    <textarea rows="10" name="body" class="form-control"><?= $article->body; ?></textarea>
    <small id="titlehelp" class="form-text text-muted">The title to be given to the article.</small>
  </div>



   <div class="form-group">
    <label for="category">Article Category</label>
    <select  class="form-control" name="category" aria-describedby="categoryhelp"> 
      <option value="nashik" <?= $article->category == 'nashik' ? 'selected' : ''; ?>>Nashik</option>
      <option value="mumbai" <?= $article->category == 'mumbai' ? 'selected' : ''; ?>>Mumbai</option>
      <option value="pune" <?= $article->category == 'pune' ? 'selected' : ''; ?>>Pune</option>
      <option value="maharashtra" <?= $article->category == 'maharashtra' ? 'selected' : ''; ?>>Maharashtra</option>
      <option value="india" <?= $article->category == 'india' ? 'selected' : ''; ?>>India</option>
       <option value="world" <?= $article->category == 'world' ? 'selected' : ''; ?>>विश्व</option>
      <option value="sports" <?= $article->category == 'sports' ? 'selected' : ''; ?>>क्रीडा</option>
      <option value="interviews" <?= $article->category == 'interviews' ? 'selected' : ''; ?>>मुलाखत</option>
      <option value="others" <?= $article->category == 'others' ? 'selected' : ''; ?>>इतर</option>
      
    </select>
    <small id="categoryhelp" class="form-text text-muted">The category that article belongs to.</small>
  </div>
  
  <button type="submit" class="btn btn-primary">Update Article</button>
</form>
     
     <br><br><br>

</div><!-- /.container -->

<?php include 'views/partials/footer.php'; ?>    
