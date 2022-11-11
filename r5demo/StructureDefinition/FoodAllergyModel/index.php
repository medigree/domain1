<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergyModel.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergyModel.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergyModel.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergyModel.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergyModel.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergyModel.html');
else 
  Redirect('https://medigree.github.io/r5demo/1.0.0/StructureDefinition-FoodAllergyModel.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
