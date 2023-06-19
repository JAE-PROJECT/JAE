@extends('admin.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Gestion des types d'evennement - Editer un evennement
                    </div>
                    <div class="card-body">
                        <form action="{{ route('type.update', $type) }}" method="POST">
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
                                <label for="exampleInputEmail1" class="form-label">Type d'evennement</label>
                                <input name="eventtype_titre" type="text"
                                    class="form-control @error('eventtype_titre') is-invalid @enderror" id="eventtype_titre"
                                    aria-describedby="eventtype_titre" value="{{ $type->eventtype_titre }}" required>
                                <div id="eventtype_titre" class="form-text">Exemple : MTL</div>
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
