<?php
function parseMinecraftText($text) {
  // Define an array to map Minecraft formatting codes to HTML or CSS styles
  $formattingCodes = [
    '0' => 'color: #000000;',  // Black
    '1' => 'color: #0000AA;',  // Dark Blue
    '2' => 'color: #00AA00;',  // Dark Green
    '3' => 'color: #00AAAA;',  // Dark Aqua
    '4' => 'color: #AA0000;',  // Dark Red
    '5' => 'color: #AA00AA;',  // Dark Purple
    '6' => 'color: #FFAA00;',  // Gold
    '7' => 'color: #AAAAAA;',  // Gray
    '8' => 'color: #555555;',  // Dark Gray
    '9' => 'color: #5555FF;',  // Blue
    'a' => 'color: #55FF55;',  // Green
    'b' => 'color: #55FFFF;',  // Aqua
    'c' => 'color: #FF5555;',  // Red
    'd' => 'color: #FF55FF;',  // Light Purple
    'e' => 'color: #FFFF55;',  // Yellow
    'f' => 'color: #FFFFFF;',  // White
    'k' => 'text-decoration: blink;',  // Obfuscated
    'l' => 'font-weight: bold;',  // Bold
    'm' => 'text-decoration: line-through;',  // Strikethrough
    'n' => 'text-decoration: underline;',  // Underline
    'o' => 'font-style: italic;',  // Italic
    'r' => 'color: inherit; font-weight: inherit; text-decoration: inherit; font-style: inherit;'
  ];

  // Replace Minecraft formatting codes with HTML or CSS styles
  $text = preg_replace_callback('/§([0-9a-z])/', function ($matches) use ($formattingCodes) {
      $code = strtolower($matches[1]);
      return '<span style="' . $formattingCodes[$code] . '">';
  }, $text);

  // Close any open formatting tags
  $text = preg_replace('/§([0-9a-z])/', '</span>', $text);

  return $text;
}
?>
