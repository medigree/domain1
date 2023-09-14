<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/TestScript-TS1.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/TestScript-TS1.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/TestScript-TS1.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/TestScript-TS1.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/TestScript-TS1.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/TestScript-TS1.html');
else 
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/TestScript-TS1.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
