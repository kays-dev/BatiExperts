<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container-fluid mb-5 bg-info pt-4 pb-2">
    <h2 class="mb-4 text-dark">📋 Détails du client</h2>
</div>

<p><strong>Nom : </strong> <?= $client->getNom() ?></p>
<p><strong>Adresse mail : </strong> <?= $client->getEmail() ?></p>
<p class="mb-5"><strong>Numéro de téléphone : </strong> <?= $client->getTelephone() ?></p>

<a href="?action=client-edit&id=<?= $client->getId() ?>" class="btn btn-info mb-3">✏️ Modifier les informations du client</a>
<a href="?action=client-index" class="btn btn-light mb-3">🔙 Retour à la liste des clients</a>

<?php require_once __DIR__ . '/templates/footer.php'; 