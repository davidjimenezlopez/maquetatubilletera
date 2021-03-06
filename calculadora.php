<!-- Modal Calculadora movil -->
<div class="modal fade absolute-mobile" id="calculadoraModal" tabindex="-1" aria-labelledby="calculadoraModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="header_calculadora">
                <h5 class="modal-title text_calculadora" id="calculadoraModalLabel">Bienvenido a nuestro simulador</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <div id="calculadora">
                <form method="POST" action="">
                    <div class="contenedor_cal">
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <h6 class="text_calculadora">Aquí puedes empezar a planificar como alcanzar tus planes.
                                </h6>
                                <p class="text_calculadora margt-20"><span class="numeracion">1</span>Cuéntanos ¿cuánto
                                    necesitas?</p>
                                <div id="cap" class="resultado_calculo">$100.000</div>
                                <input class="" type="range" step="100000" name="price-min" id="pricemin"
                                    value="100000" min="0" max="1000000">
                                <div class="row cuotas">
                                    <div class="col limite_inferior text_calculadora">$100.000</div>
                                    <div class="col limite_superior text_calculadora">$.1000.000</div>
                                </div>
                                <p class="text_calculadora" style="margin-top: 5%;color:#666"><span
                                        class="numeracion">2</span>Ahora cuéntanos ¿en cuánto tiempo piensas pagarlo?
                                </p>
                                <div id="mes" class="resultado_calculo">2</div>
                                <input class="" type="range" step="1" name="mes-min" id="pricemin" value="1" min="1"
                                    max="6">
                                <div class="row">
                                    <div class="col limite_inferior text_calculadora">2 Cuotas</div>
                                    <div class="col limite_superior text_calculadora">6 cuotas</div>
                                </div>


                            </div>
                            <div class="col-12 col-md-7 marg-t">


                                <div class="row margin-b-20">
                                    <div class="col-6 pr-0">
                                        <div class="cal_check">
                                            <label class="form-check-label" for="defaultCheck2">Con Deudor
                                                Solidario</label>
                                            <input type="checkbox" class="input_class_checkbox" style="display: none;">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="cal_check">
                                            <label class="form-check-label" for="defaultCheck2">Con Plataforma</label>
                                            <input type="checkbox" class="input_class_checkbox" style="display: none;">
                                        </div>
                                    </div>
                                    <div class="col-12 margn">
                                        <div class="cal_check">
                                            <label class="form-check-label" for="defaultCheck2">Estudio Rápido</label>
                                            <input type="checkbox" class="input_class_checkbox" style="display: none;">
                                        </div>
                                    </div>

                                </div>



                                <div class="row margin-b-20">
                                    <div class="col-7">
                                        <div id="result_calculos">
                                            <div class="row">
                                                <div class="col-7 pr-0">Capital Solicitado</div>
                                                <div class="col-1 px-0 tol_tip_cal"> <img src="img/tooltip.svg" alt=""
                                                        class="tol_tip_cal" data-toggle="tooltip" data-placement="left"
                                                        title=""
                                                        data-original-title="Hace referencia al valor solicitado en préstamo.">
                                                </div>
                                                <div class="col-4 px-0 numeros_contable">$1.000.000</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-7 pr-0">Intéres</div>
                                                <div class="col-1 px-0 tol_tip_cal"> <img src="img/tooltip.svg" alt=""
                                                        class="tol_tip_cal" data-toggle="tooltip" data-placement="left"
                                                        title=""
                                                        data-original-title="Valor que se paga como retribución al  uso del CAPITAL entregado en calidad de préstamo, para nuestro caso se trata del 26.82% E.A.">
                                                </div>
                                                <div class="col-4 px-0 numeros_contable">$12.078</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-7 pr-0">Estudio Rápido</div>
                                                <div class="col-1 px-0 tol_tip_cal"> <img src="img/tooltip.svg" alt=""
                                                        class="tol_tip_cal" data-toggle="tooltip" data-placement="left"
                                                        title=""
                                                        data-original-title="Concepto que se cobra por realizar el estudio de tu solicitud de una forma mas rapida de lo habitual, tu decides si haces uso de este servicio o no, pero en caso de no solicitar este servicio el análisis de tu crédito puede tardar hasta 15 días Hábiles.">
                                                </div>
                                                <div class="col-4 px-0 numeros_contable">$24.000</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-7 ">Plataforma</div>
                                                <div class="col-1 px-0 tol_tip_cal"> <img src="img/tooltip.svg" alt=""
                                                        class="tol_tip_cal" data-toggle="tooltip" data-placement="left"
                                                        title=""
                                                        data-original-title="Suma que se cobra por el uso de la  tecnología implementada por Tu Billetera para que puedas realizar la solicitud de crédito desde cualquier lugar y sin desplazamientos, además podrás realizar el seguimiento de tu crédito en cualquier momento y lugar.">
                                                </div>
                                                <div class="col-4 px-0 numeros_contable">$0</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-7 pr-0">Iva</div>
                                                <div class="col-1 px-0 tol_tip_cal"> <img src="img/tooltip.svg" alt=""
                                                        class="tol_tip_cal" data-toggle="tooltip" data-placement="left"
                                                        title=""
                                                        data-original-title="Corresponde al Impuesto al Valor Agregado establecido por el Gobierno nacional en un 19%,  para nuestro caso se calcula sobre el valor del ESTUDIO RÁPIDO y la PLATAFORMA">
                                                </div>
                                                <div class="col-4 px-0 numeros_contable">$4560</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-8" style="padding-right: 0px;">
                                                    <div class="total_a_pagar" style="border-radius: 5px 0px 0px 5px;">
                                                        Total a pagar
                                                    </div>
                                                </div>
                                                <div class="col-4" style="padding-right: 0px;padding-left: 0px;">
                                                    <div class="total_a_pagar"
                                                        style="border-radius: 0px 5px 5px 0px; text-align: right">
                                                        $340.638</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5" style="margin-top: 5%;">
                                        <div class="fondo_pagar">
                                            <div class="row">
                                                <div class="col-12">Pagalo en</div>
                                                <div class="col-12">3 cuota(s) de</div>
                                                <div class="col-12"><span>$113.546</span></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="boton_modal" id="solicitar_credito_modal">
                                            <p><a href="login.php">Solicitar Crédito</a></p>
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
       
        </div>
    </div>
</div>


<!-- Modal calculadora desktop -->

<div class="modal fade calculadora-dm" id="calculadoraModaDesktop" tabindex="-1" aria-labelledby="calculadoraModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="header_calculadora">
                <h5 class="modal-title text_calculadora" id="calculadoraModalLabel">Bienvenido a nuestro simulador</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            <h2>Aquí puedes empezar a planificar como hacer todo realidad </h2>
            <form method="POST" action="">
                <div class="row">                  
                    <div class="col-12 col-md-5 col-lg-5">
                        <div class="m-child">
                            <div class="flex-layout">
                                <label class="lead"><span>1</span>Cuéntanos ¿cuánto necesitas?</label>
                                <span class="amount">$ 300.000</span>
                            </div>
                            <input class="" type="range" step="100000" name="price-min" id="pricemin" value="100000"
                                min="0" max="1000000">
                            <div class="flex-center-left">
                                <h3>$ 1.000.000</h3>
                                <h3>$ 1.000.000</h3>
                            </div>
                        </div>
                        <div class="m-child">
                            <div class="flex-layout">
                                <label class="lead"><span>2</span>Ahora cuéntanos ¿en cuánto tiempo piensas
                                    pagarlo?</label>
                                <span class="amount">2 Cuotas</span>
                            </div>
                            <input class="" type="range" step="100000" name="price-min" id="pricemin" value="100000"
                                min="0" max="1000000">
                            <div class="flex-center-left">
                                <h3>2 Cuotas</h3>
                                <h3>6 Cuotas</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-7">
                        <div class="flex-parent">

                            <div class="flex-child">
                                <h5>Con Deudor Solidario</h5>
                                <input type="checkbox" id="" class="regular-checkbox big-checkbox">
                            </div>

                            <div class="flex-child">
                                <h5>Plataforma</h5>
                                <input type="checkbox" id="" class="regular-checkbox big-checkbox">
                            </div>

                            <div class="flex-child">
                                <h5>Estudio Rápido</h5>
                                <input type="checkbox" id="" class="regular-checkbox big-checkbox">
                            </div>
                            
                        </div>

                        <div class="flex-list-wrap">
                            <div class="wrapper-list">  
                                        <div class="flex margin-mobile">                                                              
                                            <div class="flex-info">
                                                <span>Capital Solicitado</span>    
                                                <div class="info"  data-toggle="tooltip" data-placement="top" title="Valor que se paga como retribución al  uso del CAPITAL entregado en calidad de préstamo, para nuestro caso se trata del 26.82% E.A.">
                                                <i class="">?</i>
            
                                                </div>   
                                            </div> 
                                            <span class="total">$300.000</span>
                                        </div>
                                          <div class="flex margin-mobile">   
                                            <div class="flex-info">
                                                <span>Interés</span>    
                                                <div class="info" data-toggle="tooltip" data-placement="top" title="Concepto que se cobra por realizar el estudio de tu solicitud de una forma mas rapida de lo habitual, tu decides si haces uso de este servicio o no, pero en caso de no solicitar este servicio el análisis de tu crédito puede tardar hasta 15 días Hábiles.">
                                                <i class="">?</i>
                                                </div>   
                                            </div> 
                                            <span class="total">$   12.078</span>
                                        </div>

                                          <div class="flex margin-mobile">   
                                            <div class="flex-info">
                                                <span>Estudio Rápido</span>    
                                                <div class="info" data-toggle="tooltip" data-placement="top" title="Concepto que se cobra por realizar el estudio de tu solicitud de una forma mas rapida de lo habitual, tu decides si haces uso de este servicio o no, pero en caso de no solicitar este servicio el análisis de tu crédito puede tardar hasta 15 días Hábiles.">
                                                <i class="">?</i>
                                                </div>   
                                            </div> 
                                            <span class="total">$  24.000</span>
                                            </div>

                                          <div class="flex margin-mobile">   
                                            <div class="flex-info">
                                                <span>Plataforma</span>    
                                                <div class="info" data-toggle="tooltip" data-placement="top" title="Suma que se cobra por el uso de la  tecnología implementada por Tu Billetera para que puedas realizar la solicitud de crédito desde cualquier lugar y sin desplazamientos, además podrás realizar el seguimiento de tu crédito en cualquier momento y lugar.">
                                                <i class="">?</i>
            
                                                </div>   
                                            </div> 
                                            <span class="total">$            0</span>
                                        </div>

                                         <div class="flex margin-mobile">   
                                            <div class="flex-info">
                                                <span>IVA</span>    
                                                <div class="info" data-toggle="tooltip" data-placement="top" title="Corresponde al Impuesto al Valor Agregado establecido por el Gobierno nacional en un 19%,  para nuestro caso se calcula sobre el valor del ESTUDIO RÁPIDO y la PLATAFORMA">
                                                <i class="">?</i>
                                                </div>   
                                            </div> 
                                            <span class="total">$     4.560</span>
                                        </div>

                                        <div class="total-deuda-modal">
                                            <p>Total a Pagar</p>
                                            <span>$ 340.638</span>
                                        </div>
                                                                                                                                                                                 
                            </div>
                            <div class="buttonts-right">
                                <div class="round-gral blue-white">
                                   <h1> Págalo en 3 cuota(s) de
                                    <span>$ 113.546</span>
                                    </h1>
                                </div>
                                <div class="round-gral greentb">
                                  <a href="login.php">Solicitar Crédito</a>
                                </div>
                                <div class="round-gral  navyblue">
                                    <button type="submit" id="submit"> Pagos y Ahorros</button>                                                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- MOdal productos -->

<div class="modal fade" id="productosModal" tabindex="-1" aria-labelledby="productosModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productosModalLabel">
                    <h5>Características</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <ul id="detalle_producto"></ul>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>