<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>GMATÉRIAUX — Logiciel de gestion pour entreprises de matériaux de construction</title>
<meta name="description" content="GMATÉRIAUX : rapports, catalogue, réceptions fournisseurs, clients, utilisateurs et rôles, taux du jour, camions et destinations dans une seule plateforme de gestion.">
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
  scroll-padding-top: 90px;
}

body {
  font: 17px/1.6 var(--fb);
  color: var(--ink);
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
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
  min-height: 46px;
  font: 600 .98rem var(--fb);
  padding: 13px 22px;
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

/* APERÇU APPLICATION */

.app {
  width: 100%;
  min-width: 0;
  background: #fff;
  border: 1px solid var(--line);
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 24px 60px rgba(23,23,23,.14);
  display: grid;
  grid-template-columns: 170px minmax(0, 1fr);
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

.app aside {
  background: var(--ink);
  color: #d4d4d4;
  padding: 12px 8px;
  display: grid;
  gap: 2px;
  align-content: start;
  min-width: 0;
}

.who {
  padding: 4px 8px 10px;
  border-bottom: 1px solid #333;
  margin-bottom: 8px;
}

.who b {
  color: #fff;
  display: block;
}

.who small {
  color: #7bd88f;
  font-size: 10px;
  font-weight: 600;
}

.who .s {
  margin-top: 8px;
  background: #262626;
  border-radius: 6px;
  padding: 6px 8px;
  color: #888;
}

.app aside span {
  padding: 6px 8px;
  border-radius: 6px;
}

.app aside .on {
  background: var(--red2);
  color: #fff;
  font-weight: 600;
}

.app aside .open {
  background: var(--red2);
  color: #fff;
  border-radius: 6px 6px 0 0;
  font-weight: 600;
}

.app aside .sub {
  background: var(--red2);
  color: #fff;
  border-radius: 0 0 6px 6px;
  padding: 2px 8px 8px 20px;
  display: grid;
  gap: 3px;
  font-size: 11px;
}

.app main {
  padding: 14px;
  min-width: 0;
  overflow: hidden;
}

.app h4 {
  font: 700 15px var(--fh);
  margin-bottom: 10px;
}

.app h4 small {
  font: 400 11px var(--fb);
  color: var(--mute);
  margin-left: 6px;
}

/* TABLEAU */

.tbl {
  width: 100%;
  border-collapse: collapse;
}

.tbl th {
  text-align: left;
  color: var(--mute);
  font-weight: 600;
  padding: 6px 8px;
  border-bottom: 1px solid var(--line);
  white-space: nowrap;
}

.tbl td {
  padding: 7px 8px;
  border-bottom: 1px solid #eee;
  white-space: nowrap;
}

.tbl .n {
  text-align: right;
  font-variant-numeric: tabular-nums;
}

.pill {
  display: inline-block;
  font-size: 11px;
  font-weight: 600;
  padding: 2px 8px;
  border-radius: 99px;
  background: var(--grey);
}

.ok {
  background: #E7F5EC;
  color: #17692F;
}

.wait {
  background: #FFF3DC;
  color: #8A5A00;
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

/* CARTES */

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

/* DEUX COLONNES */

.two {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 48px;
  align-items: center;
}

.two > * {
  min-width: 0;
}

/* LISTE */

.list {
  display: grid;
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

/* RAPPORTS */

.chips {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  padding: 0;
  list-style: none;
  align-content: center;
}

.chips li {
  border: 1px solid var(--ink);
  border-radius: 99px;
  padding: 6px 14px;
  font-weight: 600;
  font-size: .92rem;
  background: #fff;
  max-width: 100%;
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

  .app {
    max-width: 100%;
  }

  .cards {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .two {
    gap: 28px;
  }

  .chips {
    align-content: flex-start;
  }
}

/* PETITES TABLETTES */

@media (max-width: 768px) {

  .app {
    grid-template-columns: 140px minmax(0, 1fr);
  }

  .app aside {
    font-size: 11px;
  }

  .app main {
    padding: 10px;
  }

  .tbl th,
  .tbl td {
    padding: 6px 5px;
    font-size: 10px;
  }

  .app h4 {
    font-size: 13px;
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

  /* Application */

  .app {
    display: block;
    border-radius: 10px;
  }

  .app aside {
    display: none;
  }

  .app main {
    padding: 12px;
    overflow-x: auto;
  }

  .app h4 {
    font-size: 14px;
    margin-bottom: 10px;
  }

  .app h4 small {
    display: block;
    margin: 3px 0 0;
  }

  .tbl {
    min-width: 480px;
  }

  .tbl th,
  .tbl td {
    font-size: 11px;
    padding: 8px;
  }

  .note {
    font-size: .78rem;
  }

  /* Cartes */

  .head {
    margin-bottom: 28px;
  }

  .cards {
    grid-template-columns: 1fr;
    gap: 12px;
  }

  .card {
    padding: 20px;
  }

  /* Deux colonnes */

  .two {
    grid-template-columns: 1fr;
    gap: 24px;
  }

  /* Rapports */

  .chips {
    gap: 7px;
  }

  .chips li {
    font-size: .84rem;
    padding: 7px 11px;
  }

  /* Contrôle */

  .list li {
    padding: 13px 0;
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

  .app main {
    padding: 8px;
  }

  .tbl {
    min-width: 450px;
  }

  .chips li {
    font-size: .8rem;
    padding: 6px 10px;
  }

  .card p,
  .list span {
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
  <a class="logo" href="#haut"><i></i>GMATÉRIAUX</a>
  <nav aria-label="Navigation"><a href="#modules">Modules</a><a href="#rapports">Rapports</a><a href="#controle">Contrôle</a><a class="btn red sm" href="#contact">Demander une démonstration</a></nav>
</div></header>

<main id="haut">
<section class="hero"><div class="wrap">
  <div>
    <h1>Pilotez toute votre entreprise de matériaux depuis un seul endroit.</h1>
    <p class="lead">Rapports, catalogue, réceptions fournisseurs, clients, utilisateurs, taux du jour, camions et destinations : GMATÉRIAUX réunit la gestion de votre activité dans une seule plateforme.</p>
    <div class="cta"><a class="btn red" href="#contact">Demander une démonstration</a><a class="btn line" href="#modules">Voir les modules</a></div>
  </div>
  <div>
    <div class="app" role="img" aria-label="Aperçu de l’interface de gestion avec le menu Rapports ouvert">
      <aside>
        <div class="who"><b>Utilisateur</b><small>● EN LIGNE</small><div class="s">Recherche ticket…</div></div>
        <span>Dashboard</span><span class="open">Rapports −</span>
        <div class="sub"><span style="padding:0">Ventes détaillées</span><span style="padding:0">Ventes par mois</span><span style="padding:0">Factures</span><span style="padding:0">Caisse</span><span style="padding:0">Production</span></div>
        <span>Catalogue +</span><span>Réceptions +</span><span>Clients +</span><span>Utilisateurs +</span><span>Configuration +</span><span>Camions</span><span>Destination</span>
      </aside>
      <main>
        <h4>Ventes détaillées <small>Données d’illustration</small></h4>
        <table class="tbl"><tr><th>Fiche</th><th>Client</th><th>Camion</th><th class="n">Total</th><th>Statut</th></tr>
        <tr><td>F-0412</td><td>Client A</td><td>Camion 1</td><td class="n">34,70 USD</td><td><span class="pill wait">Partiel</span></td></tr>
        <tr><td>F-0411</td><td>Client B</td><td>—</td><td class="n">12,00 USD</td><td><span class="pill ok">Payée</span></td></tr>
        <tr><td>F-0410</td><td>Client C</td><td>Camion 2</td><td class="n">58,25 USD</td><td><span class="pill wait">Partiel</span></td></tr></table>
      </main>
    </div>
    <p class="note">Aperçu d’illustration : noms et montants fictifs.</p>
  </div>
</div></section>

<section class="sec grey" id="modules"><div class="wrap">
  <div class="head"><h2>Tout ce qui fait tourner votre dépôt</h2><p>Chaque module regroupe ses écrans dans un menu clair, sans chercher.</p></div>
  <div class="cards">
    <article class="card"><span class="k">01</span><h3>Dashboard</h3><p>Une page d’accueil pour démarrer la journée avec une vue d’ensemble.</p></article>
    <article class="card"><span class="k">02</span><h3>Catalogue</h3><p>Produits, catégories et ajout d’un nouveau produit en quelques champs.</p></article>
    <article class="card"><span class="k">03</span><h3>Réceptions</h3><p>Fournisseurs, produits reçus, contraventions, paiements, rapports et nouvelle réception.</p></article>
    <article class="card"><span class="k">04</span><h3>Clients</h3><p>Fiches clients, paiements, clients spéciaux, simulation, réquisitions et nouveau client.</p></article>
    <article class="card"><span class="k">05</span><h3>Camions et destinations</h3><p>Gérez votre flotte et les destinations de livraison.</p></article>
    <article class="card"><span class="k">06</span><h3>Configuration</h3><p>Réglages du POS, taux du jour, coffre, motifs et méthodes de paiement.</p></article>
  </div>
</div></section>

<section class="sec" id="rapports"><div class="wrap two">
  <div><h2>Quatorze rapports pour décider avec des faits</h2><p class="lead" style="margin-bottom:0">Ventes, caisse, production, livraisons, camions, paiements, fournisseurs et réceptions : consultez chaque aspect de l’activité depuis le menu Rapports.</p></div>
  <ul class="chips" aria-label="Rapports disponibles">
    <li>Ventes détaillées</li><li>Ventes par mois</li><li>Factures</li><li>Caisse</li><li>Produits</li><li>Production</li><li>Livraison</li><li>Camions</li><li>Chargement / Sortie</li><li>Transport</li><li>Paiements</li><li>Fournisseurs</li><li>Réceptions</li><li>Réceptions journalières</li>
  </ul>
</div></section>

<section class="sec grey" id="controle"><div class="wrap two">
  <ul class="list">
    <li><b>Recherche de ticket</b><span>Saisissez un numéro de fiche dans le menu : le résultat s’ouvre avec le client et le camion associés.</span></li>
    <li><b>Utilisateurs, rôles et cartes</b><span>Créez des utilisateurs et définissez ce que chacun peut faire.</span></li>
    <li><b>Taux du jour</b><span>Mettez à jour le taux de change dans la configuration.</span></li>
    <li><b>Coffre, motifs et méthodes de paiement</b><span>Paramétrez les bases de votre gestion de caisse.</span></li>
  </ul>
  <div><h2>Gardez le contrôle, au quotidien.</h2><p class="lead" style="margin-bottom:0">Retrouvez une vente en quelques secondes, gérez les accès de votre équipe et gardez vos paramètres financiers sous la main.</p></div>
</div></section>

<section class="band" id="contact"><div class="wrap">
  <h2>Votre entreprise mérite une gestion plus intelligente.</h2>
  <p>Passez à une gestion plus structurée de vos activités avec GMATÉRIAUX.</p>
  <!-- À CONFIGURER : remplacez l'adresse e-mail (et/ou ajoutez un lien WhatsApp) -->
  <a class="btn red" href="mailto:contact@exemple.com?subject=Demande%20de%20d%C3%A9monstration%20VFMAT%C3%89RIAUX">Demander une démonstration</a>
</div></section>
</main>
<footer><div class="wrap"><span>© <span id="y">2026</span> GMATÉRIAUX. Tous droits réservés.</span><span><a href="#">Mentions légales</a> · <a href="#">Politique de confidentialité</a> · <a href="login.php">Connexion</a></span></div></footer>
<script>document.getElementById('y').textContent=new Date().getFullYear()</script>
</body>
</html>