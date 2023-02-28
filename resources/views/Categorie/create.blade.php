@extends('.layouts.app')
@section('title')
    Ajouter Categorie
@endsection
@section('content')
<div id="app">
    <div id="sidebar" class="active">
        @include('layouts.header')
        @include('layouts.sidebar-categ')
    </div>
    <div id="main">
        <section id="basic-vertical-layouts">
                <div class="col-md-9 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ajouter Categorie</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" method="POST" action="{{route('Categorie.store')}}">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Categorie</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="Categorie" class="form-control @error('Categorie') is-invalid @enderror" 
                                                            placeholder="Nom de Categorie" value="{{old('Categorie')}}">
                                                            @error('Categorie')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
@endsection