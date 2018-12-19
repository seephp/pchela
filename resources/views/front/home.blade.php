@extends('layouts.master')
@section('content')

<section class="probootstrap-cover probootstrap-scene-0">
      <div class="container">
        <div class="row probootstrap-vh-100 align-items-center  text-md-left text-sm-center text-center">
          <div class="col-md-6 order-md-2 order-1">
            <img src="{{ asset('user/images/device_vertical_1.png') }}" class="img-fluid probootstrap-device-vertical-1" alt="Free Bootstrap 4 Template by uicookies.com">
          </div>
          <div class="col-md-6 order-md-1 order-2">
            <div class="probootstrap-text">
              <h1 class="probootstrap-heading probootstrap-stagger text-white mb-2">Добро пожаловать!</h1>
              <p class="mb-5 probootstrap-stagger lead">Когда сайты стали доступны каждому...
              </p>
              <p class="probootstrap-stagger"><a href="https://uicookies.com/" class="btn btn-primary mr-2 mb-2"><span class="icon-ipad"></span>Рассчитать стоимость</a><a href="https://uicookies.com/" class="btn btn-primary btn-outline-white mb-2">Почему у нас?</a></p>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    
    <section class="probootstrap-section probootstrap-scene-1 probootstrap-bg-dark">
      <div class="container ">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-8">
            <h2 class="probootstrap-heading">Немного о пчелах</h2>
            <p class="mb-5 lead">Пчелы классные.</p>
            <p><a href="https://uicookies.com/" class="btn btn-primary mr-2 mb-2"><span class="icon-ipad"></span>Наши клиенты</a></p>
          </div>  
        </div>
      </div>
      <div class="container-fluid mb-5">
        <div class="row">
          <div class="col-md-12">
            <div class="probootstrap-devices">
              
              <img src="{{ asset('user/images/device_1.jpg') }}" class="probootstrap-device-left img-fluid" alt="Free Bootstrap 4 Template by uicookies.com">
              <img src="{{ asset('user/images/device_2.jpg') }}" class="probootstrap-device-right img-fluid" alt="Free Bootstrap 4 Template by uicookies.com" class="img-fluid">
              <img src="{{ asset('user/images/device_3.jpg') }}" class="probootstrap-device-center img-fluid" alt="Free Bootstrap 4 Template by uicookies.com">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-cover probootstrap-bg " style="background-image: src="{{ asset('user/images/bg_1.jpg') }}">
      <div class="container">
        <div class="row align-items-center justify-content-center probootstrap-vh-75">
            <div class="col-md-6 text-center">
              <div class="probootstrap-text">
              <h1 class="probootstrap-heading text-white mb-5">Работодателям</h1>
               <p><a href="https://uicookies.com/" class="btn btn-primary mr-2 mb-2"><span class="icon-ipad"></span>Площадка продаж</a><a href="https://uicookies.com/" class="btn btn-primary btn-outline-white mb-2">Магазин</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="media mb-4">
              <div class="probootstrap-icon"><span class="icon-fingerprint display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Free Bootstrap 4</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="media mb-4">
              <div class="probootstrap-icon"><span class="icon-users display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">For The Community</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="media mb-4">
              <div class="probootstrap-icon"><span class="icon-chat display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Support For Templates</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="media mb-4">
              <div class="probootstrap-icon"><span class="icon-creative-commons display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Under CC 3.0 License</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="media mb-4">
              <div class="probootstrap-icon"><span class="icon-tablet-mobile-combo display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">100% Fully Responsive</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="media mb-4">
              <div class="probootstrap-icon"><span class="icon-credit display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">Donate To Us</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    
    <section class="probootstrap-section probootstrap-bg-dark">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-8">
            <h2 class="probootstrap-heading">Eжедневный интересный факт</h2>
            <p class="mb-5 lead">В среднем дети смеются 400 раз в день, взрослые смеются 15 раз в день.</p>
          </div>  
        </div>
        <div class="row">
          <div class="col-md">
            <div class="media d-block mb-4 text-center">
              <img src="images/square-person_1.jpg" alt="" class="img-fluid mb-3 rounded-circle w-25">
              <div class="media-body p-3">
                <p class="mb-5">&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                <h5 class="mt-0">James Rogeer</h5>
                <p>Invision</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="media d-block mb-4 text-center">
              <img src="images/square-person_2.jpg" alt="" class="img-fluid mb-3 rounded-circle w-25">
              <div class="media-body p-3">
                <p class="mb-5">&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&ldquo;</p>
                <h5 class="mt-0">Craig Rose</h5>
                <p>Google</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="media d-block mb-4 text-center">
              <img src="images/square-person_3.jpg" alt="" class="img-fluid mb-3 rounded-circle w-25">
              <div class="media-body p-3">
                <p class="mb-5">&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&ldquo;</p>
                <h5 class="mt-0">Christian Rich</h5>
                <p>Twitter</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection