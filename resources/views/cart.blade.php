@extends('layouts.web')
@section('content')
<div class="container mt-2">
  

    <!-- Features Section -->
    <section id="features" class="py-0">
      <div class="container p-0">
          <div class="row">

                <div class="col-lg-8">
                  <div class="module">
                    <h2>Contacto</h2>
                    <div class="company-info pb-2">
                        <img src="/images/logo.png" class="company-logo">
                        <div class="company-details">
                            <div class="company-name">Candle Store</div>
                            <!-- <div class="company-location">Mountain View, CA</div> -->
                        </div>
                    </div>
                    <!-- Agregar formulario de contacto -->
                    <form action="/procesar_formulario.php" method="post">
                      <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="32" style="border-radius: 20px;" required>
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" maxlength="60" style="border-radius: 20px;" required>
                      </div>
                      <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje:</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="5" maxlength="500" style="border-radius: 12px;" required></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="captcha" class="form-label">La suma de 2 + 3 = </label>
                        <input type="text" class="form-control d-inline ms-1" id="captcha" name="captcha" style="width: 40px;" maxlength="1" minlength="1" required>
                      </div>
                      <button type="submit" class="btn btn-primary rounded-pill btn-blue ms-0">Enviar mensaje</button>
                    </form>
                  </div>
                  <!-- Buttons  -->
                  <div class="my-5 mx-4 d-flex">
                    <button class="btn btn-primary rounded-pill btn-blue">
                      <i class="fab fa-instagram"></i> Instagram
                    </button>
                    <button class="btn btn-primary rounded-pill btn-white">
                      <i class="fab fa-whatsapp"></i> Whatsapp
                    </button>
                  </div>                
                  <!-- Buttons  -->
                </div>
                <!-- Feature 2 -->
                <div class="col-12 col-md-4 mt-md-0 ">
                  <div class="module skills">
                    <h2 class="line-height-0 display-4">Mapa</h2>
                    <div class="divider top-28px---bottom-40px">
                    </div>
                    <!-- Mapa -->
                    <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Population Estimator map</a></iframe></div>
                    <!-- Mapa / -->
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
