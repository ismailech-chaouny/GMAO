@extends('layouts.app')
@section('title')
    Services
@endsection
@section('content')
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts.header')
            @include('layouts.sidebar-menu')
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <a href="{{ route('PieceActivite.create') }}" class="btn btn-primary ">
                                    <i class="bi bi-plus-circle mx-1"></i>
                                    <span>Ajouter un Piece</span>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Les Piece des Activites
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Activite</th>
                                        <th>Equipement</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($PieceA as $piece)
                                        <tr>
                                            <td>{{ $piece->Activite->description }}</td>
                                            <td>{{ $piece->Equipement->designation }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('PieceActivite.show', $piece->id) }}">
                                                        <span class="badge bg-info"><i class="bi bi-eye"></i></span>
                                                    </a>
                                                    <a href="{{ route('PieceActivite.edit', $piece->id) }}">
                                                        <span class="badge bg-success mx-2"><i
                                                                class="bi bi-pencil-square"></i></span>
                                                    </a>

                                                    <form id="{{ $piece->id }}"
                                                        action="{{ route('PieceActivite.destroy', $piece->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <a onclick="deleteEta({{ $piece->id }})" type="button">
                                                            <span class="badge bg-danger"><i
                                                                    class="bi bi-trash-fill"></i></span>
                                                        </a>
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
</div>
@endsection
