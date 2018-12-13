<?php

require dirname(__FILE__) . '/../../vendor/autoload.php';

use Vinciarelli\OpenI\OpenIClient;


$client = OpenIClient::factory(array('debug'=> true));
$response = $client->query([
  'query' => 'diabetes medicines',
  'start' => "1",
  'end' => "1",
  'graphicType' => OpenIClient::X_ray
]);
print_r($response);


?>
