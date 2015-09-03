<?php
date_default_timezone_set("Asia/Jakarta");
ob_start();
extract($_GET);
extract($_POST);
?>
<page>
<img src="adm.png" />
</page>


<?php
    $content = ob_get_clean();

    require_once('html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', 0);
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
		//attachment
        //$html2pdf->Output('bookmark.pdf',F);
		//inline
		$html2pdf->Output('ceria.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>