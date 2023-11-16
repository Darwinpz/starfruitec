<?php require RUTA_RESOURCE . '/views/includes/header.php' ?>

<div class="container">

    <div class="row">

        <div class="col">
            
            <div class="card mb-2" style="background-color: #5da05f;">
                
                <div class="card-body">
                
                    <h3 class="card-title text-center text-white">Contáctanos</h3>
                
                </div>
                            
            </div>
        
        </div>

    </div>

    <div class="row">

        <div class="col col-12 col-sm-12 col-md-12 col-lg-6">

            <div class="row">

                <div class="col col-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="card border border-success mb-2">

                        <div class="card-body">

                            <p class="m-1"><i class="fas fa-location-dot"></i> Machala, Ecuador</p>
                            <p class="m-1"><i class="fas fa-envelope"></i> informacion@starfruitec.com</p>
                            <p class="m-1"><i class="fas fa-envelope"></i> ventas@starfruitec.com</p>
                            <p class="m-1"><i class="fas fa-clock"></i> Lunes a viernes de 9:00 - 18:00</p>

                        </div>

                    </div>

                </div>

                <div class="col col-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="card border border-success mb-2">
                    
                        <div class="card-body">

                            <h5 class="card-title text-center" style="color:#000c7a;"> Google Maps </h5>
                            
                            <div class="row">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15933.389554254481!2d-79.97305470928464!3d-3.263647124350573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x90330e5f486ed7ad%3A0xa2c14493201b5443!2sMachala!5e0!3m2!1ses-419!2sec!4v1700062429876!5m2!1ses-419!2sec" width="525" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                            
                            </div>
                            
                        </div>
                            
                    </div>

                </div>

            </div>

        </div>

        <div class="col col-12 col-sm-12 col-md-12 col-lg-6 d-flex">

            <div class="card border border-success mb-2">
                
                <div class="card-body">
                    
                    <h5 class="card-title text-center" style="color:#000c7a;"> ¡Déjanos un mensaje! </h5>
                            
                    <p style="text-align: justify;">¡Nos encanta estar en contacto con nuestros clientes y ayudarte con cualquier consulta
                        o inquietud que tengas! Por favor, déjanos un mensaje a través del formulario de contacto y nos comunicaremos 
                        contigo dentro de las próximas 24 horas hábiles.</p>

                    <form>
                            
                        <div class="row g-3">

                            <div class="col-md-12">
                                <input type="text" class="form-control fs-5 border border-dark" name="nombre" placeholder="Nombres y Apellidos" value=""
                                    required>
                            </div>

                            <div class="col-md-12">
                                <input type="email" class="form-control fs-5 border border-dark" name="correo" placeholder="Correo Electrónico" value=""
                                    required>
                            </div>

                            <div class="col-md-12">
                                <textarea type="text" class="form-control fs-5 border border-dark" name="mensaje" style="height: 140px;"
                                    placeholder="Mensaje de dudas y requerimientos" required></textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-block fs-4">Enviar Mensaje</button>
                            </div>

                        </div>

                    </form>
                
                </div>
                            
            </div>

        </div>

    </div>


</div>


<?php require RUTA_RESOURCE . '/views/includes/footer.php' ?>