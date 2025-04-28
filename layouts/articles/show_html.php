<h1 class="article-title"> <?= htmlspecialchars($article['title'] ?? ''); ?> </h1>
<p> <?= htmlspecialchars($article['introduction'] ?? ''); ?> </p>
<p> <?= htmlspecialchars($article['content'] ?? ''); ?> </p>
<p>Poster le: <?= htmlspecialchars($article['created_at'] ?? ''); ?> </p>
<p>Mis à jour le: <?= htmlspecialchars($article['update_at'] ?? ''); ?> </p>
<p>Posté par: <?= htmlspecialchars($article['author'] ?? ''); ?> </p>

<em>Posté le: <?= htmlspecialchars($article['created_at'] ?? ''); ?> </em>

<form action="" class="form">
  <a href="index.php">Retour</a>
</form>