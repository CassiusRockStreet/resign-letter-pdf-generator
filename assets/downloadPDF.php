<?php
require_once('TCPDF/tcpdf.php');
$data = (array) json_decode($_COOKIE['username']);
//print_r($data);
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    // set font
    $pdf->SetFont('times', 'BI', 11);
    // add a page
    $pdf->AddPage("P");
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetAuthor('Rockstreet.co.za');
    $pdf->SetTitle('EMPLOYEE RESIGNATION LETTER');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    //Certificate text part
    $pdf->SetHeaderMargin(10, 0, 0, 0);

    /** User details */
    $pdf->SetFont('freesans', '', 12);
    $pdf->SetTextColor(10,0,0);
    $pdf->SetY(20);
    $pdf->SetX(10);
    $pdf->Cell(0, 0, ''.$data[0]->name.' '.$data[0]->surname, 0, 1, 'L', 0, '', 0);
    $pdf->writeHTMLCell(0, 0,  10, 25,$data[0]->usAddress.' <br>'.$data[0]->usAddressAdd.'<br>'.$data[0]->usAddressZip.' '.$data[0]->usAddressComm,0, 'L', false,true, '', true);
    
    /** Employee details */
    $pdf->SetFont('freesans', '', 12);
    $pdf->SetTextColor(10,0,0);
    $pdf->SetY(50);
    $pdf->SetX(130);
    $pdf->Cell(0, 0, ''.$data[0]->employee.'', 0, 1, 'L', 0, '', 0);
    if($data[0]->emRecDep !=""){
    $emDep = "<br>".$data[0]->emRecDep;
    }
    $pdf->writeHTMLCell(0, 0,  130, 55,$data[0]->empGender.' '.$data[0]->emReName.$emDep.'<br>'.$data[0]->emRecFunc.'<br>'.$data[0]->emAddress.'<br>'.$data[0]->emAdAddi.'<br>'.$data[0]->emPostCode.' '.$data[0]->emCommune,0, 'L', false,true, '', true);    
    /** Letter */
    $pdf->SetFont('freesans', 'B', 16);
    $pdf->SetTextColor(10,0,0);
    $pdf->SetY(85);
    $pdf->SetX(10);
    $pdf->Cell(0, 0, 'Objet : Démission', 0, 1, 'L', 0, '', 0);
    
    $pdf->SetFont('freesans', '', 12);
    $pdf->SetY(95);
    $pdf->SetX(10);
    $pdf->Cell(0, 0, ''.$data[0]->ltrType.'', 0, 1, 'L', 0, '', 0);

    $pdf->SetY(104);
    $pdf->SetX(10);
    $pdf->Cell(0, 0, ''.$data[0]->empGender.',', 0, 1, 'L', 0, '', 0);

    $pdf->SetY(105);
    $pdf->SetX(10);
    $function = $data[0]->ocFunc;
    $contradate = $data[0]->contractDate;
    $contract = $data[0]->contract;
    $duration = $data[0]->durationCalender;
    $employer = $data[0]->empGender;
    if($data[0]->youWant == "effectuer ce préavis"){
        $extraparaOne = "";
        $extraparaTwo = "";
        $movedown = 0;
    }else if($data[0]->youWant == "être dispensé d'effectuer ce préavis"){
        $extraparaOne = "<p>Cependant, et par dérogation, je sollicite la possibilité de ne pas effectuer ce préavis et, par conséquent, de quitter l'entreprise à la date de réception de ma lettre de démission, mettant ainsi fin à mon contrat de travail.</p>";
        $extraparaTwo = "<p>Je vous remercie de bien vouloir me confirmer votre accord concernant la dispense de préavis.</p>";
        $movedown = 40;
    }
    $html = <<<EOD
        <p>Je vous informe par cette lettre de ma décision de démissionner de mes fonctions ($function) exercées depuis le $contradate au sein de l'entreprise.</p>
        
        <p>J'ai bien noté que les termes de $contract prévoient un préavis de $duration.</p>
        $extraparaOne
        $extraparaTwo
        <p>Lors de mon dernier jour de travail dans l'entreprise, je vous demanderai de bien vouloir me transmettre un reçu pour solde de tout compte, un certificat de travail ainsi qu'une attestation Pôle emploi.</p>

        <p>Je vous prie d'agréer, $employer, l'expression de mes salutations distinguées.</p>
        EOD;
    $pdf->writeHTMLCell(0, 0, 10, 110, $html, 0, 'L', false, true, '', true);

    $pdf->SetFont('freesans', '', 12);
    $pdf->SetTextColor(10,0,0);
    $pdf->SetY(170 + $movedown);
    $pdf->SetX(125);
    $pdf->Cell(0, 0, ''.$data[0]->redige.', le '.$data[0]->contractDate2, 0, 1, 'L', 0, '', 0);
    // $pdf->SetY(180);
    // $pdf->SetX(125); 
    // $pdf->Cell(0, 0, '[ Signez ici ]', 0, 1, 'L', 0, '', 0);
    $pdf->SetY(190 + $movedown );
    $pdf->SetX(125);
    $pdf->Cell(0, 0, ''.$data[0]->name.' '.$data[0]->surname, 0, 1, 'L', 0, '', 0);
    
    /** Closing */
    //Close and output PDF document
    $pdf->Output('EMPLOYEE-RESIGNATION-LETTER.pdf', 'I');
?>