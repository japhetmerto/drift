<!--- Off canvas cart-->
	<div id="bs-canvas-right" class="bs-canvas bs-canvas-right position-fixed bg-dark h-100">
		<header class="bs-canvas-header p-3 bg-dark overflow-auto">
			<button type="button" class="bs-canvas-close float-right close" aria-label="Close" aria-expanded="false"><span aria-hidden="true" class="text-light">&times;</span></button>
			<h4 class="d-inline-block text-light mb-0 text-center">Your <b class="text-warning">Cart</b></h4>
		</header>
            	<?php echo $_SESSION["showAllItemsOffCanvas"]; ?>
		</div>
    </div> 
	
	<!------ Off Canvas Membership ----->
	<div id="member" class="bs-canvas bs-canvas-right position-fixed bg-dark h-100">
		<header class="bs-canvas-header pt-3 pl-3 bg-dark overflow-auto">
			<button type="button" class="bs-canvas-close float-right close" aria-label="Close" aria-expanded="false"><span aria-hidden="true" class="text-light">&times;</span></button>
			<h4 class="d-inline-block text-light text-center">Membership <b class="text-warning">Status</b></h4>
		</header>
		<div class="container text-white">
		<hr class="bg-white">
		<?php echo $_SESSION["offcanvasmember"]; ?>
		</div>
    </div> 