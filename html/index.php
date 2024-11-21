<?php
  include("./header.php");
?>

<body>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text">Ingeniería en computación</h1>
        <div class="row center">
          <h5 class="header col s12 light">Modalidades de titulación</h5>
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax responsive-img"><img src="./img/Entrada_fes.png"></div>
  </div>
  
  <div class="container-cards">
    <div class="row">

      <div class="header-info">
        <h5 class="center-align">Requisitos establecidos en el Plan De Estudios y en las Reglas De Operación <br>
        <i>Puedes consultar tu plan de estudios en <a href="https://www.dgae-siae.unam.mx/www_gate.php" target="_blank">SIAE</a></i></h5>
      </div>

      <div class="card-plan82 col s6 m3">
        <div class="card grey lighten-1">
          <div class="card-content black-text">
            <span class="card-title center-align"><b>Plan 80</b></span>
            <br>
            <p class="center-align">Requisitos</p>
            <br>
            <ol>
              <li><a href="./pdf/certificado-de-estudios.pdf" target="_blank">Certificado de estudios</a></li>
              <li><a href="./pdf/carta-liberacion-servicio.pdf" target="_blank">Carta de liberación Servicio Social</a></li>
              <br>
              <br>
              <br>
            </ol>
            <div class="btn-modalidades center-align">
              <a class="waves-effect btn-small botonCard" href="./modos.php">Modos de titulación</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card-plan1279 col s6 m3">
        <div class="card grey lighten-1">
          <div class="card-content black-text">
            <span class="card-title center-align"><b>Plan 1279</b></span>
            <br>
            <p class="center-align">Requisitos</p>
            <br>
            <ol>
              <li><a href="./pdf/certificado-de-estudios.pdf" target="_blank">Certificado de estudios</a></li>
              <li><a href="./pdf/carta-liberacion-servicio.pdf" target="_blank">Carta de liberación Servicio Social</a></li>
              <li><a href="https://siglear.aragon.unam.mx/" target="_blank">Constancia aprobatoria inglés</a></li>
              <br>
              <br>
            </ol>
            <div class="btn-modalidades center-align">
              <a class="waves-effect btn-small botonCard" href="./modos.php">Modos de titulación</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card-plan2119 col s6 m3">
        <div class="card grey lighten-1">
          <div class="card-content black-text">
            <span class="card-title center-align"><b>Plan 2119</b></span>
            <br>
            <p class="center-align">Requisitos</p>
            <br>
            <ol>
              <li><a href="./pdf/certificado-de-estudios.pdf" target="_blank">Certificado de estudios</a></li>
              <li><a href="./pdf/carta-liberacion-servicio.pdf" target="_blank">Carta de liberación Servicio Social</a></li>
              <li><a href="https://siglear.aragon.unam.mx/" target="_blank">Constancia aprobatoria inglés</a></li>
              <li><a href="./pdf/actividad-formacion-complementaria.pdf" target="_blank">Constancia liberación horas complementarias</a></li>
            </ol>
            <div class="btn-modalidades center-align">
              <a class="waves-effect btn-small botonCard" href="./modos.php">Modos de titulación</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card-plan82 col s6 m3">
        <div class="card grey lighten-1">
          <div class="card-content black-text">
            <span class="card-title center-align"><b>Plan 82</b></span>
            <br>
            <p class="center-align">Requisitos</p>
            <br>
            <ol>
              <li><a href="./pdf/certificado-de-estudios.pdf" target="_blank">Certificado de estudios</a></li>
              <li><a href="./pdf/carta-liberacion-servicio.pdf" target="_blank">Carta de liberación Servicio Social</a></li>
              <br>
              <br>
              <br>
            </ol>
            <div class="btn-modalidades center-align">
              <a class="waves-effect btn-small botonCard" href="./modos.php">Modos de titulación</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="parallax">
      <img src="./img/facultad_fes.png">
    </div>
    <div class="container">
      <div class="row center">
        <div class="col s12 m12">
          <h5>Lineamientos internos FES Aragón</h5>
          <object data="./pdf/lineamientos-internos-titulacion.pdf" type="application/pdf" width="600" height="500">
            <p>Tu navegador no puede mostrar el pdf
              <a href="./pdf/lineamientos-internos-titulacion.pdf" download>Lineamientos internos FES Aragón</a>
            </p>
          </object>
        </div>
      </div>
    </div>
  </div>
  
  <script>
        const mensaje = localStorage.getItem('mensaje');
        if (mensaje) {
            alert(mensaje);
            localStorage.removeItem('mensaje');
        }
    </script>
</body>

<?php
  include("./footer.php");
?>