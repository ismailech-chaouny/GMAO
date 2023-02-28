@extends('layouts.app')
@section('title')
Creation d'équipement
@endsection
@section('content')
<div id="app">
    <div id="sidebar" class="active">
        @include('layouts.header')
        @include('layouts.sidebar-equi')
    </div>
    <div id="main">
            <section id="basic-vertical-layouts">
                <div class="col-md-9 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Créer un équipement</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" method="POST" enctype="multipart/form-data" action="{{route('Equipement.store')}}">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                        <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon">Image</label>
                                                    <div class="position-relative">
                                                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image">
                                                        @error('image')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Designation</label>
                                                    <div class="position-relative">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                        <input type="text" name="Designation" id="Designation" class="form-control @error('Designation') is-invalid @enderror""
                                                            placeholder="Designation" value="{{old('Designation')}}">
                                                            @error('Designation')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon">Description</label>
                                                    <div class="position-relative">
                                                        <textarea type="text" name="Description"class="form-control @error('Description') is-invalid @enderror"
                                                        rows="3">{{old('Description')}}</textarea>
                                                        @error('Description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Categorie</label>
                                                    <div class="form-group">
                                                        <select name="Categorie_id" class="choices form-select @error('Categorie_id') is-invalid @enderror ">
                                                            <option value="" selected disabled >Sélectionner votre categorie</option>
                                                            @foreach ($categories as $categorie)
                                                                <option value="{{$categorie->id}}">{{$categorie->categorie}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                @error('Categorie_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Service</label>
                                                    <div class="form-group">
                                                        <select name="Service_id" class="choices form-select">
                                                            <option value="" selected disabled >Sélectionner votre Service</option>
                                                            @foreach ($services as $service)
                                                                <option value="{{$service->id}}">{{$service->nom_service}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Date Debut</label>
                                                    <div class="position-relative">
                                                        <input type="date" name="DateDebut" class="form-control @error('DateDebut') is-invalid @enderror"
                                                            placeholder="DateDebut" value="{{old('DateDebut')}}">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Prix</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="Prix" class="form-control @error('DateDebut') is-invalid @enderror"
                                                            placeholder="Prix" value="{{old('Prix')}}">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Marque</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="Marque" class="form-control  @error('Marque') is-invalid @enderror"
                                                            placeholder="Marque" value="{{old('Marque')}}">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Reference</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="Reference" class="form-control @error('Reference') is-invalid @enderror"
                                                            placeholder="Reference" value="{{old('Reference')}}">
                                                        <div class="form-control-icon">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon">Document</label>
                                                    <div class="position-relative">
                                                        <input class="form-control @error('document') is-invalid @enderror" type="file" name="document">
                                                        @error('document')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2 mb-2">
                                                <div class="form-group has-icon-left">
                                                    <div class="form-group">
                                                        <label for="first-name-icon">Piece de Rechanger</label>
                                                        <div class="position-relative">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input form-check-success" type="radio" name="PieceRechanger"
                                                                    id="flexRadioDefault1" value="1">
                                                                <label class="form-check-label" for="true">Oui</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input form-check-danger" type="radio" name="PieceRechanger"
                                                                    id="flexRadioDefault1" value="0">
                                                                <label class="form-check-label" for="false">Non</label>
                                                                    
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary me-1 mb-1">Créer un équipement</button>
                                                <a href="{{route('Equipement.index')}}" class="btn btn-light-secondary me-1 mb-1">Annuler</a>
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
</div>
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
</div>
@endsection