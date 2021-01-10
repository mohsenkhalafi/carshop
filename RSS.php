<?php

    header("Content-Type: application/rss+xml; charset=utf-8");
	
    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>Saipa RSS feed</title>';
    $rssfeed .= '<link>http://www.Saipa.com</link>';
    $rssfeed .= '<description>محصولات سایپا</description>';
    $rssfeed .= '<language>en-us</language>';
    $rssfeed .= '<copyright>Copyright (C) 2009 mywebsite.com</copyright>';
 	include_once('connection.php');
    $query = "SELECT * FROM products ORDER BY date DESC";
    $result = mysql_query($query) or die ("Could not execute query");
 
    while($row = mysql_fetch_array($result)) {
        extract($row);
 
        $rssfeed .= '<item>';
        $rssfeed .= '<title>' . $title . '</title>';
        $rssfeed .= '<description>' . $body . '</description>';
        $rssfeed .= '<link>' . '</link>';
        $rssfeed .= '<pubDate>' . date("D, d M Y H:i:s O", strtotime($date)) . '</pubDate>';
        $rssfeed .= '</item>';
    }
 
    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';
 
    echo $rssfeed;
?>