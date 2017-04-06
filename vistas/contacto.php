<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<div class="navbar navbar-default navbar-static-top contenmenu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="../index.php"><i class="fa fa-home fa-fw"></i>&nbsp;INDEX</a>
            </li>
            <li>
              <a href="nosotros.php"><i class="fa fa-users fa-fw"></i>&nbsp;NOSOTROS</a>
            </li>
            <li>
              <a href="servicios.php"><i class="fa fa-cogs fa-fw"></i>&nbsp;SERVICIOS</a>
            </li>
            <li class="active">
              <a href="contacto.php"><i class="fa fa-fax fa-fw"></i>&nbsp;CONTACTO</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="bannercont">
      <p>Contacto</p>
      <!-- <div class="col-md-6">
        <img src="../img/matenda.png" alt="MATENDA PROMOTORA" class="img-responsive">
      </div> -->
    </div>

    <article class="bannerdirec">
  <p>Oficina MATENDA PROMOTORA S. de R.L de C.V. E-Mail: <a href="mailto:info@glg.com.mx">info@pendiente</a> Teléfono: pendiente. Calle 3 #235 por 32 y 36 Col. Campestre, Mérida (Yucatán). C.P.97120</p>
 </article>

    <section id="contact">
      <div class="section-content">
        <h1 class="section-header">Contacta con <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">MATENDA PROMOTORA</span></h1>
        <h3>Para más información acerca de nuestros servicios, por favor contáctenos usando este formulario.</h3>
      </div>
      <div class="contact-section">
      <div class="container">
        <form>
          <div class="col-md-6 form-line">
              <div class="form-group">
                <label for="exampleInputUsername">Nombre (s)</label>
                <input type="text" class="form-control" id="" placeholder="Escribe tu nombre completo">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Escribe tu correo electronico">
              </div>  
              <div class="form-group">
                <label for="telephone">Teléfono</label>
                <input type="tel" class="form-control" id="telephone" placeholder="Escribe tu numero teléfonico">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for ="description">Comentario</label>
                <textarea  class="form-control" id="description" placeholder="Escribenos tu mensaje"></textarea>
              </div>
              <div>

                <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;Enviar Mensaje</button>
              </div>
              
          </div>
        </form>
      </div>
    </section>

    
	
<a class="go-top" href="#">Ir arriba</a>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>

</body>
</html>