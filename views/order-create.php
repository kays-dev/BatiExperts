<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container-fluid mb-5 bg-info pt-4 pb-4">
    <h2 class="mb-2 text-dark">➕ Créer une nouvelle commande</h2>
</div>

<form action="?action=store" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label text-body-emphasis">Titre :</label>
        <input type="text" class="form-control border border-info-subtle bg-light-subtle" id="titre" name="titre" required>
    </div>

    <div class="mb-5">
        <label for="Statut" class="form-label text-body-emphasis">Statut :</label>
        <select class="form-control border border-info-subtle bg-light-subtle" name="status" id="status">
            <option value="En attente">En attente</option>
            <option value="Expediée">Expediée</option>
            <option value="Livrée">Livrée</option>
        </select>
    </div>

        <button type="submit" class="btn btn-info mb-3">Ajouter</button>
        <a href="?action=order-index" class="btn btn-light mb-3">🔙 Retour à la liste des commandes</a>
</form>

<?php require_once __DIR__ . '/templates/footer.php';