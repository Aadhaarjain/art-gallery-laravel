@include('layout.header')

<!DOCTYPE html>
<html>
<title>ART MAGIC</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/gallery.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<section class="album">
  <div class="inner-album">
  <h3>ALBUMS</h3>
  <h4>Archives</h4>
</div>
</section>


<!----Gallery----->
<div class="container">
   <div class="box">      
      <div class="pic">
        <a href="gallery01">
          <img src="images/gallery/wall art.jpg" title="Wall Art">
        </a>
        <a href="gallery05">
          <img src="images/gallery/abstract.jpg" title="Abstracts">
        </a> 
      </div>
      <div class="pic">
        <a href="gallery02">
          <img src="images/gallery/mandala.jpg" title="Mandala Art">
        </a>
        
      </div>
      <div class="pic">
        <a href="gallery03">
          <img src="images/gallery/doodling.jpg" title="Doodling">
        </a>
        <a href="gallery04">
          <img src="images/gallery/shading.jpg" title="Shading">
        </a>
      </div>
</div>
</div>
@include('layout.footer')


