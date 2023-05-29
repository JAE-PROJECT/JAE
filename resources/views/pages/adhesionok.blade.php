@extends('layouts.base')
@section('content')
     <!-- -------- START HEADER 7 w/ text and video ------- -->
  <div class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('../assets/img/bg9.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">Félicitation !</h1>

            <p class="lead mb-4 text-white opacity-8">
          Vous avez officiellement rejoint la Jeune Afrique Entreprenante. Soyez les bienvenus ! <br>
          Vous serez redirigé vers le groupe Whatsapp</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
  <!-- -------- END HEADER 7 w/ text and video ------- -->
@endsection
<?php
    //dd($lien_zones);
    ?>
@section('script')

    <script>
        setTimeout(function() {
    window.location.href = '{{ $lien_zones }}';
    }, 2000);

    </script>

@endsection
