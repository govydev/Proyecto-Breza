<?php
namespace App\modelo;

use App\style\fpdf\FPDF;
require('../style/fpdf/fpdf.php');
require('mantenimiento.php');

    $mantenimiento = new Mantenimiento();
    class PDF extends FPDF
    {
    
        function Header(){
            //color
            $this->SetFillColor(255,255,255);
            $this->SetTextColor(0);
            $this->SetFont('');
            // Select Arial bold 15
            $this->SetFont('Arial','B',15);
            // Move to the right
            $text = "CONTROL DE MANTENIMIENTO PREVENTIVO Y \nCORRECTIVO DE MAQUINARIAS Y EQUIPOS";
            $this->Image("../style/assets/img/breza.png",17,15,50,20,'PNG');
            $this->Cell(65, 30, null, 1, 0);
            $this->Cell(140, 30, "CONTROL DE MANTENIMIENTO PREVENTIVO Y \nCORRECTIVO DE MAQUINARIAS Y EQUIPOS", 1, 0, 'C', true);
            $this->SetFont('Arial','B',11);
            $this->MultiCell(80, 5, "CODIGO:", 1, 'L', false);
            $this->Cell(205);
            $this->MultiCell(80, 5, "VERCION:", 1, 'L', false);
            $this->Cell(205);
            $this->MultiCell(80, 5, "ELABORADO POR:", 1, 'J', false);
            $this->Cell(205);
            $this->MultiCell(80, 5, "APROBADO POR:", 1, 'J', false);
            $this->Cell(205);
            $this->MultiCell(80, 5, "FECHA:", 1, 'J', false);
            $this->Cell(205);
            $this->MultiCell(80, 5, "PAGINA:", 1, 'J', false);
            $this->Ln(0);
        }
    
        // Cargar los datos
    function LoadData($file)
    {
        // Leer las líneas del fichero
        $lines = file($file);
        $data = array();
        foreach($lines as $line)
            $data[] = explode(';',trim($line));
        return $data;
    }
    
    // Tabla coloreada
    function FancyTable($header, $data)
    {
        // Colores, ancho de línea y fuente en negrita
        $this->SetFillColor(255,255,255);
        $this->SetTextColor(0);
        $this->SetDrawColor(128,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B');
        // Cabecera
        $d = array(10, 15, 20, 25, 30, 35, 40, 45, 50, 80);
        $h = array(30, 35, 80, 40, 20, 80);
        for($i=0;$i<count($header);$i++)
            $this->Cell($h[$i],7,$header[$i],1,0,'C',true);
        $this->Ln();
        // Restauración de colores y fuentes
        $this->SetFillColor(224,235,255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Datos
        $fill = false;
            foreach($data as $row)
            {
                    $this->Cell($d[4],6,utf8_decode($row[2]),'LR',0,'C',$fill); //fecha
                    $this->Cell($d[5],6,utf8_decode($row[4]),'LR',0,'C',$fill); //maquina
                    $this->Cell($d[9],6,utf8_decode($row[1]),'LR',0,'L',$fill); //motivo
                    $this->Cell($d[6],6,utf8_decode($row[5]),'LR',0,'C',$fill); //proveedor
                    $this->Cell($d[2],6,utf8_decode($row[3]),'LR',0,'C',$fill); //factura
                    $this->Cell($d[9],6,utf8_decode($row[6]),'LR',0,'L',$fill); //observacion 
                $this->Ln();
                $fill = !$fill;
        }
        // Línea de cierre
        $this->Cell(array_sum($w),0,'','T');
    }
    }
    $pdf = new PDF('L', 'mm', 'A4');
    // Títulos de las columnas
    $header = ['Fecha', 'Maquina', 'Motivo', 'Proveedor', 'Factura', 'Observacion'];
    $data = $mantenimiento->listaMantenimientos();
    // Carga de datos
    $pdf->SetFont('Arial','',14);
    $pdf->AddPage();
    $pdf->FancyTable($header,$data);
    ob_end_clean();
    $pdf->Output();
    ?>