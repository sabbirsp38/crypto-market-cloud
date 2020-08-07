<?php include 'inc/hader7.php'; ?>
<section class="cmc-slider">
  <div class="">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-lg-6 fshalf">
        <div class="slider-content">
          <h1 style="text-align: center;" class="slider-heading wow zoomIn" data-wow-duration="3s" style="text-transform: uppercase;">WELCOME TO CRYPTO MARKET CLOUD™ <br>ECOSYSTEM</h1>
          <p class="slider-paragraph wow zoomIn"  style="text-align: center;" data-wow-duration="4s" data-wow-delay="1s">GLOBAL CROWDFUNDING SOLUTION IN CRYPTO & FIAT</p>
          
        </div>
        <center><h3 class="wow fadeInLeft" data-wow-duration="4s" data-wow-delay="2.5s">TRENDING IEO</h3></center>
        <div class="row">

        	<?php 
      $per_page = 4;
      if (isset($_GET["page"])) {
        $page= $_GET["page"];
      }else{
        $page =1;
      }
      $start_from = ($page-1) * $per_page;

      ?>
      
      <?php
       $current = date("Y/m/d");
       $today_time = strtotime($current);
       $status = "UNDEFINED";
      $query = "select * from tbl_ico_paid order by id desc limit $start_from, $per_page";
      $post = $db->select($query);
      if ($post) {
        while ($result= $post -> fetch_assoc()) {

                  $pre_ico_start = $result['pre_ico_start'];
                  $pre_ico_end = $result['pre_ico_end'];
                  $ico_start = $result['ico_start'];
                  $ico_end = $result['ico_end'];

                  $pre_ico_start_time = strtotime($pre_ico_start);
                  $pre_ico_end_time = strtotime($pre_ico_end);
                  $ico_start_time = strtotime($ico_start);
                  $ico_end_time = strtotime($ico_end);

                  if($pre_ico_start_time>$today_time)
                  {
                    $status = "UPCOMMING";
                  }
                  else if($pre_ico_start_time<=$today_time && $pre_ico_end_time>=$today_time)
                  {
                    $status = "PRE-SELL";
                  }
                   else if($ico_start_time<=$today_time && $ico_end_time>=$today_time)
                  {
                    $status = "SELL START";
                  }
                    else if($ico_end_time<$today_time)
                  {
                    $status = "CLOSSED";
                  }


        ?>

        	<div class="col-lg-6 col-md-6 col-sm-6">
        		<div class="top_box wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s">
        			
        				 <a  href="memberprofileP.php?id=<?php echo $result['id']; ?>&status=<?php echo $status ?>">
					    <div class="top_box_0">
					      
					        <center><img class="img-responsive top_box_img" onerror="this.src='images/alt.png';" src="upload/<?php echo $result['image']; ?>"></center>
					        <center><p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;"><?php echo $result['name']; ?></p></center>
					     
					    </div>
					    </a>
        		</div>
        	</div>

        <?php }}?>
    <!--End of whoil lope-->
        	
        	
        		
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6">

   <!-- wow zoomIn" data-wow-duration="4s" data-wow-delay="2s" -->
     <div id="color" class="ebody ">
		<canvas id="earth" class="earth"></canvas>
		<div class="halo">
			<div></div><!--<div></div>-->
		</div>

		<script src="three.min.js"></script>
		<script src="earth.js?v4"></script>
	</div>


        
      </div>
     </div>
    </div>
  </div>
</section>
<div style="background: linear-gradient(to right,#05234b 0,#000509 100%); min-height:1px;"><div style=" background-color: white; margin-left: 200px; margin-right: 200px; min-height: 1px;"></div></div>
<div class=" CorsollArea" >
    <h1 style="width: 100%; color: white;" >Trending Now</h1>

<div class='swipe' style='margin:10px;'>
  <ul id='slider1'>

    <?php
      $query = "select * from tbl_publish_mp order by id desc";
      $post = $db->select($query);
      if ($post) {
        while ($result= $post -> fetch_assoc()) {

      

        ?>
        


    <li style='display:block'>
      <a target="blank" href="<?php echo $result['website_link']; ?>">
    <div class="customWidth">
      
      <span class="buttoncoursol"><spam class="starSize">&#9733;</spam>  PREMIUM</span>
      

        <img class="imgWidth" src="upload/<?php echo $result['logo_img']; ?>">
        <p style="line-height: 14px; padding: 5px; font-weight: bold; color: white; margin-top: 5px;"><?php echo $fm-> textshortentn ($result['company_tagline']); ?></p>
     
    </div>
    </a>
  </li>
   
       <?php }}?>
    <!--End of whoil lope-->

    
  </ul>
</div>

</div>
<div class="for_color">
<div class="container">
  <div class="row card_0_0 wow zoomIn" data-wow-duration="4s">
                   <?php
                      $query = "select * from tbl_index_contant order by id desc ";
                      $post = $db->select($query);
                      $result= $post -> fetch_assoc()
                        ?>
      <h1 style="width: 100%; color: white;">CMC SERVICES</h1>
      <p style="width: 100%; columns: white;">LOGIC REINVENTED, OUR VISION TO YOUR SUCCESS.</p>
    <div class="col-md-4">
              <div class="card_coundawon">
                <center>
                  <img src="images/slideshow/block_explorer1.png" />
                  <h3>CREATE YOUR CRYPTOCURRENCY </h3><br>
                </center>
                 <span class="cmc_btn"><a href="undercostraction.php">Create Token</a></span>
                  
              </div>
            </div>
            <div class="col-md-4">
              <div class="card_coundawon">
                <center>
                   <img src="images/slideshow/c-chain1.png" />
                  <h3>CROWDFUNDING</h3><small style="font-size: 12px;
    text-transform: uppercase;
    color: #130101; margin-left: 0px;">PSO IEO STO ICO ITO</small>
                </center>
                    <span class="cmc_btn"> <a  id="but-up" href="Member">View</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card_coundawon">
                 <img src="images/slideshow/exchange1.png" />
                <center>
                  <h3>EXCHANGE CRYPTO FOR FIAT </h3><br>
                </center>
                <span class="cmc_btn"><a href="Exchange/index.php"> Exchange</a></span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card_coundawon">
                <img src="images/slideshow/investors1.png" />
                <center>
                  <h3>Blockchain </h3><small style="font-size: 12px;
    text-transform: uppercase;
    color: #130101; margin-left: 0px;">Experts Entrepreneurs Investors Advisors Ambassadors </small>
                </center>
                   <span class="cmc_btn"> <a href="p_profile.php">View</a>
                     <a href="register.php">List</a></span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card_coundawon">
                <img src="images/slideshow/directory1.png" />
                <center>
                  <h3>Directory </h3>
                </center>
                <span class="cmc_btn"><a href="DirectoryList.php">View </a></span>
               
              </div>
            </div>
            <div class="col-md-4">
              <div class="card_coundawon">
                <img src="images/slideshow/members1.png" />
                <center>
                  <h3>TOKEN SWAP </h3>
                </center>
                   
                  <span class="cmc_btn"> <a href="UProfile/index">LOG IN </a></span>          
              </div>
              </div>
  </div>
</div>

</div>

<script type="text/javascript">


var t11=new TouchSlider('slider1',{duration:1500, interval:6000, direction:0, autoplay:true, align:'left', mousewheel:true, mouse:true, fullsize:false, mouseTouch: false});

</script>

<section class="addsection">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <!-- <div class="sectionadd"><h1>This is add section</h1></div> -->
            </div>
          </div>
        </div>
      </section>


<div class="VideoFUll"> 
  <span><center><h1 id="VideoTitele">Update</h1></center></span>
                  <div class="container-fluid">
	                <div class="row">
                  <?php
                      $query = "select * from  tbl_announcement order by id desc";
                      $post = $db->select($query);
                      $result= $post -> fetch_assoc()
                        ?>
              <div class="Card_anounsment">
                 <div class="col-sm-6 col-lg-6 col-sm-6">
                   <div class="card_img wow fadeInLeft" data-wow-duration="4s" >
                     <center><img class="img-responsive updateimage"  src="upload/<?php echo $result['img']; ?>" onerror="this.src='images/alt.png';"></center>
                   </div>
                 </div>
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight" data-wow-duration="4s">
	                  <center><h3 style="    font-size: 28px;"><?php echo $result['title']; ?></h3></center>
		                <div class="card_text">
	                   <p><?php echo $result['text_body']; ?></p>
	                  
	                </div>
                </div>
              </div>
            </div>
          </div> 
         </div>







        <!----- Pricing ------>

<div id="pricing" class="pricing">
    <div class="container">

    	<center><h1>LIST YOUR PROJECT</h1></center>
    	


        <div class="row">

 <?php
      $query = "select * from tbl_index_contant order by id desc";
      $post = $db->select($query);
      if ($post) {
        while ($result= $post -> fetch_assoc()) {

      $plan = $result['type'];

        ?>


        <div class="col-lg-4 col-md-4 col-sm-12 wow flipInY" data-wow-delay="0.2s">
                <div class="packages" >
                   
                     <center> <h4><?php echo $result['name']; ?></h4>
                    <b><?php echo $result['price']; ?></b><br />
                    <b>or Equivalent in ETH or CMC</b>
                     <hr>
                     <br />
                     <div class="pakagecontent"><?php echo $result['dics']; ?></div>
                         

                    <?php
                      if($plan==="Free")
                      {
                    ?>
                    <a  href="UProfile/addico"><button class=" packagesa btn btn-success ">Get Started</button></a></center>
                   <?php }else
                   {  ?>
                    <a  href="UProfile/mporderprocess"><button class=" packagesa btn btn-success ">Get Started</button></a></center>
                  <?php } ?>
                </div>
            </div> 
            

  <?php }}?>










            
        </div>
    </div>
</div>
 
 <!--- End Pricing ---->
     
  

         <div class="butsction ">
         <div class="container">
         	<div class="row">
         		<div class="col-sm-3 col-md-3 col-lg-3">
         			<div class="btn_mb_d"> <a class="btn_cmc md1 " href="WhitePaperExchange.pdf" target="_blank">Whitepaper Exchange</a> </div>
         		</div>
         		<div class="col-sm-3 col-md-3 col-lg-3">
         			<div class="btn_mb_d"> <a class="btn_cmc md1" href="WhitePaperBlockChain.pdf" target="_blank">Whitepaper BlockChain</a> </div>
         		</div>
         		
         		<div class="col-sm-3 col-md-3 col-lg-3">
         			<div class="btn_mb_d"><a class="btn_cmc md1" href="WhitePaperPsoPlatform.pdf" target="_blank">Whitepaper Pso-Platform</a> </div>
         		</div>
         		<div class="col-sm-3 col-md-3 col-lg-3">
         			<div class="btn_mb_d"> <a class="btn_cmc mb3" href="https://drive.google.com/file/d/1hBEyqL-BKzCuH6LGganJaDKLalCW88Mj/view?usp=sharing" target="_blank">One Pager</a> </div>
         		</div>
         		
         	</div>
         	
         </div>
</div>
<div style="background: linear-gradient(to right,#05234b 0,#000509 100%); min-height:1px;"><div style=" background-color: white; margin-left: 200px; margin-right: 200px; min-height: 1px;"></div></div>
<div class="slider_bg">
    <h1 style="width: 100%;">Media & Partners</h1>
    
    <!--Start Partner Area -->
    <div class=" " >

<div class='swipe' style='margin:10px;'>
  <ul id='slider2'>

    <?php
      $query = "select * from tbl_partner order by id desc";
      $post = $db->select($query);
      if ($post) {
        while ($result= $post -> fetch_assoc()) {

      

        ?>

<a  href="<?php echo $result['web_link']; ?>" target="blank" >
    <li style='display:block'>

    <div class="customWidth2">
      
      
      

        <img class="imgWidth" src="upload/<?php echo $result['img']; ?>">
        
    </div>
  </li>
   </a>
       <?php }}?>
    <!--End of whoil lope-->

    
  </ul>
</div>
<div style="background: linear-gradient(to right,#05234b 0,#000509 100%); min-height:1px;"><div style=" background-color: white; margin-left: 200px; margin-right: 200px; min-height: 1px;"></div></div>


<br/>
<div id="pagenavi2">
</div>
</div>

<script type="text/javascript">
console=window.console || {dir:new Function(),log:new Function()};
var active=0,
  as=document.getElementById('pagenavi2').getElementsByTagName('a');
for(var i=0;i<as.length;i++){
  (function(){
    var j=i;
    as[i].onclick=function(){
      t4.slide(j);
      return false;
    }
  })();
}

var t11=new TouchSlider('slider2',{duration:1500, interval:6000, direction:0, autoplay:true, align:'left', mousewheel:true, mouse:true, fullsize:false});
t4.on('before',function(m,n){
    as[m].className='';
  as[n].className='active';
})


</script>

  
   
 

   <!--- End Partner Area ---->
</div>






<div class="card005">
 <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm--6">

             <div class="card_subcriber"> 
                <center><h3><i class="fa fa-envelope" aria-hidden="true"></i>Subscribe For Latest Update</h3></center>

               <center><form form action="dbconncetsubcriber.php" method="post">
                 <input id="fromiput" type="email" name="semail" placeholder="Subscribe For Updates">
                    <button id="frombutton" type="submit">Subscribe</button>
                </form></center> 
             </div>
                
            </div>
            <div class="col-lg-6 col-md-6 col-sm--6">
               <div class="card0006 pull-right">
                    <center><h2>Stay Connected </h2></center>
                <div class="card05">

                      <ul>
                         <?php
      $query = "select * from tbl_social order by id desc";
      $post = $db->select($query);
      if ($post) {
        while ($result= $post -> fetch_assoc()) {

      

        ?>
                        <li><a href="<?php echo $result['fb_link']; ?>"><img src="images/fb.png" class="logoimgC"></a></li>
                        <li><a href="<?php echo $result['linkedin_link']; ?>"><img src="images/linkedin.png" class="logoimgC"></a></li>
                        <li><a href="<?php echo $result['twitter_link']; ?>"><img src="images/twiter.png" class="logoimgC"></a></li>
                        <li><a href="<?php echo $result['midiam_link']; ?>"><img src="images/medioum.png" class="logoimgC"></a></li>
                        <li><a href="<?php echo $result['youtube_link']; ?>"><img src="images/youtube.png" class="logoimgC"></a></li>
                        <li><a href="<?php echo $result['telegram_link']; ?>"><img src="images/telegram.png" class="logoimgC"></a></li>
                        <li><a href="<?php echo $result['instragram_link']; ?>"><img src="images/instagram.png" class="logoimgC"></a></li>

                        <?php }}?>
                    </ul>                    
                </div>

                </div> 
            </div>
        </div>
</div>
</div>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content modal-content2">
    <span class="close">&times;</span>
                  <div style="text-align: center; width: 100%; height: 100%">
                      <form action="dbconnect_subscribe_new.php" method="POST">
                      <input type="text" name="fName" value=""  placeholder="Name" />
                      <input type="text" name="email" value="" placeholder="Email"/>
                      <input type="password" name="password" value=""  placeholder="Password"/>
                      
                      <center><h3 id="mini0000" style="color:#000">Whitelist minimum investment $2,000</h3></center>
                      <div class="g-recaptcha" data-sitekey="6LfnmHYUAAAAAEZJjYI9onMPcpv2ygwm-YBmxJLF" name="g-recaptcha-response"></div>
                       <p id="s002">
                         <input class="ffff_0000" type="checkbox" name="vehicle" value="Bike" onclick="myFunction()" id="myCheck"><span id="s0003"> I agree with the Terms & Conditions and Privacy Policy</span>
                       </p>
                      
                    <center><button id="btn" style="display: none" class="btn btn-success">Subscribe</button></center>
                      <script type="text/javascript">
                        var mm = document.getElementById('btn');
                        function myFunction(){
                          var x = document.getElementById("myCheck");                             
                              if(x.checked)
                               mm.style.display = "block";
                              else{
                                  mm.style.display = "none";
                                  }
                                }
                      </script>
                      </form>
                         
                     </div>
  </div>

</div>
<?php
      $query = "select * from tbl_announcement order by id desc";
      $post = $db->select($query);
      if ($post) {
        if($result= $post -> fetch_assoc()) {

          
           $text = $result['title'];
        ?>

<script>
         var name = "<?php echo $result['title']; ?>";
            
         document.cookie = "myJavascriptVar ="+channel;

</script>
 <?php }}?>

<?php
       $cc=  "<script>document.write(channel);</script>";
       $var1 = $_COOKIE['myJavascriptVar'];
      //echo $var1;

      $query2 = "select text from notification where channel= '$var1'";
     
      $post2 = $db->select($query2);
      if ($post2) {
        if($result= $post2 -> fetch_assoc()) {

          
           
        ?>

<script>
       
         var name2 = "<?php echo $result['text']; ?>";
          var n = name.localeCompare(name2);
          
          
            if(n==0)
           // alert("New");
          else{
         // alert(n);
          setTimeout(function(){
          
          send(name);
              
        }, 5000);
              
     }
       

</script>
 <?php  }

$update = "update notification set text='$text' where channel= '$var1'";

   if($conn->query($update)===true)
    {
     
    }

}  else{
      
$in_Query = "insert into  notification(text,channel) VALUES('$text','$var1')";

  if ($conn->query($in_Query) === TRUE)
  {
    
  }else 
    {   
     // echo "Error: " . $in_Query . "<br>" . $conn->error;
        
     } ?>
<script>
   setTimeout(function(){
          
          send(name);
              
        }, 5000);
</script>
<?php     }


?>



<script>

var modal = document.getElementById('myModal');

var span = document.getElementsByClassName("close")[0];


function openPopup() {
    
    modal.style.display = "block"; 
}

span.onclick = function() {

   modal.style.display = "none";
}
</script>
<script >
  (function() {

  // VARIABLES
  const timeline = document.querySelector(".timeline ol"),
    elH = document.querySelectorAll(".timeline li > div"),
    arrows = document.querySelectorAll(".timeline .arrows .arrow"),
    arrowPrev = document.querySelector(".timeline .arrows .arrow__prev"),
    arrowNext = document.querySelector(".timeline .arrows .arrow__next"),
    firstItem = document.querySelector(".timeline li:first-child"),
    lastItem = document.querySelector(".timeline li:last-child"),
    xScrolling = 280,
    disabledClass = "disabled";

  // START
  window.addEventListener("load", init);

  function init() {
    setEqualHeights(elH);
    animateTl(xScrolling, arrows, timeline);
    setSwipeFn(timeline, arrowPrev, arrowNext);
    setKeyboardFn(arrowPrev, arrowNext);
  }

  // SET EQUAL HEIGHTS
  function setEqualHeights(el) {
    let counter = 0;
    for (let i = 0; i < el.length; i++) {
      const singleHeight = el[i].offsetHeight;

      if (counter < singleHeight) {
        counter = singleHeight;
      }
    }

    for (let i = 0; i < el.length; i++) {
      el[i].style.height = `${counter}px`;
    }
  }

  
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  // SET STATE OF PREV/NEXT ARROWS
  function setBtnState(el, flag = true) {
    if (flag) {
      el.classList.add(disabledClass);
    } else {
      if (el.classList.contains(disabledClass)) {
        el.classList.remove(disabledClass);
      }
      el.disabled = false;
    }
  }

  // ANIMATE TIMELINE
  function animateTl(scrolling, el, tl) {
    let counter = 0;
    for (let i = 0; i < el.length; i++) {
      el[i].addEventListener("click", function() {
        if (!arrowPrev.disabled) {
          arrowPrev.disabled = true;
        }
        if (!arrowNext.disabled) {
          arrowNext.disabled = true;
        }
        const sign = (this.classList.contains("arrow__prev")) ? "" : "-";
        if (counter === 0) {
          tl.style.transform = `translateX(-${scrolling}px)`;
        } else {
          const tlStyle = getComputedStyle(tl);
          // add more browser prefixes if needed here
          const tlTransform = tlStyle.getPropertyValue("-webkit-transform") || tlStyle.getPropertyValue("transform");
          const values = parseInt(tlTransform.split(",")[4]) + parseInt(`${sign}${scrolling}`);
          tl.style.transform = `translateX(${values}px)`;
        }

        setTimeout(() => {
          isElementInViewport(firstItem) ? setBtnState(arrowPrev) : setBtnState(arrowPrev, false);
          isElementInViewport(lastItem) ? setBtnState(arrowNext) : setBtnState(arrowNext, false);
        }, 1100);

        counter++;
      });
    }
  }

  // ADD SWIPE SUPPORT FOR TOUCH DEVICES
  function setSwipeFn(tl, prev, next) {
    const hammer = new Hammer(tl);
    hammer.on("swipeleft", () => next.click());
    hammer.on("swiperight", () => prev.click());
  }

  // ADD BASIC KEYBOARD FUNCTIONALITY
  function setKeyboardFn(prev, next) {
    document.addEventListener("keydown", (e) => {
      if ((e.which === 37) || (e.which === 39)) {
        const timelineOfTop = timeline.offsetTop;
        const y = window.pageYOffset;
        if (timelineOfTop !== y) {
          window.scrollTo(0, timelineOfTop);
        }
        if (e.which === 37) {
          prev.click();
        } else if (e.which === 39) {
          next.click();
        }
      }
    });
  }

})();

// Package List
$(document).ready(function(){

      var list = $("#bas li");
      var numToShow = 4;
      var button = $("#next1");
      var numInList = list.length;
      list.hide();
      if (numInList > numToShow) {
        button.show();
      }
      list.slice(0, numToShow).show();

      button.click(function(){
          var showing = list.filter(':visible').length;
          list.slice(showing - 1, showing + numToShow).fadeIn();
          var nowShowing = list.filter(':visible').length;
          if (nowShowing >= numInList) {
            button.hide();
          }
      });

});
$(document).ready(function(){

      var list = $("#sta li");
      var numToShow = 4;
      var button = $("#next2");
      var numInList = list.length;
      list.hide();
      if (numInList > numToShow) {
        button.show();
      }
      list.slice(0, numToShow).show();

      button.click(function(){
          var showing = list.filter(':visible').length;
          list.slice(showing - 1, showing + numToShow).fadeIn();
          var nowShowing = list.filter(':visible').length;
          if (nowShowing >= numInList) {
            button.hide();
          }
      });

});
$(document).ready(function(){

      var list = $("#stap li");
      var numToShow = 4;
      var button = $("#next3");
      var numInList = list.length;
      list.hide();
      if (numInList > numToShow) {
        button.show();
      }
      list.slice(0, numToShow).show();

      button.click(function(){
          var showing = list.filter(':visible').length;
          list.slice(showing - 1, showing + numToShow).fadeIn();
          var nowShowing = list.filter(':visible').length;
          if (nowShowing >= numInList) {
            button.hide();
          }
      });

});
$(document).ready(function(){

      var list = $("#adv li");
      var numToShow = 4;
      var button = $("#next4");
      var numInList = list.length;
      list.hide();
      if (numInList > numToShow) {
        button.show();
      }
      list.slice(0, numToShow).show();

      button.click(function(){
          var showing = list.filter(':visible').length;
          list.slice(showing - 1, showing + numToShow).fadeIn();
          var nowShowing = list.filter(':visible').length;
          if (nowShowing >= numInList) {
            button.hide();
          }
      });

});
$(document).ready(function(){

      var list = $("#advp li");
      var numToShow = 4;
      var button = $("#next5");
      var numInList = list.length;
      list.hide();
      if (numInList > numToShow) {
        button.show();
      }
      list.slice(0, numToShow).show();

      button.click(function(){
          var showing = list.filter(':visible').length;
          list.slice(showing - 1, showing + numToShow).fadeIn();
          var nowShowing = list.filter(':visible').length;
          if (nowShowing >= numInList) {
            button.hide();
          }
      });

});
$(document).ready(function(){

      var list = $("#pro li");
      var numToShow = 4;
      var button = $("#next6");
      var numInList = list.length;
      list.hide();
      if (numInList > numToShow) {
        button.show();
      }
      list.slice(0, numToShow).show();

      button.click(function(){
          var showing = list.filter(':visible').length;
          list.slice(showing - 1, showing + numToShow).fadeIn();
          var nowShowing = list.filter(':visible').length;
          if (nowShowing >= numInList) {
            button.hide();
          }
      });

});
$(document).ready(function(){

      var list = $("#p2p li");
      var numToShow = 4;
      var button = $("#next7");
      var numInList = list.length;
      list.hide();
      if (numInList > numToShow) {
        button.show();
      }
      list.slice(0, numToShow).show();

      button.click(function(){
          var showing = list.filter(':visible').length;
          list.slice(showing - 1, showing + numToShow).fadeIn();
          var nowShowing = list.filter(':visible').length;
          if (nowShowing >= numInList) {
            button.hide();
          }
      });

});
$(document).ready(function(){

      var list = $("#dob li");
      var numToShow = 2;
      var button = $("#next8");
      var numInList = list.length;
      list.hide();
      if (numInList > numToShow) {
        button.show();
      }
      list.slice(0, numToShow).show();

      button.click(function(){
          var showing = list.filter(':visible').length;
          list.slice(showing - 1, showing + numToShow).fadeIn();
          var nowShowing = list.filter(':visible').length;
          if (nowShowing >= numInList) {
            button.hide();
          }
      });

});
</script>

 

<?php include 'inc/foter2.php'; ?> 