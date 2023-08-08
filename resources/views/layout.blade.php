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
</body>
</html>