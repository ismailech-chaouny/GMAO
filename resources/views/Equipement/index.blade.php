@extends('layouts.app')
@section('title')
    Equipement
@endsection
@section('content')
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts.header')
            @include('layouts.sidebar-equi')
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
                        <div class="col-12 col-md-6 order-last">
                            <h3> des Equipements</h3>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="col-md-12">
                        <div class="row my-4">
                            @foreach ($Equipement as $equip)
                                <div class="col-md-3 mb-2">
                                    <div class="card h-100">
                                        <div class="card-content">
                                            <img class="card-img-top img-fluid"
                                                src="{{ asset('storage/uploads/' . $equip->image) }}" alt="Card image cap" />
                                            <div class="card-body">
                                                <h6 class="card-title">{{ $equip->designation }}</h6>
                                                <p class="card-text ">
                                                    {{ Str::limit($equip->description,99, '...') }}
                                                </p>
                                                <a href="{{ route('Equipement.show', $equip->id) }}" class="btn btn-primary btn-sm">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
