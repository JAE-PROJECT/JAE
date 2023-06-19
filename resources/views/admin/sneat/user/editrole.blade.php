@extends('admin.layout')
@section('content')
<div class="container">
<div class="row">
    <div class="col-12">
    <h3>Editer le rôle de {{ $user->nom }} {{ $user->prenom }}</h3>
<form action="{{ route('user.edit.role.update', $user) }}" method="post">

        @csrf
        @method('PUT')
    <div class="mb-3">
      <label for="" class="form-label">Rôle actuel</label>
      <input type="text"
        class="form-control" value="{{ $user->roles()->first()->name }}" name="" id="" aria-describedby="helpId" placeholder="" disabled>
    </div>
  <div class="mb-3">
        <label for="" class="form-label">Selectionner un rôle</label>
        <select class="form-select form-select-lg" name="role" id="">
            <option value="jae">JAE</option>
            <option value="admin">Admin</option>
        </select>
    </div>
     <div class="mb-3">
        <a href="{{ route('user.index') }}" class="btn btn-primary">Annuler</a>
        <button type="submit" class="btn btn-success">Enregistrer</button>
    </div>
</form>

    </div>
</div>
</div>
@endsection
