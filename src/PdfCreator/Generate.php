<?php 

namespace PdfCreator;

class Generate
{
    public static function PDF()
    {
        return
            '<ol>
                <li>Simple PDF with default Header and Footer: [<a href="'.$_SERVER['HTTP_REFERER'].'src/HelloWorld/example_001.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
                <li>Simple PDF without Header and Footer: [<a href="'.$_SERVER['HTTP_REFERER'].'src/HelloWorld/example_002.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
                <li>Custom Header and Footer: [<a href="'.$_SERVER['HTTP_REFERER'].'src/HelloWorld/example_003.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
                <li>Cell stretching: [<a href="'.$_SERVER['HTTP_REFERER'].'src/HelloWorld/example_004.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
                <li>Multicell: [<a href="'.$_SERVER['HTTP_REFERER'].'src/HelloWorld/example_005.php" title="PDF [new window]" target="_blank">PDF</a>]</li>
            </ol>';
    }
}