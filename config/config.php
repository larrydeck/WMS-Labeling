<?php
//Base folder, if any. Leave blank if site is in root web folder.
$base_url = '';
$site_title = 'Labeling';
//Default page title
$page_title = 'ILS Labeling';

/*
    * This variable defines the number of individual
    * labels on your sheet of two column label stock.
    *  This is here so you can prevent waste on partially
    * used label stock.
*/
$labelStartOptions = 12;

if (defined('WSKEY') === FALSE) {
    define('WSKEY', getenv('LABELKEY'));
}

if (defined('BIBKEY') === FALSE) {
    define('BIBKEY', getenv('LABELKEY'));
}

if (defined('SECRET') === FALSE) {
    define('SECRET', getenv('LABELSEC'));
}

if (isset($inst_id) === FALSE) {
    $inst_id = getenv('INSTID');
}

if (defined('PRINCIPALID') === FALSE) {
    define('PRINCIPALID', getenv('PRINCIPALID'));
}

if (defined('PRINCIPALIDNS') === FALSE) {
    define('PRINCIPALIDNS', getenv('PRINCIPALIDNS'));
}

if (defined('URL') === FALSE) {
    define('URL', 'https://circ.' . getenv('DATACENT') . '.worldcat.org/LHR');
}

if (defined('BIBURL') === FALSE) {
    define('BIBURL', 'http://www.worldcat.org/webservices/catalog/content');
}

if (defined('METHOD') === FALSE) {
    define('METHOD', 'GET');
}

if (defined('BODYHASH') === FALSE) {
    define('BODYHASH', '');
}
