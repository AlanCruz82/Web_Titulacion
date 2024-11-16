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


  <div class="container-cards" style="width: 100%;">
    <h5 class="center">Requisitos establecidos en el Plan De Estudios y en las Reglas De Operación 
                      <br><i>Puedes consultar tu plan de estudios en</i>
                      <a href="https://www.dgae-siae.unam.mx/www_gate.php" target="_blank">SIAE</a></h5>
    <div class="section sectRequisitos">
      <!--   Card Section   -->
      <div class="sizeCardPlanEstudios">
        <div class="col s12 m5">
          <div class="card-panel cardPlanEstudios colorCardPlanEstudiosLados">
            <h5>Plan 80</h5>
            <p>Requisitos</p>
            <ol>
              <li>Certificado de estudios</li>
              <li>Carta de liberación Servicio Social</li>
            </ol>
            <a class="waves-effect btn-small botonCardLateral" href="./modos.php">Modos de titulación</a>
          </div>
        </div>
      </div>

      <div class="sizeCardPlanEstudios">
        <div class="col s12 m5">
          <div class="card-panel cardPlanEstudios colorCardPlanEstudiosMedio grey lighten-1">
            <h5>Plan 1279</h5>
            <p>Requisitos</p>
            <ol>
              <li>Certificado de estudios</li>
              <li>Carta de liberación Servicio Social</li>
              <li>Constancia aprobatoria Inglés</li>
            </ol>
            <a class="waves-effect btn-small botonCardMedio grey darken-4" href="./modos.php">Modos de titulación</a>
          </div>
        </div>
      </div>

      <div class="sizeCardPlanEstudios">
        <div class="col s12 m5">
          <div class="card-panel cardPlanEstudios colorCardPlanEstudiosLados">
            <h5>Plan 2119</h5>
            <p>Requisitos</p>
            <ol>
              <li>Certificado de estudios</li>
              <li>Carta de liberación Servicio Social</li>
              <li>Constancia aprobatoria Inglés</li>
              <li>Constancia de liberacion horas complementarias</li>
            </ol>
            <a class="waves-effect btn-small botonCardLateral" href="./modos.php">Modos de titulación</a>
          </div>
        </div>
      </div>

      <div class="sizeCardPlanEstudios">
        <div class="col s12 m5">
          <div class="card-panel cardPlanEstudios colorCardPlanEstudiosLados">
            <h5>Plan 82</h5>
            <p>Requisitos</p>
            <ol>
              <li>Certificado de estudios</li>
              <li>Carta de liberación Servicio Social</li>
            </ol>
            <a class="waves-effect btn-small botonCardLateral" href="./modos.php">Modos de titulación</a>
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