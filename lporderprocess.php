<?php include 'inc/hader7.php'; ?>



<div class="container">
    <center>
		<h2 id="paymehader">Send Payment To:  ETH 0x9BAb91e00106df26a2E35B82738E2D76735C2F76</h2>
		<h3><b style="color: #292e39;">For any questions please contact: support@cryptomarketcloud.com</b></h3>	
    </center>
		<center><form class="orderfrom" method="post" action="dbconncetorderprocesslp" class="">
					<div class="row">
						<div class="">		
						 <div class="col-12 ">
			                <div class="form-group row">
							    <label for="colFormLabelLg" class=" imcoustomtext col-sm-6 col-form-label col-form-label-lg">ICO Name</label>
							    <div class="col-sm-10">
							      <input type="text" name="ico_name" class=" imcoustom form-control form-control-lg" id="colFormLabelLg" placeholder=" Enter Your ICO Name" required="true">
							    </div>
							 </div>

			                <div class="form-group row">
							    <label for="colFormLabelLg"  class=" imcoustomtext2 col-sm-6 col-form-label col-form-label-lg">EtherscanTransaction ID</label>
							    <div class="col-sm-10">
							      <input type="text" name="etherscanTransaction_id" class=" imcoustom form-control form-control-lg" id="colFormLabelLg" placeholder="Enter Your EtherscanTransaction ID" required="true">
							    </div>
							 </div>
			                <div class="form-group row">
							    <label for="colFormLabelLg" class=" imcoustomtext col-sm-6 col-form-label col-form-label-lg">Contact Details</label>
							    <div class="col-sm-10">
							      <input name="contact_details" type="text" class=" imcoustom form-control form-control-lg" id="colFormLabelLg" placeholder="Enter your Contact Details" required="true">
							    </div>
							 </div>

			                
			                <button type="submit" name="submit" value="Submit" class="btn btn-lg btn-success wow fadeInUp">Confirm Your Order</button>
			            </div>			
					</div>
				</div>
			</form></center>		
		</div>
</div>

















<?php include 'inc/foter2.php'; ?> 