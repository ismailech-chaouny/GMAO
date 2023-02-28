<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>
        <li class="sidebar-item">
            <a href="{{ url('/') }}" class='sidebar-link'>
                <i class="bi bi-house-fill"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-bank2"></i>
                <span>Etablissement</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item ">
                    <a href="{{ route('Etablissement.index') }}">List Etablissement</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{ route('Etablissement.create') }}">Ajouter</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-browser-safari"></i>
                <span>Services</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="{{ route('Service.index') }}">List Service</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{ route('Service.create') }}">Ajouter Service</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-bookmark-fill"></i>
                <span>Categorie</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="{{ route('Categorie.index') }}">List Categorie</a>
                </li>
                <li class="submenu-item">
                    <a href="{{ route('Categorie.create') }}">Ajouter Categorie</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-tools"></i>
                <span>Equipement</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item">
                    <a href="{{ route('Equipement.index') }}">List Equipement</a>
                </li>
                <li class="submenu-item">
                    <a href="{{ route('Equipement.create') }}">Ajouter Equipement</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('Tache.index') }}" class='sidebar-link'>
                <i class="bi bi-card-checklist"></i>
                <span>Taches</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('Spécialite.create') }}" class='sidebar-link'>
                <i class="bi bi-person-vcard-fill"></i>
                <span>Spécialite</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('Technicien.index') }}" class='sidebar-link'>
                <i class="bi bi-person-fill-gear"></i>
                <span>Technicien</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('Activite.index') }}" class='sidebar-link'>
                <i class="bi bi-hurricane"></i>
                <span>Activite</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('PieceActivite.index') }}" class='sidebar-link'>
                <i class="bi bi-wrench-adjustable"></i>
                <span>Piece Activite</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('Etat.index') }}" class='sidebar-link'>
                <i class="bi bi-arrow-repeat"></i>
                <span>Etat</span>
            </a>
        </li>
        @include('layouts.auth')
    </ul>
</div>