<?php include 'inc/hader.php'; ?>

    
<!--Add Start Here-->         
                   
<style type="text/css">
	.theme-dark .tv-embed-widget-wrapper__body {
    border-color: none !important;
    background: #01051100 !important;
    border: none !important;
    width: 289px !important;
    margin-top: 45px !important;
}

iframe#tradingview_255a6 {
    min-height: 300px;
}
</style>

  
<div style="min-height: 150px;"></div>  

  <div class="container-fluid">
  	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3">
			  <div class="fullpart ">
		     <!--  <div class="list-group" id="myList" role="tablist">
			        <ul id="Coin_list">
			          <li class="Coin_list_li"><a class="list-group-item list-group-item-action " data-toggle="list" href="#home" role="tab">ETH</a></li>
			          <li class="Coin_list_li"> <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">BTC </a></li>
			          <li class="Coin_list_li"> <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">BNB </a></li>
			        </ul>





		      </div> -->

		      <div class="tab-content">
		  <div class="tab-pane active" id="home" role="tabpanel">                
		        
		           
	        <div style="">
	        	
	        	<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "colorTheme": "dark",
  "showChart": false,
  "locale": "en",
  "largeChartUrl": "",
  "isTransparent": true,
  "width": "300",
  "height": "400",
  "largeChartUrl": "http://localhost/crypto%205.0/Exchange/exchange.php",
  "tabs": [
    {
      "title": "Indices",
      "symbols": [
        {
          "s": "BINANCE:ETHBTC"
        },
        {
          "s": "BINANCE:XRPETH"
        },
        {
          "s": "BITSTAMP:BTCUSD"
        },
        {
          "s": "COINBASE:BTCGBP"
        },
        {
          "s": "BITFINEX:ETHUSD"
        },
        {
          "s": "COINBASE:BTCEUR"
        }
      ],
      "originalTitle": "Indices"
    }
  ]
}
  </script>
</div>
<!-- TradingView Widget END -->
	        </div>
		      
		  </div>
		  <div class="tab-pane" id="profile" role="tabpanel">

		    
		     <table class="table table-striped">
		            <thead>
		                <tr>
		                    
		                    <th>Name</th>
		                    <th>Market Cap</th>
		                    <th>Price</th>
		                                       
		               </tr>
		            </thead>
		            <tbody id="tbody">
		                   
		                    <td>Name2</td>
		                    <td>Market Cap</td>
		                    <td>Price</td>
		                      
		            </tbody>
		      </table>
		  </div>
		  <div class="tab-pane" id="messages" role="tabpanel">
		    
		     <table class="table table-striped">
		            <thead>
		                <tr>
		                    
		                    <th>Name3</th>
		                    <th>Market Cap</th>
		                    <th>Price</th>
		                                       
		               </tr>
		            </thead>
		            <tbody id="tbody">
		                   
		                    <td>Name</td>
		                    <td>Market Cap</td>
		                    <td>Price</td>
		                      
		            </tbody>
		      </table>

		   </div>
		  </div>

		  </div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6" >

          <div style=" min-height: 390px; min-width: 600px;">
              <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_4190c"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 700,
  "height":400,
  "symbol": "NASDAQ:AAPL",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "Dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_4190c"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->

                     	
          </div>


            <div class="BS0">
             <div class="fullpart ">

               <div class=" list_haders" id="myList" role="tablist">
			      
			          <a class="conbut" data-toggle="list" href="#home2 " role="tab">ETH</a>
			          <a class="conbut " data-toggle="list" href="#profile2" role="tab">BTC </a>
			           <a class="conbut " data-toggle="list" href="#messages2" role="tab">BNB </a>
		      </div>
		  

		      <div class="tab-content">
		  <div class="tab-pane active" id="home2" role="tabpanel">                
		       <div class="row">

		       	<div class="col-lg-6 col-sm-6 col-md-6">
		       		<div class="bs_card">
		       			 <h3>Buy</h3>
				        <form>
				        	<label class="blab">price:</label>
				        	<input class="bim" type="" name=""><br><br>
				        	<label class="blab">Amount:</label>
				        	<input class="bim" type="" name=""><br><br>
				        	<button class="butsubmite" type="">BUY </button>
				        </form>
		       		</div>
		       	</div>
		       	<div class="col-lg-6 col-sm-6 col-md-6">
		       		<div class="bs_card">
		       			 <h3>SELL</h3>
				        <form>
				        	<label class="blab">price:</label>
				        	<input class="bim" type="" name=""><br><br>
				        	<label class="blab">Amount:</label>
				        	<input class="bim" type="" name=""><br><br>
				        	<button class="butsubmite" type="">SELL</button>
				        </form>
		       		</div>
		       </div>
		  </div>
		</div>
		  <div class="tab-pane" id="profile2" role="tabpanel">

		    
			     <div class="row">

			       	<div class="col-lg-6 col-sm-6 col-md-6">
			       		<div class="bs_card">
			       			 <h3>Buy 2</h3>
					        <form>
					        	<label class="blab">price:</label>
					        	<input class="bim" type="" name=""><br><br>
					        	<label class="blab">Amount:</label>
					        	<input class="bim" type="" name=""><br><br>
					        	<button class="butsubmite" type="">BUY </button>
					        </form>
			       		</div>
			       	</div>
			       	<div class="col-lg-6 col-sm-6 col-md-6">
			       		<div class="bs_card">
			       			 <h3>SELL</h3>
					        <form>
					        	<label class="blab">price:</label>
					        	<input class="bim" type="" name=""><br><br>
					        	<label class="blab">Amount:</label>
					        	<input class="bim" type="" name=""><br><br>
					        	<button class="butsubmite" type="">SELL</button>
					        </form>
			       		</div>
			       </div>
			  </div>
		  </div>
		  <div class="tab-pane" id="messages2" role="tabpanel">
		    
			     <div class="row">

			       	<div class="col-lg-6 col-sm-6 col-md-6">
			       		<div class="bs_card">
			       			 <h3>Buy 3</h3>
					        <form>
					        	<label class="blab">price:</label>
					        	<input class="bim" type="" name=""><br><br>
					        	<label class="blab">Amount:</label>
					        	<input class="bim" type="" name=""><br><br>
					        	<button class="butsubmite" type="">BUY </button>
					        </form>
			       		</div>
			       	</div>
			       	<div class="col-lg-6 col-sm-6 col-md-6">
			       		<div class="bs_card">
			       			 <h3>SELL</h3>
					        <form>
					        	<label class="blab">price:</label>
					        	<input class="bim" type="" name=""><br><br>
					        	<label class="blab">Amount:</label>
					        	<input class="bim" type="" name=""><br><br>
					        	<button class="butsubmite" type="">SELL</button>
					        </form>
			       		</div>
			       </div>
			  </div>

		   </div>
		  </div>

		  </div>
            	




            </div>
			
		</div>

		<div class="col-lg-3 col-md-3 col-sm-3">
			  <div class="fullpart ">
		<!--       <div class="list-group" id="myList" role="tablist">
			        <ul id="Coin_list">
			          <li class="Coin_list_li"><a class="list-group-item list-group-item-action " data-toggle="list" href="#home3" role="tab">ETH</a></li>
			          <li class="Coin_list_li"> <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile3" role="tab">BTC </a></li>
			          <li class="Coin_list_li"> <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages3" role="tab">BNB </a></li>
			        </ul>
 




		      </div> -->

		      <div class="tab-content">
		  <div class="tab-pane active" id="home3" role="tabpanel">                
		       	        	<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "colorTheme": "dark",
  "showChart": false,
  "locale": "en",
  "largeChartUrl": "",
  "isTransparent": true,
  "width": "300",
  "height": "400",
  "largeChartUrl": "http://localhost/crypto%205.0/Exchange/exchange.php",
  "tabs": [
    {
      "title": "Indices",
      "symbols": [
        {
          "s": "BINANCE:ETHBTC"
        },
        {
          "s": "BINANCE:XRPETH"
        },
        {
          "s": "BITSTAMP:BTCUSD"
        },
        {
          "s": "COINBASE:BTCGBP"
        },
        {
          "s": "BITFINEX:ETHUSD"
        },
        {
          "s": "COINBASE:BTCEUR"
        }
      ],
      "originalTitle": "Indices"
    }
  ]
}
  </script>
</div>
<!-- TradingView Widget END -->
		  </div>
		  <div class="tab-pane" id="profile3" role="tabpanel">

		    
		     <table class="table table-striped">
		            <thead>
		                <tr>
		                    
		                    <th>Name 2</th>
		                    <th>Market Cap</th>
		                    <th>Price</th>
		                                       
		               </tr>
		            </thead>
		            <tbody id="tbody">
		                   
		                    <td>Name</td>
		                    <td>Market Cap</td>
		                    <td>Price</td>
		                      
		            </tbody>
		      </table>
		  </div>
		  <div class="tab-pane" id="messages3" role="tabpanel">
		    
		     <table class="table table-striped">
		            <thead>
		                <tr>
		                    
		                    <th>Name 3</th>
		                    <th>Market Cap</th>
		                    <th>Price</th>
		                                       
		               </tr>
		            </thead>
		            <tbody id="tbody">
		                   
		                    <td>Name</td>
		                    <td>Market Cap</td>
		                    <td>Price</td>
		                      
		            </tbody>
		      </table>

		   </div>
		  </div>

		  </div>
		</div>
  		
  	</div>
  	
  </div>









<div class="container">
	   <div class='row'>
        <div class="col-md-12 col-lg-12 col-sm-12">
          <div class="card">
           <!-- <div class="card-header">
              Your active orders:
            </div>-->
            <ul class="nav nav-tabs" id='tab_history'>
              <li class="nav-item">
                <a class="nav-link active" id="active-orders-tab" data-toggle="tab" href="#active_orders" role="tab" aria-controls="active_orders" aria-selected="true">Your active orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="history-orders-tab" data-toggle="tab" href="#history-orders" role="tab" aria-controls="history-orders" aria-selected="false">Your history</a>
              </li>
            </ul>

            <div class="card-body div-orders p-2">
              <div class="tab-content" id="user-orders-tab-content">
                <div class="tab-pane fade show active" id="active_orders" role="tabpanel" aria-labelledby="active-orders-tab">
                  <table id='table_active_orders' class="font_12 table table-striped table-sm">
                    <thead>
                      <tr>
                        <th style="width: 35%">Time</th>
                        <th style="width: 15%">Type</th>
                        <th>Amount</th>
                        <th>Price</th>
                        <th style="width: 10%"></th>
                      </tr>
                    </thead>
                    <tbody id='id_user_orders'>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade " id="history-orders" role="tabpanel" aria-labelledby="history-orders-tab">
                  <table id='table_user_history' class="font_12 table table-striped table-sm">
                    <thead>
                      <tr>
                        <th style="width: 35%">Time</th>
                        <th style="width: 15%">Type</th>
                        <th>Amount</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody id='id_user_orders_history'>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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
                    <td><strong>Trade history:</strong></td>
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
                  </tbody>
                </table>
              </div>
            </div>          
          </div>
	</div>
</div>


























<div style="min-height: 200px;"></div>  


<?php include 'inc/foter.php'; ?> 















<script type="text/javascript">
  $('#myList a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>