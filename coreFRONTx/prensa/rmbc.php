<?php
// Variables

$matriz = array(
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


      <div class="carousel slide" id="eventosTES">
        <div class="carousel-inner">

          <?php
            $contador = 0;
//            for ($l=1; $l<=3 ; $l++) {
              echo  "
                    <div class=\"item active\"> <!-- inicio DIV bloque de 4 -->  \n
                      <ul class=\"thumbnails\"> <!-- inicio UL bloque de 4 --> \n
                    ";

                      //for ($k=1; $k<=4; $k++) {

/*
                        echo "<!--".$contador."--> \n";
                        echo "
                              <li class=\"col-sm-3\"> \n
                              <div class=\"fff\"> \n
                              <div class=\"thumbnail\"> \n
                              ";
                        echo "<a href=\"".$matriz[$contador][3]."\"> \n";
                    echo "<img src=\"".$matriz[$contador][0]."\" alt=\"".$matriz[$contador][1]."\"> \n";
                    echo "</a> \n ";
                    echo "</div> \n";
                    echo "<div class=\"caption\"> \n";
                    echo "<h3>".$matriz[$contador][1]."</h3> \n";
                    echo "<p>".$matriz[$contador][2]."</p> \n";
                    echo "<a class=\"btn btn-mini\" href=\"".$matriz[$contador][3]."\">» Más información</a> \n";
                    echo "</div> \n";
                    echo "</div> <!-- class fff --> \n";
                    echo "</li> \n";
*/
                    echo "

                    <li class=\"col-sm-3\">
                      <div class=\"fff\">
                        <div class=\"thumbnail\">
                          <a href=\"https://twitter.com/UPPachuca/status/942804725640187904\">
                            <img src=\"./images/slidereventos/T01.jpg\" alt=\"uno\">
                          </a>
                        </div>
                        <div class=\"caption\">
                          <h3>CTE hidalgo</h3>
                          <p>Cierre de año de #CTEHidalgo en la #UPPachuca Nuestros primeros frutos de los trabajos coordinados en cada uno de los ejes temáticos. </p>
                          <a class=\"btn btn-mini\" href=\"https://twitter.com/UPPachuca/status/942804725640187904\">» Más información</a>
                        </div>
                      </div> <!-- class fff -->
                    </li>

                    ";


                    echo "

                    <li class=\"col-sm-3\">
                      <div class=\"fff\">
                        <div class=\"thumbnail\">
                          <a href=\"https://twitter.com/UPPachuca/status/942804725640187904\">
                            <img src=\"./images/slidereventos/T01.jpg\" alt=\"uno\">
                          </a>
                        </div>
                        <div class=\"caption\">
                          <h3>CTE hidalgo</h3>
                          <p>Cierre de año de #CTEHidalgo en la #UPPachuca Nuestros primeros frutos de los trabajos coordinados en cada uno de los ejes temáticos. </p>
                          <a class=\"btn btn-mini\" href=\"https://twitter.com/UPPachuca/status/942804725640187904\">» Más información</a>
                        </div>
                      </div> <!-- class fff -->
                    </li>

                    ";

                    echo "

                    <li class=\"col-sm-3\">
                      <div class=\"fff\">
                        <div class=\"thumbnail\">
                          <a href=\"https://twitter.com/UPPachuca/status/942804725640187904\">
                            <img src=\"./images/slidereventos/T01.jpg\" alt=\"uno\">
                          </a>
                        </div>
                        <div class=\"caption\">
                          <h3>CTE hidalgo</h3>
                          <p>Cierre de año de #CTEHidalgo en la #UPPachuca Nuestros primeros frutos de los trabajos coordinados en cada uno de los ejes temáticos. </p>
                          <a class=\"btn btn-mini\" href=\"https://twitter.com/UPPachuca/status/942804725640187904\">» Más información</a>
                        </div>
                      </div> <!-- class fff -->
                    </li>

                    ";

                    echo "

                    <li class=\"col-sm-3\">
                      <div class=\"fff\">
                        <div class=\"thumbnail\">
                          <a href=\"https://twitter.com/UPPachuca/status/942804725640187904\">
                            <img src=\"./images/slidereventos/T01.jpg\" alt=\"uno\">
                          </a>
                        </div>
                        <div class=\"caption\">
                          <h3>CTE hidalgo</h3>
                          <p>Cierre de año de #CTEHidalgo en la #UPPachuca Nuestros primeros frutos de los trabajos coordinados en cada uno de los ejes temáticos. </p>
                          <a class=\"btn btn-mini\" href=\"https://twitter.com/UPPachuca/status/942804725640187904\">» Más información</a>
                        </div>
                      </div> <!-- class fff -->
                    </li>

                    ";



                    $contador ++;
                    //echo $contador;
                  //}



                echo "</ul> <!-- fin UL bloque de 4 --> \n";
              echo "</div> <!-- fin DIV bloque de 4 --> \n";
  //          } // fin del FOR

          ?>










          <?php
            $contador = 0;
            for ($l=1; $l<=3 ; $l++) {
              echo  "
                    <div class=\"item active\"> <!-- inicio DIV bloque de 4 -->  \n
                      <ul class=\"thumbnails\"> <!-- inicio UL bloque de 4 --> \n
                    ";

                      //for ($k=1; $k<=4; $k++) {

/*
                        echo "<!--".$contador."--> \n";
                        echo "
                              <li class=\"col-sm-3\"> \n
                              <div class=\"fff\"> \n
                              <div class=\"thumbnail\"> \n
                              ";
                        echo "<a href=\"".$matriz[$contador][3]."\"> \n";
                    echo "<img src=\"".$matriz[$contador][0]."\" alt=\"".$matriz[$contador][1]."\"> \n";
                    echo "</a> \n ";
                    echo "</div> \n";
                    echo "<div class=\"caption\"> \n";
                    echo "<h3>".$matriz[$contador][1]."</h3> \n";
                    echo "<p>".$matriz[$contador][2]."</p> \n";
                    echo "<a class=\"btn btn-mini\" href=\"".$matriz[$contador][3]."\">» Más información</a> \n";
                    echo "</div> \n";
                    echo "</div> <!-- class fff --> \n";
                    echo "</li> \n";
*/
                    echo "

                    <li class=\"col-sm-3\">
                      <div class=\"fff\">
                        <div class=\"thumbnail\">
                          <a href=\"https://twitter.com/UPPachuca/status/942804725640187904\">
                            <img src=\"./images/slidereventos/T01.jpg\" alt=\"uno\">
                          </a>
                        </div>
                        <div class=\"caption\">
                          <h3>CTE hidalgo</h3>
                          <p>Cierre de año de #CTEHidalgo en la #UPPachuca Nuestros primeros frutos de los trabajos coordinados en cada uno de los ejes temáticos. </p>
                          <a class=\"btn btn-mini\" href=\"https://twitter.com/UPPachuca/status/942804725640187904\">» Más información</a>
                        </div>
                      </div> <!-- class fff -->
                    </li>

                    ";


                    echo "

                    <li class=\"col-sm-3\">
                      <div class=\"fff\">
                        <div class=\"thumbnail\">
                          <a href=\"https://twitter.com/UPPachuca/status/942804725640187904\">
                            <img src=\"./images/slidereventos/T01.jpg\" alt=\"uno\">
                          </a>
                        </div>
                        <div class=\"caption\">
                          <h3>CTE hidalgo</h3>
                          <p>Cierre de año de #CTEHidalgo en la #UPPachuca Nuestros primeros frutos de los trabajos coordinados en cada uno de los ejes temáticos. </p>
                          <a class=\"btn btn-mini\" href=\"https://twitter.com/UPPachuca/status/942804725640187904\">» Más información</a>
                        </div>
                      </div> <!-- class fff -->
                    </li>

                    ";

                    echo "

                    <li class=\"col-sm-3\">
                      <div class=\"fff\">
                        <div class=\"thumbnail\">
                          <a href=\"https://twitter.com/UPPachuca/status/942804725640187904\">
                            <img src=\"./images/slidereventos/T01.jpg\" alt=\"uno\">
                          </a>
                        </div>
                        <div class=\"caption\">
                          <h3>CTE hidalgo</h3>
                          <p>Cierre de año de #CTEHidalgo en la #UPPachuca Nuestros primeros frutos de los trabajos coordinados en cada uno de los ejes temáticos. </p>
                          <a class=\"btn btn-mini\" href=\"https://twitter.com/UPPachuca/status/942804725640187904\">» Más información</a>
                        </div>
                      </div> <!-- class fff -->
                    </li>

                    ";

                    echo "

                    <li class=\"col-sm-3\">
                      <div class=\"fff\">
                        <div class=\"thumbnail\">
                          <a href=\"https://twitter.com/UPPachuca/status/942804725640187904\">
                            <img src=\"./images/slidereventos/T01.jpg\" alt=\"uno\">
                          </a>
                        </div>
                        <div class=\"caption\">
                          <h3>CTE hidalgo</h3>
                          <p>Cierre de año de #CTEHidalgo en la #UPPachuca Nuestros primeros frutos de los trabajos coordinados en cada uno de los ejes temáticos. </p>
                          <a class=\"btn btn-mini\" href=\"https://twitter.com/UPPachuca/status/942804725640187904\">» Más información</a>
                        </div>
                      </div> <!-- class fff -->
                    </li>

                    ";



                    $contador ++;
                    //echo $contador;
                  }



                echo "</ul> <!-- fin UL bloque de 4 --> \n";
              echo "</div> <!-- fin DIV bloque de 4 --> \n";
  //          } // fin del FOR

          ?>







        </div><!-- carousel inner -->

        <ul class="control-box pager"><!-- /.control-box -->
          <li>
            <a data-slide="prev" href="#eventosTES" class="">
              <i class="glyphicon glyphicon-chevron-left"></i>
            </a>
          </li>
          <li>
            <a data-slide="next" href="#eventosTES" class="">
              <i class="glyphicon glyphicon-chevron-right"></i>
            </a>
          </li>
        </ul><!-- /.control-box -->

      </div><!-- /#eventosimp -->
    </div><!-- /.col-xs-12 -->
  </div><!-- /.container -->
