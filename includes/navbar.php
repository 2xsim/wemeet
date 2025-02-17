<?php
        echo '<header>';
            if (isset($_SESSION['page'])) {
                switch ($_SESSION['page']) {
                    case 'inscription':
                        ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" href="index.php">
            <span style="font-family: 'Cinzel' , serif;">Titanic</span>
        </a>
        <a class="btn btn-light btn-rounded" href="connexion.php"> <b>Se connecter</b>
        </a>
    </div>
</nav>

<?php ;
                        break;
                    
                    
                    case 'connexion':
                        ?>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" href="index.php">
            <span style="font-family: 'Cinzel' , serif;">Titanic</span>
        </a>

        <a class="btn btn-light btn-rounded" href="inscription.php"> <b>S'inscrire</b>
        </a>
    </div>
</nav>

<?php ;
                            break;
                        
                        
                        case 'index' :
                            ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" href="index.php">
            <strong>Titanic</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="#plan1">Pourquoi nous choisir ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#plan2">Nos conseils</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#plan3">Témoignages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Les ateliers</a>
                </li>
            </ul>


            <a class="btn btn-outline-light btn-rounded" href="connexion.php">Se connecter
            </a>
            <a class="btn btn-outline-light btn-rounded" href="inscription.php">S'inscrire
            </a>

        </div>
    </div>
</nav>

<?php ;
                            break;

                        case 'acc_user' :
                            ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid justify-content-between">
        <!-- Left elements -->
        <div class="d-flex">
            <!-- Brand -->
            <a class="navbar-brand nav-link" href="acc_user.php">
                <span style="font-family: 'Cinzel' , serif;">Titanic</span>
            </a>

            <!-- Search form -->

        </div>
        <!-- Left elements -->

        <!-- Center elements -->
        <ul class="navbar-nav flex-row d-none d-md-flex align-items-center">
            <li class="nav-item mx-1">
                <a class="nav-link" id="home" href="?page=home">
                    <span><i class="fas fa-home fa-lg"></i></span>
                    <span class="badge rounded-pill badge-notification bg-danger">-</span>
                </a>
            </li>

            <li class="nav-item mx-1">
                <form id="search_form" action="">
                    <input id=search_input type="search">
                    <i class="fa fa-search" id="loupe"></i>
                </form>
            </li>

            <li class="nav-item mx-1">
                <a class="nav-link" id="users" href="?page=users">
                    <span><i class="fas fa-users fa-lg"></i></span>
                    <span class="badge rounded-pill badge-notification bg-danger">-</span>
                </a>
            </li>
        </ul>
        <!-- Center elements -->

        <!-- Right elements -->
        <ul class="navbar-nav flex-row">
            <li class="nav-item dropdown me-3 me-lg-1">
                <a class="nav-link" id="chat" href="?page=chat" role="button">
                    <i class="fas fa-comments fa-lg"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">-</span>
                </a>
            </li>
            <!-- Avatar -->
            <li class="nav-item dropdown me-3 me-lg-1">
                <a class="nav-link dropdown-toggle d-flex align-items-center" id="avatar" href="#"
                    id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <strong class="d-none d-sm-block mx-2"><?= $current_user_pseudo ?></strong>
                    <?php
                        if(empty($current_user_photo_de_profil)){
                            if ($current_user_sexe == "M") {
                                ?>
                    <img src="./img/male.jpg" class="rounded-circle bg-white" height="26" alt="" loading="lazy">
                    <?php
                            } else {
                                ?>
                    <img src="./img/female.jpg" class="rounded-circle bg-white" height="26" alt="" loading="lazy">
                    <?php
                            }
                            
                            
                        } else {
                            ?>
                    <img src="./uploads/<?= $current_user_photo_de_profil ?>" class="rounded-circle bg-white"
                        height="26" alt="" loading="lazy">
                    <?php
                        }
                        
                    ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item d-flex align-items-center justify-content-center"
                            href="?page=my_profile"><i class="fas fa-user fa-lg me-1"></i>Mon
                            profil</a></li>
                    <li><a class="dropdown-item d-flex align-items-center justify-content-center"
                            href="?page=settings"><i class="fas fa-cog fa-lg me-1"></i>Paramètres</a></li>
                    <li class="divider dropdown-divider"></li>
                    <li><a class="dropdown-item d-flex align-items-center justify-content-center"
                            href="traitements/traitement_deconnexion.php"><i
                                class="fas fa-power-off fa-lg me-1"></i>Déconnexion</a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- Right elements -->
    </div>
</nav>

<?php ;
                            break ;

                        case 'new_user' :
                            ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid justify-content-between">
        <!-- Left elements -->
        <div class="d-flex">
            <!-- Brand -->
            <a class="navbar-brand nav-link disabled" href="new_user.php">
                <strong>Titanic</strong>
            </a>

            <!-- Search form -->

        </div>
        <!-- Left elements -->

        <!-- Center elements -->
        <ul class="navbar-nav flex-row d-none d-md-flex align-items-center">
            <li class="nav-item mx-1">
                <a class="nav-link active" href="acc_user.php">
                    <span><i class="fas fa-home fa-lg"></i></span>
                </a>
            </li>

            <li class="nav-item mx-1">
                <form id="search_form" action="">
                    <input id="search_input" type="search">
                    <i class="fa fa-search"></i>
                </form>
            </li>

            <li class="nav-item mx-1">
                <a class="nav-link disabled" href="?page=users">
                    <span><i class="fas fa-users fa-lg"></i></span>
                </a>
            </li>
        </ul>
        <!-- Center elements -->

        <!-- Right elements -->
        <ul class="navbar-nav flex-row">
            <li class="nav-item me-3 me-lg-1">
                <a class="nav-link disabled" href="?page=chat" role="button">
                    <i class="fas fa-comments fa-lg"></i>

                </a>
            </li>
            <!-- Avatar -->
            <li class="nav-item dropdown me-3 me-lg-1">
                <a class="nav-link dropdown-toggle d-flex align-items-center disabled" href="#"
                    id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <strong class="d-none d-sm-block mx-2"><?= $current_user_pseudo ?></strong>
                    <?php
                        if(empty($current_user_photo_de_profil)){
                            if ($current_user_sexe == "M") {
                                ?>
                    <img src="./img/male.jpg" class="rounded-circle bg-white" height="26" alt="" loading="lazy">
                    <?php
                            } else {
                                ?>
                    <img src="./img/female.jpg" class="rounded-circle bg-white" height="26" alt="" loading="lazy">
                    <?php
                            }
                            
                            
                        } else {
                            ?>
                    <img src="./uploads/<?= $current_user_photo_de_profil ?>" class="rounded-circle bg-white"
                        height="26" alt="" loading="lazy">
                    <?php
                        }
                        
                    ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item d-flex align-items-center justify-content-center"
                            href="?page=my_profile"><span class="material-icons me-1">
                                person
                            </span>Mon
                            profil</a></li>
                    <li><a class="dropdown-item d-flex align-items-center justify-content-center"
                            href="?page=settings"><span class="material-icons me-1">
                                settings
                            </span>Paramètres</a></li>
                    <li class="divider dropdown-divider"></li>
                    <li><a class="dropdown-item d-flex align-items-center justify-content-center" href="#"><span
                                class="material-icons-outlined me-1">
                                power_settings_new
                            </span>Déconnexion</a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- Right elements -->
    </div>
</nav>

<?php ;
                        break;
                        
                        default:
                            echo "DEFAUT";
                            break;
                    
                }
            }
            echo '</header>';
            ?>