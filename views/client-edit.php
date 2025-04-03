<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">✏️ Modifier les informations du client</h2>

<form action="?action=client-update" method="POST">
    <input type="hidden" name="id" value="<?= $client->getId() ?>">

    <div class="mb-3">
        <label for="name" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $client->getNom() ?>" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Adresse mail :</label>
        <textarea class="form-control" id="email" name="email" rows="3" required><?= $client->getEmail() ?></textarea>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Numéro de téléphone :</label>
        <textarea class="form-control" id="phone" name="phone" rows="3" required><?= $client->getTelephone() ?></textarea>
    </div>

    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<a href="?" class="btn btn-secondary">🔙 Retour à la liste des clients</a>


<?php require_once __DIR__ . '/templates/footer.php';