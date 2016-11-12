<?php
require 'pdfcrowd.php';

try
{   
    // create an API client instance
    $client = new Pdfcrowd("havihavish", "5a8d485cc1fe2cfcf876ce1e9d0c4f65");

    // convert a web page and store the generated PDF into a $pdf variable
    $pdf = $client->convertFile('C:\wamp\www\DBMS-project\customerdisplay.php');

    // set HTTP response headers
    header("Content-Type: application/pdf");
    header("Cache-Control: max-age=0");
    header("Accept-Ranges: none");
    header("Content-Disposition: attachment; filename=\"INVOICE.pdf\"");

    // send the generated PDF 
    echo $pdf;
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>