<?php
// Variables

$matriz = array(
  array("./images/slidereventos/T08.jpg",
        "Oferta educativa",
        "En el marco de nuestro aniversario, celebramos compartiendo nuestra #OfertaEducativa con las alumnas y alumnos del Cetis No. 26 de Atitalaquia.",
        "https://twitter.com/UPPachuca/status/964601172127637504"),

  array("./images/slidereventos/T07.jpg",
        "Semana de salud 2018",
        "En el marco de nuestro aniversario #NuestraRazónDeSerTú Por ello continuamos cuidando tu salud con la Primera semana de salud 2018",
        "https://twitter.com/UPPachuca/status/963875236826501120"),

  array("./images/slidereventos/T06.jpg",
        "CACEI",
        "En el marco de nuestro aniversario celebramos con #OrgulloUPPachuca que el Programa Educativo de la Ingeniería en Mecatrónica fue re certificado por parte del Consejo de Acreditación de la Enseñanza de la Ingeniería",
        "https://twitter.com/UPPachuca/status/963491583059484674"),

  array("./images/slidereventos/T05.jpg",
        "Activaciones físicas",
        "#FelizSábado En el marco de nuestro aniversario damos la bienvenida deportiva y cultural a estudiantes de nuevo ingreso. Seguimos celebrando y lo hacemos (Agregando vida a la vida) mediante nuestras activaciones físicas.",
        "https://twitter.com/UPPachuca/status/962375113508376582"),

  array("./images/slidereventos/T01.jpg",
        "CTE hidalgo",
        "Cierre de año de #CTEHidalgo en la #UPPachuca Nuestros primeros frutos de los trabajos coordinados en cada uno de los ejes temáticos. ",
        "https://twitter.com/UPPachuca/status/942804725640187904"),

  array("./images/slidereventos/T02.jpg",
        "Taller de proyectos de investigación",
        "Concluye el taller curso taller Elaboración de proyectos de investigación en salud Felicidades a todas y todos nuestros alumnos del P.E. de la Lic en Terapia Física.",
        "https://twitter.com/UPPachuca/status/941809405200355331"),

  array("./images/slidereventos/T03.jpg",
        "Violencia es Violencia",
        "La sesión “Violencia es Violencia” a cargo del Mtro. Alexandrov Vladimir Peña Ramos quien concientizo a nuestras alumn@s en temas de equidad de género, feminicidio y trata de personas. ",
        "https://twitter.com/UPPachuca/status/941397987049304069"),

  array("./images/slidereventos/T04.jpg",
        "4ta #CarreraAtlética #CreandoEsperanza",
        "La UPPachuca participa en la 4ta #CarreraAtlética #CreandoEsperanza para apoyar a niños con insuficiencia renal.",
        "https://www.facebook.com/UPPachuca/photos/pcb.1917785571806184/1917784778472930/?type=3GATITOtheater"),



  array("./images/slidereventos/T01.jpg",
        "XXXXX",
        "Cierre de año de #CTEHidalgo en la #UPPachuca Nuestros primeros frutos de los trabajos coordinados en cada uno de los ejes temáticos. ",
        "https://twitter.com/UPPachuca/status/942804725640187904"),

  array("./images/slidereventos/T02.jpg",
        "Taller de proyectos de investigación",
        "Concluye el taller curso taller Elaboración de proyectos de investigación en salud Felicidades a todas y todos nuestros alumnos del P.E. de la Lic en Terapia Física.",
        "https://twitter.com/UPPachuca/status/941809405200355331"),

  array("./images/slidereventos/T03.jpg",
        "Violencia es Violencia",
        "La sesión “Violencia es Violencia” a cargo del Mtro. Alexandrov Vladimir Peña Ramos quien concientizo a nuestras alumn@s en temas de equidad de género, feminicidio y trata de personas. ",
        "https://twitter.com/UPPachuca/status/941397987049304069"),

  array("./images/slidereventos/T04.jpg",
        "4ta #CarreraAtlética #CreandoEsperanza",
        "La UPPachuca participa en la 4ta #CarreraAtlética #CreandoEsperanza para apoyar a niños con insuficiencia renal.",
        "https://www.facebook.com/UPPachuca/photos/pcb.1917785571806184/1917784778472930/?type=3GATITOtheater"),



  array("./images/slidereventos/T01.jpg",
        "YYYYYYYYYY",
        "Cierre de año de #CTEHidalgo en la #UPPachuca Nuestros primeros frutos de los trabajos coordinados en cada uno de los ejes temáticos. ",
        "https://twitter.com/UPPachuca/status/942804725640187904"),

  array("./images/slidereventos/T02.jpg",
        "Taller de proyectos de investigación",
        "Concluye el taller curso taller Elaboración de proyectos de investigación en salud Felicidades a todas y todos nuestros alumnos del P.E. de la Lic en Terapia Física.",
        "https://twitter.com/UPPachuca/status/941809405200355331"),

  array("./images/slidereventos/T03.jpg",
        "Violencia es Violencia",
        "La sesión “Violencia es Violencia” a cargo del Mtro. Alexandrov Vladimir Peña Ramos quien concientizo a nuestras alumn@s en temas de equidad de género, feminicidio y trata de personas. ",
        "https://twitter.com/UPPachuca/status/941397987049304069"),

  array("./images/slidereventos/T04.jpg",
        "4ta #CarreraAtlética #CreandoEsperanza",
        "La UPPachuca participa en la 4ta #CarreraAtlética #CreandoEsperanza para apoyar a niños con insuficiencia renal.",
        "https://www.facebook.com/UPPachuca/photos/pcb.1917785571806184/1917784778472930/?type=3GATITOtheater")

      );

?>


<div class="container">
  <div class="col-xs-12">

    <div class="page-header">
      <h2>Comunicación social, Prensa UPP</h2>
      <p>Actividades y eventos de la UPPachuca.</p>
    </div>

    <div class="carousel slide" id="eventosimpa">
      <div class="carousel-inner">

        <?php

          $ban = 0;
          $contador = 0;

          for ($j=1;$j<=3;$j++)
          {
            echo "<!-- /Slide1 -->";
            if ($ban == 0){
              echo " <div class=\"item active\"> <!-- Class Bloque".$j." --> ";
              $ban=1;
            }
            else { echo " <div class=\"item\"> <!-- Class Bloque".$j." --> "; }
            echo "<ul class=\"thumbnails\"> <!-- UL bloque de 4 -->";

            for ($k=1;$k<=4;$k++)
            {
              echo "
              <!-- #".$k." -->
              <li class=\"col-sm-3\">
                <div class=\"fff\">
                  <div class=\"thumbnail\">
                    <a href=\" ".$matriz[$contador][3]." \">
                      <img src=\"  ".$matriz[$contador][0]."  \" alt=\"  ".$matriz[$contador][1]."  \">
                    </a>
                  </div>
                  <div class=\"caption\">
                    <h3>  ".$matriz[$contador][1]."  </h3>
                    <p>  ".($contador+1)." ".$matriz[$contador][2]."  </p>
                    <a class=\"btn btn-mini\" href=\"  ".$matriz[$contador][3]."  \">» Más información</a>
                  </div>
                </div> <!-- class fff -->
              </li>
              ";
              $contador ++;
            }

            echo "
                </ul> <!-- fin primer bloque de 4 -->
              </div>  <!-- fin primer bloque de 4 -->
              <!-- /Slide -->
            ";
          }
        ?>

      </div> <!-- carousel inner -->

      <!-- /.control-box -->
      <ul class="control-box pager">
        <li>
          <a data-slide="prev" href="#eventosimpa" class="">
            <i class="glyphicon glyphicon-chevron-left"></i>
          </a>
        </li>
        <li>
          <a data-slide="next" href="#eventosimpa" class="">
            <i class="glyphicon glyphicon-chevron-right"></i>
          </a>
        </li>
      </ul>
      <!-- /.control-box -->

    </div><!-- /#eventosimp -->


  </div><!-- /.col-xs-12 -->
</div><!-- /.container -->
