/**
 *
 */
var controls;
var colors = [0x800000,0x008000,0x008080,0xffa000,0x800080];
var objs = [{name:'red_0' , mesh:null , light:null},
                {name:'green_0' , mesh:null , light:null},
                {name:'blue_0' , mesh:null , light:null},
                {name:'orange_0' , mesh:null , light:null},
                {name:'pink_0' , mesh:null , light:null}
               ]
var index = 0 , fadeOut = false , fadeIn = false;
var renderer = new THREE.WebGLRenderer();
renderer.setPixelRatio( window.devicePixelRatio );
renderer.setSize( window.innerWidth, window.innerHeight );
renderer.animate( render );
document.body.appendChild( renderer.domElement );

var scene = new THREE.Scene();
scene.background = new THREE.Color( 0x000000 );

colors.forEach(function(col,i){
	var light = new THREE.PointLight( col, 5, 10 );
	light.position.set(0, 0, 0);
	scene.add( light );
	objs[i].light = light;
	light.visible = false;
})
objs[index].light.visible = true;
var light = new THREE.PointLight( 0xEEEEEE, 3, 7.0 );
light.position.set(0, 0, 0);
scene.add( light );

scene.add( new THREE.AmbientLight( 0x222222 ) );

var camera = new THREE.PerspectiveCamera( 40, window.innerWidth / window.innerHeight );
controls = new THREE.OrbitControls( camera, renderer.domElement );
controls.userPan = false;
controls.userPanSpeed = 0.0;
controls.autoRotate = false;
controls.autoRotateSpeed = -10.0;
scene.add(controls);
var mixer, sphere ;
var loader = new THREE.GLTFLoader();
var BoneBodyClone=null,BoneBody=null;
loader.setCrossOrigin( 'anonymous' );
loader.load( 'https://hankuro.sakura.ne.jp/Model_145/model278_145.gltf', function ( gltf ) {
	gltf.scene.traverse( function ( child ) {
		if ( child instanceof THREE.Mesh === true ) {
			objs.forEach(function(obj){
				if( child.name == obj.name){
					obj. mesh =  child;
					child.material.transparent= true;
					child.material.opacity = 0;
				}
			})
		}
	} );
	objs[index].mesh.visible = true;
	objs[index].mesh.material.opacity = 1;
	gltf.scene.scale.set(2.5, 2.5, 2.5);
	gltf.scene.position.set(0, 0,0);
	scene.add( gltf.scene );


	camera.position.set(0, 0, 20);
	camera.lookAt( sphere.center );
} );

var targetRotationX = 0 , targetRotationY = 0;
document.addEventListener( 'mousemove', onDocumentMouseMove, false );
function onDocumentMouseMove(e){
	var mouseX = e.clientX - window.innerWidth / 2 ;
    var mouseY = e.clientY -  window.innerHeight / 2;
    targetRotationY = mouseX * 0.0005;
    targetRotationX = mouseY * 0.0005;
}

		//
var prevTime = new Date().getTime();
function render() {
	var now = new Date().getTime();
	var time = now - prevTime;
	if(time > 5000){
		prevTime = time;
		fadeOut = true;
		prevTime = now;
	}
	objFadeIn();
	objFadeOut();
	controls.update();
	renderer.render( scene, camera );
}

function objFadeIn(){
	if(!fadeIn) return;
	var light = objs[index].light;
	var mesh = objs[index].mesh;
	light.intensity += 0.25;
	mesh.material.opacity += 0.05;
	if(light.intensity > 5 ) {
		light.intensity = 5;
		mesh.material.opacity = 1;
		fadeIn = false;
	}
}
function objFadeOut(){
	if(!fadeOut) return;
	var light = objs[index].light;
	var mesh = objs[index].mesh;
	light.intensity -= 0.25;
	mesh.material.opacity -= 0.05;
	if(light.intensity < 0 ) {
		light.intensity = 0;
		mesh.material.opacity = 0;
		fadeOut = false;
		fadeIn = true;
		objs[index].light.visible = false;
		objs[index].mesh.visible = false;
		index++;
		index = index % objs.length;
		objs[index].light.visible = true;
		objs[index].mesh.visible = true;
		objs[index].mesh.material.opacity = 0;
	}
}
