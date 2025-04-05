<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container-fluid mb-5 bg-info pt-4 pb-2">
    <h2 class="mb-4 text-dark">🛍 Liste des commandes</h2>
</div>

<table class="table table-striped">
    <thead class="table-info">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Statut</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php foreach ($orders as $order): ?>

            <tr>
                <th scope="row"><?= $order->getId(); ?></th>
                <td><a href="?action=order-view&id=<?= $order->getId() ?>"><?= $order->getTitle(); ?></a></td>
                <td><?= $order->getStatus(); ?></td>
                <td>
                    <div class="btn-group btn-group-sm">
                        <a href="?action=order-view&id=<?= $order->getId() ?>" class="btn btn-light">👀</a>
                        <a href="?action=order-edit&id=<?= $order->getId() ?>" class="btn btn-warning">✏️</a>
                        <a onclick="return confirm('Are you sure ?');" href="?action=order-delete&id=<?= $order->getId() ?>"
                        class="btn btn-danger">✖</a>
                    </div>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/templates/footer.php';