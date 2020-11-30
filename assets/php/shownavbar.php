<nav class="navbar navbar-expand-lg border-bottom border-secondary" style="background: linear-gradient(to bottom, #1a1c1a 0%, #1a1c1a 100%);">
	  <div class="container">
		  <div class="col-2">
		    <a class="navbar-brand logo mt-2" href="index.php">
			  <img src="assets/img/favicons/logo-Drift.png" alt="Logo" class="logo-light mx-auto">
			</a>
		  </div>
		  <div class="col-5">
		    <form class="input-group border-0 bg-transparent" id="searchform" action="search-result.php" method="post">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search">
              <div class="input-group-append">
                <a class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit" role="button" onclick="document.getElementById('searchform').submit();">
				  <i class="fas fa-search mt-2"></i>
				</a>
              </div>
            </form>
		  </div>
		  <?php showUserName(); ?>
		  <div class="nav-item">
			<a class=" order-xl-last nav-link small bg" data-toggle="canvas" href="#member" aria-expanded="false" aria-controls="bs-canvas-right" role="button">
				<i class="fas fa-crown text-white"></i>
			</a>
		  </div>
		  <div class="nav-item">
			<a class=" order-xl-last nav-link small bg" data-toggle="canvas" href="#bs-canvas-right" aria-expanded="false" aria-controls="bs-canvas-right" role="button">
				<i style="color:white" class="fas fa-shopping-cart"></i>
				<span class="badge badge-pill badge-warning"><?php echo $_SESSION["noitemscart"]; ?></span>
			</a>
		  </div>
		</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to bottom, #1a1c1a 0%, #1a1c1a 100%);">
      <div class="container" style="font-family: 'Montserrat', sans-serif;">
        <button class="navbar-toggler navbar-toggler-fixed" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">☰</button>
        <div class="collapse navbar-collapse" id="collapsingNavbar">
          <ul class="navbar-nav">
              <a class="nav-link pr-3" href="store-game.php" aria-haspopup="true" aria-expanded="false">Games</a>
			  <a class="nav-link pr-3" href="store-console.php" aria-haspopup="true" aria-expanded="false">Console</a>
			  <a class="nav-link pr-3" href="store-accessories.php" aria-haspopup="true" aria-expanded="false">Accessories</a>
            <li class="nav-item pr-3">
              <a class="nav-link" href="member.php">Membership</a>
            </li>
            <li class="nav-item pr-3">
              <a class="nav-link" href="news.php">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>