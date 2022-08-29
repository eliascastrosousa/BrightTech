<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap Template</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <style>

    html,
        body,
        header,
        .jarallax {
          height: 700px;
        }


        #inicial, #clientes, #planos, h1, h2{
          color: orange;
        }

        body{
          background-color: #023047;
        }

        @media (max-width: 740px) {
          html,
          body,
          header,
          .jarallax {
            height: 100vh;
          }
        }

        @media (min-width: 800px) and (max-width: 850px) {
          html,
          body,
          header,
          .jarallax {
            height: 100vh;
          }
        }

        @media (min-width: 560px) and (max-width: 650px) {
          header .jarallax h1 {
            margin-bottom: .5rem !important;
          }
          header .jarallax h5 {
            margin-bottom: .5rem !important;
          }
        }


        @media (min-width: 660px) and (max-width: 700px) {
          header .jarallax h1 {
            margin-bottom: 1.5rem !important;
          }
          header .jarallax h5 {
            margin-bottom: 1.5rem !important;
          }
        }

        .top-nav-collapse {
            background-color: #9da4b1 !important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #9da4b1 !important;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #9da4b1!important;
            }
        }

        footer.page-footer {
            background-color: #8ecae6;
        }

        #bridgetech {
          color: white;
        }
        
        html {
          scroll-behavior: smooth;
        }

    </style>
</head>

<body>

  <!--Main Navigation-->
  <header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#" id="bridgetech"><strong>Bridge.tech</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#inicial">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#clientes">Parceiros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#planos">Planos</a>
            </li>
          </ul>
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
            </div>
          </form>
        </div>
      </div>
    </nav>

    <!-- Intro Section -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://images.pexels.com/photos/821679/pexels-photo-821679.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center center;" id="inicial">
      <div class="mask rgba-purple-slight">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12 wow fadeIn mb-3">
              <div class="text-center">
                <h1 class="display-4 font-weight-bold mb-5 wow fadeInUp" id="bridgetech">Bridge.tech</h1>
                </li>
                <h5 class="mb-5 wow fadeInUp" data-wow-delay="0.2s" id="bridgetech">Construímos a ponte entre você e seu cliente</h5>
                <div class="wow fadeInUp" data-wow-delay="0.4s">
                  <a href="#franqueado" class="btn btn-orange btn-rounded"><i class="fas fa-user left"></i> Seja um franqueado</a>
                  
                </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>
  <!--Main Navigation-->

  <!--Main Layout-->