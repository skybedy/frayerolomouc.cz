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
    <div class="container-fluid bg-black px-0">
        
        <div class="container pt-2 px-4">
            <nav>
                <ul class="nav-top">
                  <li><i class="bi bi-chat-left"></i> <a href="#">FAQ</a></li>
                  <li><i class="bi bi-arrow-repeat"></i><a href="#">VÝMĚNA ZDARMA | VRÁCENÍ | REKLAMACE</a></li>
                  <li><i class="bi bi-bus-front"></i><a href="#">POŠTOVNÉ OD 59 KČ</a></li>
                  <li><i class="bi bi-envelope"></i><a href="#">STAŇTE SE AMBASSADOREM</a></li>
                  <li><i class="bi bi-star"></i><a href="#">VĚRNOSTNÍ PROGRAM</a></li>
                  <li><i class="bi bi-at"></i><a href="#">INFO@WAYFARER.CZ</a></li>
                  <li><i class="bi bi-telephone"></i><a href="#">228 885 555 / PO - PÁ 10:00 - 11:00 HOD.</a></li>
                </ul>
            </nav>
        </div>

        <div style="border-bottom: 3px solid #fff;">
          <nav class="nav-middle mx-auto mt-3 pt-4 pb-5">
            <ul class="mx-auto">
              <li><a href="#">Muži</a></li>
              <li><a href="#">Ženy</a></li>
              <li><a href="#">Brýle</a></li>
              <li><a href="#">Domov</a></li>
              <li><a href="#">Deti</a></li>
            </ul>
          </nav>
        </div>

        <div>
          <nav class="nav-bottom mx-auto py-3">
            <ul class="mx-auto">
              <li><a href="#">Oblečení</a></li>
              <li><a href="#">Boty</a></li>
              <li><a href="#">Doplňky</a></li>
              <li><a href="#">Inspirace</a></li>
              <li><a href="#">Výprodej</a></li>
            </ul>
          </nav>
        </div>
  </div>
      
     



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

<div class="container mt-5">
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
</div







   
   
   
   






        
        
        
        
                


















    </div>
</body>
</html>