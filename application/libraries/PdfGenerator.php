<?php
use Dompdf\Dompdf;
class PdfGenerator
{
  public function generate($html,$filename)
  {
    define('DOMPDF_ENABLE_AUTOLOAD', false);
    require_once './vendor/dompdf/dompdf/lib/html5lib/Parser.php';
    require_once './vendor/dompdf/dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
    require_once './vendor/dompdf/dompdf/lib/php-svg-lib/src/autoload.php';
    require_once './vendor/dompdf/dompdf/src/Autoloader.php';
    // Dompdf\Autoloader::register();
 
    $dompdf = new Dompdf();
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream($filename.'.pdf',array("Attachment"=>0));
  }
}