<?php
    require_once("../connect.php");
    //recuperation des dponnées sumit et traitement.
    if(empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["password"])){
        echo "impossible de se connecter veillez vous rendre dans la page securityUser pour vous connecter";
    }

    //declaration des variables et recuperation des valeurs; 
    $nameUser= htmlspecialchars($_POST["name"]);
    $mailuser= htmlspecialchars($_POST["email"]);
    $passworduser= htmlspecialchars($_POST["password"]);
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tamba Blog </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <?php /*langage sql et connection avec BDN */ $select = "SELECT * FROM `stockageusers`";?>

        <?php $query = $dataMysql -> query($select);?>
        <?php $Users = $query -> fetchAll();?>

        <!-- parcouris le tableau de BDn --> 
        <?php foreach($Users as $user):;?>

        <!--verification de données de l'utilisateur dans le BDn-->
        <?php
            if($user["nom"] == $nameUser &&
            $user["mail"] == $mailuser && $user["code"] == $passworduser):;
        ?>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h3 class="fw-bold">vous etes connecté</h3>
                        <div class="my-5">

                            <form id="contactForm" action="../insert.php" method="POST" data-sb-form-api-token="API_TOKEN">
                                <div class="form-floating">
                                    <input class="form-control" name="id" type="text" placeholder="Enter number of id..." data-sb-validations="required" />
                                    <label for="name">id of article</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="titre" type="text" placeholder="Enter your email..." data-sb-validations="required,text" />
                                    <label for="text">title of sujet</label>
                                  
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="titre2" type="text" placeholder="Enter your titre..." data-sb-validations="required,text" />
                                    <label for="text">title two of sujet</label>
                                    
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="story" rows="5" cols="33" placeholder="Enter your sujet..." data-sb-validations="required"> </textarea>
                                    <label for="phone">Enter your story...</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                </div>

                                <button class="btn btn-primary text-uppercase " id="submButton" type="submit">Send</button>
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2023</div>
                    </div>
                </div>
            </div>
        </footer>
        <?php endif;?>
        <?php endforeach;?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
