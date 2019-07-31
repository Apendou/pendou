
<!DOCTYPE html>
<html>
 <head>
    <title> Inscripcion </title>
    <link href="../img/favicon.png" rel="icon">
    <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  
    <!-- Bootstrap CSS File -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">



    <script type="text/javascript" src="reservado/puente.js"></script>

  </head>

  <body>
      
 <div class="container">
 
        <img src="../img/testimonial-4.jpg" class="img-fluid">
  <!-- resultados-->
    <div id="demo"> 

    </div>

  <!-- resultados-->

            <h4>Diligenciar Tus datos</h4>
            <p>Nos comunicaremos contigo en el menor tiempo posible.</p>

            <form action="#" method="POST"  class="contactForm">

              <div class="form-group">
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder=" nombre completo"  />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder=" Email" data-rule="email" data-msg="" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="celular" id="celular" placeholder="celular" />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                  <p>Servicio de interes para ti.</p> 
              <select name="opciones" class="form-control">
                    <option value="Paginas Web">Paginas Web</option>
                    <option value="App Movil">App Movil</option>
                    <option value="Marketing digital">Marketing digital</option>
                    <option value="Publicidad">Publicidad</option>
                  </select>
                </div>


              <div class="form-group">
                <textarea class="form-control" name="mensaje" rows="5"  placeholder="mensaje "></textarea>
                <div class="validation"></div>
              </div>

              <div id="sendmessage">Gracias por visitarnos!</div>
              <div id="errormessage"></div>

              <div class="text-center">
               <input type="submit"  name=" " placeholder="Enviar datos" onclick="pu();">
                </div>
            </form>

<br>
<br>



        </div>
  </body>
</html>