<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://profiles.ihe.net/ITI/mCSD/3.5.0/Organization-MCSDFacilityOrganization-Example.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://profiles.ihe.net/ITI/mCSD/3.5.0/Organization-MCSDFacilityOrganization-Example.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://profiles.ihe.net/ITI/mCSD/3.5.0/Organization-MCSDFacilityOrganization-Example.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://profiles.ihe.net/ITI/mCSD/3.5.0/Organization-MCSDFacilityOrganization-Example.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://profiles.ihe.net/ITI/mCSD/3.5.0/Organization-MCSDFacilityOrganization-Example.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://profiles.ihe.net/ITI/mCSD/3.5.0/Organization-MCSDFacilityOrganization-Example.html');
else 
  Redirect('https://profiles.ihe.net/ITI/mCSD/3.5.0/Organization-MCSDFacilityOrganization-Example.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
