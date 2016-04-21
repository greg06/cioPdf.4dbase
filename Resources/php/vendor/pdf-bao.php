<?php

function generer($content)
{    
	date_default_timezone_set('Europe/Paris');
    require_once(dirname(__FILE__).'\html2pdf\html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    return $html2pdf->Output('', true);
}
?>