<?php
  include("cadre/cadre_top_prof.php");
?>
<section>
    <div class="main-container" style="padding-left:15px; margin-bottom:75px;">
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
        
        <div class="card" style="margin-top:45px;">
            <div class="card-body">
                    <div class="card-title">
                        <h2 class="text-center text-uppercase"> Modifier mes information personelle</h2>
                    </div>
                    <form style="width:60%;" >
                        <div class="form-group">
                          <label for="name1">Nom: <span style="color:red;">*</span></label>
                          <input type="text" class="form-control" id="name1" placeholder="" style="height:35px;">
                        </div>
                        <div class="form-group">
                            <label for="name1">Prénom: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="name1" placeholder="" style="height:35px;">
                        </div>
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nom d'utilisateur <span style="color:red;">*</span></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" style="height:35px;">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Mot de passe <span style="color:red;">*</span></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" style="height:35px;">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Confirmer mot de passe <span style="color:red;">*</span></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" style="height:35px;">
                        </div>

                        <button type="submit" class="btn btn-success pr-5 pl-5" style="margin-left: 40px;">Modifier</button>
                </form>
            </div>
        </div>

        <div class="card-deck" >
            <div class="row-fluid" style="margin-top:45px;margin-bottom:45px;">
                
                    <div class="card">
                        <a href="#"><img class="card-img-top" src="../img/iso-3.png" alt="Card image cap"></a>
                        <div class="card-footer">
                            <a href="#"><h5 class="card-title text-center">Ajouter un nouveau cours</h5></a>
                        </div>
                    </div>

                    <div class="card">
                        <a href="#"><img class="card-img-top" src="../img/iso-3.png" alt="Card image cap"></a>
                        <div class="card-footer">
                            <a href="#"><h5 class="card-title text-center">Ajouter un nouveau excercice</h5></a>
                        </div>
                    </div>

                    <div class="card">
                        <a href="#"><img class="card-img-top" src="../img/iso-3.png" alt="Card image cap"></a>
                        <div class="card-footer">
                            <a href="#"><h5 class="card-title text-center">Mes cours disponible sur la plateforme</h5></a>
                        </div>
                    </div>

                    <div class="card">
                        <a href="#"><img class="card-img-top" src="../img/iso-3.png" alt="Card image cap"></a>
                        <div class="card-footer">
                            <a href="#"><h5 class="card-title text-center">Supprimer un cours/Exercice</h5></a>
                        </div>
                    </div>
                

                    <div class="card">
                        <a href="#"><img class="card-img-top" src="../img/iso-3.png" alt="Card image cap"></a>
                        <div class="card-footer">
                            <a href="#"><h5 class="card-title text-center">Cours sur les metier de l'internet</h5></a>
                        </div>
                    </div> 
            </div>
        </div>

        <div>
            <h2 class="page-header">Mes cours sur ENOLIA</h2>
            <div class="card-deck">
                <div class="card">
                    <h3 class="text-center card-card-title">Intitulé du cours</h3>
                    <div class="card-body">
                        <div class="text-justify ">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsam nobis aliquid corporis placeat ex temporibus. Dolorem reprehenderit ipsum alias, in dolores esse repellendus nisi eveniet incidunt maiores dignissimos expedita!
                            Molestias porro, excepturi placeat laudantium nisi rem a. Ipsum, ullam nam illum sint doloremque vel, quo tempore rem mollitia quidem odit. Sit facere maxime, accusantium deserunt nesciunt sapiente nihil aliquam?</p>
                        </div>
                        <small>
                            <p>Publié le 12/12/2012</p>
                            <p>View</p>
                        </small>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary pull-right">Voir plus</button>
                        <button class="btn btn-primary pull-left">Editer</button>
                    </div>
                </div>

                <div class="card">
                    <h3 class="text-center card-card-title">Intitulé du cours</h3>
                    <div class="card-body">
                        <div class="text-justify ">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsam nobis aliquid corporis placeat ex temporibus. Dolorem reprehenderit ipsum alias, in dolores esse repellendus nisi eveniet incidunt maiores dignissimos expedita!
                            Molestias porro, excepturi placeat laudantium nisi rem a. Ipsum, ullam nam illum sint doloremque vel, quo tempore rem mollitia quidem odit. Sit facere maxime, accusantium deserunt nesciunt sapiente nihil aliquam?</p>
                        </div>
                        <small>
                            <p>Publié le 12/12/2012</p>
                            <p>View</p>
                        </small>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary pull-right">Voir plus</button>
                        <button class="btn btn-primary pull-left">Editer</button>
                    </div>
                </div>

                <div class="card">
                    <h3 class="text-center card-card-title">Intitulé du cours</h3>
                    <div class="card-body">
                        <div class="text-justify ">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsam nobis aliquid corporis placeat ex temporibus. Dolorem reprehenderit ipsum alias, in dolores esse repellendus nisi eveniet incidunt maiores dignissimos expedita!
                            Molestias porro, excepturi placeat laudantium nisi rem a. Ipsum, ullam nam illum sint doloremque vel, quo tempore rem mollitia quidem odit. Sit facere maxime, accusantium deserunt nesciunt sapiente nihil aliquam?</p>
                        </div>
                        <small>
                            <p>Publié le 12/12/2012</p>
                            <p>View</p>
                        </small>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary pull-right">Voir plus</button>
                        <button class="btn btn-primary pull-left">Editer</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php
  include("cadre/cadre_bottom.php");
?>  