<?php
ob_start();
?>

<body>
    <section class="banner">
        <div class="gradient">
            <article class="d-flex flex-column align-items-end justify-content-center">
                <div class="banner-text-container">
                    <strong>
                        <h1>Rénover et réparer<br>n'a jamais été aussi simple !</h1>
                    </strong>
                    <p>Retrouvez des professionels du secteur du BTP en 3 clics.</p>
                </div>
            </article>
        </div>
        <form class="d-flex flex-column align-items-center">
            <label for="metier">Quel métier ?</label>
            <select>
                <option class="bg-light" value="Métier" disabled="true" selected>Métier...</option>
                <option class="bg-light" value="">Maçon</option>
                <option class="bg-light" value="">Architecte</option>
                <option class="bg-light" value="">Electricien</option>
                <option class="bg-light" value="">Serrurier</option>
                <option class="bg-light" value="">Peintre</option>
                <option class="bg-light" value="">Plombier</option>
                <option class="bg-light" value="">Plaquiste</option>
                <option class="bg-light" value="">Menuisier</option>
                <option class="bg-light" value="">Carreleur</option>
                <option class="bg-light" value="">Charpentier</option>
            </select>
            <label for="ville">Dans quel ville ?</label>
            <input type="text" name="ville" id="ville" placeholder="Ville...">
            <input type="submit" value="Rechercher">
        </form>
    </section>

    <main>
        <section class="text-center">
            <h2>CATEGORIES</h2>
            <p>Accéder directement à la catégorie que vous souhaitez ci-dessous.</p>
            <article class="categorie-container d-flex align-items-center justify-content-center flex-wrap">

                <div class="categorie flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex justify-content-center align-items-center flex-column rounded">
                            <img src="../../assets/icons/svg/categorie/brick-wall.svg" class="svg" alt="">
                            <p>Maçon</p>
                        </div>
                        <div class="flip-card-back d-flex justify-content-center align-items-center flex-column rounded">
                            <p>Retrouvez les meilleurs maçons de votre secteur.</p>
                            <a href=""><button>Visiter la page</button></a>
                        </div>
                    </div>
                </div>

                <div class="categorie flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex justify-content-center align-items-center flex-column rounded">
                            <img src="../../assets/icons/svg/categorie/design.svg" class="svg" alt="">
                            <p>Architecte</p>
                        </div>
                        <div class="flip-card-back d-flex justify-content-center align-items-center flex-column rounded">
                            <p>Retrouvez les meilleurs architectes de votre secteur.</p>
                            <a href=""><button>Visiter la page</button></a>
                        </div>
                    </div>
                </div>

                <div class="categorie flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex justify-content-center align-items-center flex-column rounded">
                            <img src="../../assets/icons/svg/categorie/light-bulb.svg" class="svg" alt="">
                            <p>Electricien</p>
                        </div>
                        <div class="flip-card-back d-flex justify-content-center align-items-center flex-column rounded">
                            <p>Retrouvez les meilleurs électricien de votre secteur.</p>
                            <a href=""><button>Visiter la page</button></a>
                        </div>
                    </div>
                </div>

                <div class="categorie flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex justify-content-center align-items-center flex-column rounded">
                            <img src="../../assets/icons/png/padlock.png" class="svg" alt="">
                            <p>Serrurier</p>
                        </div>
                        <div class="flip-card-back d-flex justify-content-center align-items-center flex-column rounded">
                            <p>Retrouvez les meilleurs sérruriers de votre secteur.</p>
                            <a href=""><button>Visiter la page</button></a>
                        </div>
                    </div>
                </div>

                <div class="categorie flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex justify-content-center align-items-center flex-column rounded">
                            <img src="../../assets/icons/svg/categorie/paint-roller.svg" class="svg" alt="">
                            <p>Peintre</p>
                        </div>
                        <div class="flip-card-back d-flex justify-content-center align-items-center flex-column rounded">
                            <p>Retrouvez les meilleurs peintres de votre secteur.</p>
                            <a href=""><button>Visiter la page</button></a>
                        </div>
                    </div>
                </div>

                <div class="categorie flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex justify-content-center align-items-center flex-column rounded">
                            <img src="../../assets/icons/svg/categorie/pipeline.svg" class="svg" alt="">
                            <p>Plombier</p>
                        </div>
                        <div class="flip-card-back d-flex justify-content-center align-items-center flex-column rounded">
                            <p>Retrouvez les meilleurs plombiers de votre secteur.</p>
                            <a href=""><button>Visiter la page</button></a>
                        </div>
                    </div>
                </div>

                <div class="categorie flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex justify-content-center align-items-center flex-column rounded">
                            <img src="../../assets/icons/svg/categorie/putty-knife.svg" class="svg" alt="">
                            <p>Plaquiste</p>
                        </div>
                        <div class="flip-card-back d-flex justify-content-center align-items-center flex-column rounded">
                            <p>Retrouvez les meilleurs plaquistes de votre secteur.</p>
                            <a href=""><button>Visiter la page</button></a>
                        </div>
                    </div>
                </div>

                <div class="categorie flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex justify-content-center align-items-center flex-column rounded">
                            <img src="../../assets/icons/svg/categorie/saw.svg" class="svg" alt="">
                            <p>Menuisier</p>
                        </div>
                        <div class="flip-card-back d-flex justify-content-center align-items-center flex-column rounded">
                            <p>Retrouvez les meilleurs menuisiers de votre secteur.</p>
                            <a href=""><button>Visiter la page</button></a>
                        </div>
                    </div>
                </div>

                <div class="categorie flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex justify-content-center align-items-center flex-column rounded">
                            <img src="../../assets/icons/svg/categorie/tiles.svg" class="svg" alt="">
                            <p>Carreleur</p>
                        </div>
                        <div class="flip-card-back d-flex justify-content-center align-items-center flex-column rounded">
                            <p>Retrouvez les meilleurs carreleurs de votre secteur.</p>
                            <a href=""><button>Visiter la page</button></a>
                        </div>
                    </div>
                </div>

                <div class="categorie flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex justify-content-center align-items-center flex-column rounded">
                            <img src="../../assets/icons/svg/categorie/wood.svg" class="svg" alt="">
                            <p>Charpentier</p>
                        </div>
                        <div class="flip-card-back d-flex justify-content-center align-items-center flex-column rounded">
                            <p>Retrouvez les meilleurs charpentiers de votre secteur.</p>
                            <a href=""><button>Visiter la page</button></a>
                        </div>
                    </div>
                </div>

            </article>
        </section>
        <hr>
        <section>
            <h2>QUI SOMMES-NOUS ?</h2>
            <article class="a-propos-container d-flex justify-content-center align-items-center">
                <img src="../../assets/icons/svg/mediabat.svg" class="orange-svg" alt="">
                <p>La plateforme MediaBat a pour objectif de lier des professionnels du secteur du BTP (rénovation, maçonneries, plomberie, électricien,
                    peintres, …) et des particuliers ayant besoin de prestations.<br>Le but de la plateforme étant de proposer à des professionnels un compte se comportant comme un portfolio présentant leurs réalisations, et ainsi simplifier le contact entre particuliers et professionnels.</p>
            </article>
        </section>
    </main>
</body>

<?php
$css = "index.css";
$title = "MEDIABAT - La plateforme pour les professionels du BTP";
$description = "MEDIABAT rénover et réparer n'a jamais été aussi facile. Notre objectif est de facilité le contact entre les meilleurs professionnels du BTP et vous.";
$content = ob_get_clean();
require_once "../template.php";
?>