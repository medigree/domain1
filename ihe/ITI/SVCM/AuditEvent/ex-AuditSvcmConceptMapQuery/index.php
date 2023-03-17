<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://profiles.ihe.net/ITI/SVCM/1.5.0/AuditEvent-ex-AuditSvcmConceptMapQuery.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://profiles.ihe.net/ITI/SVCM/1.5.0/AuditEvent-ex-AuditSvcmConceptMapQuery.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://profiles.ihe.net/ITI/SVCM/1.5.0/AuditEvent-ex-AuditSvcmConceptMapQuery.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://profiles.ihe.net/ITI/SVCM/1.5.0/AuditEvent-ex-AuditSvcmConceptMapQuery.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://profiles.ihe.net/ITI/SVCM/1.5.0/AuditEvent-ex-AuditSvcmConceptMapQuery.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://profiles.ihe.net/ITI/SVCM/1.5.0/AuditEvent-ex-AuditSvcmConceptMapQuery.html');
else 
  Redirect('https://profiles.ihe.net/ITI/SVCM/1.5.0/AuditEvent-ex-AuditSvcmConceptMapQuery.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
