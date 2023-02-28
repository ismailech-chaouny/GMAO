@extends('layouts.app')
@section('title')
Modifier Equipement
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
            <section id="basic-vertical-layouts">
                <div class="col-md-9 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Modifier Equipement</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" method="POST" enctype="multipart/form-data" action="{{route('Equipement.update',$equipement->id)}}">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon">Image</label>
                                                    <div class="position-relative">
                                                        <input class="form-control @error('image') is-invalid @enderror" type="file" value="{{old('image',$equipement->image)}}" name="image">
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
                                                        <input type="text" name="Designation" id="Designation" class="form-control"
                                                            placeholder="Designation" value="{{old('Designation',$equipement->designation)}}">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon">Description</label>
                                                    <div class="position-relative">
                                                        <textarea type="text" name="Description"class="form-control"
                                                            value="{{old('Description')}}" rows="3">{{$equipement->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Select Categorie</label>
                                                    <div class="form-group">
                                                        <select name="Categorie_id" class="choices form-select">
                                                            @foreach ($categories as $categorie)
                                                                <option value="{{$categorie->id}}"{{($categorie->id == $equipement->categorie_id)? "selected" : ""}}>{{$categorie->categorie}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Select Service</label>
                                                    <div class="form-group">
                                                        <select name="Service_id" class="choices form-select">
                                                            @foreach ($services as $service)
                                                                <option value="{{$service->id}}"{{($service->id == $equipement->service_id)? "selected" : ""}}>{{$service->nom_service}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Date Debut</label>
                                                    <div class="position-relative">
                                                        <input type="date" name="DateDebut" class="form-control"
                                                            placeholder="DateDebut" value="{{old('DateDebut',$equipement->date_debut)}}">
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
                                                        <input type="text" name="Prix" class="form-control"
                                                            placeholder="Prix" value="{{old('Prix',$equipement->prix)}}">
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
                                                        <input type="text" name="Marque" class="form-control"
                                                            placeholder="Marque" value="{{old('Marque',$equipement->marque)}}">
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
                                                        <input type="text" name="Reference" class="form-control"
                                                            placeholder="Reference" value="{{old('Reference',$equipement->reference)}}">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon">Document</label>
                                                    <div class="position-relative">
                                                        <input class="form-control @error('document') is-invalid @enderror" type="file" value="{{$equipement->document}}"name="document">
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
                                                                <input class="form-check-input form-check-success" type="radio" name="pieceRechanger"
                                                                    id="flexRadioDefault1" value="1" {{($equipement->pieceRechanger == '1')? "checked" : ""}}>
                                                                <label class="form-check-label" for="true">Oui</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input form-check-danger" type="radio" name="pieceRechanger"
                                                                    id="flexRadioDefault1" value="0" {{($equipement->pieceRechanger == '0')? "checked" : ""}}>
                                                                <label class="form-check-label" for="false">Non</label>
                                                                    
                                                            </div>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary me-1 mb-1">Enregister</button>
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