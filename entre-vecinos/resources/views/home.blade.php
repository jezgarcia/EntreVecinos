<!--Home page-->

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!--Custom CSS-->
    <link rel="stylesheet" href="{{ asset('css/ev-styles.css') }}" />
    <!--Font Awesome Icons-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Entre Vecinos | Inicio</title>
</head>
    <body>
        <!--jQuery and bootstrap JS-->
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
        <!--Scroll back to top-->
        <a class="scrollBackToTop" href="#">
            <em class="fa fa-chevron-up"></em>
        </a>
        <!--Navbar-->
        <nav class="navbar ev-nav ">
                <div class="container-fluid container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="#"><img class="img-responsive" src="images/img_av-new-logo-white-sm.png" /></a>
                  </div>
                  <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.html">Inicio</a></li>
                            <li><a href="directorio.html">Directorio</a></li> 
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                  </div>
                </div>
       </nav><!--End Navbar-->

       <!--Header-->
       <div id="ev-header">
           <div class="text-container">
                <h1><img class="img-responsive" src="images/img_av-new-logo-white-lg.png"></h1>
   
           </div>
          
    </div><!--End Header-->    
        <div id="top-categories">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>
                                 <a class="icon-box" href="directorio.html?filter=automotive">
                                     <em class="fa fa-car"></em>
                                    <h2>Auto</h2>
                                </a>
                             </li>
                            <li>
                            <a class="icon-box" href="directorio.html?filter=construction">
                                <em class="fa fa-wrench"></em>
                                <h2>Construction</h2>
                            </a>
                            </li>
                            <li>
                                    <a class="icon-box" href="directorio.html?filter=food">
                                        <em class="fa fa-cutlery"></em>
                                        <h2>Food</h2>
                                    </a>
                            </li>
                            
                            <li>
                                    <a class="icon-box" href="directorio.html?filter=comercio">
                                        <em class="fa fa-shopping-bag"></em>
                                        <h2>Commercial</h2>
                                    </a>
                            </li>
                            <li>
                                <a class="icon-box" href="directorio.html">
                                    <em class="fa fa-ellipsis-h"></em>
                                    <h2>Mas</h2>
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div id="recent-posts" class="section-two">
            <div class="container">
                <h2 class="text-center">Annunicios</h2>
                <hr />
                <p class="sub-head lead">
                    información sobre próximos eventos, ofertas de servicios, y anuncios. Haga clic en los cuadros para más información.</p>
         
                <div class="row">
                    <div class="col-md-6 col-sm-12 announ-box" >
                        <div class=" box-one">
                            <a href="" target="_blank">
                                <div class="announ-box-text">
                                    <h3><strong>Expo Feria</strong>, Abril 21, 2018</h3>
                                    <p>
                                        Se alienta a cualquier hermano que tenga un negocio, una profesión o habilidad a unirse a la primera feria de exposiciones de negocios de la iglesia. Haga clic para obtener más información.</p>
                                </div>
                                 
                            </a>
                           
                        </div>     
                    </div>
                    <div class="col-md-6 col-sm-12 announ-box">
                        <div class="col-md-12 col-sm-6 box-two">
                            <a href="" target="_blank">
                                <div class="announ-box-text">
                                    <h3><strong>Annuncio</strong> Dos</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                                </div>
                                 
                            </a>     
                        </div>
                        <div class="col-md-12 col-sm-6 box-three" >
                                <a href="" target="_blank">
                                        <div class="announ-box-text">
                                            <h3><strong>Annuncio</strong> Tres</h3>
                                            <p>Lorem ipsum dolor sit amet, .</p>
                                        </div>
                                         
                                    </a> 
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--About-->
        <div id="about" class="section-two" >
            
            <div class="container">
                
                    <h2 class="text-center">Sobre Nosotros</h2>
                    <hr />
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus turpis massa tincidunt dui ut ornare lectus sit amet. Malesuada nunc vel risus commodo. Iaculis urna id volutpat lacus. </p>
                    
                
            </div>
        </div>
        
        <div class="section-two">
            <div class="container">
                <h2 class="text-center">Regiones</h2>
                <hr />
                <p class="sub-head lead">
                        Las regiones que están incluidas actualmente en este directorio son las iglesias en Arizona y Nevada. Para obtener más información, visite su sitio web.</p>
                        
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-md-offset-1">
                        <div class="img-wrapper">
                            <img class="img-responsive" src="images/img_church-temple-phx-sm.jpg">
                            <div class="img-overlay">
                                <div class="img-text-container">
                                   <h3 class="img-text">Arizona</h3>
                                    <a class="button-1" href="http://lldmphx.org/" target="_blank">Visita Sitio</a> 
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <div class="img-wrapper">
                            <img class="img-responsive" src="images/img_church-temple-las-vegas-sm.jpg">
                            <div class="img-overlay">
                                <div class="img-text-container">
                                   <h3 class="img-text">Nevada</h3>
                                    <a class="button-1" href="" target="_blank">Visita Sitio</a> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    <footer>
      
            <div id="footer-nav">
               <div class="container">
                   <div class="row">
                       <div class="col-md-6 col-sm-6">
                            <h4>Entre Vecinos</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus turpis massa tincidunt dui ut ornare lectus sit amet. Malesuada nunc vel risus commodo. Iaculis urna id volutpat lacus.</p>
                       </div>
                       <div class="col-md-6 col-sm-6">
                           <h4>Contactanos</h4>
                           <ul>
                                <li><a href="http://lldmphx.org/" target="_blank">Phoenix, AZ</a></li>
                                <li><a href="http://www1.ldmlasvegas.com/" target="_blank">Las Vegas, NV</a></li>
                                <li><a href="" target="_blank">Correo Electronico</a></li>
                            </ul>
                       </div>
                   </div>
                   
               </div>
                
            </div>
            
          <div id ="copyright-div" class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="copyright">&copy;2018 <strong>Entre Vecinos</strong>. All Rights Reserved</h4>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/entreVecinosScript.js?ver=1.2"></script>
    </body>
</html>