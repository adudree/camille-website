<?php
/**
 * Template Name: Home
 */

 get_header();
?>
<main>
    <!-- Landing -->
    <div class="landing">
        <div class="landing-background-container">
            <img src="" />
        </div>
        <div class="landing-info-container">
            <div class="logo-container">
                <img src="<?php echo get_site_icon_url(32, 'http://localhost/camille-website/wordpress/wp-content/uploads/2024/10/LOGO_A.png', 0); ?>" alt="logo" width=64 height="64" />
            </div>
            <div class="title-container">
                <h1><?php echo get_bloginfo() ?></h1>
                <p>Plume & rédacteur de contenus</p>
                <p>Conseil en stratégie éditoriale</p>
            </div>
        </div>
    </div>
    <div class="landing-arrow-container">
        GO !
    </div>
    <!-- Intro -->
    <div class="intro">
        <div class="intro-background"></div>
        <div class="img-container">

            <img />
        </div>
        <div class="intro-text">
            <h2>Bonjour !</h2>
            <p>Ceci est un court texte de description. Il peut parler de toi ou de ton entreprise, expliquer très succinctement ton activité, et montrer ta valeur ajoutée et ta parcularité. Les gens doivent avoir envie de lire la suite ! Ceci est un court texte de description. Il peut parler de toi ou de ton entreprise, expliquer très succinctement ton activité, et montrer ta valeur ajoutée et ta parcularité. Les gens doivent avoir envie de lire la suite !</p>
            <button>En savoir +</button>
        </div>
    </div>
    <!-- Competences -->
    <h2>Je sais faire...</h2>
    <div class="band">
        <div class="band-content">
            Section "je sais faire" avec les ptites cartes trop mimis qui renvoient vers les prestations
        </div>
    </div>
    <!-- Projects -->
     <h3>Quelques exemples</h3>
     <p>Blabla, voici des projets, ou des actus, jsp, enjoy!</p>
     <div>
        Carrousel rigolo avec les derniers projets
     </div>
</main>
<?php get_footer(); ?>