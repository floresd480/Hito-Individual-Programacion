<!--  LOGIN DE Formulario de contacto -->
<section class="pagina_contacto">
        <div class="container">
          <div class="titulo1">
            <div class="contactanos"></div>
            <h2>Inicia Sesion</h2>
          </div>
          <div class="inner-container">
            <div class="row clearfix">
                   
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                  <div class="inner-column">
                    <div class="formulario_contacto">
                      <form method="post" action="../modelo/user_controler.php" id="formulario_contacto">
                        <div class="row clearfix">
                          <div class="form-group col-md-6 col-sm-6 co-xs-12">
                            <input type="text" name="nombre" value="" placeholder="Nombre" required>
                          </div>
                          <div class="form-group col-md-6 col-sm-6 co-xs-12">
                            <input type="text" name="apellidos" value="" placeholder="Apellidos" required>
                          </div>
                          <div class="form-group col-md-6 col-sm-6 co-xs-12">
                            <input type="password" name="password" value="" placeholder="Contraseña" required>
                          </div>
                          <div class="form-group col-md-6 col-sm-6 co-xs-12">
                            <input type="email" name="email" value="" placeholder="Email" required>
                            <input type="hidden" name="acction" value="registrar">
                          </div>
                          <div class="form-group col-md-12 col-sm-12 co-xs-12">
                            <button type="submit" class="theme-btn btn-style-one">Registrarse</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>