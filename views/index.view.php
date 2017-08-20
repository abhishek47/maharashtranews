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
         
      <div>
        <a href="https://www.accuweather.com/en/in/nashik/189304/weather-forecast/189304" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1503196936203" class="aw-widget-current"  data-locationkey="189304" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1503196936203"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
      </div>
          
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
               <script src="//www.cricruns.com/system/application/views/widgetBase/wid_300_200_1.js" type="text/javascript"></script>
            </div>
          	<div>
          		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- MN AD 1 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:336px;height:280px"
                     data-ad-client="ca-pub-8430312518838448"
                     data-ad-slot="7893479035"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
          	</div>	
          	<br>
          	<div>
          		 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- MN AD 2 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:336px;height:280px"
                     data-ad-client="ca-pub-8430312518838448"
                     data-ad-slot="9051659792"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
          	</div>	

          	<br>
          	<div>
          		 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- MN AD 3 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-8430312518838448"
     data-ad-slot="4653427399"></ins>
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