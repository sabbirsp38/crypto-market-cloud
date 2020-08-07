<?php include 'inc/hader.php'; ?>

    
<!--Add Start Here-->      
  
<div style="min-height: 150px;"></div>




<div class="container">
	<h1>Deposite</h1>
	<br>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6">
			<div class="card">
				<h3>Coin <br><br>  BTC</h3>

					<p>Total balance:0.00000000 BTC<br>
		               Available balance:0.00000000 BTC</p>

				<ul>

					<li>Coins will be deposited after 1 network confirmations.</li>
					<li>Until 2 confirmations are made, an equivalent amount of your assets will be temporarily unavailable for withdrawals,</li>
					
				</ul>
			</div>
        </div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<div class="card">
				<h3>BTC address</h3>
					<br>
				<h5>2wfaaf45afa489aef45fe</h5><br>
				<button class="btn-primary btn">Copy Address</button>
	                  <br>
	                  <br>
	                 

            <p><b>Send only BTC to this deposit address.</b></p><br>
				<ul>

					
					<li>Sending coin or token other than BTC to this address may result in the loss of your deposit.</li>
					
				</ul>
			</div>
		</div>
		      <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="card">
             <!-- <div class="card-header">
                Trade history:
              </div>-->
              <div class="card-header p-0">
                <table class='table table-orders m-0'>
                  <tr>
                    <td><strong>Deposite history:</strong></td>
                  </tr>
                </table>
              </div>
              
              
              <div class="card-body div-orders p-0">
                <table id="table_all_history" class="table table-striped table-sm table-orders">
                  <thead>
                    <tr>
                      <th>Time</th>
                      <th>Type</th>
                      <th>Volume</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody id='id_trade_history'>
                  	<td>Time</td>
                      <td>Type</td>
                      <td>Volume</td>
                      <td>Price</td>
                  </tbody>
                </table>
              </div>
            </div>          
          </div>
		
	</div>
	
</div>


















<div style="min-height: 150px;"></div>





<?php include 'inc/foter.php'; ?> 