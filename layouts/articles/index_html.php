<h1>Liste des articles</h1>

<hr>
<div>
  <?php 
  // Vérifie si la variable $articles est définie, est un tableau et contient des éléments
  if (isset($articles) && is_array($articles) && count($articles) > 0) : ?>
    <?php foreach($articles as $article) : ?>
      <h2><?= htmlspecialchars($article['title'] ?? ''); ?></h2>
      <p><?= htmlspecialchars($article['introduction'] ?? ''); ?></p>
      <a href="article.php?id=<?= htmlspecialchars($article['id'] ?? ''); ?>">Voir plus</a>
    <?php endforeach; ?>
  <?php endif; ?>
</div>
<hr>