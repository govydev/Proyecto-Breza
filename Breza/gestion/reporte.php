<?php
    require('../style/fpdf/fpdf.php');
    require('../modelo/mantenimiento.php');
    require('../modelo/calibracion.php');

    class PDF extends FPDF{
        private $tipo;
        private $user;
        private $cod;
        private $ver;
        
        function setTipo($tipo){
            $this->tipo = $tipo;
        }

        function getTipo(){
            return $this->tipo;
        }
        
        function setUser($user){
            $this->user = $user;
        }

        function getUser(){
            return $this->user;
        }

        function setData($cod, $ver){
            $this->ver = $ver;
            $this->cod = $cod;
        }

        function Header()
        {
            $this->SetFontSize(12);
            $this->SetFont('Arial','B');
            $this->SetFillColor(255,255,255);
            $this->SetTextColor(40,40,40);
            $this->SetDrawColor(88,88,88);
            $this->Cell(55,20,$this->Image('../style/assets/img/breza.png',10,10,53,15,'png'),1);
            $this->SetFontSize(10);
            $this->SetFont('Arial','B');
            $this->SetX(215);
            $this->Cell(55,5,'Codigo: '.$this->cod,1,1,'',0);
            $this->SetX(215);
            $this->Cell(55,5,'Version: '.$this->ver,1,1,'',0);
            $this->SetX(215);
            $this->Cell(55,5,'Elaborado:  '.$this->user,1,1,'',0);
            $this->SetX(215);
            date_default_timezone_set('America/Lima');
            $hoy = getdate();
            $fecha = $hoy['mday'].'/'.$hoy['mon'].'/'.$hoy['year'];
            $this->Cell(55,5,'Fecha: '.$fecha,1,1,'',0);
            $this->SetY(10);
            $this->SetX(65);
            $this->SetFontSize(12);
            $this->SetFont('Arial','B');
            $this->Multicell(150,10,'CONTROL DE '.$this->tipo.' PREVENTIVO Y CORRECTIVO DE MAQUINAS Y EQUIPOS',1,'C',1);
            $this->Ln(5);
            $this->SetFontSize(10);
            $this->SetFont('Arial','B');
            $this->SetFillColor(255,255,255);
            $this->SetTextColor(40,40,40);
            $this->SetDrawColor(88,88,88);
            if($this->tipo == "MANTENIMIENTO"){
                $this->Cell(20,10,'Fecha',1,0,'C',1);
                $this->Cell(20,10,'Maquina',1,0,'C',1);
                $this->Cell(25,10,'Modelo',1,0,'C',1);
                $this->Cell(35,10,'Ubicacion',1,0,'C',1);
                $this->Cell(60,10,'Motivo',1,0,'C',1);
                $this->Cell(60,10,'Observaciones',1,0,'C',1);
                $this->Cell(20,10,'# Factura',1,0,'C',1);
                $this->Cell(20,10,'Estado',1,0,'C',1);
            }
            if($this->tipo == "CALIBRACION"){
                $this->Cell(20,10,'Fecha',1,0,'C',1);
                $this->Cell(30,10,'Maquina',1,0,'C',1);
                $this->Cell(30,10,'Modelo',1,0,'C',1);
                $this->Cell(60,10,'Ubicacion',1,0,'C',1);
                $this->Cell(40,10,'Certificado',1,0,'C',1);
                $this->Cell(40,10,'Proveedor',1,0,'C',1);
                $this->Cell(20,10,'Telefono',1,0,'C',1);
                $this->Cell(20,10,'Estado',1,0,'C',1);
            }
            
            $this->Ln();
        }

        function footer(){
            $this->SetFont('Arial', 'B', 10);
            $this->SetY(-15);
            $this->Write(5, 'San Juan de Miraflores - Lima');
            $this->SetX(-15);
            $this->Write(5, $this->PageNo());
        }
    }

    session_start();
    if($_SESSION["acceso"]){
        $pdf = new PDF();
        $pdf->setData($_GET['c'], $_GET['v']);
        if($_GET['tipo'] == 1){
            $pdf->setTipo("MANTENIMIENTO");
            $lista = new Mantenimiento();
            $lista = $lista->listaReporte($_GET['a']);
        }elseif ($_GET['tipo'] == 0) {
            $pdf->setTipo("CALIBRACION");
            $lista = new Calibracion();
            $lista = $lista->listaReporte($_GET['a']);
        }
        $pdf->setUser($_SESSION['user'][1]." ".$_SESSION['user'][2]);
        $pdf->AddPage('landscape', 'letter');

        $pdf->SetFillColor(255,255,255);
        $pdf->SetTextColor(40,40,40);
        $pdf->SetDrawColor(88,88,88);
        $pdf->SetFontSize(9);
        $pdf->SetFont('Arial','');
        if($_GET['tipo']==1){
            foreach ($lista as $value) {
                $pdf->Cell(20,10,$value[2],1,0,'C',1);
                $pdf->Cell(20,10,$value[4],1,0,'C',1);
                $pdf->Cell(25,10,$value[8],1,0,'C',1);
                $pdf->Cell(35,10,$value[9],1,0,'C',1);
                $pdf->Cell(60,10,utf8_decode($value[1]),1,0,'C',1);
                $observacion = isset($value[6])? $value[6] : "Sin observacion";
                $pdf->Cell(60,10,utf8_decode(trim($observacion)),1,0,'C',1);
                $pdf->Cell(20,10,$value[3],1,0,'C',1);
                $estado = $value[7] == 0 ? "Realizado": ($value[7] == 1 ? "En Proceso" : "Por hacer");
                $pdf->Cell(20,10,$estado,1,0,'C',1);
                $pdf->Ln();
            }
        }elseif ($_GET['tipo'] == 0) {
            foreach ($lista as $value) {
                $pdf->Cell(20,10,$value[1],1,0,'C',1);
                $pdf->Cell(30,10,utf8_decode(trim($value[3])),1,0,'C',1);
                $pdf->Cell(30,10,$value[6],1,0,'C',1);
                $pdf->Cell(60,10,utf8_decode(trim($value[7])),1,0,'C',1);
                $certificado = $value[2] != null? $value[2] : " - ";
                $pdf->Cell(40,10,utf8_decode($certificado),1,0,'C',1);
                $pdf->Cell(40,10,utf8_decode(trim($value[4])),1,0,'C',1);
                $pdf->Cell(20,10,$value[8],1,0,'C',1);
                $estado = $value[5] == 0 ? "Realizado": ($value[7] == 1 ? "En Proceso" : "Por hacer");
                $pdf->Cell(20,10,$estado,1,0,'C',1);
                $pdf->Ln();
            }
        }
        $pdf->Output();
    }else{
        header("Location: ../index.php");   
    }

?>