<?php
include("fpdf/fpdf.php");
$con=mysqli_connect("localhost","root","","signup");
$qry=mysqli_query($con,"select * from login");

if(isset($_POST["pdf"]))
{
	// $pdf = new FPDF();
	// $pdf->AddPage();
	$pdf = new FPDF('P','mm','A4'); //page size
	$pdf->AddPage();
	$pdf->Image('php.png', 90, 0, 33.78);//for image
	$pdf->Ln(20);//line break
	$pdf->SetFont('Arial','B',14); //font size and font
	$pdf->Cell(30,10,'ID',1,0,'C');
	$pdf->Cell(50,10,'NAME',1,0,'C');
	$pdf->Cell(50,10,'EMAIL',1,0,'C');//0 means same line me data show karega
	$pdf->Cell(50,10,'PASSWORD',1,1,'C');//second 1 means new line start
	while($row=mysqli_fetch_array($qry))
	{
		extract($row);
		$pdf->Cell(30,10,$id,1,0,'C');
		$pdf->Cell(50,10,$name,1,0,'C');
		$pdf->Cell(50,10,$email,1,0,'C');
		$pdf->Cell(50,10,$password,1,1,'C');	
	}
	$pdf->Output();

}
?>
