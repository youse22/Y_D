<?php
/**
 * Projets protégés par mot de passe (vérification côté serveur).
 *
 * 1) Génère ton hash : ouvre cette page une première fois, tape ton mot de passe
 *    dans le formulaire « Configuration », copie le hash affiché dans $PASSWORD_HASH.
 * 2) Modifie le tableau $projects plus bas (titre, description, tags, image, lien).
 */
$PASSWORD_HASH = '$2y$10$4XUlS4/M3GP.hB1PieRYl.Oqo2Wox3B0.GD8Wt8rPHsHyS5jRXwxG'; // ← colle ici le hash généré (commence par $2y$...)

session_set_cookie_params(['httponly' => true, 'samesite' => 'Lax', 'secure' => !empty($_SERVER['HTTPS'])]);
session_start();

/**
 * AJOUTER UN PROJET = ajouter une ligne ci-dessous. Une seule info est obligatoire :
 *   'url' => lien du site  → la carte affiche automatiquement une capture du site, et un clic ouvre le site
 *   'img' => chemin d'une photo (ex. 'assets/img/portfolio/site2.png') → remplace la capture automatique
 * Facultatifs : 'title' (sinon le nom de domaine), 'desc', 'tags'.
 * Photo seule (sans 'url') : la carte s'affiche sans lien.
 */
$projects = [
  ['url' => 'https://haitirh.com'],
  // ['url' => 'https://exemple.com', 'title' => 'Mon projet', 'desc' => 'Courte description', 'tags' => ['WordPress']],
  ['url' => 'http://localhost:8080/Y_D/POS'],
  ['url' => 'http://localhost:8080/Y_D/Gmateriaux'],
  ['url' => 'https://newborntechnologie.com/Newborn_website/NewBorn/structure/'],
  ['url' => 'https://ayitikomes.com'],
  ['url' => 'https://CASALATINA'],


];

function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function p_url($u){ return (preg_match('~^https?://~i', $u)) ? $u : 'https://' . $u; }
function p_title($p){
  if (!empty($p['title'])) return $p['title'];
  if (!empty($p['url'])) { return preg_replace('/^www\./i', '', parse_url(p_url($p['url']), PHP_URL_HOST) ?: $p['url']); }
  return 'Projet';
}
function p_img($p){
  if (!empty($p['img'])) return $p['img'];
  if (!empty($p['url'])) return 'https://s.wordpress.com/mshots/v1/' . rawurlencode(p_url($p['url'])) . '?w=1200&h=750';
  return '';
}

// Déconnexion
if (isset($_GET['logout'])) {
  $_SESSION = []; session_destroy();
  header('Location: index.html'); exit;
}

$error = ''; $generated = '';

// Mode configuration : aucun hash défini -> on propose d'en générer un (aucun accès accordé)
if ($PASSWORD_HASH === '') {
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['new_password'])) {
    $generated = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
  }
} else {
  // Limitation simple des tentatives
  $_SESSION['tries'] = $_SESSION['tries'] ?? 0;
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
    if ($_SESSION['tries'] >= 5) {
      $error = 'Trop de tentatives. Réessayez plus tard.';
    } elseif (password_verify($_POST['password'], $PASSWORD_HASH)) {
      session_regenerate_id(true);
      $_SESSION['auth'] = true; $_SESSION['tries'] = 0;
      header('Location: projects.php'); exit;
    } else {
      $_SESSION['tries']++; sleep(1);
      $error = 'Mot de passe incorrect.';
    }
  }
}
$authed = ($PASSWORD_HASH !== '' && !empty($_SESSION['auth']));
?><!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <title>Projets — Yousenie Dorsainvil</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,wght@0,400;0,600;1,400;1,600&family=Jost:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/yd.css">
</head>
<body>
  <div class="bg-glow" aria-hidden="true"></div>
  <div class="bg-pattern" aria-hidden="true"></div>
  <div class="bg-mark" aria-hidden="true">
    <svg viewBox="0 0 140 80"><path d="M0 0L30 45L60 0M30 45V80"/><path class="accent" d="M80 0V80H100A40 40 0 0 0 100 0Z"/></svg>
  </div>

<?php if ($authed): ?>

  <header class="nav">
    <a href="index.html" class="logo" aria-label="Retour à l'accueil">
      <svg viewBox="0 0 140 80" aria-hidden="true"><path d="M4 4L32 45L60 4M32 45V76M84 4V76H100A36 36 0 0 0 100 4Z"/></svg>
      <span>Yousenie Dorsainvil</span>
    </a>
    <ul>
      <li><a class="link" href="index.html">Accueil</a></li>
      <li><a class="link lock" href="projects.php?logout=1">Verrouiller</a></li>
    </ul>
  </header>

  <main class="wrap top">
    <div class="inner">
      <h2>Projets</h2>
      <p class="lead">Cliquez sur un projet pour ouvrir le site.</p>
      <div class="grid">
        <?php foreach ($projects as $p):
          $url = !empty($p['url']) ? p_url($p['url']) : '';
          $tag = $url ? 'a' : 'div';
          $attr = $url ? ' href="' . e($url) . '" target="_blank" rel="noopener"' : '';
          $img = p_img($p); ?>
          <<?= $tag ?> class="card"<?= $attr ?>>
            <div class="shot"><?php if ($img): ?><img src="<?= e($img) ?>" alt="Aperçu de <?= e(p_title($p)) ?>" loading="lazy"><?php endif; ?></div>
            <div class="body">
              <h3><?= e(p_title($p)) ?></h3>
              <?php if (!empty($p['desc'])): ?><p><?= e($p['desc']) ?></p><?php endif; ?>
              <?php if (!empty($p['tags'])): ?><div class="tags"><?php foreach ($p['tags'] as $t): ?><span><?= e($t) ?></span><?php endforeach; ?></div><?php endif; ?>
              <?php if ($url): ?><span class="visit">Visiter le site →</span><?php endif; ?>
            </div>
          </<?= $tag ?>>
        <?php endforeach; ?>
      </div>
    </div>
  </main>

<?php elseif ($PASSWORD_HASH === ''): ?>

  <main class="gate">
    <div class="gate-box">
      <h1>Configuration</h1>
      <p>Aucun mot de passe n'est encore défini. Choisis-en un pour générer son hash, puis colle-le dans <code>$PASSWORD_HASH</code> en haut de <code>projects.php</code>.</p>
      <form method="post">
        <input type="password" name="new_password" placeholder="Nouveau mot de passe" required>
        <button class="btn solid" type="submit">Générer le hash</button>
      </form>
      <?php if ($generated): ?>
        <p style="margin-top:20px;word-break:break-all;color:var(--ivory)"><?= e($generated) ?></p>
      <?php endif; ?>
    </div>
  </main>

<?php else: ?>

  <main class="gate">
    <div class="gate-box">
      <svg viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#D9A5A6" stroke-width="1.6" aria-hidden="true"><rect x="4" y="10" width="16" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3"/></svg>
      <h1>Projets privés</h1>
      <p>Entrez le mot de passe pour voir mes réalisations.</p>
      <?php if ($error): ?><div class="err" role="alert"><?= e($error) ?></div><?php endif; ?>
      <form method="post">
        <input type="password" name="password" placeholder="Mot de passe" required autofocus>
        <button class="btn solid" type="submit">Déverrouiller</button>
      </form>
      <a class="back" href="index.html">Retour à l'accueil</a>
    </div>
  </main>

<?php endif; ?>
</body>
</html>