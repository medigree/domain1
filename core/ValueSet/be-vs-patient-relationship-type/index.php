<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://www.ehealth.fgov.be/standards/fhir/core/2.0.1/ValueSet-be-vs-patient-relationship-type.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://www.ehealth.fgov.be/standards/fhir/core/2.0.1/ValueSet-be-vs-patient-relationship-type.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://www.ehealth.fgov.be/standards/fhir/core/2.0.1/ValueSet-be-vs-patient-relationship-type.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://www.ehealth.fgov.be/standards/fhir/core/2.0.1/ValueSet-be-vs-patient-relationship-type.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://www.ehealth.fgov.be/standards/fhir/core/2.0.1/ValueSet-be-vs-patient-relationship-type.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://www.ehealth.fgov.be/standards/fhir/core/2.0.1/ValueSet-be-vs-patient-relationship-type.html');
else 
  Redirect('https://www.ehealth.fgov.be/standards/fhir/core/2.0.1/ValueSet-be-vs-patient-relationship-type.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
