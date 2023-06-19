@extends('admin.layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Gestion des evennements - Editer un evennement
                    </div>
                    <div class="card-body">
                        <form action="{{ route('event.update', $event) }}" method="POST">
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
                            <label for="event_titre" class="form-label">Titre</label>
                            <input name="event_titre" type="text" class="form-control @error('event_titre') is-invalid @enderror" id="event_titre" aria-describedby="event_titre" value="{{ $event->event_titre }}" required>
                            <div id="eventtype_titre" class="form-text">Session MTL du 20/10/2022</div>
                        </div>

                        <div class="mb-3">
                            <label for="event_description" class="form-label">Description</label>
                             <textarea class="form-control" id="event_description" name="event_description" rows="3">{{ $event->event_description }}</textarea>
                        </div>

                         <div class="mb-3">
                            <label for="event_date" class="form-label">Date</label>
                            <input name="event_date" type="date" class="form-control @error('event_date') is-invalid @enderror" id="event_date" aria-describedby="event_date" value="{{ $event->event_date }}" required>
                        </div>

                        <div class="mb-3">

                            <label for="event_heure" class="form-label">Heure</label>
                            <input name="event_heure" type="time" class="form-control @error('event_heure') is-invalid @enderror" id="event_heure" aria-describedby="event_heure" value="{{$event->event_heure }}" required>
                        </div>


                        <div class="mb-3">
                            <label for="nombre_place" class="form-label">Nombre de places</label>
                            <input name="nombre_place" type="number" class="form-control @error('nombre_place') is-invalid @enderror" id="nombre_place" aria-describedby="nombre_place" value="{{ $event->nombre_place}}" required>

                        </div>
                           <div class="mb-3">
                            <label for="type_id" class="form-label">Type d'evennement</label>
                            <select name="type_id" class="form-select form-select-lg" id="type_id">
                            @foreach ($type as $item)
                                <option value="{{ $item->id }}">{{ $item->eventtype_titre }}</option>
                            @endforeach
                                </select>
                        </div>

                       <div class="mb-3">
                            <label for="orateur" class="form-label">Orateur (s)</label>
                          <input class="form-control" type="text" name="orateur" id="orateur" value="{{ $event->orateur }}">
                        </div>



                        <div class="mb-3">
                            <label for="statut" class="form-label">Statut</label>
                            <select name="statut" class="form-select form-select-lg" id="statut" style="min-width: 100%">
                                <option value="ouvert">Ouvert à l'inscription</option>
                            </select>

                        </div>
                         <div>
                            <a href="{{ route('event.index') }}" class="btn btn-primary">
                            Annuler</a>

                            <button class="btn btn-success" type="submit">Enregistrer</button>
                        </div>

                        </form>


                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
