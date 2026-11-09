<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>GMATÉRIAUX POS — Logiciel de vente pour dépôts et quincailleries de matériaux</title>
<meta name="description" content="Le point de vente GMATÉRIAUX : ventes sur site et avec livraison, clients, paiements en HTG et USD, camions et destinations, dans un seul écran.">
<meta name="theme-color" content="#ED1C24">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,700&family=Source+Sans+3:wght@400;600&display=swap">
<style>

:root {
  --red: #ED1C24;
  --red2: #DA2412;
  --ink: #171717;
  --grey: #F5F5F5;
  --line: #E4E4E4;
  --mute: #5E5E5E;
  --fh: "Bricolage Grotesque", "Segoe UI", system-ui, sans-serif;
  --fb: "Source Sans 3", "Segoe UI", system-ui, sans-serif;
}

* {
  box-sizing: border-box;
  margin: 0;
}

html {
  scroll-behavior: smooth;
  scroll-padding-top: 85px;
}

body {
  font: 17px/1.6 var(--fb);
  color: var(--ink);
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}

img {
  max-width: 100%;
  height: auto;
}

h1, h2, h3 {
  font-family: var(--fh);
  line-height: 1.1;
  letter-spacing: -.02em;
}

h1 {
  font-size: clamp(2rem, 5vw, 3.8rem);
}

h2 {
  font-size: clamp(1.7rem, 3.2vw, 2.5rem);
}

h3 {
  font-size: 1.08rem;
}

:focus-visible {
  outline: 3px solid var(--ink);
  outline-offset: 3px;
}

a {
  color: inherit;
}

.wrap {
  width: min(1160px, calc(100% - 40px));
  margin-inline: auto;
}

.sec {
  padding: 88px 0;
}

.grey {
  background: var(--grey);
}

/* BOUTONS */

.btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  font: 600 .98rem var(--fb);
  padding: 13px 22px;
  min-height: 46px;
  border-radius: 8px;
  border: 1.5px solid transparent;
  text-decoration: none;
  cursor: pointer;
  transition: background .15s, color .15s;
}

.red {
  background: var(--red);
  color: #fff;
}

.red:hover {
  background: var(--red2);
}

.line {
  border-color: var(--ink);
}

.line:hover {
  background: var(--ink);
  color: #fff;
}

.sm {
  padding: 9px 16px;
  font-size: .92rem;
}

/* NAVIGATION */

.nav {
  position: sticky;
  top: 0;
  z-index: 50;
  background: rgba(255,255,255,.97);
  backdrop-filter: blur(8px);
  border-bottom: 1px solid var(--line);
}

.nav .wrap {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 24px;
  min-height: 66px;
}

.logo {
  font: 700 1.2rem var(--fh);
  text-decoration: none;
  display: flex;
  align-items: center;
  gap: 9px;
  white-space: nowrap;
}

.logo i {
  flex-shrink: 0;
  width: 24px;
  height: 24px;
  border-radius: 6px;
  background: var(--red);
}

.nav nav {
  margin-left: auto;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  gap: 22px;
}

.nav nav a:not(.btn) {
  text-decoration: none;
  font-weight: 600;
  font-size: .95rem;
}

.nav nav a:not(.btn):hover {
  color: var(--red);
}

/* HERO */

.hero {
  padding: 60px 0 80px;
  overflow: hidden;
}

.hero .wrap {
  display: grid;
  grid-template-columns: minmax(0, 1fr) minmax(0, 1.25fr);
  gap: 48px;
  align-items: center;
}

.hero .wrap > div {
  min-width: 0;
}

.lead {
  color: var(--mute);
  font-size: 1.15rem;
  margin: 20px 0 30px;
  max-width: 54ch;
}

.cta {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
}

/* APERÇU POS */

.pos {
  width: 100%;
  min-width: 0;
  background: #F4F5F7;
  border: 1px solid var(--line);
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 24px 60px rgba(23,23,23,.14);
  display: grid;
  grid-template-columns: 128px minmax(0, 1fr);
  font-size: 12px;
  line-height: 1.4;
  animation: rise .7s both;
}

@keyframes rise {
  from {
    opacity: 0;
    transform: translateY(16px);
  }
}

.pos aside {
  background: var(--red2);
  color: #fff;
  padding: 14px 8px;
  display: grid;
  gap: 4px;
  align-content: start;
}

.pos aside b {
  font: 700 13px var(--fh);
  padding: 2px 8px 10px;
}

.pos aside span {
  padding: 7px 8px;
  border-radius: 7px;
  opacity: .9;
}

.pos aside .on {
  background: #fff;
  color: var(--red2);
  font-weight: 600;
  opacity: 1;
}

.pos main {
  padding: 14px;
  display: grid;
  grid-template-columns: minmax(0, 1.5fr) minmax(0, 1fr);
  gap: 12px;
  min-width: 0;
}

.pos main > div {
  min-width: 0;
}

.pos h4 {
  font: 700 15px var(--fh);
  color: var(--red2);
  margin-bottom: 8px;
}

.seg {
  display: grid;
  grid-template-columns: 1fr 1fr;
  background: #fff;
  border-radius: 9px;
  padding: 3px;
  margin-bottom: 8px;
}

.seg span {
  text-align: center;
  padding: 7px;
  border-radius: 6px;
  font-weight: 600;
}

.seg .on {
  background: var(--red2);
  color: #fff;
}

.sr {
  background: #fff;
  border: 1px solid var(--line);
  border-radius: 8px;
  padding: 8px 10px;
  color: #888;
  margin-bottom: 8px;
}

.pc {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 8px;
}

.pc div {
  min-width: 0;
  background: #fff;
  border-radius: 9px;
  padding: 9px;
  overflow-wrap: anywhere;
}

.pc em {
  font-style: normal;
  font-size: 9px;
  font-weight: 600;
  color: var(--red2);
  background: #FDE7E8;
  border-radius: 99px;
  padding: 1px 7px;
}

.pc strong {
  display: block;
  color: var(--red2);
  margin-top: 6px;
}

.pc b {
  font: 700 15px var(--fh);
}

.sum {
  min-width: 0;
  background: #fff;
  border-radius: 10px;
  padding: 12px;
}

.sum .r {
  display: flex;
  justify-content: space-between;
  gap: 6px;
  padding: 3px 0;
  color: var(--red2);
}

.sum .r b {
  color: var(--ink);
}

.sum .t {
  border-top: 1px solid var(--line);
  margin-top: 6px;
  padding-top: 6px;
  font: 700 15px var(--fh);
  color: var(--red2);
}

.note {
  font-size: .85rem;
  color: var(--mute);
  margin-top: 10px;
}

/* SECTIONS */

.head {
  max-width: 700px;
  margin-bottom: 40px;
}

.head p {
  color: var(--mute);
  margin-top: 12px;
}

.steps {
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  border-top: 2px solid var(--ink);
  counter-reset: s;
  padding: 0;
  list-style: none;
}

.steps li {
  min-width: 0;
  padding: 22px 18px 0 0;
  counter-increment: s;
}

.steps li + li {
  padding-left: 18px;
  border-left: 1px solid var(--line);
}

.steps li::before {
  content: counter(s, decimal-leading-zero);
  font: 700 .9rem var(--fh);
  color: var(--red);
}

.steps h3 {
  margin: 6px 0;
}

.steps p {
  color: var(--mute);
  font-size: .95rem;
}

.cards {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 16px;
}

.card {
  min-width: 0;
  background: #fff;
  border: 1px solid var(--line);
  border-radius: 10px;
  padding: 24px;
  transition: border-color .2s;
}

.card:hover {
  border-color: var(--ink);
}

.card p {
  color: var(--mute);
  font-size: .96rem;
  margin-top: 8px;
}

.card .k {
  display: inline-block;
  font: 700 .8rem var(--fh);
  color: var(--red);
  margin-bottom: 12px;
}

/* LIVRAISON */

.two {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 48px;
  align-items: center;
}

.two > div {
  min-width: 0;
}

.list {
  display: grid;
  gap: 0;
  border-top: 1px solid var(--line);
  padding: 0;
  list-style: none;
}

.list li {
  padding: 14px 0;
  border-bottom: 1px solid var(--line);
}

.list b {
  display: block;
}

.list span {
  color: var(--mute);
  font-size: .95rem;
}

/* BANDEAU CONTACT */

.band {
  background: var(--ink);
  color: #fff;
  padding: 84px 0;
  text-align: center;
}

.band h2 {
  max-width: 800px;
  margin-inline: auto;
}

.band p {
  color: #c9c9c9;
  margin: 14px auto 28px;
  max-width: 56ch;
}

/* FOOTER */

footer {
  background: var(--ink);
  color: #aaa;
  border-top: 1px solid #2c2c2c;
  padding: 28px 0;
  font-size: .9rem;
}

footer .wrap {
  display: flex;
  justify-content: space-between;
  gap: 16px;
  flex-wrap: wrap;
}

footer a {
  text-decoration: none;
}

footer a:hover {
  color: #fff;
}

/* TABLETTES */

@media (max-width: 980px) {

  .hero .wrap,
  .two {
    grid-template-columns: 1fr;
    gap: 36px;
  }

  .hero .wrap {
    max-width: 760px;
  }

  .hero {
    padding: 55px 0 65px;
  }

  .hero .wrap > div:last-child {
    width: 100%;
  }

  .pos {
    max-width: 100%;
  }

  .steps {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    row-gap: 28px;
  }

  .steps li,
  .steps li + li {
    padding: 18px 18px 0 0;
    border: 0;
  }

  .cards {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .two {
    gap: 28px;
  }
}

/* MOBILES */

@media (max-width: 620px) {

  body {
    font-size: 16px;
  }

  .wrap {
    width: calc(100% - 32px);
  }

  .sec {
    padding: 58px 0;
  }

  h1 {
    font-size: clamp(2rem, 9vw, 2.8rem);
  }

  h2 {
    font-size: clamp(1.65rem, 7vw, 2.1rem);
  }

  /* Navigation mobile */

  .nav .wrap {
    min-height: 62px;
    gap: 10px;
    flex-wrap: wrap;
    padding: 12px 0;
  }

  .logo {
    font-size: 1.05rem;
  }

  .nav nav {
    width: 100%;
    margin: 0;
    display: flex;
    justify-content: flex-start;
    gap: 8px;
    overflow-x: auto;
    padding: 2px 0 5px;
    scrollbar-width: thin;
  }

  .nav nav a:not(.btn) {
    display: inline-flex;
    flex-shrink: 0;
    font-size: .82rem;
    padding: 7px 10px;
    border: 1px solid var(--line);
    border-radius: 7px;
  }

  .nav nav .btn {
    flex-shrink: 0;
    font-size: .82rem;
    padding: 8px 12px;
  }

  /* Hero */

  .hero {
    padding: 42px 0 50px;
  }

  .hero .wrap {
    gap: 32px;
  }

  .lead {
    font-size: 1.03rem;
    margin: 16px 0 24px;
  }

  .cta {
    display: grid;
    grid-template-columns: 1fr;
    gap: 10px;
  }

  .cta .btn {
    width: 100%;
  }

  /* POS mobile */

  .pos {
    display: block;
    border-radius: 10px;
    font-size: 11px;
  }

  .pos aside {
    display: none;
  }

  .pos main {
    padding: 10px;
    grid-template-columns: 1fr;
    gap: 12px;
  }

  .seg span {
    padding: 9px 4px;
    font-size: 10px;
  }

  .pc {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 7px;
  }

  .pc div {
    padding: 8px;
  }

  .pc em {
    font-size: 8px;
  }

  .pc b {
    font-size: 13px;
  }

  .sum {
    padding: 12px;
  }

  .note {
    font-size: .78rem;
  }

  /* Étapes et cartes */

  .head {
    margin-bottom: 28px;
  }

  .steps {
    grid-template-columns: 1fr;
    gap: 18px;
  }

  .steps li,
  .steps li + li {
    padding: 14px 0;
    border-bottom: 1px solid var(--line);
  }

  .steps h3 {
    font-size: 1.05rem;
  }

  .cards {
    grid-template-columns: 1fr;
    gap: 12px;
  }

  .card {
    padding: 20px;
  }

  /* Livraison */

  .two {
    gap: 24px;
  }

  /* Contact */

  .band {
    padding: 60px 0;
  }

  .band p {
    font-size: .96rem;
  }

  .band .btn {
    width: 100%;
  }

  /* Footer */

  footer {
    padding: 24px 0;
  }

  footer .wrap {
    flex-direction: column;
    gap: 12px;
  }

  footer .wrap span:last-child {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }
}

/* PETITS MOBILES */

@media (max-width: 380px) {

  .wrap {
    width: calc(100% - 24px);
  }

  .logo {
    font-size: .95rem;
  }

  .pos main {
    padding: 8px;
  }

  .pc {
    grid-template-columns: 1fr 1fr;
  }

  .sum .r {
    font-size: 10px;
  }

  .steps p,
  .card p {
    font-size: .9rem;
  }
}

/* ACCESSIBILITÉ */

@media (prefers-reduced-motion: reduce) {
  *,
  *::before,
  *::after {
    animation: none !important;
    transition: none !important;
    scroll-behavior: auto !important;
  }
}
</style>
</head>
<body>
<header class="nav"><div class="wrap">
  <a class="logo" href="#haut"><i></i>GMATÉRIAUX <span style="font-weight:600;color:var(--mute)">POS</span></a>
  <nav aria-label="Navigation"><a href="#ecran">L’écran de vente</a><a href="#fonctions">Fonctions</a><a href="#livraison">Livraison</a><a class="btn red sm" href="#contact">Demander une démonstration</a></nav>
</div></header>

<main id="haut">
<section class="hero"><div class="wrap">
  <div>
    <h1>Vendez plus vite. Encaissez sans erreur.</h1>
    <p class="lead">Le point de vente GMATÉRIAUX est conçu pour les dépôts, quincailleries et fournisseurs de matériaux : vente sur site ou avec livraison, paiements en HTG et USD, le tout sur un seul écran.</p>
    <div class="cta"><a class="btn red" href="#contact">Demander une démonstration</a><a class="btn line" href="#ecran">Voir l’écran de vente</a></div>
  </div>
  <div>
    <div class="pos" role="img" aria-label="Aperçu de l’écran Nouvelle vente du POS">
      <aside><b>GMATÉRIAUX</b><span class="on">Nouvelle vente</span><span>Réception</span><span>Production</span><span>Transactions</span><span>Livraisons</span><span>Camions</span></aside>
      <main>
        <div><div class="seg"><span class="on">Vente sur site</span><span>Vente avec livraison</span></div><div class="sr">Rechercher un produit (nom, code, catégorie)…</div>
          <div class="pc"><div><em>AGRÉGAT</em><strong>Produit A</strong><b>25,00 USD</b></div><div><em>AGRÉGAT</em><strong>Produit B</strong><b>22,00 USD</b></div><div><em>MATIÈRE PREMIÈRE</em><strong>Produit C</strong><b>19,25 USD</b></div></div></div>
        <div class="sum"><h4>Résumé de la vente</h4><div class="r"><span>Total produit</span><b>25,00</b></div><div class="r"><span>Livraison</span><b>0,00</b></div><div class="r"><span>Réduction</span><b>0,00</b></div><div class="r t"><span>TOTAL</span><b style="color:var(--red2)">25,00 USD</b></div></div>
      </main>
    </div>
    <p class="note">Aperçu d’illustration : noms de produits et montants fictifs.</p>
  </div>
</div></section>

<section class="sec grey" id="ecran"><div class="wrap">
  <div class="head"><h2>Une vente en quatre gestes</h2><p>L’écran de vente réunit tout ce dont le caissier a besoin, sans changer de page.</p></div>
  <ol class="steps">
    <li><h3>Choisir le type de vente</h3><p>Vente sur site ou vente avec livraison, en un clic.</p></li>
    <li><h3>Trouver le produit</h3><p>Recherche par nom, code ou catégorie. Le prix et la devise sont affichés sur chaque carte.</p></li>
    <li><h3>Sélectionner le client</h3><p>Choisissez un client existant ou ajoutez-le sans quitter la vente.</p></li>
    <li><h3>Encaisser</h3><p>Mode de paiement, devise et montants reçus, avec le total toujours visible.</p></li>
  </ol>
</div></section>

<section class="sec" id="fonctions"><div class="wrap">
  <div class="head"><h2>Ce que le POS gère pour vous</h2></div>
  <div class="cards">
    <article class="card"><span class="k">01</span><h3>Deux modes de vente</h3><p>Vente au comptoir ou avec livraison, avec les champs adaptés à chaque cas.</p></article>
    <article class="card"><span class="k">02</span><h3>Catalogue par catégorie</h3><p>Agrégats, matières premières et autres produits, avec recherche instantanée.</p></article>
    <article class="card"><span class="k">03</span><h3>Clients</h3><p>Sélection rapide et création d’un client directement depuis l’écran de vente.</p></article>
    <article class="card"><span class="k">04</span><h3>HTG et USD</h3><p>Chaque vente est réglée dans une devise claire, avec le mode de paiement choisi.</p></article>
    <article class="card"><span class="k">05</span><h3>Réductions et coûts</h3><p>Réduction en pourcentage ou en montant, et coût supplémentaire affichés dans le total.</p></article>
    <article class="card"><span class="k">06</span><h3>Fermeture de caisse</h3><p>Fermez la caisse et déconnectez-vous depuis le menu, sans détour.</p></article>
  </div>
</div></section>

<section class="sec grey" id="livraison"><div class="wrap two">
  <div><h2>Du comptoir au camion</h2><p class="lead" style="margin-bottom:0">Quand la vente se fait avec livraison, le POS enregistre la destination, l’adresse, le contact et le prix de la livraison. Le suivi se poursuit dans les modules Livraisons et Gestion des camions.</p></div>
  <ul class="list">
    <li><b>Destination et prix de livraison</b><span>Sélectionnez une destination ; le total livraison s’ajoute à la vente.</span></li>
    <li><b>Adresse et téléphone du contact</b><span>Pour que le chauffeur sache où livrer et qui appeler.</span></li>
    <li><b>Livraisons et historique</b><span>Suivez les livraisons en cours et consultez celles du passé.</span></li>
    <li><b>Gestion des camions</b><span>Camions et chauffeurs gérés dans le même logiciel.</span></li>
  </ul>
</div></section>

<section class="band" id="contact"><div class="wrap">
  <h2>Votre entreprise mérite une gestion plus intelligente.</h2>
  <p>Passez à une gestion plus structurée de vos activités avec GMATÉRIAUX.</p>
  <!-- À CONFIGURER : remplacez l'adresse e-mail (et/ou ajoutez un lien WhatsApp) -->
  <a class="btn red" href="mailto:contact@exemple.com?subject=Demande%20de%20d%C3%A9monstration%20VFMAT%C3%89RIAUX%20POS">Demander une démonstration</a>
</div></section>
</main>

<footer><div class="wrap"><span>© <span id="y">2026</span> GMATÉRIAUX. Tous droits réservés.</span><span><a href="#">Mentions légales</a> · <a href="#">Politique de confidentialité</a> · <a href="/login.php">Connexion</a></span></div></footer>
<script>document.getElementById('y').textContent=new Date().getFullYear()</script>
</body>
</html>