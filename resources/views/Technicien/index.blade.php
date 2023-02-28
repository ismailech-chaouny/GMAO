@extends('layouts.app')
@section('title')
    Techniciens
@endsection
@section('content')
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts.header')
            @include('layouts.sidebar-menu')
        </div>
        <div id="main">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-2 order-last">
                            <h3>Table des techniciens</h3>
                        </div>

                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <a href="{{ route('Technicien.create') }}" class="btn btn-primary ">
                                    <i class="bi bi-plus-circle mx-1"></i>
                                    <span>Ajouter un technicien</span>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Spécialite</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($techniciens as $technicien)
                                        <tr>
                                            <td>{{ $technicien->nom }}</td>
                                            <td>{{ $technicien->prenom }}</td>
                                            <td>{{ $technicien->email }}</td>
                                            <td>{{ $technicien->telephone }}</td>
                                            <td>{{ $technicien->specialite->specialite }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('Technicien.edit', $technicien->id) }}">
                                                        <span class="badge bg-success"><i
                                                                class="bi bi-pencil-square"></i></span>
                                                    </a>
                                                    <a onclick="deleteEta({{ $technicien->id }})" type="button">
                                                        <span class="badge bg-danger ms-2"><i
                                                                class="bi bi-trash-fill"></i></span>
                                                    </a>
                                                    <form id="{{ $technicien->id }}"
                                                        action="{{ route('Technicien.destroy', $technicien->id) }}"
                                                        method="POST">
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
                title: "{{ session()->get('success') }}",
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    @endif
    <script>
        function deleteEta($id) {
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
@endsection
