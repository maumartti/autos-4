@extends('layouts.web')
@section('head')
<style>
  .accordion-button::after{
    display:none !important;
  }
</style>
@endsection
@section('content')
<div class="container mt-2">
  

    <!-- Features Section -->
    <section id="features" class="py-0">
      <div class="container p-0">
          <!-- Categorias -->
          <div class="row">
            <div class="col-lg-12 mb-4">
              <div class="module skills p-4">
                <button class="accordion-button border-r-14" type="button">
                  <h2 class="line-height-0 display-4 m-1">
                    Destacados <i class="fas fa-star"></i>
                  </h2>
                </button>
              </div>
            </div>


        
              <!-- Lista de productos -->
              <div class="col-6 col-sm-6 col-lg-3 mb-3 pe-2" data-bs-toggle="modal" href="#exampleModalToggle">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="/images/p1.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar Cloud White and Core Black with tree sizes</h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3 mb-3 pe-2 ps-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="/images/p4.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar Cloud White and two colors</h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3 mb-3 pe-2 ps-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="/images/p5.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar Cloud White and Core Black Shoes</h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3 mb-3 ps-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="/images/p6.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar </h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <!-- Segunda fila -->
              <div class="col-6 col-sm-6 col-lg-3 mb-3 pe-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="/images/p4.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar </h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3 mb-3 pe-2 ps-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="/images/p6.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar </h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3 mb-3 pe-2 ps-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="/images/p1.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar </h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3 mb-3 ps-2">
                <div class="module p-4 pb-2">
                  <div class="cont-img-prod">
                    <img src="/images/p5.png" class="img-prod w-100" style="border-radius: 20px;">
                  </div>
                  <h4 class="display-5 mt-2">Women's Superstar </h4>
                  <h4 class="display-4 mt-1">$U 4.200</h4>
                </div>
              </div>




              <!-- Modal Item -->
              <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-header p-3 border-0"">
                      <!-- <h5 class="modal-title" id="exampleModalToggleLabel">Women's Superstar</h5> -->
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                      <div class="row">
                        <!-- Carousel -->
                        <div id="carouselExampleIndicators" class="col-lg-7 carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="/images/p1.png" class="d-block w-100" alt="p1.jpg">
                            </div>
                            <div class="carousel-item">
                              <img src="/images/p2.jpg" class="d-block w-100" alt="p1.jpg">
                            </div>
                            <div class="carousel-item">
                              <img src="/images/p3.png" class="d-block w-100" alt="p1.jpg">
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
                        <!-- Carousel END -->
                        <div class="col-12 col-lg-5">
                          <h4 class="display-5 color-dark mt-2 mt-md-0">Zapatillas Blancas de Mujer Adidas</h4>
                          <h4 class="display-4 mt-1">$U 4.200</h4>
                          <h4 class="display-4 color-dark mt-1 fs-6">Categoría: Mujer</h4>
                          <!-- <h4 class="display-4 color-dark mt-1 fs-6">Color: Blanco</h4> -->
                          <p>Zapatillas Adidas blancas para mujer: un toque de estilo clásico que combina con todo. Confortables y versátiles, son perfectas para tu día a día, ya sea para entrenar o para un look casual.Estilo, comodidad y moda en cada paso.</p>
                          <h4 class="display-4 color-dark mt-1 fs-6">Stock: 12</h4>
                          <h4 class="display-4 color-dark mt-1 fs-6">Talles: S M XL</h4>
                          <div class="mt-4 d-flex">
                            <button type="button" class="btn btn-primary rounded-pill btn-blue ms-0" style="width:44px;"><i class="fas fa-shopping-cart" style="position: relative;left: -5px;"></i></button>
                            <button type="button" class="btn btn-primary rounded-pill btn-blue ms-1"><i class="fas fa-credit-card"></i> Comprar</button>
                            <button type="button" class="btn btn-primary rounded-pill btn-white ms-1"><i class="fab fa-whatsapp"></i> Compartir</button>
                          </div>
                        </div>                   
                      </div>
                    </div>
                    <!-- <div class="modal-footer">
                      <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                    </div> -->
                  </div>
                </div>
              </div>
              <!-- end Modal-->

              


            
          </div>
      </div>
    </section>

</div>
@endsection

