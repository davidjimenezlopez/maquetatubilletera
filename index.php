<?php include 'head.php'; ?>
<!-- Preloader -->

<section class="relative">
    <div class="content">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img id="slide1" src="./img/slider/slide1.png" class="d-block w-100" alt="..." />
                    <div class="carousel-caption">

                        <p class="slide_negrilla"><b>Tu crédito</b> sin papeleos.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="slide2" src="./img/slider/slide2.png" class="d-block w-100" alt="..." />
                    <div class="carousel-caption">
                        <p class="slide_negrilla"><b>Tu crédito</b> 100 % en línea.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="slide3" src="./img/slider/slide3.png" class="d-block w-100" alt="..." />
                    <div class="carousel-caption">

                        <p class="slide_negrilla"><b>Tu crédito</b> rápido y seguro</p>
                    </div>
                </div>
            </div>
        </div>
        
       
    </div>
    </div>

    <div class="calculadora_desktop absolute">
        <div class="container">
            <form method="POST" action="">
            
            <h3>Bienvenido a nuestro simulador</h3>
            <hr style="margin: 1%;">
            <h6 class="text_calculadora" id="intro_calculadora">Aquí puedes empezar a planificar como alcanzar tus
                planes.</h6>

            <div class="row">
                <div class="col-sm-8">
                    <p class="text_calculadora p-left"><span class="numeracion">1</span>Cuéntanos ¿cuánto necesitas?</p>
                </div>
                <div class="col-sm-4">
                    <div id=cap class="resultado_calculo">$100.000</div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="wrapper-relative">
                    <div class="range-value" id="rangeV"></div>
                    <input class="slider-custom" type="range" step="" name="price-min" id="pricemin" value="0" min="0"
                        max="100">
                        <!-- <div id="selector">
                            <div class="SelectBtn"></div>
                        </div>                                                 -->
                    </div>    
                </div>
            </div>
            <div class="row">
                <div class="col limite_inferior text_calculadora">$100.000</div>
                <div class="col limite_superior text_calculadora">$.1000.000</div>
            </div>

            <div class="row" id="pregunta_dos_cal">
                <div class="col-sm-8">
                    <p class="text_calculadora p-left"><span class="numeracion">2</span>Ahora cuéntanos ¿en cuánto tiempo
                        piensas pagarlo?</p>
                </div>
                <div class="col-sm-4">
                    <div id=mes class="resultado_calculo">2</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <input class="slider-custom" type="range" step="1" name="mes-min" id="mes-min" value="1" min="1" max="6">
                </div>
            </div>


            <div class="row txt-slider-b">
                <div class="col limite_inferior text_calculadora">2 Cuotas</div>
                <div class="col limite_superior text_calculadora">6 cuotas</div>
            </div>
            <div class="row">
                <div class="col-4 pr-0">
                    <div class="cal_check">
                        <label class="form-check-label" for="defaultCheck2">Con Deudor Solidario</label>
                        <input type="checkbox" class="input_class_checkbox">
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="cal_check">
                        <label class="form-check-label" for="defaultCheck2">Con Plataforma</label>
                        <input type="checkbox" class="input_class_checkbox">
                    </div>
                </div>
                <div class="col-4">
                    <div class="cal_check">
                        <label class="form-check-label" for="defaultCheck2">Estudio Rápido</label>
                        <input type="checkbox" class="input_class_checkbox">
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top:2%">
                <div class="col-7">
                    <div id="result_calculos">
                        <div class="row">
                            <div class="col-6 ">
                                <p class="item-pago">Capital Solicitado</p>
                            </div>
                            <div class="col-3 pr-0 tol_tip_cal float-right"><img src="img/tooltip.svg" alt=""
                                    class="tol_tip_cal" data-toggle="tooltip" data-placement="left"
                                    title="Hace referencia al valor solicitado en préstamo." />
                            </div>
                            <div class="col-3 px-0 numeros_contable">
                                <p class="item-pago">$1.000.000</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="item-pago">Intéres</p>
                            </div>
                            <div class="col-3 pr-0 tol_tip_cal float-right"><img src="img/tooltip.svg" alt=""
                                    class="tol_tip_cal" data-toggle="tooltip" data-placement="left"
                                    title="Valor que se paga como retribución al  uso del CAPITAL entregado en calidad de préstamo, para nuestro caso se trata del 26.82% E.A. " />
                            </div>
                            <div class="col-3 px-0 numeros_contable">
                                <p class="item-pago">$12.078</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="item-pago">Estudio Rápido</p>
                            </div>
                            <div class="col-3 pr-0 tol_tip_cal float-right"><img src="img/tooltip.svg" alt=""
                                    class="tol_tip_cal" data-toggle="tooltip" data-placement="left"
                                    title="Concepto que se cobra por realizar el estudio de tu solicitud de una forma mas rapida de lo habitual, tu decides si haces uso de este servicio o no, pero en caso de no solicitar este servicio el análisis de tu crédito puede tardar hasta 15 días Hábiles." />
                            </div>
                            <div class="col-3 px-0 numeros_contable">
                                <p class="item-pago">$24.000</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="item-pago">Plataforma</p>
                            </div>
                            <div class="col-3 pr-0 tol_tip_cal float-right"><img src="img/tooltip.svg" alt=""
                                    class="tol_tip_cal" data-toggle="tooltip" data-placement="left"
                                    title="Suma que se cobra por el uso de la  tecnología implementada por Tu Billetera para que puedas realizar la solicitud de crédito desde cualquier lugar y sin desplazamientos, además podrás realizar el seguimiento de tu crédito en cualquier momento y lugar." />
                            </div>
                            <div class="col-3 px-0 numeros_contable">
                                <p class="item-pago">$0</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="item-pago">Iva</p>
                            </div>
                            <div class="col-3 pr-0 tol_tip_cal float-right"><img src="img/tooltip.svg" alt=""
                                    class="tol_tip_cal" data-toggle="tooltip" data-placement="left"
                                    title="Corresponde al Impuesto al Valor Agregado establecido por el Gobierno nacional en un 19%,  para nuestro caso se calcula sobre el valor del ESTUDIO RÁPIDO y la PLATAFORMA" />
                            </div>
                            <div class="col-3 px-0 numeros_contable">
                                <p class="item-pago">$4560</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8" style="padding-right: 0px;">
                                <div class="total_a_pagar" style="border-radius: 5px 0px 0px 5px;font-size: 0.9vw;">
                                    Total a pagar
                                </div>
                            </div>
                            <div class="col-4 pr-0 numeros_contable" style="padding-right: 0px;padding-left: 0px;">
                                <div class="total_a_pagar" style="border-radius: 0px 5px 5px 0px;font-size: 0.9vw;">$340.638</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="fondo_pagar">Pagalo en 3 cuota(s) de <span>$113.546</span>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="boton_modal" id="solicitar_credito_modal">
                            <a href="login.php">
                                <p>Solicitar Crédito</p>
                            </a>
                            </div>
                            <div class="boton_modal" id="pagos_ahorros_modal">
                                <button type="submit" id="submit"> Pagos y Ahorros</button>                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    </div>
</section>
<section class="alcanza-metas">
    <div id="alcanza_metas">
        <div class="container">
            <h2 class="titulo" style="text-align: right;">Requisitos para<b> solicitar tu crédito</b></h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-sm-3" data-aos="fade-left" data-aos-duration="300">
                    <div class="contenedor_billetera contenedor_blanco">
                        <img src="img/mayor_edad.svg" id="req_mayor_edad" alt="" class="600" />
                    </div>
                    <p class="texto_metas">Ser colombiano, mayor de edad</p>
                </div>
                <div class="col-6 col-sm-3" data-aos="fade-left" data-aos-duration="900">
                    <div class="contenedor_billetera contenedor_blanco">
                        <img src="img/cuenta_anco.svg" id="req_banco" alt="" />
                    </div>
                    <p class="texto_metas">Cuenta bancaria activa a tu nombre</p>
                </div>
                <div class="col-6 col-sm-3" data-aos="fade-left" data-aos-duration="1200">
                    <div class="contenedor_billetera contenedor_blanco">
                        <img src="img/mail.svg" id="req_mail" alt="" />
                    </div>
                    <p class="texto_metas">Un correo electrónico personal</p>
                </div>
                <div class="col-6 col-sm-3" data-aos="fade-left" data-aos-duration="1500">
                    <div class="contenedor_billetera contenedor_blanco">
                        <img src="img/cel.svg" id="req_movil" alt="" />
                    </div>
                    <p class="texto_metas">Un número celular propio</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid" id="fondo_beneficios">
        <h2>Tu eliges los beneficios con los que <b>deseas solicitar tu crédito</b></h2>
        <p class="texto_explicativo">El tiempo, la documentación y el desembolso de tu préstamo, dependen solo de ti,
            tus necesidades y los recursos tecnológicos con los que cuentes.</p>

        <!--- flex swipe custom -->
        <div class="wrapper-margen">
            <div class="wrapper-flex">
                <div class="flip-card" data-aos="zoom-in-up" data-aos-duration="400">
                    <div class="flip-card-inner">
                        <div class="flip-card-front producto_div" id="producto_1">
                            <img class="flag-recommended" src="img/destacado_tipo_prestamo.png" alt="">
                            <div class="contenedor_producto">
                                <img src="img/producto_1.svg" alt="">
                            </div>
                            <div class="nombre_producto">
                                <p class="texto_requisito">Préstamos con</p>
                                <p class="texto_requisito texto_requisito_bold">plataforma y con estudio rápido</p>
                            </div>
                            <div class="pie_beneficio">
                                <p>Tu respuesta en </p>
                                <p><span>1 día promedio</span></p>
                            </div>
                        </div>


                        <div class="flip-card-back">
                            <div class="nombre_detalle_prod">
                                <h1>Préstamos con plataforma y con estudio rápido</h1>
                            </div>
                            <div class="list-element">
                                <ul>
                                    <li>Sin impresión de los formatos</li>
                                    <li>Sin autenticación de documentos con firma y huella</li>
                                    <li>Sin envío de documentos correo certificado</li>
                                    <li>Sin desplazamientos.</li>
                                    <li>Sin días de espera.</li>
                                    <li>Sin diligenciar documentos a mano.</li>
                                    <li>Sin costos en caso de ser rechazada tu solicitud.</li>
                                </ul>
                            </div>
                            <div class="pie_detalle">
                                <p>Tu respuesta en
                                    <span>1 día promedio</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flip-card" data-aos="zoom-in-up" data-aos-duration="800">
                    <div class="flip-card-inner">
                        <div class="flip-card-front  producto_div" id="producto_2">
                            <div class="contenedor_producto">
                                <img src="img/producto_2.svg" alt="">
                            </div>
                            <div class="nombre_producto">
                                <p class="texto_requisito">Préstamos con</p>
                                <p class="texto_requisito texto_requisito_bold">plataforma y sin estudio rápido</p>
                            </div>
                            <div class="pie_beneficio">
                                <p>Tu respuesta en <span>18 días promedio</span></p>
                            </div>
                        </div>


                        <div class="flip-card-back">
                            <div class="nombre_detalle_prod">
                                <h1>Préstamos con plataforma y sin estudio rápido</h1>
                            </div>
                            <div class="list-element">
                                <ul>
                                    <li>Sin impresión de los formatos</li>
                                    <li>Sin autenticación de documentos con firma y huella</li>
                                    <li>Sin envío de documentos correo certificado</li>
                                    <li>Sin desplazamientos.</li>
                                    <li class="list-x">Con días de espera.</li>
                                    <li>Sin diligenciar documentos a mano.</li>
                                    <li>Sin costos en caso de ser rechazada tu solicitud.</li>
                                </ul>
                            </div>
                            <div class="pie_detalle">
                                <p>Tu respuesta en
                                    <span>18 días promedio</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flip-card" data-aos="zoom-in-up" data-aos-duration="1200">
                    <div class="flip-card-inner">
                        <div class="flip-card-front  producto_div" id="producto_3">
                            <div class="contenedor_producto">
                                <img src="img/producto_3.svg" alt="">
                            </div>
                            <div class="nombre_producto">
                                <p class="texto_requisito">Préstamos sin</p>
                                <p class="texto_requisito texto_requisito_bold">plataforma y con estudio rápido</p>
                            </div>
                            <div class="pie_beneficio">
                                <p>Tu respuesta en <span>4 días promedio</span></p>
                            </div>
                        </div>


                        <div class="flip-card-back">
                            <div class="nombre_detalle_prod">
                                <h1>Préstamos sin plataforma y con estudio rápido</h1>
                            </div>
                            <div class="list-element">
                                <ul>
                                    <li class="list-x">Con impresión de los formatos</li>
                                    <li class="list-x">Con autenticación de documentos con firma y huella</li>
                                    <li class="list-x">Con envío de documentos correo certificado</li>
                                    <li class="list-x">Con desplazamientos.</li>
                                    <li >Sin días de espera.</li>
                                    <li class="list-x">Con diligenciar documentos a mano.</li>
                                    <li class="list-x">Con costos en caso de ser rechazada tu solicitud.</li>
                                </ul>
                            </div>
                            <div class="pie_detalle">
                                <p>Tu respuesta en
                                    <span>4 día promedio</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flip-card" data-aos="zoom-in-up" data-aos-duration="1500">
                    <div class="flip-card-inner">
                        <div class="flip-card-front producto_div" id="producto_4">
                            <div class="contenedor_producto">
                                <img src="img/producto_4.svg" alt="">
                            </div>
                            <div class="nombre_producto">
                                <p class="texto_requisito">Préstamos sin</p>
                                <p class="texto_requisito texto_requisito_bold">plataforma y sin estudio rápido</p>
                            </div>
                            <div class="pie_beneficio">
                                <p>Tu respuesta en <span>19 días promedio</span></p>
                            </div>
                        </div>


                        <div class="flip-card-back">
                            <div class="nombre_detalle_prod">
                                <h1>Préstamos con plataforma y sin estudio rápido</h1>
                            </div>
                            <div class="list-element">
                                <ul>
                                    <li class="list-x">Con impresión de los formatos</li>
                                    <li class="list-x">Con autenticación de documentos con firma y huella</li>
                                    <li class="list-x">Con envío de documentos correo certificado</li>
                                    <li class="list-x">Con desplazamientos.</li>
                                    <li class="list-x">Con días de espera.</li>
                                    <li class="list-x">Con diligenciar documentos a mano.</li>
                                    <li class="list-x">Con costos en caso de ser rechazada tu solicitud.</li>
                                </ul>
                            </div>
                            <div class="pie_detalle">
                                <p>Tu respuesta en
                                    <span>19 días promedio</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---  End flex swipe custom -->

        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <a href="login.php">
                        <img src="img/solicitud_con_icono_estado_2.png" id="solicita_credito" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div id="tramite">
        <div class="container-fluid" id="titulo_tramites">
            <h2 class="titulo titulo_tramite">Facilidad de tramites, la forma mas rápida y sencilla de <b>solicitar tu
                    crédito.</b></h2>
            <p class="texto_parrafo texto_parrafo_producto">En cualquier momento y desde cualquier lugar.</p>
        </div>
        <div class="wrapper-info-tramites">
            <div class="item-uno-dos">
                <span data-aos="fade-up" data-aos-duration="500">
                    <img src="img/cinco_min.png" class="img_tramite" alt="" />
                    <p>Tarda Solicitar tu crédito</p>
                </span>
                <span data-aos="fade-down" data-aos-duration="1000">
                    <img src="img/quince_min.png" class="img_tramite" alt="" />
                    <p>La respuesta a tu solicitud</p>
                </span>
            </div>
            <div class="item-tres">
                <span data-aos="fade-up"" data-aos-duration=" 1500">
                    <img src="img/veinticuatro_min.png" class="img_tramite" alt="" />
                    <p>Tarde el desembolso</p>
                </span>
            </div>
        </div>

        <div class="descripcion-tramites">
            <p>Presentando tu solicitud en línea no incurrirás en costo si tu solicitud es rechazada..</p>
            <p>*Si la solicitud es presentada fuera de horario hábil será procesada en la siguiente hora hábil.</p>
        </div>

        <div class="example-platf">
            <img src="img/producto_1.svg" class="img_tramite_ejemplo" alt="">
            <p>Ejemplo basado en el sisitema de
                <b>Préstamo con plataforma y estudio rápido</b>
            </p>
        </div>

    </div>
</section>
<section>
    <div id="content_testimonio">
        <h4><b>Algunos testimonios de nuestros usuarios<b></h4>
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
                                        <p class="texto_testimonio">Me encanto el sevicio de Tu Billetera, todo salio
                                            muy bien, me ayudaron sintanata traba y gracias a ellos pude cambiar mi
                                            nevera vieja.</p>
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
                                        <p class="texto_testimonio">Me encanto el sevicio de Tu Billetera, todo salio
                                            muy bien, me ayudaron sintanata traba y gracias a ellos pude cambiar mi
                                            nevera vieja.</p>
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

<?php include 'calculadora.php'; ?>
<?php include 'footer.php'; ?>
