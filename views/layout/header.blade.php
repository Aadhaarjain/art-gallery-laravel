<header>
<nav>
        <a href="/">
        <div class="logo" title="Home">ART MAGIC</div>
        </a>
    <ul>
    <li><a href="gallery">Gallery</a></li>
    <li><a href="contact">Contact</a></li>
    <li><a href="about">About</a></li>
    </ul>
</nav>
  <section class="img">
    <div class="inner-img">
      <h1>Art Magic</h1>
      <h2>Paintings and more</h2>
    </div>
  </section>

</header>

<style>
   html{
     scrollbar-width:none;
 }
 body{
     margin:0;
     padding:0;
     font-family: "Josefin-Sans",sans-serif;
 }
 nav{
     position: fixed;
     top:0;
     left:0;
     width:100%;
     height:80px;
     padding: 5px 60px;
     box-sizing: border-box;
     background: rgba(0,0,0,0.6 );
     border-bottom: 1px solid #fff;
 }
 nav .logo{
     padding: 22px 20px;
     height: 25px;
     float: left;
     font-size: 24px;
     font-weight: bold;
     text-transform: uppercase;
     color: #fff;
 }
 
 nav ul{
     list-style: none;
     float: right;
     padding: 0;
     margin: 0;
     display: flex;
 }
nav ul li a{
    line-height: 80px;
    color: #fff;
    padding: 12px 30px;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
}
nav ul li a:hover{
      background: rgba(214, 12, 12, 0.7);
      border-radius:6px;
}

h1{
  font-family: 'Courier New', Courier, monospace;
}
h1::before{
  content:'';
  position: absolute;
  width:175px;
  height:4px;
  background-color:black;
  top:45%;
  left:50%;
  transform: translateX(-50%);
  animation:animate 3s linear infinite;
  }
h2{
    font-weight: bolder;
    font-family:'Courier New', Courier, monospace;
    color:black;
  }
  body{
    margin: 0;
    font-family: sans-serif;
  }
  .img{
    width: 100%;
    height: 90vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-position: center;  
    background-size: cover;
    background-image: url("images/home.webp")
  }
  .img h1{
    color: black;
    font-size: 5em;
    margin-top: 0;
    margin-bottom: 0.5em;
  }
  .img h2{
      font-size:2.3em;
  }

</style>

    @yield('header')

