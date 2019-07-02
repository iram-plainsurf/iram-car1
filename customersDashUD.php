<?php

require('./includes/links.php');
?>


 <body>
 			<?php

      				 require('./includes/design.php');
    		?>
	 
			    <div class="row">
			    	<div class="col-md-1 col-md-offset-4">
			    		<input type="submit" id="btn_update" class="btn btn-lg btn-info" value="Update">
			    	</div>
			    			    	
			    	<div class="col-md-1">
			    		<input type="submit" id="btn_clear" class="btn btn-lg btn-warning" value="Clear">
			    	</div>			    	
			    </div><br>


			    <div class="row">
			    	<div class="col-md-7 col-md-offset-3">
			    		<table class="table table-striped table-bordered table-hover table-condensed">
			    			 <thead>
			    			 	 <tr>
			    			 	 	<th>Sr.No</th>
			    			 	 	<th>Customer Name</th>
			    			 	 	<th>Address</th>
			    			 	 	<th>Conatct Number</th>
			    			 	 	<th>Car Model</th>
			    			 	 	<th>Price</th>
			    			 	 	<th>Payment</th>
			    			 	 	<th>Action</th>
			    			 	 </tr>
			    			 </thead>
			    			 <tbody id="loadData"></tbody>
			    		</table>
			    	</div>
			    </div>
</body>

<script type="text/javascript" src="assets/js/customersDashUD.js"></script>
</html>