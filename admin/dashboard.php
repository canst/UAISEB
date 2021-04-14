<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
    <title>Eniola</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand mb-0 h1 font-weight-bold active" href="#" style="font-size: 1.5em;">#Eniola</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item">
              <a class=" nav-link font-weight-bold active" style="font-size: 1.5em;" href="list-courses.php">Voir les cours</a>
            </li>
          </ul>

          <a href="login.php" class="btn btn-primary btn-sm mr-4" style="font-size: 1em;">Connexion</a>

          <a href="register.php" class="btn btn-primary btn-sm" style="font-size: 1em;">S'inscrire</a>

        </div>
      </nav>

    <section>
        <div class="main-container">
            <div  style="background: url('img/etu.jpg') no-repeat center center;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
              box-shadow:inset 0 0 0 1000px rgba(27,22,65, 0.8);">
                 <div class="md-5" style="padding-top: 80px; padding-bottom: 80px;">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-md-10 col-lg-8 text-center text-white">
                        <!-- Preheading -->
                        <h6 class="text-white" style="font-size: 40px">
                           Tableau d'administration
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card-deck mt-3" style="bottom: 150px; margin-left: 200px; margin-right: 200px;">
                <div class="card">
                    <a href="#">
                        <i class="fas fa-user card-img-top" style=""></i>
                    </a>

                    <div class="card-footer">
                        <a href="#">
                            <h5 class="card-title text-center">Gestions des utilisateurs</h5>
                        </a>

                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img class="card-img-top" src="img/iso-3.png" alt="Card image cap">
                    </a>

                    <div class="card-footer">
                        <a href="#">
                            <h5 class="card-title text-center">Gestions des cours</h5>
                        </a>

                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img class="card-img-top" src="img/iso-3.png" alt="Card image cap">
                    </a>

                    <div class="card-footer">
                        <a href="#">
                            <h5 class="card-title text-center">Gestions des cours</h5>
                        </a>

                    </div>
                </div>
            </div>
            <div class="card-deck mt-3 mb-3" style="margin-left: 200px; margin-right: 200px;">
                <div class="card">
                    <a href="#"><img class="card-img-top" src="img/iso-3.png" alt="Card image cap"></a>
                    <div class="card-footer">
                        <a href="#">
                            <h5 class="card-title text-center">Gestions des mails</h5>
                        </a>

                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img class="card-img-top" src="img/iso-3.png" alt="Card image cap">
                    </a>

                    <div class="card-footer">
                        <a href="#">
                            <h5 class="card-title text-center">Gestions des données</h5>
                        </a>

                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img class="card-img-top" src="img/iso-3.png" alt="Card image cap">
                    </a>

                    <div class="card-footer">
                        <a href="#">
                            <h5 class="card-title text-center">Suprimer le compte</h5>
                        </a>

                    </div>
                </div>
            </div>
          </div>
    </section>
    <footer class="footer pt-4 pb-2" style=" border-top: 10px solid blue">
        <div class="container">
          <p class="text-center">
            <span class="text-black mr-2">Copyright &copy; AmessCorp</span>
            <a href="#" style="width: 150px;"><img style="width: 160px; background-color: blue;" src="img/amesscorpbag.png" alt=""></a>
          </p>
          </span>
        </div>
    </footer>
    <body>
  <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="/__/firebase/8.0.0/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="/__/firebase/8.0.0/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="/__/firebase/8.0.0/firebase-auth.js"></script>
  <script src="/__/firebase/8.0.0/firebase-firestore.js"></script>
</body>
</body>
</html>
