<?php
$_site = require_once(getenv("SITELOADNAME"));
$S = new SiteClass($_site);

$S->canonical = "https://jt-lawnservice.com";
$S->title = "JT Lawn Service";
$S->banner = "<h3>Our services are abailable in New Bern and the Craven county area of North Carolina</h3>";
$S->msg2 = "<br><span style='font-size: 10px'>Designed by Barton Phillips (252-670-6424)</span>";
$S->logoAnchor = "./contactus.php";
$S->css =<<<EOF
#logo { width: 800px; }
.underconstruction { color: red; }
#container {
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(auto-fill, minmax(500px,1fr));
  background-color: #a09d9d;
}
.item {
  background-color: #eee2db;
  padding: 10px;
}
.item img { width: 200px; }
EOF;

[$top, $footer] = $S->getPageTopBottom();

echo <<<EOF
$top
<hr>
<!--<h2 class="underconstruction">Under Construction</h2>
<p>This site will be up soon. Until then you can contact JT (James Thompson) at (252) 876-3511.</p>-->

<div id="container">

<div class="item">
<p>Tree &amp; Brush Trimming</p>
<img src='images/Brush-Trimming.jpg' alt='Tree & Brush Trimming' title='Tree & Brush Trimming' />
<p>The best time for trimming trees and brushes is during the late winter while they're dormant.
There are many benefits of properly trimming trees and there are also certain rules and guidelines on how to do that.
As a professional, I have got you covered. Keep in mind that certain trimming-related activities might be done all year round.
</p>
</div>
<div class="item">
<p>Yard Cleanup</p>
<img src='images/Yard-Cleanup.jpg' alt='Yard Cleanup' title='Yard Cleanup' />
<p>Spring is the perfect time for yard clean up services, especially if you have benefited from my tree trimming services
as clearing up old branches is a big part of the job.
Of course, thorough yard cleanups can be done at any time or as part of any other lawn maintenance program.
This service also included cleaning debris, mowing grass, re-edging, re-seeding and aeration.
</p>
</div>
<div class="item">
<p>Lawn Care</p>
<img src='images/Lawn-Care.jpg' alt='Lawn Care' title='Lawn Care' />
<p>Keeping your yard vibrant, healthy, and green is my duty, and my full-service yard maintenance is the perfect way to do that.
Taking care of your lawn is more cost-effective in the long run than waiting for your lawn to become unhealthy or damaged.
With years of experience in my field, I guarantee customized programs for your lawn's specific needs.
</p>
</div>
<div class="item">
<p>Mulching</p>
<img src='images/Mulching.jpg' alt='Mulching' title='Mulching' />
<p>Having a beautiful landscape requires more than occasional trimming, mowing, and land clearing.
This is where mulching comes in.
Different greens require different mulch, and this is not only beneficial to your garden's health,
but the right mulching can also contribute to the overall design of your exterior space.
</p>
</div>
<div class="item">
<p>Tree Service </p>
<img src='images/Tree-Service.jpg' alt='Tree Service ' title='Tree Service ' />
<p>There are many pros that come with hiring an arborist for keeping your trees healthy and safe for you and your property.
With the variety of tasks involved in proper tree care and maintenance, an inexperienced hand can easily result in improper work,
and this will cause serious issues. Let me take care of your trees.
</p>
</div>
<div class="item">
<p>Fall Cleanup</p>
<img src='images/Fall-Cleanup.jpg' alt='Fall Cleanup' title='Fall Cleanup' />
<p>Fall is as good a time as any to have your yard cleaned up.
With leaves and branches falling from the trees, your outdoor space will become a danger zone to walk on in a matter of weeks.
Do not let this happen, make plans in advance with me. I promise to clean up your entire outdoor space.
</p>
</div>
<div class="item">
<p>Leaf Cleanup</p>
<img src='images/Leaf-Cleanup.jpg' alt='Leaf Cleanup' title='Leaf Cleanup' />
<p>I have all the equipment necessary to remove the pile of leaves in front and at the back of your property.
I will collect all the leaves in bags and will make sure that everything I do is complete in a timely fashion.
Just give me a call first.
</p>
</div>
<div class="item">
<p>Tree Removal </p>
<img src='images/Tree-Removal.jpg' alt='Tree Removal ' title='Tree Removal ' />
<p>I am a professional in cutting and removing trees of different sizes.
I use top-shelf machinery and work with all safety protocols and guidelines to prevent any damage to your property or health-related issues.
I have the knowledge and the techniques to ensure a flawless service.
</p>
</div>
<div class="item">
<p>Grass Installation </p>
<img src='images/Grass-Installation.jpg' alt='Grass Installation ' title='Grass Installation ' />
<p>Laying grass on your outdoor space requires serious attention to detail
and the touch of a professional who understands the process and anything that might go wrong along the way.
Such an expert you can find at my company.
I have years on the job and have dealt with countless grass installation projects.
</p>
</div>
<div class="item">
<p>Fence Repair</p>
<img src='images/Fence-Repair-adv.jpg' alt='Fence Repair' title='Fence Repair' />
<p>Do you need fence repair? I know this is an urgent matter a broken fence is useless.
Apart from being a landscaping professional, I would love to offer you a  fence repair service
so that you never have to worry about your fence not functioning as it should.
</p>
</div>
<div class="item">
<p>Leaf Blowing</p>
<img src='images/leaf-blowing.jpg' alt='Leaf Blowing' title='Leaf Blowing' />
<p>I have a commercial-grade leaf blower that I bring with me for every leaf cleanup job.
The state has recommendations and solutions to using leaf blowers.
I'm strictly following the requirements regarding pollution and noise but still guarantee efficiency.
</p>
</div>
<div class="item">
<p>Haul-Away Service</p>
<img src='images/hallaway.jpg' alt='Haul-Away' title='Haul-Away' />
<p>I can leave a dumpster at your location and then when you have filled it up I will come and haul it away.
I have my own equipment.
</p>
</div>
</div> <!-- end of container -->
<hr>
$footer
EOF;
