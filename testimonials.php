<?php
$_site = require_once(getenv("SITELOADNAME"));
$S = new SiteClass($_site);
$S->title = "Testimonials";
$S->banner = "<h1>$S->title</h1>";
$S->css = <<<EOF
#logo { width: 800px; }
@media (hover: none) and (pointer: coarse) {
  #logo { width: 350px; }
}
EOF;

$testimonials = <<<EOF
<h2>Great Service</h2>
<p>We had JT remove all of our pine straw and replace it with mulch. He did a wonderful job.
We asked him if he did lawns also and he said <q>Sure I do</q> so we have him doing our lawn and landscaping.
He as done a great job and we are very happy.</p>
<address>
Barton Phillips<br>
bartonphillips@gmail.com<br>
https://www.bartonphillips.com<br>
New Bern
</address>
<hr>
<h2>Grass Instalation</h2>
<p>We had a number of large planter areas in our garden and it was really too much. JT removed the planters and the vegitation and
replaced it with sod. The job was done in one day and the grass looks great. It has been a year now and you can't see any trace
of the old planters, the grass is great.
<address>
Bonnie Burch<br>
New Bern
</address>

<hr>
<h2>Great Job</h2>
<p>We met JT a few years ago when he came into our real estate office asking if we needed any lawncare.
He was very nice and polite and we decided to give him a chance.
He did a great job at a great price, and since then we have used him many times and referred him to many friends and colleagues.
He has a bush hog, multiple mowers and a crew.
He offers clearing, weeding, trimming and putting out mulch/pinestraw in flower beds.
Give him a try. You will not be disappointed.</p>
<address>
Jana Tyson<br>
The Tyson Group, Realtors<br>
Office 252-675-9595<br>
Mobile 252-670-1184
</address>
EOF;

[$top, $footer] = $S->getPageTopBottom();

echo <<<EOF
$top
<hr>
$testimonials
<hr>
$footer
EOF;
