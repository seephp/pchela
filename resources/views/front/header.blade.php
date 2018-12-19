<nav class="navbar navbar-expand-lg navbar-dark bg-dark probootstrap-navabr-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html"> <img src="{{ asset('user/images/brand.png') }}" width="100" height="100" alt="bee"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-nav" aria-controls="probootstrap-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="probootstrap-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Главная</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">О нас</a></li>
            <li class="nav-item"><a href="services.html" class="nav-link">Портфолио</a></li>
            <li class="nav-item"><a href="" class="nav-link">Контакты</a></li>
            <li class="nav-item"><a href="{{ route('contacts') }}" class="nav-link">Учеба</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- END nav -->

    <!-- <a class="bee" href="index.html">
                         <img src="{{ asset('user/images/brand.png') }}" width="100" height="100" alt="bee">
                         </a> -->