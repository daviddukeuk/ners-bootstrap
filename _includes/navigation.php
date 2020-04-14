<?php
function isActive($str){
	global $menu;
	if(@$menu==$str){
		return 'class="active"';
	}
}
?>		
		<div id="navcontainer" class="col col-lg-2 p-0 m-0">
			<nav class="navbar navbar-expand-lg navbar-light p-0 m-0">
				<div id="nav-mobile" class="d-md-block d-lg-none">
					<a class="navbar-brand p-1" href="#"  data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle Navigation">Navigation <em>(click to expand)</em></a>
				</div>
			
				<div class="collapse" id="nav" style="width:100%;">
					<ul class="sr-only sr-only-focusable">
						<li>
							<a href="/">Homepage</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="/about" <?php echo isActive("about"); ?>>About the NERS</a>
						</li>
						<li>
							<a href="/membership" <?php echo isActive("membership"); ?>>Membership</a>
						</li>
						<li>
							<a href="/committee" <?php echo isActive("committee"); ?>>Committee</a>
						</li>
						<li>
							<a href="/rattitude" <?php echo isActive("rattitude"); ?>><em>Rattitude</em> Magazine</a>
						</li>
						<li>
							<a href="/forum" <?php echo isActive("forum"); ?>>Members' Forum</a>
						</li>
					</ul>
					
					<ul>	
						<li>
							<a href="/ratkeeping" <?php echo isActive("keeping"); ?>>Rat-keeping Information</a>
						</li>
					</ul>
					
					<ul>
						<li>
							<a href="/nextshow" <?php echo isActive("next-show"); ?>>Next NERS Show</a>
						</li>
						<li>
							<a href="/showcalendar" <?php echo isActive("show-calendar"); ?>>Show Calendar</a>            
						</li>
						<li>
							<a href="/showresults" <?php echo isActive("show-results"); ?>>Show Results</a>
						</li>
						<li>
							<a href="/showarticles" <?php echo isActive("show-articles"); ?>>Show Articles</a>
						</li>
					</ul>

					<ul>
						<li>
							<a href="/longevity" <?php echo isActive("longevity"); ?>>Longevity Award Scheme</a>
						</li>
						<li>
							<a href="/championships" <?php echo isActive("championship"); ?>>Championship Scheme</a>
						</li>
						<li>
							<a href="/halloffame" <?php echo isActive("hall-of-fame"); ?>>Hall of Fame</a>
						</li>
					</ul>

					<ul>
						<li>
							<a href="/rescuefund" <?php echo isActive("rescue-fund"); ?>>NERS Rescue Fund</a>
						</li>
						<li>
							<a href="/rescuestories" <?php echo isActive("rescue-stories"); ?>>Rescue Stories</a>
						</li>
						<li>
							<a href="/fundraising" <?php echo isActive("fundraising"); ?>>Fundraising</a>
						</li>
					</ul>
							
					<ul>
						<li>
							<a href="/lookingforrats" <?php echo isActive("looking"); ?>>Looking for Rats?</a>
						</li>
						<li>
							<a href="/articles/petshops" <?php echo isActive("pet-shops"); ?>>Buying from Pet Shops</a>
						</li>
						<li>
							<a href="/breederlist" <?php echo isActive("breeders"); ?>>NERS Breeders</a>
						</li>
						<li>
							<a href="/rescuelist" <?php echo isActive("rescue"); ?>>NERS Rescues</a>
						</li>
					</ul>
						
					<ul>
						<li>
							<a href="/committee" <?php echo isActive("contact"); ?>>Contact Us</a>
						</li>
					</ul>
				</div>
			
			</nav>
		</div>
