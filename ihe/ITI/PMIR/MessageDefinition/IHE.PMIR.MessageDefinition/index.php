<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://profiles.ihe.net/ITI/PMIR/1.5.0/MessageDefinition-IHE.PMIR.MessageDefinition.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://profiles.ihe.net/ITI/PMIR/1.5.0/MessageDefinition-IHE.PMIR.MessageDefinition.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://profiles.ihe.net/ITI/PMIR/1.5.0/MessageDefinition-IHE.PMIR.MessageDefinition.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://profiles.ihe.net/ITI/PMIR/1.5.0/MessageDefinition-IHE.PMIR.MessageDefinition.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://profiles.ihe.net/ITI/PMIR/1.5.0/MessageDefinition-IHE.PMIR.MessageDefinition.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://profiles.ihe.net/ITI/PMIR/1.5.0/MessageDefinition-IHE.PMIR.MessageDefinition.html');
else 
  Redirect('https://profiles.ihe.net/ITI/PMIR/1.5.0/MessageDefinition-IHE.PMIR.MessageDefinition.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
