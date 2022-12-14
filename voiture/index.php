<?php
// SAVOIR SI LE FORMULAIRE EST VALIDE
if(isset($_POST["nom"])){
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];
    
    $to = "augustev005@gmail.com";
    $headers = "From: $email" ;
   
    
    $mail=mail($to,$sujet,$message,$headers);
    if($mail) {
   echo 'message envoyé'; } else {
   echo  'message non envoyé' ;
}}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        .turn-image {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1) 10s;
            transition-delay: 5s;
        }
    </style>
</head>

<body>

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="" class="logo"> <span>Tine</span>Cars </a>

        <nav class="navbar">
            <a href="#home">Accueil</a>
            <a href="#featured">Voitures</a>
            <a href="#services">Services</a>
            <a href="#vehicles">Populaires</a>
            <a href="#contact">Contact</a>
        </nav>

        <div id="login-btn">
            <button class="btn">Connexion</button>
            <i class="far fa-user"></i>
        </div>

    </header>

    <div class="login-form-container">

        <span id="close-login-form" class="fas fa-times"></span>

        <form action="" method="POST">
            <h3>connexion de l'utilisateur</h3>
            <input type="email" placeholder="email" class="box">
            <input type="mot de passe" placeholder="mot de passe" class="box">
            <p> oubliez votre mot de passe <a href="">cliquez ici</a> </p>
            <input type="s'inscrire" value="connectez-vous" class="btn">
            <p> ou connectez-vous avec </p>
            <div class="buttons">
                <a href="https://www.google.com/?hl=fr  target="_blank" class="btn"> google </a>
                <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Fcampaign%2Flanding.php%3Fcampaign_id%3D1641475131%26extra_1%3Ds%257Cc%257C314925569445%257Ce%257Cfacebook%2527%257C%26placement%26creative%3D314925569445%26keyword%3Dfacebook%2527%26partner_id%3Dgooglesem%26extra_2%3Dcampaignid%253D1641475131%2526adgroupid%253D62126053829%2526matchtype%253De%2526network%253Dg%2526source%253Dnotmobile%2526search_or_content%253Ds%2526device%253Dc%2526devicemodel%253D%2526adposition%253D%2526target%253D%2526targetid%253Dkwd-362360550869%2526loc_physical_ms%253D1012727%2526loc_interest_ms%253D%2526feeditemid%253D%2526param1%253D%2526param2%253D%26gclid%3DEAIaIQobChMI8s2054K2-gIVwuN3Ch2AxwZvEAAYASAAEgJTvPD_BwE" class="btn"  target="_blank"> facebook </a>
            </div>
            <p> vous n'avez pas de compte <a href="../tinecars/useraccount.php">créez-en un</a> </p>
        </form>

    </div>

    <section class="home" id="home">

        <h3 data-speed="-2" class="">Trouvez la voiture idéale</h3>

        <img data-speed="5" class="" src="image/VS.png" alt="">

        <!-- <a  href="" class="partie">c'est parti !</a> -->
        <div class="tr"></div>
    </section>


    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>20+</h3>
                <p>Agences</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>6330+</h3>
                <p>Voitures</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <div class="content">
                <h3>750+</h3>
                <p>Clients satisfaits</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>88+</h3>
                <p>Modèles</p>
            </div>
        </div>

    </section>

    <section class="vehicles" id="vehicles">

        <h1 class="heading"> Les plus <span>recherchées</span> </h1>

        <div class="swiper vehicles-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/vehicle-1.png" alt="">
                    <div class="content">
                        <h3>nouveau modèle</h3>
                        <div class="price"> <span>prix : </span> 62.000.000 </div>
                        <p>
                            nouveau
                            <span class="fas fa-circle"></span> 2019
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 200mph
                        </p>
                        <a href="" class="btn">vérifié</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/vehicle-2.png" alt="">
                    <div class="content">
                        <h3>nouveau modèle</h3>
                        <div class="price"> <span>prix : </span> 58.000.000 </div>
                        <p>
                            nouveau
                            <span class="fas fa-circle"></span> 2019
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 163mph
                        </p>
                        <a href="" class="btn">vérifier</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/vehicle-3.png" alt="">
                    <div class="content">
                        <h3>nouveau modèle</h3>
                        <div class="price"> <span>prix : </span> 85.000.000 </div>
                        <p>
                            nouveau
                            <span class="fas fa-circle"></span> 2020
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 155mph
                        </p>
                        <a href="" class="btn">vérifier</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/vehicle-4.png" alt="">
                    <div class="content">
                        <h3>nouveau modèle</h3>
                        <div class="price"> <span>prix : </span> 75.800.000</div>
                        <p>
                            nouveau
                            <span class="fas fa-circle"></span> 2018
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 173mph
                        </p>
                        <a href="" class="btn">vérifier</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/vehicle-5.png" alt="">
                    <div class="content">
                        <h3>nouveau modèle</h3>
                        <div class="price"> <span>prix : </span> 15.000.000 </div>
                        <p>
                            nouveau
                            <span class="fas fa-circle"></span> 2020
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 280mph
                        </p>
                        <a href="" class="btn">vérifier</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/vehicle-6.png" alt="">
                    <div class="content">
                        <h3>nouveau modèle</h3>
                        <div class="price"> <span>prix : </span> 55.000.000 </div>
                        <p>
                            Nouveau
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> petrol
                            <span class="fas fa-circle"></span> 143mph
                        </p>
                        <a href="" class="btn">vérifier</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section class="services" id="services">

        <h1 class="heading"> notre <span>service</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>Ventes</h3>
                <p>nous vendons les voitures a un très bon prix</p>
                <a href="" class="btn"> lire plus</a>
            </div>

            <div class="box">
                <i class="fas fa-tools"></i>
                <h3>Réparations</h3>
                <p>Nous proposons des services de réparation de voitures de toutes marques</p>
                <a href="" class="btn"> lire plus</a>
            </div>

            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>Assurances</h3>
                <p>Nous avons des services d'assurance en cas d'accident pour tout véhicule acheté chez nous.</p>
                <a href="" class="btn"> lire plus</a>
            </div>



        </div>

    </section>

    <section class="featured" id="featured">

        <h1 class="heading"> <span>voitures</span> vedettes </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/car-1.png" alt="">
                    <div class="content">
                        <h3>nouveau modèle</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">55.000.900 </div>
                        <a href="" class="btn">vérifier</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-2.png" alt="">
                    <div class="content">
                        <h3>nouveaux modèle</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">56.000.000 </div>
                        <a href="" class="btn">vérifier</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-3.png" alt="">
                    <div class="content">
                        <h3>nouveau modèle</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">25.000.000 </div>
                        <a href="" class="btn">vérifier</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-4.png" alt="">
                    <div class="content">
                        <h3>nouveau modèle</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">15.000.000</div>
                        <a href="" class="btn">vérifier</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/car-5.png" alt="">
                    <div class="content">
                        <h3>nouveau modèle</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">35.000.000 </div>
                        <a href="" class="btn">vérifier</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-6.png" alt="">
                    <div class="content">
                        <h3>nouveau modèle</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">25.000.000</div>
                        <a href="" class="btn">vérifier</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-7.png" alt="">
                    <div class="content">
                        <h3>nouveau modèle</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">52.000.000</div>
                        <a href="" class="btn">vérifier</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/car-8.png" alt="">
                    <div class="content">
                        <h3>nouveau modèle</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">65.000.000</div>
                        <a href="" class="btn">vérifier</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>                             
    

    <section class="newsletter">

        <h3>abonnez-vous pour les dernières mises à jour</h3>
        <p>Cliquez pour choisir votre numéro d'immatriculation</p>
        <div class="car">
        <!-- <form action=""> -->
        <a href="https://service-public.gouv.tg/single-administration/61bb073666dc3337885b8dbd" target="_blank" button class="btn btn-danger" type="submit" style="margin-left: 2%" ></button> <i class="fa-duotone fa-car-side"></i> sotoplaque </a>
        <!-- <button type="but" class="cursor-progress"> -->
        <!-- </button> -->
            <!-- <input type="email" placeholder="entrez votre email"> -->
            <!-- <input type="soumettre" value="s'inscrire"> -->
        <!-- </form> -->
    </div>

    </section>



    <section class="contact" id="contact">

        <h1 class="heading"><span>contactez</span> nous</h1>

        <div class="row">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5609.559059406698!2d1.1611072118641212!3d6.190091830637058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102159316891e211%3A0x4faacd232c7bda50!2sPharmacie%20Des%20Ecoles!5e0!3m2!1sfr!2stg!4v1664014634530!5m2!1sfr!2stg" class="map col-lg-6" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="col-lg-6">
                <form action="#" method="POST">
                    <!-- <h3>contactez-nous</h3> -->
                    <input type="text" name="nom" placeholder="votre nom" class="box">
                    <input type="email" name="email" placeholder="votre email" class="box">
                    <input type="text" name="sujet"  placeholder="sujet" class="box">
                    <textarea placeholder="votre message" name="message" class="box" cols="30" rows="10"></textarea>
                    <input type="submit" value="envoyer votre message" class="btn">
                </form>

            </div>

        </div>

    </section>

    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>NOTRE AGENCE</h3>
                <a href=""> <i class="fas fa-map-marker-alt"></i> TOGO </a>
                <a href=""> <i class="fas fa-map-marker-alt"></i> france </a>
                <a href=""> <i class="fas fa-map-marker-alt"></i> USA </a>
        
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href=""> <i class="fas fa-arrow-right"></i> Acceuil </a>
                <a href=""> <i class="fas fa-arrow-right"></i> voitures </a>
                <a href=""> <i class="fas fa-arrow-right"></i> services </a>
                <a href=""> <i class="fas fa-arrow-right"></i> vedettes </a>
                <a href=""> <i class="fas fa-arrow-right"></i> contacts </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href=""> <i class="fas fa-phone"></i> +22891453651</a>
                <a href=""> <i class="fas fa-phone"></i> +22897246538</a>
                <a href=""> <i class="fas fa-envelope"></i> augustev005@gmail.com </a>
                <a href=""> <i class="fas fa-map-marker-alt"></i> lomé, TOGO </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="https://www.facebook.com/augustus.evans.94" target="_blank">  <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="https://twitter.com/AugustusEvans8?t=X-RxMwgmWk6yb1jnQeyhxA&s=09" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="https://instagram.com/augustus_tina?igshid=YmMyMTA2M2Y=" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="https://www.linkedin.com/in/akossiwa-augustine-zokpodo-b10b22236/" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="https://pin.it/2sBlcbM" target="_blank"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>

        <div class="credit"> created by mrs. Augustine dev| all rights reserved </div>

    </section>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>

</html>