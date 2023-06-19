@extends('admin.base')
@section('style1')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   
@endsection
@section('content')
      <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Création d'équipe </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="btn btn-warning" href="#">Exporter les équipes (pdf)</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Liste des JAE</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                   @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li class="text-white">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                   <form class="forms-sample" method="POST" action="{{ route('teamcrud.store') }}">
                   @csrf
                        <div class="form-group">
                        <label for="exampleInputEmail1">Nom de l'équipe</label>
                            <input type="text" class="form-control p-input" id="nom_equipe" name="nom_equipe"  value="{{ old('nom_equipe') }}"aria-describedby="nom_equipe" placeholder="Ex : Force">
                            <small id="nom_equipe" class="form-text text-muted text-success"><span class="fa fa-info mt-1"></span>Ce champs est obligatoire et le nom de l'equipe ne doit être déjà pris</small>
                        </div>
                        <div class="form-group">
                        <label for="chef">Choisir un chef</label>
                        <select class="form-control" id="chef" name="chef_selected">
                        <option></option>
                         </select>
                        </div>
                          <div class="form-group">
                        <label for="chef">Choisir les membres</label>
                        <select class="form-control" id="membre" name="membre[]" multiple="multiple">
                        <option></option>
                         </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
@section('script')
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$('#chef').select2({
        placeholder: 'Selectionner un chef',
        ajax: {
            url: '{{ route('teamcrud.jaefriends') }}',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.nom + '  ' + item.prenom,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
$('#membre').select2({
        placeholder: 'Selectionner les membres',
        maximumSelectionLength: 10,
        ajax: {
            url: '{{ route('teamcrud.jae') }}',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.nom + '  ' + item.prenom,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

</script>
@endsection