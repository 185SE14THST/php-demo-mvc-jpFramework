<?php
/**
 * PHP MVC template
 *
 * @package jpFramework
 * @author JP
 * @link http://www.???.com
 * @version 0.3a
 *
 * @copyright 2016
 *
 * Description
 **/
?>
<header class="navbar navbar-inverse normal" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
			<a href="<?php  echo ASSET_ROOT;?>" class="navbar-brand"><?php if (isset($_SESSION['profileCompany'])) { echo $_SESSION['profileCompany']; } else { echo MY_COMPANY; } ?></a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
				<?php if ( $_SESSION['loggedIn'] == TRUE ) : ?>
				<li><a href="<?php  echo ASSET_ROOT;?>/user/main">Home</a></li>
                <?php endif ?>
				<li><a href="<?php  echo ASSET_ROOT;?>/user/about">About</a></li>
				<li><a href="<?php  echo ASSET_ROOT;?>/user/contact">Contact</a></li>
                <li class="active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        More pages <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="aboutus.html">About us</a></li>
                        <li><a href="contactus.html">Contact us</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="portfolio-item.html">Portfolio Item</a></li>
                        <li><a href="invoice.html">Invoice page</a></li>
                        <li><a href="timeline.html">Timeline Page</a></li>
                        <li><a href="docs.html">API Documentation</a></li>
                        <li><a href="support.html">Support</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                        <li><a href="status.html">Status</a></li>
                        <li><a href="signup.html">Sign Up & Sign In</a></li>
                        <li><a href="signup-rotate.html">Sign Up Miscellaneous</a></li>
                        <li><a href="404.html">404 Page</a></li>
                    </ul>
                </li>
      			</ul>
			<?php if ( $_SESSION['loggedIn'] == TRUE ) : ?>
      			<ul class="nav navbar-nav navbar-right visible-md visible-lg">
      				<!-- <li><a href="signup.html" class="button">Sign up free</a></li> -->
					  <li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<?php echo $_SESSION['profileFullName']; ?> <b class="caret"></b>
	      				</a>
	      				<ul class="dropdown-menu">
							<li><a href="<?php  echo ASSET_ROOT;?>/user/profile">Profile</a></li>
							<li><a href="<?php  echo ASSET_ROOT;?>/user/people">People</a></li>
							<li><a href="<?php  echo ASSET_ROOT;?>/user/locations">Locations</a></li>
							<li><a href="<?php  echo ASSET_ROOT;?>/user/billing">Billing</a></li>
							<li><a href="<?php  echo ASSET_ROOT;?>/user/invoices">Invoices</a></li>
							<li class="dropdown-header">Services</li>
							<li><a href="<?php  echo ASSET_ROOT;?>/user/support">Support</a></li>
							<li><a href="<?php  echo ASSET_ROOT;?>/user/logout">Log Out</a></li>
				        </ul>
        			</li>
      			</ul>
            <?php endif ?>
    		</nav>
    </div>
</header>