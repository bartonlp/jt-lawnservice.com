<?php
// Under Construction
$_site = require_once(getenv("SITELOADNAME"));
$S = new SiteClass($_site);
$S->title = "Contact Me";
$S->banner = "<h1>$S->title</h1>";
$S->css = <<<EOF
#logo { width: 800px; height: 392px; }
h2 { margin-bottom: 0; }
#call, #textme {
  font-size: var(--blp-fontsize);
  color: inheret;
  border: none;
  background: none;
  border: #none;
}

@media (hover: none) and (pointer: coarse) {
  #logo {
    width: 290px;
    height: 142px;
  }
  #call, #textme {
    font-size: var(--blp-fontsize);
    color: white;
    background: green;
    border-radius: 5px;
    border: 1px solid black;
}
EOF;

$S->b_inlineScript = <<<EOF
$("#call").on("click", function(e) {
  if($(this).css("color") == "rgb(0, 0, 0)") {
    e.stopPropagation();
    return;
  }
  window.open("tel:2528763511");
});

$("#textme").on("click", function(e) {
  if($(this).css("color") == "rgb(0, 0, 0)") {
    e.stopPropagation();
    return;
  }
  window.open("sms:2528763511&body=I%20would%20like%20a%20quote.&nbsp;");
});
EOF;

[$top, $footer] = $S->getPageTopBottom();

$body = "Name (optional):\nAddress (optional):\nApprox. Sq. Feet:\nAdditional Comments (optional):";
$body = rawurlencode($body);

echo <<<EOF
$top
<hr>
<h2>My Address is:</h2>
<address>
J.T. Lawn Service<br>
James Thompson<br>
4902 Sandhurst Rd<br>
Trentwoods, NC 28562
</address>

<p><a href="mailto:jthomp379@gmail.com?subject=Get A Quote&bcc=bartonphillips@gmail.com&body=$body">Email Me For A Quote</a> (jthomp379@gmail.com)</p>

<p><button id="call">Call</button> or <button id="textme">Text Me</button> at (252)876-3511</p>
<img id="photo" src="https://bartonphillips.net/images/blank.png">
<hr>
$footer
EOF;
