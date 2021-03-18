<?php
// Copyright 2021 Catchpoint Systems Inc.
// Use of this source code is governed by the Polyform Shield 1.0.0 license that can be
// found in the LICENSE.md file.
if (!is_file('settings/server/privacy.inc') && !is_file('settings/common/privacy.inc') && !is_file('settings/privacy.inc')) {
    http_response_code(404);
    die();
}
include 'common.inc';
$page_keywords = array('Privacy Policy','WebPageTest','Website Speed Test','Page Speed');
$page_description = "WebPageTest Privacy Policy.";
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>WebPageTest - Privacy Policy</title>
        <meta http-equiv="charset" content="iso-8859-1">
        <meta name="keywords" content="Performance, Optimization, Pagetest, Page Design, performance site web, internet performance, website performance, web applications testing, web application performance, Internet Tools, Web Development, Open Source, http viewer, debugger, http sniffer, ssl, monitor, http header, http header viewer">
        <meta name="description" content="Speed up the performance of your web pages with an automated analysis">
        <meta name="author" content="Patrick Meenan">
        <style type="text/css">
        #logo {float:right;}
        </style>
        <?php $gaTemplate = 'Privacy'; include ('head.inc'); ?>
    </head>
    <body>
            <?php
            include 'header.inc';
            ?>
            <h1>Privacy Policy</h1>
            <div class="box">
                <?php
                if( is_file('settings/server/privacy.inc') ) {
                    include('settings/server/privacy.inc');
                } elseif( is_file('settings/common/privacy.inc') ) {
                    include('settings/common/privacy.inc');
                } elseif( is_file('settings/privacy.inc') ) {
                    include('settings/privacy.inc');
                } else {
                ?>
                Coming soon.
                <?php
                }
                ?>
            </div>
            <?php include('footer.inc'); ?>
        </div>
    </body>
</html>
