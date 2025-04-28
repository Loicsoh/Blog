

<div class="content">
  <div class="container">
    <div class="header">
      <h2>Ajouter un article</h2>
    </div>

    <form action="admin" class="form" id="form" method="post" enctype="multipart/form-data">

      <div class="form-control">
        <label for="titre">Titre</label>
        <input type="text" id="titre" placeholder="Entrez le titre" name="titre" autocomplete="off"
          value="<?= isset($_POST['titre']) ? $_POST['titre'] : '' ?>">
      </div>

      <div class="form-control">
        <label for="email">introduction</label>
        <input type="text" id="intro" placeholder="Entrez l'introduction" name="intro"
          value="<?= isset($_POST['intro']) ? $_POST['intro'] : '' ?>">
      </div>

      <div class="form-control">
        <label for="password">Contenur</label>
        <input type="text" id="content" name="content" placeholder="Entrez le contenu"
          value="<?= isset($_POST['content']) ? $_POST['content'] : '' ?>">

      </div>
      <button type="submit" name="creer"> Creer</button>
    </form>

  </div>
</div>