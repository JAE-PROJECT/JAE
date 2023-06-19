@extends('admin.base')
@section('content')
      <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <!-- Si il y a une équipe -->
          @if ( $jaecount !=0)
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
           
              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h4 class="mb-0">  {{ $jae }} </h4>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Nombre total des JAE </h6>
                  </div>
                </div>
              </div>
               <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h4 class="mb-0">Equipe :  <strong>{{ $team->nom_equipe }}</strong></h4>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Nom de mon équipe</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h4 class="mb-0">{{ $jaecount }}</h4> 
                        </div>
                      </div>
                      <div class="col-3">
                        
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Nombre total des membres de mon équipe</h6>
                  </div>
                </div>
              </div>
            </div>

            <!-- Ligne tableau des jaefriends -->
            <div class="row">
              <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <a href="{{ route('jaefriends.export') }}" class="btn btn-warning">Télécharger la liste</a>
                </div>
                <div class="card-body">
                      <table class="table  table-hover" id="listedesmembres">
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Contact Direct </th>
                    <th>Contact Wha</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($jaemembre as $item)
                   <tr>
                    <td>
                    {{ $item->nom }}
                    </td>

                     <td>
                    {{ $item->prenom }}
                    </td>

                     <td>
                    {{ $item->email }}
                    </td>
                    
                     <td>
                    {{ $item->contact_direct }}
                    </td>

                      <td>
                    {{ $item->contact }}
                    </td>
                   </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Contact Direct </th>
                    <th>Contact Wha</th>
                  </tr>
                </tfoot>
              </table>
                </div>
                <div class="card-footer text-muted">
                  Footer
                </div>
              </div>
              </div>
            </div>
          @else
            <div class="row">
              <div class="col-12">
              <div class="alert alert-primary" role="alert">
                <strong>Vous n'avez aucune équipe pour le moment. Veuillez contacter votre Chief</strong>
              </div>
              
              </div>
            </div>
          @endif
          </div>
          <!-- content-wrapper ends -->
@endsection
