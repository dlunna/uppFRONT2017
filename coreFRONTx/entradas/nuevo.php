<div class="container">
  <br />
  <br />
  <h2>Noticias y avisos de la comunidad UPPachuca</h2>
  <hr />

  <div class="col-md-4">
    <a href="http://www.upp.edu.mx/front">
      <button type="button" class="btn btn-uppachuca btn-lg">Blog UPP</button>
    </a>
    <hr />
    <br />

    <?php
    //echo "dentro del php";
    /*
    $handler = curl_init("http://www.upp.edu.mx/front/?feed=rss2");
    $response = curl_exec ($handler);
    curl_close($handler);
    echo $response;
    */

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL            => 'http://www.upp.edu.mx/front/?feed=rss2',
        CURLOPT_USERAGENT      => 'spider',
        CURLOPT_TIMEOUT        => 120,
        CURLOPT_CONNECTTIMEOUT => 30,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING       => 'UTF-8'
    ));
    $data = curl_exec($curl);
    curl_close($curl);
    $xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA);
    //die('<pre>' . print_r($xml], TRUE) . '</pre>');

      $i=0;
      foreach ($xml->channel->item as $item) {
          if ($i < 5) {
              $creator = $item->children('dc', true);

              /*
              echo '<h3>' . $item->title . '</h3>';
              echo '<p>Created: ' . $item->pubDate . '</p>';
              echo '<p>Author: ' . $creator . '</p>';
              echo '<p>' . $item->description . '</p>';
              echo '<p><a href="' . $item->link . '">Leer más: ' . $item->title . '</a></p>';
              echo '<p>XXXXX: ' . $item->slash . '</p>';
              */

              //echo "------------------- \n";

              echo "<h3>".$item->title."</h3>";
              echo '<hr />';
              //echo "<p>02 liga:       ".$item->link."</p>";
              //echo "<p>03 comentarios:".$item->comments."</p>";
              $temporal = explode(" ",$item->pubDate);
              echo '<p>Publicado el: '.$temporal[1].' '.$temporal[2].'</p>';
              //echo "<p>05 creador:    ".$creator."</p>";
              echo "<p>".$item->description."</p>";
              echo "<p>Categoría: ".$item->category."</p>";

              switch ($item->category) {
                case "Convocatorias":
                  echo " <a href=\"".$item->link."\">
                           <button type=\"button\" class=\"btn btn-primary\">
                             + información
                           </button>
                         </a>
                       ";
                  break;

                  case "Becas":
                    echo " <a href=\"".$item->link."\">
                             <button type=\"button\" class=\"btn btn-success\">
                               + información
                             </button>
                           </a>
                         ";
                    break;

                    case "Noticias Académicas":
                      echo " <a href=\"".$item->link."\">
                               <button type=\"button\" class=\"btn btn-info\">
                                 + información
                               </button>
                             </a>
                           ";
                      break;

                      case "Varios":
                        echo " <a href=\"".$item->link."\">
                                 <button type=\"button\" class=\"btn btn-warning\">
                                   + información
                                 </button>
                               </a>
                             ";
                        break;

                default:
                  echo " <a href=\"".$item->link."\">
                           <button type=\"button\" class=\"btn btn-default\">
                             + información
                           </button>
                         </a>
                       ";
                  break;


              }



              //echo "<p>07 guid:       ".$item->guid."</p>";
              //$encoded = $item->children('content',true);
              //echo "<p>09 Content:enc:".$encoded."</p>";
              //$wcomment = $item->children('wfw',true);
              //echo "<p>10 wfw:commentR".$wcomment."</p>";
              //$scomment = $item->children('slash',true);
              //echo "<p>11 slash:comme:".$scomment."</p>";

              $i++;
          }
          //echo $i;
      }
    ?>

  </div> <!-- row 7 -->


  <div class="container col-md-4">
    <a href="http://www.upp.edu.mx/serviciosescolares">
      <button type="button" class="btn btn-uppachuca btn-lg">Servicios escolares</button>
    </a>
    <hr />
    <br />


    <?php
    //echo "dentro del php";
    /*
    $handler = curl_init("http://www.upp.edu.mx/front/?feed=rss2");
    $response = curl_exec ($handler);
    curl_close($handler);
    echo $response;
    */

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL            => 'http://www.upp.edu.mx/serviciosescolares/?feed=rss2',
        CURLOPT_USERAGENT      => 'spider',
        CURLOPT_TIMEOUT        => 120,
        CURLOPT_CONNECTTIMEOUT => 30,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING       => 'UTF-8'
    ));
    $data = curl_exec($curl);
    curl_close($curl);
    $xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA);
    //die('<pre>' . print_r($xml], TRUE) . '</pre>');

      $i=0;
      foreach ($xml->channel->item as $item) {
          if ($i < 5) {
              $creator = $item->children('dc', true);
              echo '<h3>' . $item->title . '</h3>';
              echo '<hr />';
              //echo '<p>Publicado el: ' . $item->pubDate . '</p>';
              $temporal = explode(" ",$item->pubDate);
              echo '<p>Publicado el: '.$temporal[1].' '.$temporal[2].'</p>';
              //echo "xxx:".$temporal[1];
              //echo '<p>Author: ' . $creator . '</p>';
              echo '<p>' . $item->description . '</p>';
              //echo '<p><a href="' . $item->link . '">Leer más: ' . $item->title . '</a></p>';
              echo " <a href=\"".$item->link."\">
                       <button type=\"button\" class=\"btn btn-default\">
                         + información
                       </button>
                     </a>
                   ";
              $i++;
          }
          //echo $i;
      }
    ?>


  </div>

  <div class="container col-md-4">
    <button type="button" class="btn btn-uppachuca btn-lg">Recomendaciones</button>
    <hr />
    <br />
  </div>
  <h3>Revista INMENIO</h3>
  <a href="https://issuu.com/inmenio/docs/inmenio_no_8">
    <img src="http://www.upp.edu.mx/front/ligas/rev/INMENIO-2017-08sm.jpg"
    class="featurette-image img-responsive"
     alt="Revista INMENIO" />
  </a>


</div>
