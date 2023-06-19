@extends('admin.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Gestion des groupes whatsapp - Editer un groupe
                    </div>
                    <div class="card-body">
                        <form action="{{ route('zone.update', $zone) }}" method="POST">
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="text-black">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nom du Groupe</label>
                                <input name="nom_zone" type="text"
                                    class="form-control @error('nom_zone') is-invalid @enderror" id="nom_zone"
                                    aria-describedby="nom_zone" value="{{ $zone->nom_zone }}" required>
                                <div id="nom_zone" class="form-text">Exemple : Burkina Faso</div>
                            </div>
                            <div class="mb-3">
                                <label for="lien_wha" class="form-label">Lien Whatsapp</label>
                                <input type="text" class="form-control @error('lien_wha') is-invalid @enderror"
                                    id="lien_wha" name="lien_wha" value="{{ $zone->lien_wha }}" required>
                            </div>

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
