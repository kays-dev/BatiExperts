<?php require_once __DIR__ . '/templates/header.php'; ?>

<h2 class="mb-4">📋 Détails du client</h2>

<p><strong>Nom : </strong> <?= $client->getNom() ?></p>
<p><strong>Adresse mail : </strong> <?= $client->getEmail() ?></p>
<p><strong>Numéro de téléphone : </strong> <?= $client->getTelephone() ?></p>

<a href="?action=client-edit&id=<?= $client->getId() ?>" class="btn btn-warning">✏️ Modifier les informations du client</a>
<a href="?" class="btn btn-secondary">🔙 Retour à la liste des clients</a>

<?php require_once __DIR__ . '/templates/footer.php'; 