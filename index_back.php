<?php include 'head.php';?>
<section>
	<div class="content">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img id="slide1" src="./img/slider/slide1.png" class="d-block w-100" alt="..."/>
					<div class="carousel-caption">
						<p>¿Esperas tener el dinero para llegar a final de mes?</p>
						<p class="slide_negrilla">En Tu Billetera, queremos que lo hagas realidad.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img id="slide2"src="./img/slider/slide2.png" class="d-block w-100" alt="..."/>
					<div class="carousel-caption">
						<p>¿Anhelas completar ese viaje que siempre esperaste?</p>
						<p class="slide_negrilla">En Tu Billetera, queremos que lo hagas realidad.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img id="slide3" src="./img/slider/slide3.png" class="d-block w-100" alt="..."/>
					<div class="carousel-caption">
						<p>¿Quieres comprar todos los materiales para la U?</p>
						<p class="slide_negrilla">En Tu Billetera, queremos que lo hagas realidad.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="sonar-wrapper">
			<div class="sonar-emitter">
				<div class="sonar-wave"></div>
			</div>
		</div>
		<div class="sonar-emitter" data-toggle="modal" data-target="#calculadoraModal">
			<div id="activa_calculadora">
				<img src="img/calculadora_inactivo.svg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<section style="margin-top:5%">
	<div id="alcanza_metas">
		<div class="container">
			<h2 class="titulo" style="text-align: right;">¿Qué necesitas para</h2>
			<h1 class="titulo_bold" style="text-align: right;"> alcanzar tus metas?</h1>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-6 col-sm-3" >
					<div class="contenedor_billetera contenedor_blanco">
						<img src="img/mayor_edad.svg" id="req_mayor_edad" alt="" class=""/>
					</div>
					<p class="texto_metas">Ser colombiano residente, mayor de edad</p>
				</div>
				<div class="col-6 col-sm-3">
					<div class="contenedor_billetera contenedor_blanco">
						<img src="img/cuenta_anco.svg" id="req_banco"alt=""/>
					</div>
					<p class="texto_metas">Tener una cuenta activa a tu nombre</p>
				</div>
				<div class="col-6 col-sm-3" >
					<div class="contenedor_billetera contenedor_blanco">
						<img src="img/mail.svg" id="req_mail"alt=""/>
					</div>
					<p class="texto_metas">Contar con un correo personal</p>
				</div>
				<div class="col-6 col-sm-3">
					<div class="contenedor_billetera contenedor_blanco">
						<img src="img/cel.svg" id="req_movil"alt=""/>
					</div>
					<p class="texto_metas">Un número propio privado</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid" id="fondo_beneficios">
		<h2 class="titulo">Tú eliges los beneficios con los que</h2>
		<h2 class="titulo_bold">deseas alcanzar tus ilusiones</h2>
		<p class="texto_explicativo">El tiempo, la documentación y el desembolso de tu préstamo, dependen solo de ti, tus necesidades y los recursos con los que cuentes.</p>
		<div class="row">
			<div class="col-6 col-sm-3">
				<div class="contenedor_billetera producto_div" id="producto_1">
					<div class="contenedor_verde">
						<div class="icono_producto" align="center">
							<img src="img/icno_plataforma.svg"  style="margin: 23% 0% 10% 4%;width: 36%; " alt="..." />
						</div>
						<div class="icono_producto" align="center">
							<img src="img/icono_estudio.svg"  alt="..." style="margin: 13% 0% 0% 0%;width: 34%; " />
						</div>
					</div>
					<div>
						<p class="texto_requisito">Préstamos con</p>
						<p class="texto_requisito texto_requisito_bold">plataforma y con estudio rápido</p>
					</div>
					<div class="pie_beneficio">
						<p>Tu respuesta en   </p>
						<p>
							<span>1 día promedio</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-6 col-sm-3">
				<div class="contenedor_billetera producto_div"  id="producto_2">
					<div class="contenedor_naranja">
						<div class="icono_producto" align="center">
							<img src="img/icno_plataforma.svg" alt="..." />
						</div>
					</div>
					<div>
						<p class="texto_requisito">Préstamos con</p>
						<p class="texto_requisito texto_requisito_bold">plataforma y sin estudio rápido</p>
					</div>
					<div class="pie_beneficio">
						<p>Tu respuesta en   </p>
						<p>
							<span>18 días promedio</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-6 col-sm-3">
				<div class="contenedor_billetera producto_div"  id="producto_3">
					<div class="contenedor_morado">
						<div class="icono_producto" align="center">
							<img src="img/icono_estudio.svg" alt="..." />
						</div>
					</div>
					<div>
						<p class="texto_requisito">Préstamos sin</p>
						<p class="texto_requisito texto_requisito_bold">plataforma y con estudio rápido</p>
					</div>
					<div class="pie_beneficio">
						<p>Tu respuesta en   </p>
						<p>
							<span>4 días promedio</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-6 col-sm-3">
				<div class="contenedor_billetera producto_div"  id="producto_4">
					<div class="contenedor_azul">
						<div class="icono_producto" align="center">
							<img src="img/icono_sin_studio_rapido.svg" style="margin: 20% 0% 10% 21%; width: 46%;"alt="..." />
						</div>
					</div>
					<div>
						<p class="texto_requisito">Préstamos sin</p>
						<p class="texto_requisito texto_requisito_bold">plataforma y sin estudio rápido</p>
					</div>
					<div class="pie_beneficio">
						<p>Tu respuesta en   </p>
						<p>
							<span>19 días promedio</span>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="text-center">
					<img src="img/solicitud_con_icono_estado01.png" id="solicita_credito" alt=""/>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div id="tramite">
		<div class="container-fluid" id="titulo_tramites">
			<h2 class="titulo">Facilidad de trámites, la forma más rápida y sencilla de obtener</h2>
			<h1 class="titulo_bold"> los fondos para hacer realidad tus metas.</h1>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-sm-4">
					<div class="contenedor_billetera">
						<div class="contenedor_verde" id="contenedor_verde_tramite">
							<div class="icono_producto" align="center">
								<img src="img/icno_plataforma.svg"  style="margin: 22% 0% 3% 1%;    width: 17%;padding: 4% 0% 0% 0%;" alt="..." />
							</div>
							<div class="icono_producto" align="center">
								<img src="img/icono_estudio.svg"  alt="..." style="margin: 20% 0% 0% 0%;width: 16%;padding: 3% 0% 0% 0%" />
							</div>
						</div>
						<div id="texto_contenedor_verde_tramite">
							<p class="texto_requisito">Ejemplo basado en el sistema de Préstamo con </p>
							<p class="texto_requisito texto_requisito_bold">plataforma y estudio rápido</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-5">
					<p class="texto_parrafo texto_parrafo_movil" >Ahora en cualquier momento y desde cualquier lugar puesdes solicitar tu prestamo para solucionar tus nececidades solo tienes que tener tu celular y:</p>
					<div class="row">
						<div class="col-12 col-sm-5" >
							<p class="texto_explicativo_tramite texto_parrafo_movil texto_pasos">Solicitar tu crédito que tarda solo..</p>
						</div>
						<div class="col-12 col-sm-2">
							<div class="cinco_minutos">
								<img src="img/contenedor_blanco.svg"/>
							</div>
							<p class="texto_verde minuto">
								<span>5</span>
							</p>
							<p class="texto_verde">minutos</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-5">
							<p class="texto_explicativo_tramite texto_parrafo_movil texto_pasos">Esperar la respuesta a tu solicitud en......</p>
						</div>
						<div class="col-12 col-sm-2">
							<div class="cinco_minutos">
								<img src="img/contenedor_blanco.svg"/>
							</div>
							<p class="texto_verde minuto">
								<span>15</span>
							</p>
							<p class="texto_verde">minutos*</p>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-5">
							<p class="texto_explicativo_tramite texto_parrafo_movil texto_pasos">Y ya está el desembolso en menos de..</p>
						</div>
						<div class="col-12 col-sm-2">
							<div class="cinco_minutos">
								<img src="img/contenedor_blanco.svg"/>
							</div>
							<p class="texto_verde minuto">
								<span>24</span>
							</p>
							<p class="texto_verde">horas</p>
						</div>
					</div>
					<p class="texto_parrafo texto_parrafo_movil texto_parrafo_bajo">Lo mejor sin costo para presentación de solicitudes o por solicitudes rechazadas.</p>
					<p class="texto_parrafo texto_parrafo_movil texto_parrafo_bajo">*Si la solicitud es presentada fuera de horario hábil será procesada en la siguiente hora hábil.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
<div id="content_testimonio">
    <h2 class="titulo">Algunos testimonios de usuarios que <span>hicieron realidad sus metas</span></h2>            

    <div id="testimonio_slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators" id="testimonio_indicators">
        <li data-target="#testimonio_slider" data-slide-to="0" class="active"></li>
        <li data-target="#testimonio_slider" data-slide-to="1"></li>        
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="slide_testimonio">
                     <div class="container">
                         <div class="row">
                             <div class="col-12 col-sm-4">
                                <img src="img/testimonio.png" class="d-block img_testimonio" alt="...">                                
                             </div>    
                             <div class="col-12 col-sm-8">
                                <div class="">
                                        <p class="persona_testimonio">Lady Maria del perpetuo Socorro</p>
                                        <p class="persona_testimonio_fecha">25 de Junio de 2020.</p>
                                        <p class="texto_testimonio">Me encanto el sevicio de Tu Billetera, todo salio muy bien, me ayudaron sintanata traba y gracias a ellos pude cambiar mi nevera vieja.</p>
                                    </div>  
                             </div>
                         </div>
                     </div>                                 
            </div>
        </div>
        <div class="carousel-item">
            <div class="slide_testimonio">   
            <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <img src="img/testimonio_2.png" class="d-block img_testimonio" alt="...">                                
                             </div>    
                             <div class="col-12 col-sm-8">
                             <div class="">
                                <p class="persona_testimonio">Carlos Perez</p>
                                <p class="persona_testimonio_fecha">25 de Agosto de 2020.</p>
                               <p class="texto_testimonio">Me encanto el sevicio de Tu Billetera, todo salio muy bien, me ayudaron sintanata traba y gracias a ellos pude cambiar mi nevera vieja.</p>
                            </div> 
                             </div>
                         </div>
                     </div>        
            </div>
        </div>
        
    </div>
  
    </div>
</div>
</section>
<?php include 'footer.php';?>
<?php include 'calculadora.php';?>
    