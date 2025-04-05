<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container-fluid mb-5 bg-info pt-4 pb-2">
    <h2 class="mb-4 text-dark">✏️ Modifier les informations de la commande</h2>
</div>

<form action="?action=update" method="POST">
    <input type="hidden" name="id" value="<?= $order->getId() ?>">

    <div class="mb-3">
        <label for="title" class="form-label text-body-emphasis">Titre :</label>
        <input type="text" class="form-control text-body-emphasis border-info-subtle bg-light-subtle" id="title" name="title" value="<?= $order->getTitle() ?>" required>
    </div>

    <div class="mb-3">  

        <?php $status = $order->getStatus(); ?>

        <label for="status" class="form-label text-body-emphasis">Statut :</label>
        <select class="form-control border-info-subtle bg-light-subtle mb-5" name="status" id="status">
                <option <?= $status == 'En attente' ? 'selected' : '' ?> value="En attente">En attente</option>
                <option <?= $status == 'Expediée' ? 'selected' : '' ?> value="Expediée">Expediée</option>
                <option <?= $status == 'Livrée' ? 'selected' : '' ?> value="Livrée">Livrée</option>
            </select>
    </div>

    <button type="submit" class="btn btn-info mb-3">Modifier</button>
    <a href="?action=order-index" class="btn btn-light mb-3">🔙 Retour à la liste des commandes </a>
</form>

<?php require_once __DIR__ . '/templates/footer.php';