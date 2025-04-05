<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container-fluid mb-5 bg-info pt-4 pb-4">
    <h2 class="mb-4 text-dark">✏️ Modifier les informations du client</h2>
    <h4 class="text-danger">Il faut renseigner les 3 champs pour une modification valide</h4>
</div>

<div class="container mt-5"></div>

<form action="?action=client-update" method="POST">
    <input type="hidden" name="id" value="<?= $client->getId() ?>">

    <div class="mb-3">
        <label for="name" class="form-label text-body-emphasis">Nom :</label>
        <input type="text" class="form-control border border-info-subtle bg-light-subtle" id="name" name="name" value="<?= $client->getNom() ?>" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label text-body-emphasis">Adresse mail :</label>
        <input type="text" class="form-control border-info-subtle bg-light-subtle" id="email" name="email" value="<?= $client->getEmail() ?>" required>
    </div>

    <div class="mb-5">
        <label for="phone" class="form-label text-body-emphasis">Numéro de téléphone :</label>
        <input type="text" class="form-control border-info-subtle bg-light-subtle" id="phone" name="phone" value="<?= $client->getTelephone() ?>" required>
    </div>

    <button type="submit" class="btn btn-info mb-3">Modifier</button>
    <a href="?action=client-index" class="btn btn-light mb-3">🔙 Retour à la liste des clients</a>
</form>

<?php require_once __DIR__ . '/templates/footer.php';