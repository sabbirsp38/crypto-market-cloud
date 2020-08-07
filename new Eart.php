<?php include 'inc/hader7.php'; ?>

<style>
	
	.earth {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.halo {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    opacity: 0;
    transition: opacity 1.4s;
}
.halo div {
    width: 72vh;
    height: 72vh;
    margin: auto -36vh;
    position: absolute;
    top: 50%;
    left: 0;
    bottom: 50%;
    box-shadow: rgba(110, 100, 255, 0.3) 0 0 9vh inset;
    border-radius: 50%;
    _animation: pulse-t 8s cubic-bezier(0.16, 0.66, 0.16,-0.59) infinite, pulse-o 8s infinite;
    _will-change: transform;
    _animation-fill-mode: both;
    _transform: scale(.7);
}
</style>


<div style="min-height: 500px; background-color: black;">



		<canvas id="earth" class="earth" width="1898" height="937" style=""></canvas>
		<div class="halo" style="left: 64.6974%; opacity: 1;">
			<div></div><!--<div></div>-->
		</div>

		<script src="js/three.min.js"></script>
		<script src="js/earth.js?v4"></script>
	












	 

</div>


<?php include 'inc/foter2.php'; ?> 