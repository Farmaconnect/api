<?php
// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';

$request = new Http_Request2('https://rest.farmaconnect.es/');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'TOKEN_KEY' => '{subscription key}',
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
    'includes' => '{string}',
    'excludes' => '{string}',
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

try
{
    $response = $request->send();
    echo $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}

?>