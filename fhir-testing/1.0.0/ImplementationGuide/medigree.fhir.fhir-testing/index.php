<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/ImplementationGuide-medigree.fhir.fhir-testing.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/ImplementationGuide-medigree.fhir.fhir-testing.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/ImplementationGuide-medigree.fhir.fhir-testing.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/ImplementationGuide-medigree.fhir.fhir-testing.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/ImplementationGuide-medigree.fhir.fhir-testing.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/ImplementationGuide-medigree.fhir.fhir-testing.html');
else 
  Redirect('http://medigree.net/fhir/fhir-testing/1.0.0/ImplementationGuide-medigree.fhir.fhir-testing.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
