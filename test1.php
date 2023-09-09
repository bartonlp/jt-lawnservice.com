<?php
$_site = require_once(getenv("SITELOADNAME"));
$S = new SiteClass($_site);

header("Accept-CH: Sec-CH-UA-Full-Version-List");
$headers = getallheaders();
error_log("jt-lawnservice/test1.php: Headers=" . print_r($headers, true));

$S->canonical = "https://jt-lawnservice.com";
$S->title = "JT Lawn Service";
$S->banner = "<h3>Our services are abailable in New Bern and the Craven county area of North Carolina</h3>";
$S->msg2 = "<br><span style='font-size: 10px'>Designed by Barton Phillips (252-670-6424)</span>";
$S->logoAnchor = "./test2.php";

$S->h_inlineScript =<<<EOF
const mylastId = $("script[data-lastid]").attr("data-lastid");                    

jQuery(document).ready(function($) {
  $("#logo").remove();
  let image1 = "$S->trackerImgPhone";
  let image2 = "$S->trackerImg1";

  $("header a:first-of-type").html("<picture id='logo'>"+
                              "<source srcset=" + image1 + " media='((hover: none) and (pointer: coarse))' alt='phoneImage'>" +
                              " <img src=" + image2 + " alt='desktopImage'></picture>");

/*  $.ajax({
    url: trackerUrl,
    data: {page: 'test', 'id': mylastId, site: thesite, ip: theip, thepage: thepage, isMeFalse: isMeFalse},
    type: 'post',
    success: function(data) {
       console.log(data);
    },
    error: function(err) {
      console.log(err);
    }
  });*/
});
EOF;

[$top, $footer] = $S->getPageTopBottom();

echo <<<EOF
$top
<hr>
<p>Test</p>
<picture>
  <source media="((hover: none) and (pointer: coarse))" srcset="./images/JT-lawnservice-290.png">
  <source media="(max-width: 800px)" srcset="./images/Grass-Installation-thum.jpg">
  <img src="./images/hallaway.jpg">
</picture>

$footer
EOF;