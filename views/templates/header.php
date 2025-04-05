<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des tâches</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="d-flex flex-column" data-bs-theme="dark">
    <nav class="navbar navbar-expand-lg justify-content-center"  style="background-color:rgb(102, 16, 242)" data-bs-theme="dark">

            <a class="navbar-brand fs-1" href="?">🏢 BATI LOAD 🏢</a>

    </nav>

    <ul class="nav nav-tabs nav-fill text-secondary mx-5 my-5">
        <li class="nav-item" >
            <a class="nav-link list-group-item-action border-info-subtle link-body-emphasis link-offset-2" style="background-color:rgb(102, 16, 242,0.7)" href="?action=home">🏠 Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link list-group-item-action border-info-subtle link-body-emphasis link-offset-2" href="?action=client-index" style="background-color:rgb(102, 16, 242,0.2)">Liste des clients</a>
        </li>

        <li class="nav-item">
            <a class="nav-link list-group-item-action border-info-subtle link-body-emphasis link-offset-2" style="background-color:rgb(102, 16, 242,0.2)" href="?action=client-create">Nouveau client</a>
        </li>

        <li class="nav-item">
            <a class="nav-link list-group-item-action border-info-subtle link-body-emphasis link-offset-2" href="?action=order-index" style="background-color:rgb(102, 16, 242,0.2);">Liste des commandes</a>
        </li>

        <li class="nav-item">
            <a class="nav-link list-group-item-action border-info-subtle link-body-emphasis link-offset-2" style="background-color:rgb(102, 16, 242,0.2)" href="?action=order-create">Nouvelle commande</a>
        </li>
    </ul>

    <div class="tab-content mx-5 my-5 px-3 py-3 border border-top-0 border-info-subtle rounded-5 rounded-top-0">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel">
