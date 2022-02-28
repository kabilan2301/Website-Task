<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title>Index</title>
      <style>
         .center {
         text-align: center;
         color: #f734c6;
         }
      </style>
      <style>
         .customstyle{
         margin:3px;
         min-height:300px;
         //background-color:aqua;
         text-align:center;
         font-size:large;
         }
         .card:hover {
         background-color:#ff69fa; no-repeat;
         }
      </style>
      <style>
         .customstyle_1{
         margin:3px;
         min-height:00px;
         background-color:#ff69fa;
         text-align: bottom;
         font-size:medium;
         }
      </style>
      <style>
         .customstyle_2{
         margin:3px;
         min-height:150px;
         background-color:aqua;
         text-align:center;
         font-size:medium;
         }
      </style>
      <style>
         .btn-danger, .btn-danger:active, .btn-danger:visited {
         background-color: #ff69fa;
         }
      </style>
      <style>
         .btn-circle.btn-xl {
         width: 30px;
         height: 30px;
         padding: 6px 0px;
         border-radius: 15px;
         font-size: 10px;
         text-align: top;
         }
         .carousel-item-next, .carousel-item-prev, .carousel-item.active {
         display: flex !important;
         }
      </style>
   </head>
  <body onload="myFunction()">
   <script>
        function myFunction(){
            var myWindow = setTimeout(()=>window.open("formcheck.php", "", "width=1000,height=700"),2000);
			window.close();
			
        }
    </script>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">
            <nav class="navbar navbar-light bg-light">
               <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                  <img src="images/logo.jpg" alt="" width="100" height="90" class="d-inline-block align-text-right-side">
                  </a>
               </div>
            </nav>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav ms-auto ">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" style="
                        color: #ff69fa;
                        " href="#">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" style="
                        color: #ff69fa;
                        " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Funding
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Deposit</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Tools</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" style="
                        color: #ff69fa;
                        " href="#">Partnership</a>
                  </li>
                  <li class="nav-item"> 
                     <a class="nav-link" href="#">Promotion</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     About us
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">a Page</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <h2 class="center">Latest News</h2>
      <p>
      <div id="container" >
      <div class="row">
         <div class="col-md-4">
            <div class="customstyle">
               <div class="card" style="width: 18rem  align:center; ">
                  <div class="card-body">
                     <h5 class="card-title">MT5 White Label</h5>
                     <p class="card-text">Run your Forex business at an<br>extremely affordable price with <br>the market's most recognized <br> trading software.</p>
                     <a href="#"  style=color:#f734c6  class="btn btn-danger btn-circle btn-xl">+</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="customstyle">
               <div class="card" style="width: 18rem align:center;">
                  <div class="card-body">
                     <h5 class="card-title">Bridge MT5 with RMS</h5>
                     <p class="card-text">Connect your MT5 Server to<br>many LPs and take advantage<br>of aggregate liquidity or<br>advanced bbook execution.</p>
                     <a href="#" style=color:#f734c6 class="btn btn-danger btn-circle btn-xl">+</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="customstyle">
               <div class="card" style="width: 18rem  align:center;">
                  <div class="card-body">
                     <h5 class="card-title">Client office app with CRM</h5>
                     <p class="card-text">Automate all your onboarding<br>and payment processes in one<br>place advanced bbook<br>execution.</p>
                     <a href="#" style=color:#f734c6 class="btn btn-danger btn-circle btn-xl">+</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </p>	
      <h2 class="center">Our Management Team</h2>
      <p>
      <div class="container">
         <div class="row" >
            <div class="col-md-12" >
               <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="card" style="width: 18rem;background-color: transparent;border: none;">
                           <div class="card-body" style="
                              display: flex;
                              width: 1350px;">
                              <p class="card-text" style="
                                 text-align: center;">
                                 <img src="images/p3.png" class="card-img-top" alt="..."  style="border-radius:28%;">Crystal Mestro.<br>SEO Analyst.
                              </p>
                              <p class="card-text" style="
                                 text-align: center;">
                                 <img src="images/p3.png" class="card-img-top" alt="..." style="border-radius:28%;">Crystal Mestro.<br>Managing Director.
                              </p>
                              <p class="card-text" style="
                                 text-align: center;">
                                 <img src="images/p3.png" class="card-img-top" alt="..." style="border-radius:28%;">Crystal Mestro.<br>SEO Analyst.
                              </p>
                              <p class="card-text" style="
                                 text-align: center;">
                                 <img src="images/p3.png" class="card-img-top" alt="..." style="border-radius:28%;">Crystal Mestro.<br>Managing Director.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="card" style="width: 18rem;background-color: transparent;border: none;">
                           <div class="card-body" style="
                              display: flex;
                              width: 1350px;">
                              <p class="card-text" style="
                                 text-align: center;">
                                 <img src="images/p3.png" class="card-img-top" alt="..." style="border-radius:28%;">Crystal Mestro<br>SEO Analyst.
                              </p>
                              <p class="card-text" style="
                                 text-align: center;">
                                 <img src="images/p3.png" class="card-img-top" alt="..." style="border-radius:28%;">Crystal Mestro.<br>Managing Director.
                              </p>
                              <p class="card-text" style="
                                 text-align: center;">
                                 <img src="images/p3.png" class="card-img-top" alt="..." style="border-radius:28%;">Crystal Mestro.<br>SEO Analyst.
                              </p>
                              <p class="card-text" style="
                                 text-align: center;">
                                 <img src="images/p3.png" class="card-img-top" alt="..." style="border-radius:28%;">Crystal Mestro.<br>Managing Director.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="card" style="width: 18rem;background-color: transparent;border: none;">
                           <div class="card-body" style="
                              display: flex;
                              width: 690px;">
                              <p class="card-text" style="
                                 text-align: center;">
                                 <img src="images/p3.png" class="card-img-top" alt="..." style="border-radius:28%;">Crystal Mestro.<br>SEO Analyst.
                              </p>
                              <p class="card-text" style="
                                 text-align: center;">
                                 <img src="images/p3.png" class="card-img-top" alt="..." style="border-radius:28%;">Crystal Mestro.<br>Managing Director.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="
                     background-color: #000000;
                     border-radius: 73%;"></span>
                  <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="
                     background-color: #000000;
                     border-radius: 73%;"></span>
                  <span class="visually-hidden">Next</span>
                  </button>
               </div>
            </div>
         </div>
      </div>
      </p>
      <p>
      <footer>
         <br>
         <div class="container" style="
            background-color: #ff69fa;
            ">
            <div class="col-md-12">
               <p style="font-weight: 700;text-align:center;color: #fff;font-size: x-large;">Newsletter
               </p>
               <p>
               <h3 style="
                  text-align: right;
                  "><img src="images/whatsapp.png"></h3>
               </p>
               <p>
               <h3 style="
                  text-align: right;
                  "><img src="images/whatsapp.png"></h3>
               </p>
               <p>
               <h3 style="
                  text-align: right;
                  "><img src="images/whatsapp.png"></h3>
               </p>
               <p>
               <h3 style="
                  text-align: right;
                  "><img src="images/whatsapp.png"></h3>
               </p>
               <p style="color:#fff;font-style:italic;">
                  SETUPBROKERAGE<br><br>SetupBrokerage, headquartered in Irvina, California is a completely <br>
                  united forex technology company that offers turnkey solutions for<br>
                  all members in the forex market Seeking access to retil and <br> 
                  institutional forex markets.
               </p>
               <form>
                  <p style="text-align:right">
                     <input type="email" placeholder="Enter Email Address" style="border-radius: 30px 0 0 30px;display: inline-block;padding: 10px 20px;" 6px="" 0px;="">
                     <button style="background-color:#ff69fa;color:#fff;/* padding-left:50px; */padding: 10px 20px;display: inline-block;margin: 4px 2px;border-radius: 0 30px 30px 0;">Subscibe</button>
                  </p>
               </form>
               <p style="text-align:right;font-weight:700;"> &copy; 2020 All rights Reserved SetupBrokerage.
               </p>
            </div>
         </div>
      </footer>
      </p>
      <!-- Optional JavaScript; choose one of the two! -->
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
         -->
		 
</html>