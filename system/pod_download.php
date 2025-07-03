<?php
include "../config/conn.php";
require_once('tcpdf_include.php');
session_start();

$so_no = $_GET['id'];
$row_od = $dbconnect->query("SELECT * FROM outbound_mng WHERE so_no='$so_no'");
$data = $row_od->fetch();

class MYPDF extends TCPDF {
    public function Header() {
        $image_file = K_PATH_IMAGES.'opsim1.png';           
        $this->Image($image_file, "", "", 30, '', 'PNG', '', 'T', true, 300, '', false, false, 0, false, false, false);
        $this->SetFont('times', 'B', 16);     
        $this->Cell(80, 7, "  Proof of Delivery", 0, 1, '', 0, '', 0);

        $this->SetFont('times', '', 12);
        
        $this->MultiCell(100, 7, '                               by: Optiization and Simulation Laboratory', 0, 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);
        $this->Ln();
    }

    public function Footer() {
        $this->SetY(-15);
        $this->SetFont('helvetica', 'I', 8);
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
    public function CustomTable($data) {
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0);
        $this->SetDrawColor(0, 0, 0);
        $this->SetLineWidth(0.3);

        $w = array(80, 80);

        $this->Cell($w[0], 7, "", 0, 0, 'L', 1);
        $this->Ln();

        $this->SetFont('times', 'B', 16);
        $this->Cell($w[0], 7, "SO ID", 0, 0, 'L', 1);
        $this->Cell($w[1], 7, "SO NO", 0, 0, 'L', 1);
        $this->Ln();

        $this->SetFont('');
        $this->Cell($w[0], 7, $data["so_id"], 0, 0, 'L', 1);
        $this->Cell($w[1], 7, $data["so_no"], 0, 0, 'L', 1);
        $this->Ln();

        $this->Cell($w[0], 7, "", 0, 0, 'L', 1);
        $this->Ln();

        $this->SetFont('', 'B');
        $this->Cell($w[0], 7, "TENANT", 0, 0, 'L', 1);
        $this->Cell($w[1], 7, "SKU", 0, 0, 'L', 1);
        $this->Ln();

        $this->SetFont('');
        $this->Cell($w[0], 7, $data["tenant"], 0, 0, 'L', 1);
        $this->Cell($w[1], 7, $data["sku_no"], 0, 0, 'L', 1);
        $this->Ln();

        $this->Cell($w[0], 7, "", 0, 0, 'L', 1);
        $this->Ln();

        $this->SetFont('', 'B');
        $this->Cell($w[0], 7, "CATEGORY", 0, 0, 'L', 1);
        $this->Cell($w[1], 7, "QUANTITY/BOX", 0, 0, 'L', 1);
        $this->Ln();

        $this->SetFont('');
        $this->Cell($w[0], 7, $data["category"], 0, 0, 'L', 1);
        $this->Cell($w[1], 7, $data["quantity"], 0, 0, 'L', 1);
        $this->Ln();

        $this->Cell($w[0], 7, "", 0, 0, 'L', 1);
        $this->Ln();

        $this->SetFont('', 'B');
        $this->Cell($w[0], 7, "ADDRESS", 0, 0, 'L', 1);
        // $this->Cell($w[1], 7, "STATUS", 0, 0, 'L', 1);
        $this->Ln();

        $this->SetFont('');
        $this->Cell($w[0], 7, $data["address"], 0, 0, 'L', 1);
        // $this->Cell($w[1], 7, $data["so_status"], 0, 0, 'L', 1);
        $this->Ln();

        $this->Cell($w[0], 7, "", 0, 0, 'L', 1);
        $this->Ln();

        $this->SetFont('', 'B');
        $this->Cell($w[0], 7, "STATUS", 0, 0, 'L', 1);
        $this->Ln();

        $this->SetFont('');
        $this->Cell($w[0], 7, $data["so_status"], 0, 0, 'L', 1);
        $this->Ln();

        $this->Cell($w[0], 40, "", 0, 0, 'L', 1);
        $this->Ln();

        $this->SetFont('', 'B');
        $this->Cell($w[0], 7, '('.$_SESSION['username'].')', 0, 0, 'L', 1);
        $this->Cell($w[1], 7, "", 0, 0, 'L', 1);
        $this->Ln();

        $this->Cell($w[0], 7, "", 0, 0, 'L', 1);
        $this->Ln();
    }
}


// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator("Optimization And Simulation Laboratory");
$pdf->setTitle('Proof of Delivery');
$pdf->setSubject('Proof of Delivery');

// set default header data      
$pdf->setHeaderData("opsim1.png", PDF_HEADER_LOGO_WIDTH, "Proof of Delivery", "by: Optimization And Simulation Laboratory", array(0,0,0), array(0,0,0));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

$pdf->setFontSubsetting(true);

$pdf->setFont('dejavusans', '', 14, '', true);

$pdf->AddPage();
$pdf->CustomTable($data);

$pdf->Output('pod.pdf', 'I');
