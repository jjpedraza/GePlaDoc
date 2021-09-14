<?php
$input        = 'testfile.docx';
$output       = 'testfile2.docx';
$replacements = [
    'user' => 'Juan Jose Pedraza',
    'tel' => '8343088602',
    
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