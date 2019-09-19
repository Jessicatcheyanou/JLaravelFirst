<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Karisma Concepts | Votre Concepteur</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins for the Projects ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="plugins/fontawesome/font-awesome.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="plugins/venobox/venobox.css">
    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/iconfinder_globe.png" type="image/x-icon">
    <link rel="icon" href="images/iconfinder_globe.png" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="loader-wrapper">
        <div class="wrapper">
            <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 393.7 373.5"
                style="enable-background:new 0 0 393.7 373.5;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill: #13110C;
                        stroke: #2B2523;
                        stroke-width: 0.5;
                        stroke-miterlimit: 10;
                    }

                    .st1 {
                        fill: none;
                        stroke: #2B2523;
                        stroke-width: 4;
                        stroke-linecap: round;
                        stroke-miterlimit: 10;
                    }

                    .st2 {
                        fill: #13110C;
                    }

                    .st3 {
                        fill: #F6A31A;
                        stroke: #F6A31A;
                        stroke-width: 1;
                        stroke-miterlimit: 10;
                    }
                </style>
                <g>
                    <path class="st3" d="M199.5,309C124,309,62.6,247.6,62.6,172.1c0-75.5,61.4-136.9,136.9-136.9c75.5,0,136.9,61.4,136.9,136.9
               c0,32.5-11.6,64-32.6,88.7c-1.1,1.2-2.9,1.4-4.2,0.3c-1.2-1.1-1.4-2.9-0.3-4.2c20.1-23.6,31.2-53.8,31.2-84.9
               c0-72.2-58.8-131-131-131s-131,58.8-131,131c0,72.2,58.8,131,131,131c7.1,0,14.2-0.6,21.1-1.7c1.6-0.3,3.1,0.8,3.4,2.4
               s-0.8,3.1-2.4,3.4C214.4,308.4,206.9,309,199.5,309z" />
                    <g>
                        <path class="st3" d="M193.2,247.5c-0.4,1.5-0.6,2.9-0.6,4.1c0,1.3-0.2,2.2-0.5,2.9c-0.3,0.7-0.8,1-1.5,0.9c-0.7-0.1-1.9-0.7-3.5-2
                   c-4.9-3.6-8.7-7-11.1-10c-2.5-3-3.3-6.2-2.6-9.4c0.3-3.1,0.8-7.2,1.7-12.1c0.9-4.9,2-10.2,3.3-16c1.3-5.8,2.8-11.8,4.5-18.1
                   c1.6-6.3,3.4-12.4,5.1-18.5c1.8-6,3.5-11.7,5.2-17c1.7-5.3,3.3-9.9,4.8-13.8c1.8-4.6,2.8-8.2,3.2-10.6c0.4-2.4,0.2-4.1-0.5-5
                   c-0.7-0.9-1.9-1.1-3.6-0.7c-1.7,0.4-3.7,1.2-6.1,2.4c-2.3,1.1-4.9,2.5-7.6,4.2c-2.7,1.7-5.5,3.3-8.3,4.8c-6.8,3.8-13,5.7-18.5,5.8
                   c-5.5,0.1-10.2-1-13.9-3.4c-3.8-2.4-6.6-5.6-8.4-9.6c-1.8-4-2.4-8.3-1.8-12.8c0.3-2,0.6-3.4,1.1-4.2c0.5-0.8,1-1.2,1.6-1
                   c0.6,0.1,1.2,0.6,1.8,1.3c0.6,0.8,1.1,1.6,1.5,2.6c1.1,2.8,3.2,4.6,6.1,5.5c3,0.9,6.4,1.2,10.5,0.8c4-0.3,8.4-1,13.2-2.2
                   c4.8-1.1,9.6-2.4,14.6-3.9c4.9-1.4,9.7-2.9,14.3-4.2c4.6-1.4,8.7-2.4,12.4-3c5.8-1,10.5-0.7,14.1,0.8c3.6,1.6,5.2,4.4,4.7,8.6
                   c-0.4,2.1-1.3,5.5-2.7,10c-1.4,4.5-3.2,9.9-5.3,16c-2.1,6.2-4.3,12.8-6.7,20.1c-2.4,7.2-4.8,14.7-7.2,22.3c1-0.3,1.9-0.3,2.6,0
                   c7-4.5,13.8-9.7,20.3-15.5c6.5-5.8,12.6-12,18.5-18.5c5.8-6.5,11.4-13.1,16.8-19.9c5.3-6.8,10.4-13.4,15.2-20c1-1.3,2.2-1.3,3.7,0
                   c1.4,1.3,2.8,3,4,5.4c1.2,2.3,2.1,4.8,2.6,7.4c0.6,2.6,0.5,4.6-0.3,6c-9.9,13.4-21,25.7-33.4,36.7c-12.3,11.1-25.8,20.7-40.3,29
                   c3,6.9,6.5,14.4,10.5,22.4c4,8,8.4,15.9,13.4,23.5c5,7.6,10.4,14.6,16.4,21.1c6,6.5,12.4,11.7,19.3,15.7c6.9,4,14.3,6.4,22.1,7.1
                   c7.9,0.7,16.2-0.9,25-4.8c1-0.4,1.9-0.4,2.7-0.2c0.8,0.3,1.4,0.7,1.7,1.2c0.3,0.6,0.3,1.2,0.1,2c-0.3,0.8-0.9,1.4-1.9,1.9
                   c-11.7,6.9-22.4,10.8-32.2,11.8c-9.8,0.9-18.8-0.3-26.9-3.7c-8.2-3.4-15.5-8.5-22.1-15.2c-6.6-6.7-12.5-14.3-17.7-22.8
                   c-5.2-8.5-9.8-17.3-13.7-26.6c-3.9-9.2-7.3-18.1-10.2-26.5c-0.3,0.3-0.8,0.5-1.5,0.8c-2.4,8.7-4.3,16.9-5.8,24.8
                   C193.9,234.5,193.2,241.5,193.2,247.5z" />
                    </g>
                </g>
            </svg>
        </div>
    </div>
    <div id="desktop_content" class="container" style="display: none;">

        <div class="logo_fo preloader">
            <img src="images/logo.png" class="col col-md-12 d-flex justify-content-center justify-content-md-start"
                alt="">
        </div>

        <div class="row trait_header">
            <h4 class="constr">July 19,2019</h4><br>
            <hr class="col-3 col-sm-6 col-md-3 col-lg">

        </div>
        <div class="row">
            <span class="texte_intro">GET SOME FRESH </span>
        </div>

        <div class="services">
            <ul class="list-serv">
                <li>Conception Graphique</li>
                <li>Création de site web</li>
                <li>Marketing Digital</li>
                <li>Stratégies & Conseils</li>
            </ul>
        </div>



        <div class="descrip">
            <p> <span class="">une agence professionnelle de <br> conception Web et graphiques</span> <br><br>
                spécialisée dans les services de marketing
                numérique, de développement vidéo et de développement de sites Web, commerce électronique, référencement
                et de stratégie.</p>
        </div>

        <div class="contacts">


            <div class="button-container" id="myButton">
                <div class="button-icon-container">
                    <ion-icon name="phone-portrait"></ion-icon>
                </div>
                <div class="button-text-container">
                    <span>+237 65 015 51 00 / 695 48 69 09.</span>
                </div>
            </div>
            <div class="button-container1" id="myButton">
                <div class="button-icon-container">
                    <ion-icon name="mail"></ion-icon>
                </div>
                <div class="button-text-container">
                    <span>biz@karismaconcepts.com</span>
                </div>
            </div>
            <div class="button-container2" id="myButton">
                <div class="button-icon-container">
                    <ion-icon name="logo-instagram"></ion-icon>
                </div>
                <div class="button-text-container">
                    <span>@karismaconcepts.</span>
                </div>
            </div>
            <div class="button-container3" id="myButton">
                <div class="button-icon-container">
                    <ion-icon name="logo-facebook"></ion-icon>
                </div>
                <div class="button-text-container">
                    <span>@karismaconcepts.</span>
                </div>
            </div>
            <div class="button-container4" id="myButton">
                <div class="button-icon-container">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </div>
                <div class="button-text-container">
                    <span>@karismaconcepts.</span>
                </div>
            </div>
            <div class="button-container5" id="myButton">
                <div class="button-icon-container">
                    <ion-icon name="logo-twitter"></ion-icon>
                </div>
                <div class="button-text-container">
                    <span>@karismaconcepts.</span>
                </div>
            </div>







        </div>

        <div class="sm-contacts">
                <div>
                        <div class="button-phone">
                                <ion-icon name="phone-portrait"></ion-icon>

                        </div>
                        <div class="button-text-phone">
                            <span>+237 65 015 51 00 / 695 48 69 09.</span>
                        </div>

                </div>

                <div>
                    <div class="button-email">
                            <ion-icon name="mail"></ion-icon>
                    </div>
                    <div class="button-text-email">
                            <span>biz@karismaconcepts.com</span>
                    </div>
                </div>

                <div>
                        <div class="button-instagram">
                                <ion-icon name="logo-instagram"></ion-icon>
                        </div>
                        <div class="button-text-instagram">
                                <span>@karismaconcepts.</span>
                        </div>
                </div>

                <div>
                        <div class="button-facebook">
                                <ion-icon name="logo-facebook"></ion-icon>
                        </div>
                        <div class="button-text-facebook">
                                <span>@karismaconcepts.</span>
                        </div>
                </div>

                <div>
                        <div class="button-linkedin">
                                <ion-icon name="logo-linkedin"></ion-icon>
                        </div>
                        <div class="button-text-linkedin">
                                <span>@karismaconcepts.</span>
                        </div>
                </div>

                <div>
                        <div class="button-twitter">
                                <ion-icon name="logo-twitter"></ion-icon>
                        </div>
                        <div class="button-text-twitter">
                                <span>@karismaconcepts.</span>
                        </div>
                </div>
        </div>

        <div class="vl"></div>




    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.loader-wrapper').css('display', 'none');
                $('.container').css('display', 'block');
            }, 5000);

        });
    </script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>
