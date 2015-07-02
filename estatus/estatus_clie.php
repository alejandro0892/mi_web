<?php 
	require("modelo_clie.php");
	$objModelo = new Formulario();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>estatus</title>
	<!-- ----------------------------------------FANCYBOX-------------------------------------------------------------------- -->
	<!-- Add jQuery library -->
	<script type="text/javascript" src="../jquery/fancyapps-fancyBox-3a66a9b/lib/jquery-1.7.2.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="../jquery/fancyapps-fancyBox-3a66a9b/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../jquery/fancyapps-fancyBox-3a66a9b/source/jquery.fancybox.js?v=2.0.6"></script>
	<link rel="stylesheet" type="text/css" href="../jquery/fancyapps-fancyBox-3a66a9b/source/jquery.fancybox.css?v=2.0.6" media="screen" />
  	<link rel="stylesheet" type="text/css" href="../css/estatus_style.css">
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay opening speed and opacity
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedIn : 500,
						opacity : 0.95
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background-color' : '#eee'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	
	<script>

          function reloj() {
          	var fecha = new Date();
          	var h = fecha.getHours();
          	var m = fecha.getMinutes();
          	var s = fecha.getSeconds();
          	var dia = fecha.getDate();
          	var mes =  fecha.getMonth("i")+1;
          	var ano = fecha.getFullYear();
           	document.getElementById('reloj') .innerHTML = dia + " /" + mes + "/"+ ano+ " _<th> " + h + " : " + m + " :" + s  ;

           	setTimeout('reloj()', 1000);

          }
	</script>
	<style>
	#particles-js{

		width: 100%;
		height: 80px;	
	}
	#reloj	{
		color: #ff8000;
        align: center;
	}

</style>
	</head>
	
	<body   onload ="reloj()" background="../img/fon.png">
	  
       <form action="" method="post">
     
      <div  style="text-align:center; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color:#FFF;">
           <div id="particles-js" >    
	             <script src="../css/particulas/particles.js"></script>
                <script src="../css/particulas/Particulas.js"></script>
			</div>
	
		  
		  <div id="reloj" align ="center">
	     </div>
		
	   <h1 align="center">Bienvenidos al sistema "VESER"</h1>
        <h2 align="center">Estatus de equipos en reparaciòn</h2>
		<h4 align="center">*Ingrese un dato(Folio, Modelo o Serie)</h4>
        <input type="text" name="boxBuscar" id="boxBuscar" autofocus="autofocus" value="" placeholder="Ingrese un dato(Folio, Modelo o Serie)." />
		 <button type="submit" name="botonBuscar" value="Buscar" id="botonBuscar" >Buscar</button>
       
        <br />
        <?php 
			//----------------------BUSCAR USUARIO---------------------------------------------------------------------------	
	if(isset($_POST["botonBuscar"]) && $_POST["boxBuscar"]!=""){
			$objModelo->buscar($_POST["boxBuscar"]);
	}
			?>
			
			
	    
	  </div>
    </form>
	
	 

</body>
</html>