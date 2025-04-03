<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des tâches</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg justify-content-center"  style="background-color:rgb(102, 16, 242)" data-bs-theme="dark">

            <a class="navbar-brand h1" href="?">🏢 BATI EXPERTS 🏢</a>

    </nav>

    <div class="container mt-5"></div>

    <ul class="nav nav-tabs nav-fill text-secondary">
        <li class="nav-item" >
            <a class="nav-link list-group-item-action border-dark-subtle" style="background-color:rgb(102, 16, 242,0.2)" href="?">🏠 Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link list-group-item-action border-secondary-subtle" href="?action=order-index" style="background-color:rgb(102, 16, 242,0.2)">🚛 Liste des commandes</a>
        </li>

        <li class="nav-item">
            <a class="nav-link list-group-item-action border-dark-subtle" style="background-color:rgb(102, 16, 242,0.2)" href="?action=client-create">➕ Nouveau client</a>
        </li>

        <li class="nav-item">
            <a class="nav-link list-group-item-action border-dark-subtle" style="background-color:rgb(102, 16, 242,0.2)" href="?action=order-create">➕ Nouvelle commande</a>
        </li>
    </ul>

    <div class="container mt-5"></div>