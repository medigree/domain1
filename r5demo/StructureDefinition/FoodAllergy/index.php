<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergy.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergy.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergy.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergy.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergy.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergy.html');
else 
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergy.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
