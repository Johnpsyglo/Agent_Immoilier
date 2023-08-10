
    <header>

        <nav>
            <div class="photo">
                <a href="immobilie.php"><img src="img\logo\logo-abri-nature-immo.png" width="100%" height="100%" alt="Logo"></a>
            </div>
            <div class="nav-right">
                <!-- Si il y a une session active on prend le nom dans la session pour afficher le message du h1 -->
                <?php
                if (isset($_SESSION['role']) && isset($_SESSION['nom'])) {
                    echo '
                        <h1 id="salut">Salut ' . $_SESSION['nom'] . ' :)</h1>
                        ';
                }
                ?>

                <button type="button" class="custom-btn-up updatebut" data-bs-toggle="modal" data-bs-target="#connexion" <?php
                        // Si il y a une session lancé alors on affiche hidden qui cachera le button CONNEXION
                        if (isset($_SESSION['role'])) {
                            echo 'hidden';
                        }
                        ?>><span>CONNEXION</span>
                </button>

                <button type="button" class="custom-btn-del deletebut" data-bs-toggle="modal" data-bs-target="#inscription" 
                <?php
                        // Si il y a une session lancé alors on affiche hidden qui cachera le button INSCRIPTION
                        if (isset($_SESSION['role'])) {
                            echo 'hidden';
                        }
                        ?>><span>INSCRIPTION</span></button>
                <?php
                // Si il y a une session lancé alors on affiche le button DECONNEXION
                if (isset($_SESSION['role'])) {
                    echo '
                        <a id="deconul" href="decor.php"><button type="button" class="custom-btn-deco decobut"><span> DECONNEXION </span></button></a> 
                        ';
                }
                ?>
                <?php
                // Si il y a une session lancé et que le role de la session est 2 alors on affiche le button DASHBOARD
                if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {
                    echo '
                            <a id="dashnul" href="dashboard.php"><button type="button" class="custom-btn-dash dashbut"';

                    $monUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                    if ($monUrl == "http://localhost/Agent_immobilier_08_08_2023/immobilier.php") {
                        echo 'hidden';
                    }
                    echo '
                            ><span> DASHBOARD </span></button></a>

                        ';
                }
                ?>
            </div>


            <!-- Modal connexion -->
            <div class="modal fade" id="connexion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">CONNEXION</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <!-- form codepen -->
                            <div class="login-page">

                                <div class="form">

                                    <form class="login-form" method="POST" action="connexion.php" id="connexi">
                                        <input name="nom" type="text" placeholder="Nom" />
                                        <input name="mdp" type="password" placeholder="Mot de passe" />
                                    </form>

                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button form="connexi" type="submit" class="btn btn-modal">CONNEXION</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal INSCRIPTION -->
            <div class="modal fade" id="inscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Mettre à jour un article</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <!-- form codepen -->
                            <div class="login-page">

                                <div class="form">

                                    <form class="login-form" method="POST" action="inscription.php" id="form_inscription">
                                        <input name="id_roles" type="number" value="3" hidden />
                                        <input name="nom" type="text" id="text" placeholder="Nom..." required />
                                        <input name="email" type="email" placeholder="Email..." required />
                                        <input name="mdp" type="password" placeholder="Mot de passe..." required />
                                        <input name="conf_mdp" type="password" placeholder="Confirmer le mot de passe..." required />
                                    </form>

                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button form="form_inscription" type="submit" class="btn btn-modal">S'INSCRIRE</button>
                        </div>
                    </div>
                </div>
            </div>

        </nav>

    </header>
    <!-- Le reste de ton contenu de blog ici -->