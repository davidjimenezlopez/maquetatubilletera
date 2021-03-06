<?php include 'head.php'; ?>
<section class="pagos">
    <div class="container">
        <h2>
            <b>Simula tu crédito con TuBilletera</b> Simplifiquemos la manera de financiar tus metas.
        </h2>
        <p>La calculadora de crédito de TuBilltera te ayudará a estimar el calendario de pagos de tu crédito basado en
            una aproximación de tasas de interés</p>
    </div>
    <div class="container">

        <div class="cuadro">
            <div class="flex-parent">

                <div class="flex-child">
                    <h5>Con Deudor Solidario</h5>
                    <input type="checkbox" id="" required class="regular-checkbox big-checkbox" />
                </div>

                <div class="flex-child">
                    <h5>Plataforma</h5>
                    <input type="checkbox" id="" required class="regular-checkbox big-checkbox" />
                </div>

                <div class="flex-child">
                    <h5>Estudio Rápido</h5>
                    <input type="checkbox" id="" required class="regular-checkbox big-checkbox" />
                </div>
            </div>


            <div style="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row wrapper-white">


                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div>
                            <label class="lead"><span>1</span>Cuéntanos ¿cuánto necesitas ?</label>
                            <span class="amount">$ 300.000</span>
                            <input class="" type="range" step="100000" name="price-min" id="pricemin" value="100000"
                                min="0" max="1000000">
                            <div class="flex-center-left">
                                <h3>$ 1.000.000</h3>
                                <h3>$ 1.000.000</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div>
                            <label class="lead"><span>2</span>Ahora cuéntanos ¿en cuánto tiempo piensas pagarlo?</label>
                            <span class="amount">$ 300.000</span>
                            <input class="" type="range" step="100000" name="price-min" id="pricemin" value="100000"
                                min="0" max="1000000">
                            <div class="flex-center-left">
                                <h3>2 Cuotas</h3>
                                <h3>6 Cuotas</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <!-- Table -->

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="back-blue">
                        <label>Características</label>
                    </div>
                    <div class="back-green">
                        <div>
                            <label>Capital Solicitado</label>
                            <label class="normal">$1.000.000</label>
                        </div>
                    </div>

                    <div class="back-green">
                        <div>
                            <label>Plazo</label>
                            <label class="normal">6 Cuota(s)</label>
                        </div>
                    </div>

                    <div class="back-green">
                        <div>
                            <label>Tasa de Interés</label>
                            <label  class="normal">2%</label>
                        </div>
                    </div>

                    <div class="back-green">
                        <div>
                            <label>Total Interés</label>
                            <label class="normal">$71.154</label>
                        </div>
                    </div>

                    <div class="back-green">
                        <div>
                            <label>Plataforma</label>
                            <label class="normal">$210.865</label>
                        </div>
                    </div>

                    <div class="back-green">
                        <div>
                            <label>Estudio Rápido</label>
                            <label class="normal">$80.000</label>
                        </div>
                    </div>

                    <div class="back-green">
                        <div>
                            <label>IVA</label>
                            <label class="normal">$55.264</label>
                        </div>
                    </div>

                    <div class="back-green">
                        <div>
                            <label>Total a Pagar</label>
                            <label class="normal">$1.417.283</label>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="back-blue">
                        <label>Simulador</label>
                    </div>

                    <div class="">
                        <div><label class="title-table">Simulación de Cuotas</label></div>
                    </div>

                    <div class="table-responsive">
                        <table class="table" id="tabla">
                            <thead>
                                <tr class="heading-table">
                                    <th><label>Cuota Nro.</label></th>
                                    <th><label>Saldo Capital</label></th>
                                    <th><label>Capital</label></th>
                                    <th><label>Interés</label></th>
                                    <th><label>Aprobacion</label></th>
                                    <th><label>Plataforma</label></th>
                                    <th><label>Iva</label></th>
                                    <th><label>Valor Cuota</label></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="fila-gral">
                                    <td>1</td>
                                    <td>$1.000.000</td>
                                    <td>$158.526</td>
                                    <td>$20.000</td>
                                    <td>$13.333</td>
                                    <td>$35.144</td>
                                    <td>$9.211</td>
                                    <td>$236.214</td>
                                    <td><button type="button" class="btn btn-gral-blue-long">Pagar total deuda</button></td>
                                </tr>
                                <tr class="fila-gral">
                                    <td>2</td>
                                    <td>$841.474</td>
                                    <td>$161.697</td>
                                    <td>$16.829</td>
                                    <td>$13.333</td>
                                    <td>$35.144</td>
                                    <td>$9.211</td>
                                    <td>$236.214</td>
                                    <td><button type="button" class="btn btn-gral-blue-long">Pagar total deuda</button></td>
                                </tr>
                                <tr class="fila-gral">
                                    <td>3</td>
                                    <td>$679.777</td>
                                    <td>$164.930</td>
                                    <td>$13.596</td>
                                    <td>$13.333</td>
                                    <td>$35.144</td>
                                    <td>$9.211</td>
                                    <td>$236.214</td>
                                    <td><button type="button" class="btn btn-gral-blue-long">Pagar total deuda</button></td>
                                </tr>
                                <tr class="fila-gral">
                                    <td>4</td>
                                    <td>$514.847</td>
                                    <td>$168.229</td>
                                    <td>$10.297</td>
                                    <td>$13.333</td>
                                    <td>$35.144</td>
                                    <td>$9.211</td>
                                    <td>$236.214</td>
                                    <td><button type="button" class="btn btn-gral-blue-long">Pagar total deuda</button></td>
                                </tr>
                                <tr class="fila-gral">
                                    <td>5</td>
                                    <td>$346.618</td>
                                    <td>$171.594</td>
                                    <td>$6.932</td>
                                    <td>$13.333</td>
                                    <td>$35.144</td>
                                    <td>$9.211</td>
                                    <td>$236.214</td>
                                    <td><button type="button" class="btn btn-gral-blue-long">Pagar total deuda</button></td>
                                </tr>
                                <tr class="fila-gral">
                                    <td>6</td>
                                    <td>$175.024</td>
                                    <td>$175.026</td>
                                    <td>$3.500</td>
                                    <td>$13.333</td>
                                    <td>$35.144</td>
                                    <td>$9.211</td>
                                    <td>$236.214</td>
                                    <td><button type="button" class="btn btn-gral-blue-long">Pagar total deuda</button></td>
                                </tr>
                                <tr class="space-table">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class="totals">
                                    <td bgcolor="119AD7"></td>
                                    <td bgcolor="119AD7"></td>
                                    <td bgcolor="119AD7" id="total_tabla_capital">$1.000.000</td>
                                    <td bgcolor="119AD7" id="total_tabla_interes">$71.154</td>
                                    <td bgcolor="119AD7" id="total_tabla_aprobacion">$80.000</td>
                                    <td bgcolor="119AD7" id="total_tabla_plataforma">$210.865</td>
                                    <td bgcolor="119AD7" id="total_tabla_iva">$55.264</td>
                                    <td bgcolor="119AD7" id="total_tabla_valcuota">$1.417.283</td>
                                    <td bgcolor="119AD7"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex-right">
                        <button type="button" class="btn btn-gral-green-long" data-dismiss="modal">Solicita tu crédito</button>
                    </div>

                </div>
            </div>






        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
<?php include 'calculadora.php'; ?>