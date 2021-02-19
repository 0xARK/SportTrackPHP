<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Accueil</title>

    <!-- CSS THEME -->

    <link rel="stylesheet" href="resources/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/iconfonts/font-awesome/css/font-awesome.min.css">

    <style>

        *, *::before, *::after {
            box-sizing: border-box;
        }

        body {
            min-height: 450px;
            height: 100vh;
            margin: 0;
            color: #fff;
            /*background: radial-gradient(ellipse farthest-corner at center top, #f39264 0%, #f2606f 100%);*/
            font-family: "Open Sans", sans-serif;
        }

        .leaderboard {
            width: 100%;
            background: linear-gradient(to bottom, #3a404d, #181c26);
            border-radius: 10px;
            box-shadow: 0 7px 30px rgba(62, 9, 11, 0.3);
        }

        .leaderboard h1 {
            font-size: 18px;
            color: #e1e1e1;
            padding: 12px 13px 18px;
        }

        .leaderboard h1 svg {
            width: 25px;
            height: 26px;
            position: relative;
            top: 3px;
            margin-right: 6px;
            vertical-align: baseline;
        }

        .leaderboard ol {
            counter-reset: leaderboard;
        }

        .leaderboard ol li {
            position: relative;
            z-index: 1;
            font-size: 14px;
            counter-increment: leaderboard;
            padding: 18px 10px 18px 50px;
            cursor: pointer;
            backface-visibility: hidden;
            transform: translateZ(0) scale(1, 1);
        }

        .leaderboard ol li::before {
            content: counter(leaderboard);
            position: absolute;
            z-index: 2;
            top: 15px;
            left: 15px;
            width: 20px;
            height: 20px;
            line-height: 20px;
            color: #c24448;
            background: #fff;
            border-radius: 20px;
            text-align: center;
        }

        .leaderboard ol li mark {
            position: absolute;
            z-index: 2;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 18px 10px 18px 50px;
            margin: 0;
            background: none;
            color: #fff;
        }

        .leaderboard ol li mark::before, .leaderboard ol li mark::after {
            content: "";
            position: absolute;
            z-index: 1;
            bottom: -11px;
            left: -9px;
            border-top: 10px solid #c24448;
            border-left: 10px solid transparent;
            transition: all 0.1s ease-in-out;
            opacity: 0;
        }

        .leaderboard ol li mark::after {
            left: auto;
            right: -9px;
            border-left: none;
            border-right: 10px solid transparent;
        }

        .leaderboard ol li small {
            position: relative;
            z-index: 2;
            display: block;
            text-align: right;
        }

        .leaderboard ol li::after {
            content: "";
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fa6855;
            box-shadow: 0 3px 0 rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease-in-out;
            opacity: 0;
        }

        .leaderboard ol li:nth-child(1) {
            background: #fa6855;
        }

        .leaderboard ol li:nth-child(1)::after {
            background: #fa6855;
        }

        .leaderboard ol li:nth-child(2) {
            background: #e0574f;
        }

        .leaderboard ol li:nth-child(2)::after {
            background: #e0574f;
            box-shadow: 0 2px 0 rgba(0, 0, 0, 0.08);
        }

        .leaderboard ol li:nth-child(2) mark::before, .leaderboard ol li:nth-child(2) mark::after {
            border-top: 6px solid #ba4741;
            bottom: -7px;
        }

        .leaderboard ol li:nth-child(3) {
            background: #d7514d;
        }

        .leaderboard ol li:nth-child(3)::after {
            background: #d7514d;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.11);
        }

        .leaderboard ol li:nth-child(3) mark::before, .leaderboard ol li:nth-child(3) mark::after {
            border-top: 2px solid #b0433f;
            bottom: -3px;
        }

        .leaderboard ol li:nth-child(4) {
            background: #cd4b4b;
        }

        .leaderboard ol li:nth-child(4)::after {
            background: #cd4b4b;
            box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.15);
        }

        .leaderboard ol li:nth-child(4) mark::before, .leaderboard ol li:nth-child(4) mark::after {
            top: -7px;
            bottom: auto;
            border-top: none;
            border-bottom: 6px solid #a63d3d;
        }

        .leaderboard ol li:nth-child(5) {
            background: #c24448;
        }

        .leaderboard ol li:nth-child(5)::after {
            background: #c24448;
            box-shadow: 0 -2.5px 0 rgba(0, 0, 0, 0.12);
        }

        .leaderboard ol li:nth-child(5) mark::before, .leaderboard ol li:nth-child(5) mark::after {
            top: -9px;
            bottom: auto;
            border-top: none;
            border-bottom: 8px solid #993639;
        }

        .leaderboard ol li:hover {
            z-index: 2;
            overflow: visible;
        }

        .leaderboard ol li:hover::after {
            opacity: 1;
            transform: scaleX(1.06) scaleY(1.03);
        }

        .leaderboard ol li:hover mark::before, .leaderboard ol li:hover mark::after {
            opacity: 1;
            transition: all 0.35s ease-in-out;
        }

        .the-most {
            position: fixed;
            z-index: 1;
            bottom: 0;
            left: 0;
            width: 50vw;
            max-width: 200px;
            padding: 10px;
        }

        .the-most img {
            max-width: 100%;
        }

        ol {
            padding-left: 0rem;
            list-style: none;
        }
    </style>

</head>

<body id="body">

<div class="container-scroller">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top"
         style="background: white; border-bottom: 1px solid #ff7b00">
        <div class="navbar-collapse collapse">
            <form class="navbar-nav mr-auto" action="" method="post">
                <input type="hidden" name="page" value="/">
                <button type="submit" class="navbar-brand"
                        style="background: transparent; border: 0px solid transparent;">
                    <img class="img-fluid" style="max-height: 50px;" src="resources/img/sport_track.png">
                    <span style="color: #ff7b00;"><b>SportTrack</span></b>
                </button>
            </form>
        </div>
<?php

        if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {

            echo '<form class="mr-3" action="" method="POST">
                <input type="hidden" name="page" value="admin_panel">
                <button type="submit" class="btn btn-block btn-primary return">Administration</button>
              </form>
              <form action="" method="POST">
                 <input type="hidden" name="page" value="user_disconnect">
                 <button type="submit" class="btn btn-block btn-primary return">Se déconnecter</button>
              </form>';

        } else {

            if (isset($_SESSION['user']['email'])) {

                echo '<form class="mr-3" action="" method="POST">
                    <input type="hidden" name="page" value="list_activities">
                    <button type="submit" class="btn btn-block btn-primary return">Mes activités</button>
                  </form>
                  <form class="mr-3" action="" method="POST">
                    <input type="hidden" name="page" value="modify_account_form">
                    <button type="submit" class="btn btn-block btn-primary return">Mon compte</button>
                  </form>
                  <form action="" method="POST">
                    <input type="hidden" name="page" value="user_disconnect">
                    <button type="submit" class="btn btn-block btn-primary return">Se déconnecter</button>
                  </form>
                  ';

            } else {

                echo '<form class="mr-3" action="" method="POST">
                    <input type="hidden" name="page" value="user_add_form">
                    <button type="submit" class="btn btn-block btn-primary return">S\'inscrire</button>
                  </form>
                  <form action="" method="POST">
                    <input type="hidden" name="page" value="user_connect_form">
                    <button type="submit" class="btn btn-block btn-primary return">Se connecter</button>
                  </form>';

            }

        }

?>
    </nav>

    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">

            <!-- CONTENT WRAPPER -->

            <div class="home-wrapper">

                <div class="row mt-5">
                    <div class="col-6 offset-3 col-md-2 offset-md-3 text-center mt-5">
                        <div class="mr-auto ml-auto d-flex align-items-center mt-5 mb-4"
                             style="border-radius: 50%; background: #ff7b00; height: 100px; width: 100px;">
                            <span class="text-center w-100"><span class="fa fa-cogs"
                                                                  style="font-size: 2.5rem; color: #f0f2f7;"></span></span>
                        </div>
                        <span style="color: black">Une application performante et intuitive, disponible sur toutes les plateformes.</span>
                    </div>
                    <div class="col-6 offset-3 col-md-2 offset-md-0 text-center mt-5">
                        <div class="mr-auto ml-auto d-flex align-items-center mt-5 mb-4"
                             style="border-radius: 50%; background: #ff7b00; height: 100px; width: 100px;">
                            <span class="text-center w-100"><span class="fa fa-bar-chart-o"
                                                                  style="font-size: 2.5rem; color: #f0f2f7;"></span></span>
                        </div>
                        <span style="color: black">Un suivi en temps réel de vos performances, grâce à la montre connectée SportTrack.</span>
                    </div>
                    <div class="col-6 offset-3 col-md-2 offset-md-0 text-center mt-5">
                        <div class="mr-auto ml-auto d-flex align-items-center mt-5 mb-4"
                             style="border-radius: 50%; background: #ff7b00; height: 100px; width: 100px;">
                            <span class="text-center w-100"><span class="fa fa-comments-o"
                                                                  style="font-size: 2.5rem; color: #f0f2f7;"></span></span>
                        </div>
                        <span style="color: black">Une équipe à votre écoute, prête à vous répondre 7 jours sur 7 et 24h sur 24.</span>
                    </div>
                </div>

                <?php if (isset($_SESSION["users"])) { ?>
                    <div class="row mt-5">
                        <div class="col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <div class="leaderboard">
                                <h1>
                                    <svg class="ico-cup">
                                        <use xlink:href="#cup"></use>
                                    </svg>
                                    Meilleurs coureurs
                                </h1>
                                <ol>
                                    <?php
                                    foreach ($_SESSION['users'] as $sportsman) {
                                        ?>
                                        <li>
                                            <mark><?php echo $sportsman->getFirstName() . " " . $sportsman->getLastName() ?></mark>
                                            <small><?php echo round($sportsman->distance_sum, 2, PHP_ROUND_HALF_UP) . " km parcourus" ?></small>
                                        </li>

                                        <?php
                                    }
                                    ?>

                                </ol>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <svg style="display: none;">
                    <symbol id="cup" x="0px" y="0px" width="25px" height="26px" viewBox="0 0 25 26"
                            enable-background="new 0 0 25 26" xml:space="preserve">
                        <path fill="#F26856" d="M21.215,1.428c-0.744,0-1.438,0.213-2.024,0.579V0.865c0-0.478-0.394-0.865-0.88-0.865H6.69
	                        C6.204,0,5.81,0.387,5.81,0.865v1.142C5.224,1.641,4.53,1.428,3.785,1.428C1.698,1.428,0,3.097,0,5.148
	                        C0,7.2,1.698,8.869,3.785,8.869h1.453c0.315,0,0.572,0.252,0.572,0.562c0,0.311-0.257,0.563-0.572,0.563
	                        c-0.486,0-0.88,0.388-0.88,0.865c0,0.478,0.395,0.865,0.88,0.865c0.421,0,0.816-0.111,1.158-0.303
	                        c0.318,0.865,0.761,1.647,1.318,2.31c0.686,0.814,1.515,1.425,2.433,1.808c-0.04,0.487-0.154,1.349-0.481,2.191
	                        c-0.591,1.519-1.564,2.257-2.975,2.257H5.238c-0.486,0-0.88,0.388-0.88,0.865v4.283c0,0.478,0.395,0.865,0.88,0.865h14.525
	                        c0.485,0,0.88-0.388,0.88-0.865v-4.283c0-0.478-0.395-0.865-0.88-0.865h-1.452c-1.411,0-2.385-0.738-2.975-2.257
	                        c-0.328-0.843-0.441-1.704-0.482-2.191c0.918-0.383,1.748-0.993,2.434-1.808c0.557-0.663,1-1.445,1.318-2.31
	                        c0.342,0.192,0.736,0.303,1.157,0.303c0.486,0,0.88-0.387,0.88-0.865c0-0.478-0.394-0.865-0.88-0.865
	                        c-0.315,0-0.572-0.252-0.572-0.563c0-0.31,0.257-0.562,0.572-0.562h1.452C23.303,8.869,25,7.2,25,5.148
	                        C25,3.097,23.303,1.428,21.215,1.428z M5.238,7.138H3.785c-1.116,0-2.024-0.893-2.024-1.99c0-1.097,0.908-1.99,2.024-1.99
	                        c1.117,0,2.025,0.893,2.025,1.99v2.06C5.627,7.163,5.435,7.138,5.238,7.138z M18.883,21.717v2.553H6.118v-2.553H18.883
	                        L18.883,21.717z M13.673,18.301c0.248,0.65,0.566,1.214,0.947,1.686h-4.24c0.381-0.472,0.699-1.035,0.947-1.686
	                        c0.33-0.865,0.479-1.723,0.545-2.327c0.207,0.021,0.416,0.033,0.627,0.033c0.211,0,0.42-0.013,0.627-0.033
	                        C13.195,16.578,13.344,17.436,13.673,18.301z M12.5,14.276c-2.856,0-4.93-2.638-4.93-6.273V1.73h9.859v6.273
	                        C17.43,11.638,15.357,14.276,12.5,14.276z M21.215,7.138h-1.452c-0.197,0-0.39,0.024-0.572,0.07v-2.06
	                        c0-1.097,0.908-1.99,2.024-1.99c1.117,0,2.025,0.893,2.025,1.99C23.241,6.246,22.333,7.138,21.215,7.138z"/>
                    </symbol>
                </svg>


            </div>
        </div>
    </div>
</div>

</body>
</html>