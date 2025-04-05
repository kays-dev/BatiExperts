<?php require_once __DIR__ . '/templates/header.php'; ?>
        
<div class="container-fluid mb-5 bg-info pt-4 pb-2">
    <h2 class="mb-4 text-dark">👤 Liste des clients</h2>
</div>

<table class="table table-striped">
    <thead class="table-info">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php foreach($clients as $client): ?>

            <tr>
                <th scope="row"><?= $client->getId(); ?></th>
                <td><a href="?action=client-view&id=<?= $client->getId() ?>"><?= $client->getNom(); ?></a></td>
                <td><?= $client->getEmail(); ?></td>
                <td><?= $client->getTelephone(); ?></td>
                <td>
                    <div class="btn-group btn-group-sm">
                        <a href="?action=client-view&id=<?= $client->getId() ?>" class="btn btn-light">👁‍🗨</a>
                        <a href="?action=client-edit&id=<?= $client->getId() ?>" class="btn btn-warning">✏️</a>
                        <a onclick="return confirm('Are you sure ?');" href="?action=client-delete&id=<?= $client->getId() ?>" class="btn btn-danger">✖</a>
                    </div>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/templates/footer.php';