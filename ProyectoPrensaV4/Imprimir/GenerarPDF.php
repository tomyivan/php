<?php
require('./FormatoPdf.php');
include_once '../php/conexion.php';
class GenerarPdF extends Conectar {

    public function ConsultaGenerar() {
        global $resultImprimir;
        $sql = "SELECT periodismo.Id, presentador.NombrePresentador,  periodismo.Descripcion, periodismo.Formato, periodismo.Ciudad, periodista.NombrePeriodista, editor.NombreEditor, periodismo.Duracion FROM periodismo INNER JOIN presentador ON periodismo.IdPresentador=presentador.IdPresentador INNER JOIN periodista ON periodismo.IdPeriodista=periodista.IdPeriodista INNER JOIN editor ON periodismo.IdEditor = editor.IdEditor";
        $resultImprimir = $this->conectar()->query($sql);

        if (empty($resultImprimir)) {
            echo 'error';
        }
    }

    function Generar() {
        $this->ConsultaGenerar();
        global $resultImprimir;
        $pdf = new PDF_MC_Table();
        $pdf->AddPage();
        $pdf->SetY(20);
        $pdf->SetX(75);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(89, 8, 'REPORTE DE ESCALONETA', 0, 1);
        $pdf->SetY(20);
        $pdf->SetX(144);
        $pdf->Ln(20);
        $pdf->SetX(15);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(8, 10, utf8_decode('Id'), 1, 0, 'C', 1);
        $pdf->Cell(25, 10, utf8_decode('Presentador'), 1, 0, 'C', 1);
        $pdf->Cell(35, 10, utf8_decode('Descripcion'), 1, 0, 'C', 1);
        $pdf->Cell(25, 10, utf8_decode('Formato'), 1, 0, 'C', 1);
        $pdf->Cell(23, 10, utf8_decode('Ciudad'), 1, 0, 'C', 1);
        $pdf->Cell(28, 10, utf8_decode('Periodista'), 1, 0, 'C', 1);
        $pdf->Cell(25, 10, utf8_decode('Editor'), 1, 0, 'C', 1);
        $pdf->Cell(18, 10, utf8_decode('Duracion'), 1, 1, 'C', 1);
        $pdf->SetFont('Arial', '', 10);
        $pdf->SetWidths(Array(8,25, 35, 25, 23, 28, 25, 18));
        $pdf->SetLineHeight(5);
        while ($registro = $resultImprimir->fetch_array(MYSQLI_BOTH)) {
            $pdf->SetX(15); 
            $pdf->Row(Array($registro['Id'], $registro['NombrePresentador'], $registro['Descripcion'],
                $registro['Formato'], $registro['Ciudad'], $registro['NombrePeriodista'], $registro['NombreEditor'],
                $registro['Duracion']));
        }
        $pdf->Output();
    }

}
$con = new GenerarPdF();
$con->Generar();
?>