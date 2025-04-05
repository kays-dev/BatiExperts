<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container-fluid mb-5 bg-info pt-4 pb-2">
    <h2 class="mb-4 text-dark">📋 Détails de la commande</h2>
</div>

<p><strong>Titre : </strong> <?= $order->getTitle() ?></p>
<p class="mb-5"><strong>Status : </strong> <?= $order->getStatus() ?></p>

<a href="?action=order-edit&id=<?= $order->getId() ?>" class="btn btn-info mb-3">✏️ Modifier les informations de la commande</a>
<a href="?action=order-index" class="btn btn-light mb-3">🔙 Retour à la liste des commandes</a>

<?php require_once __DIR__ . '/templates/footer.php';