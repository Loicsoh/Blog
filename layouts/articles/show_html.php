<h1 class="article-title"> <?= htmlspecialchars($article['title'] ?? ''); ?> </h1>
<p> <?= htmlspecialchars($article['introduction'] ?? ''); ?> </p>
<p> <?= htmlspecialchars($article['content'] ?? ''); ?> </p>
<p> <?= htmlspecialchars($article['created_at'] ?? ''); ?> </p>
<p> <?= htmlspecialchars($article['update_at'] ?? ''); ?> </p>
<p> <?= htmlspecialchars($article['author'] ?? ''); ?> </p>

<em>Poster le: <?= htmlspecialchars($article['created_at'] ?? ''); ?> </em>

<form action="" class="form">
  <a href="index.php">Retour</a>
</form>