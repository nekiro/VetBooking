<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="VetBooking">
      <title>VetBooking</title>
      <!-- Styles -->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
      <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
      <!-- Scripts -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
   </head>
   <body>
      <header>
         <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-blue ">
            <div class="container">
            <a class="navbar-brand logo" href="#">VetExpert</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="nav navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link clr-white" href="#services">NASZE USŁUGI<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link clr-white" href="#">KONTAKT</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link clr-white" href="{{ route('book-meeting-get') }}">UMÓW SIĘ</a>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <main role="main">
         <section class="heading">
            <div class="container">
               <div class="row">
                  <div  class="ml-5 mt-5 col">
                     <div>
                        <h1><img src="{{ asset('svgs/graduation-hat.svg') }}"><span>VetExpert</span></h1>
                        <h2>lek. wet. <span class="clr-blue">Anna Kowalska</span></h2>
                     </div>
                     <div class="mt-4">
                        <button class="btn btn-ghost mr-3 ">Nasze usługi</button> 
                        <button class="btn btn-primary"><a class=" clr-white" href="{{ route('book-meeting-get') }}">UMÓW SIĘ</a></button>
                     </div>
                  </div>
                  <img class="col img-head" src="{{ asset('svgs/veterinarian-check-ing-puppy-s-health.png') }}" alt="">
               </div>
            </div>
         </section>
         <section class="services">
            <div class="container">
               <h4 class="text-center text-head mb-3" id="services">Nasze usługi</h4>
               <!-- Three columns of text below the carousel -->
               <div class="row mt-5 p-2">
                  <div class="col-lg-4 text-center p-1">
                     <img src="{{ asset('svgs/veterinary.svg') }}" alt="">
                     <h2>Szczepienia</h2>
                     <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                  </div>
                  <!-- /.col-lg-4 -->
                  <div class="col-lg-4 text-center p-1">
                     <img src="{{ asset('svgs/Page-1.svg') }}" alt="">
                     <h2>Diagnostyka</h2>
                     <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  </div>
                  <!-- /.col-lg-4 -->
                  <div class="col-lg-4 text-center ">
                     <img src="{{ asset('svgs//Group 7.svg') }}" alt="">
                     <h2>Chirurgia</h2>
                     <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                  </div>
                  <!-- /.col-lg-4 -->
               </div>
               <!-- /.row -->
            </div>
         </section>
         <section class="opinion mt-4 p-2">
            <h4 class="text-center text-head " id="opinion">Opinie klientów</h4>
            <div id="myCarousel" class="carousel slide mt-4" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel"  data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption text-center clr-gray ">
                           <p class="opi">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
                           </p>
                           <div class="media">
                              <img class="mr-3" src="{{ asset('svgs/Image 1.png') }}" alt="pani Joanna">
                              <div class="media-body">
                                 <h5 class="opi-head">pani Joanna</h5>
                                 <p class="opi-p">właścicielka jamnika</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption text-center clr-gray ">
                           <p class="opi">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                           <div class="media">
                              <img class="mr-3" src="{{ asset('svgs/Image 1.png') }}" alt="pani Joanna">
                              <div class="media-body">
                                 <h5 class="opi-head">pani Joanna</h5>
                                 <p class="opi-p">właścicielka jamnika</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption text-center clr-gray ">
                           <p class="opi">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo. </p>
                           <div class="media">
                              <img class="mr-3" src="{{ asset('svgs/Image 1.png') }}" alt="pani Joanna">
                              <div class="media-body">
                                 <h5 class="opi-head">pani Joanna</h5>
                                 <p class="opi-p">właścicielka jamnika</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Marketing messaging and featurettes
            ================================================== -->
         <!-- Wrap the rest of the page in another container to center all the content. -->
         <div class="container marketing">
            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
            <div class="row featurette">
               <div class="col-md-7">
                  <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
               </div>
               <div class="col-md-5">
                  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
                     <title>Placeholder</title>
                     <rect width="100%" height="100%" fill="#eee"/>
                     <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                  </svg>
               </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
               <div class="col-md-7 order-md-2">
                  <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
               </div>
               <div class="col-md-5 order-md-1">
                  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
                     <title>Placeholder</title>
                     <rect width="100%" height="100%" fill="#eee"/>
                     <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                  </svg>
               </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
               <div class="col-md-7">
                  <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
               </div>
               <div class="col-md-5">
                  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
                     <title>Placeholder</title>
                     <rect width="100%" height="100%" fill="#eee"/>
                     <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                  </svg>
               </div>
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
         </div>
         <!-- /.container -->
         <!-- FOOTER -->
         <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
         </footer>
      </main>
   </body>
</html>