<?Php
$_site = require_once(getenv("SITELOADNAME"));
$S = new SiteClass($_site);

$S->meta = "<meta name=\"Editor\" content=\"Bonnie Burch\">";
$S->canonical = "https://jt-lawnservice.com";
$S->title = "JT Lawn Service";
$S->banner = "<h3>Our services are available in New Bern and the Craven County area of North Carolina</h3>";
$S->msg2 = "<br><span style='font-size: 10px'>Designed by Barton Phillips (252-670-6424)</span>";
$S->logoAnchor = "./contactus.php";
$S->css =<<<EOF
#logo { width: 800px; height: 392px; }
#container {
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(auto-fit, minmax(390px,1fr));
  background-color: #a09d9d;
}
.item {
  background-color: #eee2db;
  padding: 10px;
}
@media (hover: none) and (pointer: coarse) {
  #logo { width: 290px; height: 142px; }
  #container { grid-template-columns: 1fr; }
}
EOF;

[$top, $footer] = $S->getPageTopBottom();

echo <<<EOF
$top
<hr>
<!--<h2 class="underconstruction">Under Construction</h2>
<p>This site will be up soon. Until then you can contact JT (James Thompson) at (252) 876-3511.</p>-->

<a href="contactus.php">Contact Us and Get a Quote</a><br>
<a href="testimonials.php">Testimonials</a><br><br>

<div id="container">
<div class="item">
<p>Tree &amp; Brush Trimming</p>
<img src='images/Brush-Trimming-thum.jpg' alt='Tree & Brush Trimming' title='Tree & Brush Trimming' />
<p>The best time for trimming trees and brushes is during the late winter while they're dormant.
There are many benefits to properly trimming trees and there are also certain rules and guidelines on how to do it.
As a professional, We have got you covered. Keep in mind that certain trimming-related activities might be done all year round.
</p>
</div>
<div class="item">
<p>Yard Clean-up</p>
<img src='images/Yard-Cleanup-thum.jpg' alt='Yard Cleanup' title='Yard Cleanup' />
<p>Spring is the perfect time for yard clean-up, especially if you have benefited from my tree-trimming services, 
including hauling away old branches.
Of course, thorough yard clean-ups can be done at any time.
This service also includes cleaning debris, mowing grass, edging, seeding and aeration.
</p>
</div>
<div class="item">
<p>Lawn Care</p>
<img src='images/Lawn-Care-thum.jpg' alt='Lawn Care' title='Lawn Care' />
<p>Keeping your lawn vibrant, healthy and green is my duty, and my full-service lawn maintenance offers the perfect way to do that.
Taking care of your lawn is more cost effective in the long run than waiting for it to become unhealthy or damaged.
With years of experience, We guarantee customized programs for your lawn's specific needs.
</p>
</div>
<div class="item">
<p>Mulching</p>
<img src='images/Mulching-thum.jpg' alt='Mulching' title='Mulching' />
<p>Having a beautiful landscape requires more than occasional trimming, mowing and clearing.
This is where mulching comes in.
Different plants require different mulches, which are beneficial to your garden's health.
The right mulch can also contribute to the overall beauty of your exterior space.
</p>
</div>
<div class="item">
<p>Tree Service </p>
<img src='images/Tree-Service-thum.jpg' alt='Tree Service ' title='Tree Service ' />
<p>There are many benefits to keeping your trees healthy and safe.
With the variety of tasks involved in proper tree care and maintenance, an experienced hand can prevent problems and
serious issues. Let me take care of your trees.
</p>
</div>
<div class="item">
<p>Fall Clean-up</p>
<img src='images/Fall-Cleanup-thum.jpg' alt='Fall Cleanup' title='Fall Cleanup' />
<p>Fall is a good time clean up your yard.
With leaves and branches falling, your outdoor space can become a danger zone in a matter of weeks.
Do not let this happen. Plan in advance, and We promise to clean up your entire outdoor space.
</p>
</div>
<div class="item">
<p>Leaf Clean-up</p>
<img src='images/Leaf-Cleanup-thum.jpg' alt='Leaf Cleanup' title='Leaf Cleanup' />
<p>We have all the equipment necessary to remove piles of leaves.
We will collect them in bags and make sure that everything is completed in a timely fashion.
Just give me a call.
</p>
</div>
<div class="item">
<p>Tree Removal </p>
<img src='images/Tree-Removal-thum.jpg' alt='Tree Removal ' title='Tree Removal ' />
<p>We can cut and remove trees of all sizes, using our top-shelf machinery, knowledge and techniques.
A clean and safe job is our commitment.
</p>
</div>
<div class="item">
<p>Grass Installation </p>
<img src='images/Grass-Installation-thum.jpg' alt='Grass Installation ' title='Grass Installation ' />
<p>Laying grass in your yard requires serious attention to detail
and the touch of a professional who understands the process and anything that might go wrong.
We have years of expeience and have dealt with countless grass installation projects.
</p>
</div>
<div class="item">
<p>Fence Repair</p>
<img src='images/Fence-Repair-adv-thum.jpg' alt='Fence Repair' title='Fence Repair' />
<p>Do you need fence repair?
In addition to  being a landscaping professional, We also offer fence repair.
</p>
</div>
<div class="item">
<p>Leaf Blowing</p>
<img src='images/leaf-blowing-thum.jpg' alt='Leaf Blowing' title='Leaf Blowing' />
<p>We have a commercial-grade leaf blower for every clean-up job and strictly follow pollution and noise regulations.
</p>
</div>
<div class="item">
<p>Haul-Away Service</p>
<img src='images/hallaway-thum.jpg' alt='Haul-Away' title='Haul-Away' />
<p>We can leave a dumpster at your location and after you have filled it, We will haul it away.
We have my own equipment.
</p>
</div>
</div> <!-- end of container -->
<hr>
$footer
EOF;
