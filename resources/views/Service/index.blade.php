@extends('layouts.app')
@section('title')
    Services
@endsection
@section('content')
<div id="app">
    <div class="sidebar-menu">
    <div id="sidebar" class="active">
        @include('layouts.header')
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
            <li class="sidebar-item has-sub active">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-browser-safari"></i>
                    <span>Services</span>
                </a>
                <ul class="submenu active">
                    <li class="submenu-item active">
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
                <a href="{{ route('Etat.create') }}" class='sidebar-link'>
                    <i class="bi bi-arrow-repeat"></i>
                    <span>Etat</span>
                </a>
            </li>
            @include('layouts.auth')
        </ul>
    </div>
    </div>
    <div id="main">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h4>Table des Services</h4>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Nom Service</th>
                                    <th>Raison Social</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service )
                                    <tr>
                                        <td>{{$service->nom_service}}</td>
                                        <td>{{$service->etablissement->raison_social}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('Service.show',$service->id)}}">
                                                    <span class="badge bg-info"><i class="bi bi-eye"></i></span>
                                                </a>
                                                <a href="{{ route('Service.edit',$service->id)}}">
                                                    <span class="badge bg-success mx-2"><i class="bi bi-pencil-square"></i></span>
                                                </a>
                                                <a onclick="deleteEta({{$service->id}})" type="button">
                                                    <span class="badge bg-danger"><i class="bi bi-trash-fill"></i></span>
                                                </a>
                                                <form id="{{$service->id}}" action="{{ route('Service.destroy',$service->id)}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach   
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
        @section('scripts')
        @if (session()->has('success'))
            <script>
                Swal.fire({
                    position: '',
                    icon: 'success',
                    title: "{{session()->get('success')}}",
                    showConfirmButton: false,
                    timer: 2500
                })
            </script>
        @endif
        <script>
            function deleteEta($id){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById($id).submit()
                    }
                })
            }
        </script>
        @endsection
        <link rel="stylesheet" href="assets/css/bootstrap.css">
</div>
@endsection