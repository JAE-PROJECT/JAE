<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact footer-links">
      <a href="/" class="logo me-auto"><img src="{{asset('img/logo_header.png')}}" alt="oups"  style="width: 100px;"></a>
        <p>
        <br>
          <strong>Téléphone:</strong><a  target="_blank" rel="noopener noreferrer">+225 48 66 43 62<br>
          <strong>Email:</strong><a href="mailto:contact@jae.gcapholding.com"  target="_blank" rel="noopener noreferrer" > contact@jae.gcapholding.com</a> <br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Liens utiles</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i><a href="{{route('apropos')}}" class="">A Propos</a></li>
          <li><i class="bi bi-chevron-right"></i><a href="{{route('programme')}}">Nos Programmes</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{route('blog')}}">Blog</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4> Nos Programmes</h4>
        <ul>
            @php
                $events = DB::table('event')->select('event_titre')->limit(3)->get();
            @endphp
            @foreach ($events as $item)
                <li><i class="bi bi-chevron-right"></i> <a href="{{route('programme')}}">{{$item->event_titre}}</a></li>
            @endforeach
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Nos réseaux sociaux</h4>
        <p>Rejoignez-nous sur nos différents réseaux sociaux</p>
        <div class="social-links mt-3">
          <a href="https://twitter.com/jae_officiel" class="twitter" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>
          <a href="https://www.facebook.com/jaeofficiel.co" class="facebook" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/jae_officiel/" target="_blank" rel="noopener noreferrer" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span>JAE</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    Designed by <a href="/">JAE</a>
  </div>
</div>

</footer><!-- End Footer -->
