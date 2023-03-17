<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://profiles.ihe.net/fhir/ihe.formatcode.fhir/0.2.4/Bundle-history-IHE-formatcode.valueset.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://profiles.ihe.net/fhir/ihe.formatcode.fhir/0.2.4/Bundle-history-IHE-formatcode.valueset.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://profiles.ihe.net/fhir/ihe.formatcode.fhir/0.2.4/Bundle-history-IHE-formatcode.valueset.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://profiles.ihe.net/fhir/ihe.formatcode.fhir/0.2.4/Bundle-history-IHE-formatcode.valueset.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://profiles.ihe.net/fhir/ihe.formatcode.fhir/0.2.4/Bundle-history-IHE-formatcode.valueset.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://profiles.ihe.net/fhir/ihe.formatcode.fhir/0.2.4/Bundle-history-IHE-formatcode.valueset.html');
else 
  Redirect('http://profiles.ihe.net/fhir/ihe.formatcode.fhir/0.2.4/Bundle-history-IHE-formatcode.valueset.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
