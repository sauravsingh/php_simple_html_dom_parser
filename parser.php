<?php
include('simple_html_dom.php');
 
$url = 'https://www.phpbb.com/community/viewtopic.php?f=46&t=543171';
 
$html = file_get_html($url);
$links = array();
foreach($html->find('a[href^="http://www.phpbb.com/community/viewforum.php"]') as $a) {
 $links[] = $a->href;
}
 
print_r($links);
 
?>
