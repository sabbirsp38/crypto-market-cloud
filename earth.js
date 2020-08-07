//(function(){
	var AMOUNT=200, d=220, R=160, adjustment=0, adaptive=true,
		obliquity=23/180*3.14, roV1=.00025, roV2=0, ro1=0, ro2=-0.40, posZ=1700,
		canvas='#earth', color=0x09142A, fogC='#722779', T_earth='earth.png', T_point='point.svg',
		T_particle='data:image/gif;base64,R0lGODlhIAAgAIAAAP///wAAACH5BAEAAAEALAAAAAAgACAAQAJKjI8By51vmpyUqoqzi7oz6GVJSC5X6YEoAD1ry60TImtnjddxvh08C6PZgq0QUSiD/YDIX3O5W0qnVNRteoVGeS6nSncsHZWScQEAOw==';
// IE fix!!
if (!Float32Array.prototype.forEach) Float32Array.prototype.__proto__=Array.prototype, T_point='point.png'
// -------

var positions=[], particles, particle, count = 0, dpr, lastW,
	W=window.innerWidth, H=window.innerHeight, aspect=W / H;

	var mouseX = 0, mouseY = 0, x0, y0;
	var vec3=function(x,y,z){return new THREE.Vector3(x||0, y||0, z||0)}, lookAt=vec3(), PI=Math.PI,
		canvas=document.querySelector(canvas), halo=document.querySelector('.halo'); 

	var renderer = new THREE.WebGLRenderer({alpha:true, antialias:true, canvas: canvas});//
	renderer.setSize( W, H );
	//alert()
	//renderer.context.getExtension('OES_standard_derivatives');
	var scene = new THREE.Scene(), planet = new THREE.Group(),
		camera = new THREE.PerspectiveCamera( 18, aspect, 1, 10000 );
	camera.position.z=posZ;
	//planet.position.z=-2*R;
	camera.lookAt(location.hash?.5*R:-1*R,0,0);
	renderer.render(scene, camera);
	
	(onresize=function(){
		W=innerWidth; H=innerHeight;
		renderer.setSize(W, H);
		renderer.setPixelRatio(window.devicePixelRatio);//( Math.max(/2, 1) );
		camera.aspect=W/H;
		camera.updateProjectionMatrix();
		canvas.style='';
		halo.style.cssText='left:'+(1+lookAt.project(camera).x)*50+'%; opacity:1'
	})();
	//scene.position
	var testCanvas=document.createElement('canvas'), tCtx=testCanvas.getContext('2d'), Ew, Eh;
	var Emap = (new THREE.TextureLoader()).load( T_earth, function(t){
		var img=t.image;
		Ew=testCanvas.width=img.width; Eh=testCanvas.height=img.height;
		tCtx.scale(1, -1);
		tCtx.drawImage(img,0,-Eh);
	} );
	var Pmap = (new THREE.TextureLoader()).load( T_point );
	var Tmap = (new THREE.TextureLoader()).load( T_particle );

	Emap.anisotropy=Math.min(8, renderer.capabilities.getMaxAnisotropy())||1;
	//Emap.minFilter=THREE.NearestFilter;
	//var cubeCamera = new THREE.CubeCamera( 1, R+10, 128 );
	//cubeCamera.renderTarget.minFilter = THREE.LinearMipMapLinearFilter; 
	//scene.add( cubeCamera );
	//Ematerial.envMap=cubeCamera.renderTarget.texture;
	Ematerial=new THREE.MeshStandardMaterial({
		roughness: .9,//.69,
		metalness: .93,
		//envMapIntensity:4.5,
		emissive: color,
		color: color,
		map: Emap,
		transparent: true//, alphaTest: 0.05
	});//, opacity: 0
	var Earth = new THREE.Mesh(new THREE.IcosahedronGeometry(R, 3), Ematerial);
	//var wGeometry=geometry.clone();
	var Pmaterial = new THREE.PointsMaterial({
		size: d,
		transparent: true,
		map: Pmap,
		alphaTest: 0.01,
		depthTest: false,
		blending: 2,
		onBeforeCompile: function(sh){
			sh.vertexShader='\
attribute float flash;\n\
varying float vSize;\n\
'			+sh.vertexShader.replace(/}\s*$/, '\
  vSize=max(flash, 0.0);\n\
  gl_PointSize*=vSize;\n\
}			');
			sh.fragmentShader='\
varying float vSize;\n\
'			+sh.fragmentShader.replace("#include <alphatest_fragment>", '\
  diffuseColor.a *= smoothstep( 150.0,  0.0, fogDepth-1550.0 )*vSize;\n\
  #include <alphatest_fragment>');
			// console.log(sh, sh.vertexShader, sh.fragmentShader);
		}
	});//, opacity: 0  ///  
	var pCount=30, points = []
	var flashes=new Float32Array(pCount);
	points32=new Float32Array(pCount*3);
	Pgeometry=new THREE.BufferGeometry();
	Pgeometry.addAttribute( 'position', new THREE.BufferAttribute( points32, 3 ) );
	Pgeometry.addAttribute( 'flash', new THREE.BufferAttribute( flashes, 1 ) );
	var Points=new THREE.Points(Pgeometry, Pmaterial)
	
	var Cpoints=new THREE.ArcCurve(0,0,R*1.2).getSpacedPoints(300),
		Cgeometry=new THREE.BufferGeometry().setFromPoints( Cpoints ),
		circle=new THREE.LineSegments( Cgeometry, new THREE.LineBasicMaterial({
			color: '#99aaff', blending: 2,
			opacity:.4, transparent: true
		})),
		halahup=new THREE.Group().add(circle);
	halahup.rotation.set(-.43, 0, 0, 'YXZ')
	circle.translateZ(-.1*R).rotateX(PI/2+.01);
	(halahup1=halahup.clone()).rotation.set(-.43, 2*PI/3, 0, 'YXZ');
	(halahup2=halahup.clone()).rotation.set(-.43, -2*PI/3, 0, 'YXZ');
	
	planet.add(Points, Earth, halahup, halahup1, halahup2);//new THREE.Points(geometry, Pmaterial), , tLine
	scene.add(planet);

	scene.fog=new THREE.Fog(color, posZ-R/2, posZ+R);
	hLight=new THREE.HemisphereLight('#fff', 0, 20)
	light1=new THREE.PointLight('#aaf', 13)
	light2=new THREE.PointLight('#aaf', 1.5)
	scene.add(hLight, light1, light2);
	light1.position.set(1.2*R,2.3*R,-.2*R);
	light2.position.set(1.2*R,-1.2*R,-.1*R);
	hLight.position.set(0,0,1);

	var t0=new Date()*1, dMax=1000/15, dMin=1000/45, dT=1000/61, af, Pactive=[],
		pUp=0, pDn=[], flTimer=[], vecTest=new THREE.Vector3(), transStart, pLast, transactions=[],
		Tmaterial=Pmaterial.clone();
	Tmaterial.__proto__=Pmaterial;
	Tmaterial.map=Tmap; Tmaterial.size=.06*d; Tmaterial.opacity=.75;
	Tmaterial.color.set('#7788ff');
	
	function addTransaction(a,b,i){
		//console.log (pUp, a, b); //return
		var an=a.angleTo(b), center=a.clone().add(b).setLength(R*1.14+an*5), cn=center.clone().normalize(), n=an*140+15;
		var curve = new THREE.CatmullRomCurve3([a.clone(), a.clone().add(cn), center, b.clone().add(cn), b.clone()], false, 'chordal');
		var tFlashes=new Float32Array(n+1);
		//tFlashes.forEach(function(f,i){if (i) tFlashes[i]=tFlashes[i-1]+1/n});
		tGeometry=new THREE.BufferGeometry().setFromPoints( curve.getSpacedPoints(n) );
		tGeometry.addAttribute( 'flash', new THREE.BufferAttribute( tFlashes, 1 ) );
		transactions[i]=new THREE.Points(tGeometry, Tmaterial);
		transactions[i].timer=0;
		planet.add(transactions[i]);
	}
	function addPoint(i0, i, c){
		if ((c=c+1||0)>15) return false;
		if (i0) delete flTimer[i0];
		if (!i) {
			if (!points[0]) i=0
			else points.every(function(p, j){return points[i=j+1+'']});
			if (i==pCount) return false
		}
		var fi=Math.random()*1.55, dTest;
		var point0=vec3(0,0,R).applyEuler(new THREE.Euler(Math.sqrt(fi*Math.sin(fi)*PI/2), -.2, Math.random()*2*PI, 'YZX')),
			point=point0.clone().applyMatrix4(new THREE.Matrix4().getInverse(planet.matrix));
		var dLast;
		//if (transStart && (dLast=pLast.distanceToSquared(point))>80000 ) return addPoint(i);
		if (points.some(function(v){return v.distanceToSquared(point)<2500})) return addPoint(i0, i, c);
		var u=.5-Math.atan2(-point.z, -point.x)/2/PI,
			v=.5+Math.asin(point.y/R)/PI,
			idata=tCtx.getImageData(Math.floor(u*Ew), Math.floor(v*Eh), 1, 1);
		if (idata.data[3]<255) return addPoint(i0, i, c);
		point.pInd=i;
		points[i]=point;
		if (!i0) point.up=point.new=1;
		points32[i*3]=point.x;
		points32[i*3+1]=point.y;
		points32[i*3+2]=point.z;
		Pgeometry.attributes.position.needsUpdate=true;
		if (i0) addTransaction(points[i0], point, i)
		if (i0 && pUp<3 && Math.random()>.7) {  //fork
			flTimer[i0]=(Math.random()*450+200);
			points[i0].up=1
		}
		return true
	}
	var iframe=(parent!=this)?parent.document.querySelector('iframe.earth'):0;
	if (iframe) {
		iframe.style.width='100vw'
	}

	var animComplite, animA=[], animT;
	requestAnimationFrame(function animate() {
		animA=requestAnimationFrame(animate, canvas);
		var t=new Date()*1, dt=t-t0;
		if (!Eh || dt<dMin) return;//
		dt=Math.min(dt, dMax);
		t0=t;
		if (iframe) {
			var pos=iframe.getBoundingClientRect();
			if (pos.bottom<=0 || pos.top>=parent.innerHeight) return;
		}
		planet.position.z-=planet.position.z*.08;
		var dr=roV1*dt, ro3=dr*4.81, ro4=dr*4.3;
		ro1+=dr; ro2+=roV2*dt;
		planet.rotation.set(0,0,0);
		planet.rotateY(PI/5).rotateZ(obliquity).rotateY(ro1);
		halahup.rotateY(ro3);
		halahup1.rotateY(ro3);
		halahup2.rotateY(ro3);
		circle.rotateZ(ro4);
		halahup1.children[0].rotateZ(ro4);
		halahup2.children[0].rotateZ(ro4);
		var count=0, newTr, newP, pAdded=0, maxDn=Math.random()*.6;
		pUp=0;
		if (!points.length) addPoint();
		points.forEach(function(p,i){
			if ((flTimer[i]-=dt)<0) pAdded=1, addPoint(i+''), p.up=1
			count++;
			if (p.up>0) {
				if ((flashes[i]+=(1.005-flashes[i])*.005*dt) > .95 ) {
					p.up*=-1;
				}
				if (!transactions[i] && ++pUp && flashes[i]>.15) newTr=i+'';
			}
			if (p.up<0) {
				if ((flashes[i]-=(1.11-flashes[i])*flashes[i]*.006*dt) < 0.005) {
					delete points[i];
				}
				if (flashes[i]<maxDn) newP=1;
			}
			if (transactions[i]) {
				var arr=transactions[i].geometry.attributes.flash.array, n=arr.length,
					t=transactions[i].timer+=dt/650;//, tt=t*t;
				arr.forEach(function(v,j){
					var df=j/n-t, dj=n-j;
					arr[j]=(df<0) ? 1+df : 1-df*df*8
					if (!(dj%6) && dj<31) arr[j]*=Math.pow(1.14, 6-dj/6)
				});
				if ( t>1 && arr[n-1]<-0.4 ) {
					transactions[i].geometry.dispose();
					planet.remove(transactions[i]);
					delete transactions[i];
					if (!p.up) delete points[i]
				} else {
					if (t<1 || p.up>0) pUp++;
					if (t<1.4 && t>.7) newTr=i+'';
					transactions[i].geometry.attributes.flash.needsUpdate=true
				}
				if (!p.up) flashes[i] =.3+arr[n-1]*.7;
			}
		})
		if (points.length && !points[points.length-1]) points.length--;
		if (newTr) {
			var p=points[newTr];
			if (!p.startTr && (p.new || pUp<3 && Math.random()>.65) && !pAdded++) {
				p.startTr=addPoint(newTr);
				if (p.startTr && transactions[newTr] && transactions[newTr].timer>1.2) p.up=1;
			}
		}
		if (newP && pUp<2 && Math.random()<.2 && !pAdded++) addPoint();
		Pgeometry.attributes.flash.needsUpdate=true;
		renderer.render( scene, camera );
	}, canvas);
//})()