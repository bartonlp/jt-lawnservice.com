<?php
$_site = require_once(getenv("SITELOADNAME"));
$S = new SiteClass($_site);

$S->canonical = "https://jt-lawnservice.com";
$S->title = "JT Lawn Service";
$S->banner = "<h3>Our services are abailable in New Bern and the Craven county area of North Carolina</h3>";
$S->msg2 = "<br><span style='font-size: 10px'>Designed by Barton Phillips (252-670-6424)</span>";
$S->logoAnchor = "./test1.php";
$S->css =<<<EOF
#logo { width: 800px; }
@media (hover: none) and (pointer: coarse) {
  #logo { width: 290px; }
}
EOF;
[$top, $footer] = $S->getPageTopBottom();

echo <<<EOF
$top
<hr>
<p>Test</p>
$footer
EOF;
