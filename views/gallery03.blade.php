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
  <h4>Doodlings</h4>
</div>
</section>
<!----gallery--->
<div class="container">
    <div class="box">
      
      <div class="pic">
        <img src="images/gallery03/doodling1.jpg">
      </div>
      <div class="pic">
            <img src="images/gallery03/doodling2.jpg">
            <img src="images/gallery03/doodling4.jpg">
        </div>
        <div class="pic">
            <img src="images/gallery03/doodling3.jpg">
        </div>
    </div>
</div>

@include('layout.footer')

</html>