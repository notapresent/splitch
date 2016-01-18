<?php
require 'vendor/autoload.php';

use PicoFeed\Reader\Reader;
use PicoFeed\Syndication\Rss20;


define('IMAGE_URL_RX', '/<img src="(http\:\/\/(?:[^"]+)\.(?:jpg|jpeg|gif|png))"\s*\/?/i');


function extract_image_urls($desc) {
    if(preg_match_all(IMAGE_URL_RX, $desc, $matches)) {
        return $matches[1];
    }

    return array();
}


function url_to_filename($url) {
    $parsed = parse_url($url);

    if(!$parsed['path']) {
        return false;
    }

    return basename($parsed['path']);
}


$feed_url = urldecode($_GET['url']);

$reader = new Reader;
$resource = $reader->download($url);

$parser = $reader->getParser(
    $resource->getUrl(),
    $resource->getContent(),
    $resource->getEncoding()
);

$feed = $parser->execute();

$image_items = array();

foreach($feed->items as $item) {

    $image_urls = extract_image_urls($item->content);

    foreach($image_urls as $url) {
        $image_items[] = array(
            'title' => url_to_filename($url),
            'updated' => $item->date->getTimestamp(),
            'url' => $url,
            'summary' => "<img src=\"{$url}\">",
        );
    }
}


$writer = new Rss20();
$writer->title = $feed->title;
$writer->site_url = $feed->site_url;
$writer->feed_url = "http://{$_SERVER['HTTP_HOST']}/feed.php?url=" . urlencode($feed_url);
$writer->description = "{$feed->description}\nModified by Splitch (http://{$_SERVER['HTTP_HOST']})";

$writer->items = $image_items;

header('content-type: application/rss+xml');
echo $writer->execute();
