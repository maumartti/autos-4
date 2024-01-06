@extends('layouts.web')
@section('content')
<div class="container mt-2">
  

    <!-- Features Section -->
    <section id="features" class="py-0">
      <div class="container p-0">
          <div class="row">

                <div class="col-lg-8">
                  <div class="module">
                    <h2>Sobre Nosotros</h2>
                    <div class="company-info pb-2">
                        <img src="/images/logo.png" class="company-logo">
                        <div class="company-details">
                            <div class="company-name">Candle Store</div>
                            <!-- <div class="company-location">Mountain View, CA</div> -->
                        </div>
                    </div>
                    <p>Loremipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                     veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                     commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in 
                     voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                     sint occaecat cupidatat non proident.</p><p>Sed ut perspiciatis unde 
                     omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                      totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                      architecto beatae vitae dicta sunt explicabo.</p>
                      <p>info@candlestore.com / +34 700 93 93 80</p>
                  </div>
                  <!-- Buttons  -->
                  <div class="my-5 mx-4 d-flex">
                    <button class="btn btn-primary rounded-pill btn-blue">
                      <i class="fab fa-instagram"></i> Instagram
                    </button>
                    <button class="btn btn-primary rounded-pill btn-white">
                      <i class="fab fa-whatsapp"></i> Compartir
                    </button>
                  </div>                
                  <!-- Buttons  -->
                </div>
                <!-- Feature 2 -->
                <div class="col-12 col-md-4 mt-md-0 ">
                  <div class="module skills">
                    <h2 class="line-height-0 display-4">Nuestro proceso</h2>
                    <div class="divider top-28px---bottom-40px">
                    </div>
                    <!-- carrousel -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="/images/about1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="/images/about2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="/images/about3.jpg" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    <!-- / -->
                    </div>
                </div>
                <!-- Mapa -->
                <!-- <div class="col-lg-8 mt-4">
                  <div class="module skills">
                    <h2 class="line-height-0 display-4">Ubicación</h2>
                    <div class="divider top-28px---bottom-40px"></div>
                      <div class="experience-item">
                        
                        ooooooocooooooo
                      </div>
                    </div>
                  </div>
                </div> -->
            
          </div>
      </div>
    </section>

</div>
@endsection
