<?php include 'views/partials/header.php'; ?>

	<?php include 'views/partials/banner.php'; ?>

	<div class="jumbotron ticker">
	  <div class="container">
		<marquee>ट्रेंडिंग : <?= $trending; ?></marquee>
	  </div>
	</div>




    <div class="album text-muted">
      <div class="container">


        <div class="row">
         <div class="col-md-10"> 
          
         <?php foreach ($articles as $key => $article) : ?> 

          <div class="card">
            <img src="assets/images/01.jpg" alt="Card image cap">
            <a href="article.php?id=<?= $article->id; ?>"><?= $article->title; ?></a>
            <p class="card-text"><?= substr($article->body, 0, 200); ?>...</p>
            <p class="text-muted" style="text-transform: capitalize;"><?= $article->category; ?></p>
          </div>

        <?php endforeach; ?>
          
          


          </div>

          <div class="col-md-2"> 
          	<div>
          		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- CV AD 1 -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-8430312518838448"
                 data-ad-slot="9164273811"
                 data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          	</div>	
          	<br>
          	<div>
          		 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- CV AD 2 -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-8430312518838448"
                 data-ad-slot="3117740219"
                 data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          	</div>	

          	<br>
          	<div>
          		 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- CV AD 2 -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-8430312518838448"
                 data-ad-slot="3117740219"
                 data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          	</div>	
      	  </div>
        </div>

        <div>
         <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- CV AD 3 -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-8430312518838448"
                 data-ad-slot="5931605819"
                 data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
</div>

      </div>
    </div>

    

<?php include 'views/partials/footer.php'; ?>