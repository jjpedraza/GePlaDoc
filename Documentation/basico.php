<?php

//Mas Info http://officeopenxml.com/index.php
$input        = 'testfile.docx';
$output       = 'testfile2.docx';
$replacements = [
    'VC001' => 'Juan Jose Pedraza',
    'VC002' => '
    <w:tbl>
    <w:tblPr>
    <w:tblStyle w:val="TableGrid"/>
    <w:tblW w:w="5000" w:type="pct"/>
    </w:tblPr>
    <w:tblGrid>
    <w:gridCol w:w="2880"/>
    <w:gridCol w:w="2880"/>
    <w:gridCol w:w="2880"/>
    </w:tblGrid>
    <w:tr>
    <w:tc >
    <w:tcPr>
    <w:tcW w:w="2880" w:type="dxa"/>
    </w:tcPr>
    <w:p>
    <w:r>
    <w:t >AAA</w:t>
    </w:r>
    </w:p>
    </w:tc>
    <w:tc>
    <w:tcPr>
    <w:tcW w:w="2880" w:type="dxa"/>
    </w:tcPr>
    <w:p>
    <w:r>
    <w:t>BBB</w:t>
    </w:r>
    </w:p>
    </w:tc>
    <w:tc>
    <w:tcPr>
    <w:tcW w:w="2880" w:type="dxa"/>
    </w:tcPr>
    <w:p>
    <w:r>
    <w:t>CCC</w:t>
    </w:r>
    </w:p>
    </w:tc>
    </w:tr>    


    <w:tr>
    <w:tc >
    <w:tcPr>
    <w:tcW w:w="2880" w:type="dxa"/>
    </w:tcPr>
    <w:p>
    <w:r>
    <w:t >AAA</w:t>
    </w:r>
    </w:p>
    </w:tc>
    <w:tc>
    <w:tcPr>
    <w:tcW w:w="2880" w:type="dxa"/>
    </w:tcPr>
    <w:p>
    <w:r>
    <w:t>BBB</w:t>
    </w:r>
    </w:p>
    </w:tc>
    <w:tc>
    <w:tcPr>
    <w:tcW w:w="2880" w:type="dxa"/>
    </w:tcPr>
    <w:p>
    <w:r>
    <w:t>CCC</w:t>
    </w:r>
    </w:p>
    </w:tc>
    </w:tr>    

    
    </w:tbl>',
    
];

$successful = WordReplace($input, $output, $replacements);

echo $successful ? "Creado con exito $output" : 'Fallo!';




function WordReplace(string $input, string $output, array $replacements): bool
{
    if (copy($input, $output)) {

        
        $zip = new ZipArchive();

        
        if ($zip->open($output, ZipArchive::CREATE) !== true) {
            return false;
        }

        
        $xml = $zip->getFromName('word/document.xml');
        var_dump($xml);
        
        $xml = str_replace(array_keys($replacements), array_values($replacements), $xml);

        
        if (false === $zip->addFromString('word/document.xml', $xml)) {
            return false;
        }
        $zip->close();

        return true;
    }

    return false;
}
?>