@extends('admin.base')
@section('content')

<!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Liste des JAE </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="btn btn-warning" href="{{ route('teamcrud.export') }}">Exporter les équipes (pdf)</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Liste des JAE</li>
                </ol>
              </nav>
            </div>

                <!-- Ligne de bienvenue -->
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">BIENVENUE {{ Auth::user()->nom }}  {{ Auth::user()->prenom }}</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Faites un tour !!!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Ligne indicateur numérique -->
             <div class="row">
           
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h4 class="mb-0">  {{ $totaljae }}</h4>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Nombre total des JAE </h6>
                  </div>
                </div>
              </div>
               <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h4 class="mb-0"> </h4>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Nombre d'adhérents pour ce mois</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h4 class="mb-0"> {{ $teamcount }}</h4> 
                        </div>
                      </div>
                      <div class="col-3">
                        
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Nombre total d'équipes</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h4 class="mb-0"> {{ $jaefriendscount }}</h4> 
                        </div>
                      </div>
                      <div class="col-3">
                        
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Nombre total de JAE Friends</h6>
                  </div>
                </div>
              </div>
            </div>



            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <a class="btn btn-success" href="{{ route('teamcrud.create') }}">Créer une équipe</a>
                    <div class="table-responsive">
                      <table class="table table-striped" id="laravel_datatable">
                        <thead>
                          <tr>
                            <th> Intitule</th>
                            <th>Chef d'équipe</th>
                             <th> Effectif</th>
                            <th> Membres</th>
                             <th> Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($team as $item)
                            <td>{{ $item->nom_equipe }}</td>
                            <td> @foreach ( $item->user as $item1)
                                          @if ($item1->roles[0]->name == "jaefriends")
                                              {{ $item1->nom}}  {{ $item1->prenom   }}
                                          @endif
                                      @endforeach
                            </td>
                            <td>
                            {{ $item->user->count() }}
                            </td>
                            <td>
                              @foreach ($item->user as $item2)
                                  {{ $item2->nom }}  {{ $item2->prenom }} <br>
                              @endforeach
                            </td>
                            <td>
                             <a class="btn btn-warning" href="{{ route('teamcrud.edit',$item->id) }}">Editer</a>
                            </td>
                        @endforeach
                        
                        </tbody>
                      </table>
                      {{ $team->links() }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
@endsection

