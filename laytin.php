<?php
include("block/simple_html_dom.php");
$html = file_get_html('https://vnexpress.net/');

$html->find('h1', 1)->class = 'title_news';
echo $html;

// Find all links
foreach($html->find('.title_news') as $element)
       echo $element->href . '<br>';
?>
