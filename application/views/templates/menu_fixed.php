<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo MY_COMPANY; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo ASSET_ROOT;?>/user/main">Home</a></li>
				<li><a href="<?php echo ASSET_ROOT;?>/user/contact">Contact</a></li>
				<li><a href="<?php echo ASSET_ROOT;?>/user/about">About</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
				<li><a href="#">A</a></li>
				<li><a href="#">B</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actions Menu <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">Account Settings</li>
                    <li><a href="<?php echo ASSET_ROOT;?>/user/profile">Profile</a></li>
                    <li><a href="<?php echo ASSET_ROOT;?>/user/locations">Locatons</a></li>
                    <li><a href="<?php echo ASSET_ROOT;?>/user/people">Contacts</a></li>
                    <li><a href="<?php echo ASSET_ROOT;?>/user/billing">Billing</a></li>
                    <li><a href="<?php echo ASSET_ROOT;?>/user/invoices">Invoices</a></li>
                    <li class="dropdown-header">Services</li>
                    <li><a href="<?php echo ASSET_ROOT;?>/user/support">Support</a></li>
					<li><a href="<?php echo ASSET_ROOT;?>/user/logout">Log Out</a></li>
                </ul>
                </li>
          </ul>
		</div><!--/.nav-collapse -->
    </div>
</nav>