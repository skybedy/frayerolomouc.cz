<!doctype html>
<html>
<head>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    
    <style>


nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center; 
}



nav li {
  display: inline-block; 
 
}

nav li a{
  text-decoration: none; 
}

.nav-top li{
  margin:0 10px;
}



.nav-top li a{
  disply: inline-block; 
  font-size: 10px;
  color: #fff;
}











.bi{
    color:#00b5a2;
    font-size: 12px;
    margin-right: 5px;
}
.bg-black{
  background-color: black;
}

.nav-middle{
  background: url("images/logo.png") top left no-repeat;
  background-size: 20%;
}

.nav-middle li{
  margin: 0 12px;
}

.nav-middle ul li a{
  font-size: 1.1rem;
  font-weight: bold;
  color: #fff;
}

.nav-bottom li{
  margin: 0 10px;
}

.nav-bottom ul li a{
  font-size: 0.9rem;
  font-weight: bold;
  color: #fff;
}

 


    </style>



</head>
<body>
    <div class="container-fluid bg-black px-0 text-light">



        <div class="pt-2" style="border-bottom: 3px solid #fff;">

            <div class="row">
                <div class="col">
                    <a href="/" class="text-decoration-none">
                        <img src="images/logo.png" alt="Logo" class="img-fluid">
                    </a>
                </div>
                <div class="col">
                    <h1 class="text-center">Tvá cesta k módě</h1>

                </div>
                <div class="col">
                    <div>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col pb-0">
                                <address>
                                    ADRESA:<br>
                                    Sokolská 789/1<br>
                                    779 00 Olomouc
                                </address>
                            </div>
                        </div>
                    </div>
                    <div>

                        <div class="d-flex align-items-center">
                            <a href="https://www.facebook.com" class="me-3">
                                <img src="images/facebook-logo.png" alt="Logo Facebook" width="50" height="50">
                            </a>
                            <a href="https://www.instagram.com" class="me-3">
                                <img src="images/instagram-logo.png" alt="Logo Instagram" width="50" height="50">
                            </a>
                            <p class="h2  pt-3">Tak se obléká Frayer</p>

                        </div>

                    </div>
                </div>
            </div>
    

        </div>

        <div class="p-3">
            <h2>Móda pro všechny muže</h2>
        </div>
  </div>
      
     
<div class="container">


  <div class="col-md-5 mx-auto mt-2 border border-dark">
      <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="images/1.jpg" class="d-block w-100" alt="Obrazek 1">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/2.jpg" class="d-block w-100" alt="Obrazek 2">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/3.jpg" class="d-block w-100" alt="Obrazek 3">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/4.jpg" class="d-block w-100" alt="Obrazek 1">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/5.jpg" class="d-block w-100" alt="Obrazek 2">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/6.jpg" class="d-block w-100" alt="Obrazek 3">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/7.jpg" class="d-block w-100" alt="Obrazek 1">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/8.jpg" class="d-block w-100" alt="Obrazek 2">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/9.jpg" class="d-block w-100" alt="Obrazek 3">
            </div>
        </div>
     </div>
  </div>
  <hr>

<h2 class="h1 mt-5 text-center">Nabízíme k prodeji</h2>
<div class="container mt-1">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="images/rolaky.jpg" class="card-img-top" alt="Obrázek 1">
            </div>
            <h5 class="text-center mt-4">Roláky</h5>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="images/svetry.jpg" class="card-img-top" alt="Obrázek 2">
            </div>
            <h5 class="text-center mt-4">Svetry</h5>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="images/vesty.jpg" class="card-img-top" alt="Obrázek 3">
            </div>
            <h5 class="text-center mt-4">Vesty</h5>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="images/bundy.jpg" class="card-img-top" alt="Obrázek 3">
            </div>
            <h5 class="text-center mt-4">Bundy</h5>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="images/teplaky.jpg" class="card-img-top" alt="Obrázek 1">
            </div>
            <h5 class="text-center mt-4">Tepláky</h5>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="images/rifle.jpg" class="card-img-top" alt="Obrázek 2">
            </div>
            <h5 class="text-center mt-4">Rifle</h5>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="images/kabele.jpg" class="card-img-top" alt="Obrázek 3">
            </div>
            <h5 class="text-center mt-4">Kabele</h5>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="images/pyzama.jpg" class="card-img-top" alt="Obrázek 3">
            </div>
            <h5 class="text-center mt-4">Pyžama</h5>
        </div>
    </div>
</div>
<hr>

<h2 class="h1 mt-5 text-center">Oblíbené značky</h2>


<div class="container mt-3 mb-3">
    <div class="row">
        <div class="col-md-2">
            <div class="card">
                <img src="images/pietro-moneti-logo.jpg" class="card-img-top" alt="Obrázek 1">
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="images/vamp-logo.jpg" class="card-img-top" alt="Obrázek 2">
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="images/scharf-logo.jpg" class="card-img-top" alt="Obrázek 3">
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="images/ferrini-logo.jpg" class="card-img-top" alt="Obrázek 3">
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="images/cars-jeans-logo.jpg" class="card-img-top" alt="Obrázek 3">
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <img src="images/cars-jeans-logo.jpg" class="card-img-top" alt="Obrázek 3">
            </div>
        </div>
    </div>
</div>




</div>







   
   
   
   






        
        
        
        
                


















    </div>
</body>
</html>