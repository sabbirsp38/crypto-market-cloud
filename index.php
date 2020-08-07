<?php include 'inc/hader8.php'; ?>

    
<!--Add Start Here-->      
  
<div style="min-height: 100px;"></div>






<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    
  </ol> -->



  <!-- Wrapper for slides -->
<!--   <div class="carousel-inner">
                            <?php
      // $query = "select * from tbl_announcement order by id desc";
      // $post = $db->select($query);
      // if ($post) {
      //   while ($result= $post -> fetch_assoc()) {

      

        ?>
    <div class="item active">
      <img class="img-responsive main_sl_img "  src="upload/<?php// echo $result['img']; ?>" onerror="this.src='images/alt.png';">
    </div>

    <?php //}}?>
    
  </div> -->

  <!-- Left and right controls -->
<!--   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->


































 <!-- <div class="container-fluid"> -->
  <!-- Swiper -->
  <!-- <div class="swiper-container gallery-top">
    <div class="swiper-wrapper">

        <?php
      // $query = "select * from tbl_announcement order by id desc";
      // $post = $db->select($query);
      // if ($post) {
      //   while ($result= $post -> fetch_assoc()) {

      

        ?>

      <div class="swiper-slide" ><img class="img-responsive main_sl_img "  src="upload/<?php //echo $result['img']; ?>" ></div>
      
       <?php //}}?>
      
    </div>
    Add Arrows -->
    <!-- <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div> --> 


  <!-- <div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">

      <?php
      // $query = "select * from tbl_announcement order by id desc";
      // $post = $db->select($query);
      // if ($post) {
      //   while ($result= $post -> fetch_assoc()) {

      

        ?>
      <div class="swiper-slide" ><img class="img-responsive main_sub_img "  src="upload/<?php //echo $result['img']; ?>" ></div>


      

    <?php //}}?>
    </div>
  </div> -->

   
<!--  </div> -->













<!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">



      <?php
      $query = "select * from tbl_announcement order by id desc";
      $post = $db->select($query);
      if ($post) {
        while ($result= $post -> fetch_assoc()) {

      

        ?>
      <div class="swiper-slide"><img class="img-responsive main_sl_img "  src="upload/<?php echo $result['img']; ?>"  ></div>
      
      
       <?php }}?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination" ></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>





































  
                   

<div class="container-fluid">
<div class="row">

  <div class="col-lg-3 col-md-3 col-sm-3">
    

     <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container bodycutom ">
 
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "BINANCE:ETHBTC",
  "width": 330,
  "height": 200,
  "locale": "en",
  "dateRange": "12m",
  "colorTheme": "dark",
  "trendLineColor": "#37a6ef",
  "underLineColor": "rgba(55, 166, 239, 0.15)",
  "isTransparent": true,
  "autosize": false,
  "largeChartUrl": "http://localhost/crypto%205.0/Exchange/exchange.php"
}
  </script>
</div>
<!-- TradingView Widget END -->

  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">

     <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container bodycutom">
 
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "COINBASE:BTCUSD",
  "width": 330,
  "height": 200,
  "locale": "en",
  "dateRange": "12m",
  "colorTheme": "dark",
  "trendLineColor": "#37a6ef",
  "underLineColor": "rgba(55, 166, 239, 0.15)",
  "isTransparent": true,
  "autosize": false,
  "largeChartUrl": "http://localhost/crypto%205.0/Exchange/exchange.php"
}
  </script>
</div>
<!-- TradingView Widget END -->

  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">

     <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container bodycutom">
 
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "COINBASE:BTCEUR",
  "width": 330,
  "height": 200,
  "locale": "en",
  "dateRange": "12m",
  "colorTheme": "dark",
  "trendLineColor": "#37a6ef",
  "underLineColor": "rgba(55, 166, 239, 0.15)",
  "isTransparent": true,
  "autosize": false,
  "largeChartUrl": "http://localhost/crypto%205.0/Exchange/exchange.php"
}
  </script>
</div>
<!-- TradingView Widget END -->

  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">

     <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container bodycutom">
 
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "COINBASE:BTCGBP",
  "width": 330,
  "height": 200,
  "locale": "en",
  "dateRange": "12m",
  "colorTheme": "dark",
  "trendLineColor": "#37a6ef",
  "underLineColor": "rgba(55, 166, 239, 0.15)",
  "isTransparent": true,
  "autosize": false,
  "largeChartUrl": "http://localhost/crypto%205.0/Exchange/exchange.php"
}
  </script>
</div>
<!-- TradingView Widget END -->

  </div>
  
</div>
</div>


   
  
     
   



   
   <!--- End ADspace 2 ---->


    <div class="container">
        <div class="row">
           

<!-- col-md-12 col-lg-12 sol-sm-12 -->
  <div class="#">
      <div class="list-group " id="myList" role="tablist">
        <ul id="homelist">
          <li class="homelistli"><a class="list-group-item list-group-item-action " data-toggle="list" href="#home" role="tab">BTC Market</a></li>
          <li class="homelistli"> <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">ETH Market</a></li>
          <!-- <li class="homelistli"> <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">XRP Market</a></li> -->
          <li class="homelistli"><a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">USD Market</a></li>
          <li class="homelistli"><a class="list-group-item list-group-item-action" data-toggle="list" href="#settings2" role="tab">GBP Market</a></li>
          <li class="homelistli"><a class="list-group-item list-group-item-action" data-toggle="list" href="#settings3" role="tab">EUR Market</a></li>
          <!-- <li class="homelistli"><a class="list-group-item list-group-item-action" data-toggle="list" href="#settings4" role="tab">BNB Market</a></li> -->
        </ul>
        
       
       
        
    </div>
  </div>
<div class="container-fluid">
  <div class="container">
    <div class="row">
      
    
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">                
        <!-- <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Market Cap</th>
                    <th>Price</th>
                    <th>Volume (24h)</th>
                    <th>Circulating Supply</th>
                    <th> Change (24h)</th>
                    <th>Price Graph (7d) </th>                     
               </tr>
            </thead>
            <tbody id="tbody">
                   <td>#</td>
                    <td>Name</td>
                    <td>Market Cap</td>
                    <td>Price</td>
                    <td>Volume (24h)</td>
                    <td>Circulating Supply</td>
                    <td> Change (24h)</td>
                    <td>Price Graph (7d) </td>   
            </tbody>
      </table> -->

      <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "width": 1150,
  "height": 400,
  "colorTheme": "dark",
  "isTransparent": true,
  "largeChartUrl": "http://localhost/crypto%205.0/Exchange/exchange.php",
  "symbolsGroups": [
    {
      "originalName": "Indices",
      "symbols": [
        {
          "name": "COINBASE:BTCUSD"
        },
        {
          "name": "COINBASE:BTCEUR"
        },
        {
          "name": "COINBASE:BTCGBP"
        },
        {
          "name": "BINANCE:ETHBTC"
        },
        {
          "name": "BINANCE:XRPBTC"
        }
      ],
      "name": "Indices"
    }
  ],
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
  </div>
  <div class="tab-pane" id="profile" role="tabpanel">

   
      <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "width": 1150,
  "height": 400,
  "colorTheme": "dark",
  "isTransparent": true,
  "largeChartUrl": "http://localhost/crypto%205.0/Exchange/exchange.php",
  "symbolsGroups": [
    {
      "originalName": "Indices",
      "symbols": [
        {
          "name": "COINBASE:ETHUSD"
        },
        {
          "name": "COINBASE:ETHEUR"
        },
        {
          "name": "COINBASE:ETHGBP"
        },
        {
          "name": "BINANCE:ETHBTC"
        },
        {
          "name": "BINANCE:XRPETH"
        }
      ],
      "name": "Indices"
    }
  ],
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
  </div>
  <div class="tab-pane" id="messages" role="tabpanel">
  
      <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "width": 1150,
  "height": 400,
  "colorTheme": "dark",
  "isTransparent": true,
  "largeChartUrl": "http://localhost/crypto%205.0/Exchange/exchange.php",
  "symbolsGroups": [
    {
      "originalName": "Indices",
      "symbols": [
        {
          "name": "COINBASE:XRPUSD"
        },
        {
          "name": "COINBASE:XRPEUR"
        },
        {
          "name": "COINBASE:XRPGBP"
        },
        
        {
          "name": "BINANCE:XRPBTC"
        }
      ],
      "name": "Indices"
    }
  ],
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
  </div>
  <div class="tab-pane" id="settings" role="tabpanel">
   
      <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "width": 1150,
  "height": 400,
  "colorTheme": "dark",
  "isTransparent": true,
  "largeChartUrl": "http://localhost/crypto%205.0/Exchange/exchange.php",
  "symbolsGroups": [
    {
      "originalName": "Indices",
      "symbols": [
        {
          "name": "COINBASE:BTCUSD"
        },
        
        {
          "name": "BINANCE:ETHUSD"
        }
       
      ],
      "name": "Indices"
    }
  ],
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
  </div>
    <div class="tab-pane" id="settings2" role="tabpanel">
   
      <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "width": 1150,
  "height": 400,
  "colorTheme": "dark",
  "isTransparent": true,
  "largeChartUrl": "http://localhost/crypto%205.0/Exchange/exchange.php",
  "symbolsGroups": [
    {
      "originalName": "Indices",
      "symbols": [
        
        {
          "name": "COINBASE:BTCGBP"
        },
        
        {
          "name": "COINBASE:ETHGBP"
        }
      ],
      "name": "Indices"
    }
  ],
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
  </div>
    <div class="tab-pane" id="settings3" role="tabpanel">
   
      <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "width": 1150,
  "height": 400,
  "colorTheme": "dark",
  "isTransparent": true,
  "largeChartUrl": "http://localhost/crypto%205.0/Exchange/exchange.php",
  "symbolsGroups": [
    {
      "originalName": "Indices",
      "symbols": [
        {
          "name": "COINBASE:BTCEUR"
        },
        
        {
          "name": "COINBASE:ETHEUR"
        }
      ],
      "name": "Indices"
    }
  ],
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
  </div>
   <!--  <div class="tab-pane" id="settings4" role="tabpanel">
    <h1>Spaces For Table 7</h1>
    <table class="table table-striped">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Market Cap</th>
                  <th>Price</th>
                  <th>Volume (24h)</th>
                  <th>Circulating Supply</th>
                  <th> Change (24h)</th>
                  <th>Price Graph (7d) </th>                     
             </tr>
          </thead>
          <tbody id="tbody">
                 <td>#</td>
                  <td>Name</td>
                  <td>Market Cap</td>
                  <td>Price</td>
                  <td>Volume (24h)</td>
                  <td>Circulating Supply</td>
                  <td> Change (24h)</td>
                  <td>Price Graph (7d) </td>   
          </tbody>
    </table>
  </div>
 -->
</div>
    
  </div>
  
</div>


</div>


            </div>
            
        </div>
    </div>

<div style="min-height: 100px;"></div>
<div style="min-height: 100px;"></div>
<div style="min-height: 100px;"></div>

<?php include 'inc/foter.php'; ?> 















<script type="text/javascript">
  $('#myList a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>

<script type="text/javascript" src="Exchange/js/swiper.min.js"></script>
<!-- Initialize Swiper -->
  <script>
    // var galleryThumbs = new Swiper('.gallery-thumbs', {
    //   spaceBetween: 10,
    //   slidesPerView: 8,

    //   loop:  true,
    //   freeMode:true ,
    //   loopedSlides: 8, //looped slides should be the same
    //   watchSlidesVisibility: true,
    //   watchSlidesProgress: true,
    // });
    // var galleryTop = new Swiper('.gallery-top', {
    //   spaceBetween: 10,
    //   effect: 'fade',
    //   autoplay: true,
    //   loop:true,
    //   loopedSlides: 8, //looped slides should be the same
    //   navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    //   },
    //   thumbs: {
    //     swiper: galleryThumbs,
    //   },
    // });



    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      autoplay:true,
      keyboard: {
        enabled: true,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

 