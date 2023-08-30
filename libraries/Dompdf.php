<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dompdf
{
  public function generate($html,$filename)
  {
    define('DOMPDF_ENABLE_AUTOLOAD', false);
	include_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream($filename.'.pdf',array("Attachment"=>0));
  }
}
?>