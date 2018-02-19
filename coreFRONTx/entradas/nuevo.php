<div class="container">
  <div class="col-md-7">
    <h2>Noticias y avisos</h2>

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
              echo '<h3>' . $item->title . '</h3>';
              //echo '<p>Created: ' . $item->pubDate . '</p>';
              //echo '<p>Author: ' . $creator . '</p>';
              echo '<p>' . $item->description . '</p>';
              echo '<p><a href="' . $item->link . '">Leer más: ' . $item->title . '</a></p>';

              $i++;
          }
          //echo $i;
      }
    ?>

  </div> <!-- row 7 -->

  <div class="container col-md-1"></div>

  <div class="container col-md-4"></div>
</div>
