<?php
function extractCss($headerFile, $cssFile) {
    if (!file_exists($headerFile)) {
        echo "File not found: $headerFile\n";
        return;
    }
    
    $content = file_get_contents($headerFile);
    
    // Find the style block
    $startStr = "<style>";
    $endStr = "</style>";
    $start = strpos($content, $startStr);
    $end = strpos($content, $endStr);
    
    if ($start !== false && $end !== false) {
        $cssContent = substr($content, $start + strlen($startStr), $end - ($start + strlen($startStr)));
        
        // Ensure css directory exists
        if (!is_dir('css')) {
            mkdir('css');
        }
        
        // Write css file
        file_put_contents($cssFile, trim($cssContent));
        
        // Replace style block with link
        $linkTag = '<link rel="stylesheet" href="' . $cssFile . '">';
        $newContent = substr_replace($content, $linkTag, $start, $end + strlen($endStr) - $start);
        
        file_put_contents($headerFile, $newContent);
        echo "Extracted CSS for $headerFile to $cssFile\n";
    } else {
        echo "No <style> block found in $headerFile\n";
    }
}

extractCss('inhealth-header.php', 'css/inhealth.css');
extractCss('cerviva-header.php', 'css/cerviva.css');
