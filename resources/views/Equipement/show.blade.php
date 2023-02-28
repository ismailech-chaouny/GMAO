@extends('layouts.app')
@section('title')
    Equipement
@endsection
@section('content')
    <div id="app">
        <div id="sidebar" class="active">
            <div id="sidebar" class="active">
                @include('layouts.header')
                @include('layouts.sidebar-equi')
            </div>
        </div>
        <div id="main">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-last">
                            <h3> des Equipements</h3>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid"
                                        src="{{ asset('storage/uploads/' . $Equipement->image) }}" alt="Card image cap" />
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $Equipement->designation }}</h4>
                                        <p class="card-text">
                                            {{ $Equipement->description }}
                                        </p>
                                        <div class="btn-group">
                                            <a href="{{ route('Equipement.edit', $Equipement->id) }}">
                                                <span class="badge bg-success mx-2"><i
                                                        class="bi bi-pencil-square"></i></span>
                                            </a>
                                            <a onclick="deleteEta({{ $Equipement->id }})" type="button">
                                                <span class="badge bg-danger"><i class="bi bi-trash-fill"></i></span>
                                            </a>
                                            <form id="{{ $Equipement->id }}"
                                                action="{{ route('Equipement.destroy', $Equipement->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <embed src="{{ asset('storage/uploads/' . $Equipement->document) }}" width="590"
                                height="600" type="application/pdf" />
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
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
</div>
@endsection
