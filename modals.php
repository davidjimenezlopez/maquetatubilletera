<div class="container">
    <!-- Modal confirmación correo -->
    <div class="modal fade" id="confirme" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content  -->
            <div class="modal-content modal-general">
                <div class="modal-header">
                    <h4 class="modal-title">Confirme su correo electrónico</h4>
                </div>
                <div class="modal-body background-none">
                    <div class="wrapper-form">
                        <form action="">
                            <input class="icon-email" required="" type="email" placeholder="Correo" name="" id="">
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gral-green" data-dismiss="modal">Continuar</button>
                </div>
            </div>

        </div>
    </div>



    <!-- Modal recuperar contraseña -->
    <div class="modal fade" id="recuperar" role="dialog">
        <div class="modal-dialog recover">
            <!-- Modal content  -->
            <div class="modal-content modal-general">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Recuperar Clave</h4>
                </div>
                <div class="modal-body background-none">
                    <div class="wrapper-form">
                        <p>Para continuar el proceso de recuperación de su contraseña enviamos un código de seguridad,
                            por favor, seleccione por cual medio desea recibirlo </p>
                        <form action="">
                            <div class="input-flex">
                                <div>
                                    <input type="radio" id="radio-1-2" name="radio-1-set" class="regular-radio">
                                    <label for="radio-1-2"></label>
                                </div>
                                <input class="icon-email" for="correo" required type="email" placeholder="Correo"
                                    name="correo" id="correo">

                            </div>
                            <div class="input-flex">
                                <div>
                                    <input type="radio" id="radio-1-4" name="radio-1-set" class="regular-radio">
                                    <label for="radio-1-4"></label>
                                </div>
                                <input class="icon-mobile" for="telefono" required type="number" placeholder="Celular"
                                    name="correo" id="correo">
                            </div>
                        </form>
                        <p>Si no tiene acceso a estos medios, por favor contáctenos a través de nuestro</p>
                        <div class="flex-center">
                            <a href="https://api.whatsapp.com/send?phone=[+57][3144646726]" class="mail">Whatsapp</a>
                            <a href="#" class="phone">Contacto</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gral-green" data-dismiss="modal">Enviar Código</button>
                </div>
            </div>

        </div>
    </div>



    <!-- Modal Confirmación de cuenta  -->
    <div class="modal fade" id="confirmacion" role="dialog">
        <div class="modal-dialog recover">
            <!-- Modal content  -->
            <div class="modal-content modal-general">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Confirmación de cuenta</h4>
                </div>
                <div class="modal-body background-none">
                    <div class="wrapper-form">
                        <p>Por seguridad enviaremos dos códigos de verificación, uno al correo electrónico y uno al
                            número celular suministrados. Por favor, asegúrese de tenerlos al alcance antes de continuar
                        </p>
                        <form action="">
                            <div class="input-flex">
                                <input class="icon-email" for="correo" required type="email" placeholder="Correo"
                                    name="correo" id="correo">

                            </div>
                            <div class="input-flex">
                                <input class="icon-mobile" for="telefono" required type="number" placeholder="Celular"
                                    name="correo" id="correo">
                            </div>
                            <div class="flex-end">
                                <button type="button" class="btn btn-gral-blue" type="reset">Corregir datos</button>
                                <button type="button" class="btn btn-gral-green" data-dismiss="modal">Continuar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <!-- Modal verificacion de codigos  -->
    <div class="modal fade" id="verificacion" role="dialog">
        <div class="modal-dialog recover">
            <!-- Modal content  -->
            <div class="modal-content modal-general">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Verificación de códigos</h4>
                </div>
                <div class="modal-body background-none">
                    <div class="wrapper-form">
                        <p>Le queda el siguiente tiempo para verificar su cuenta</p>
                        <form action="">
                            <div class="border-gral">
                                <i class="icon-mail"></i>
                                <p class="f-left">Por favor introduzca el código enviado a su correo electrónico</p>
                                <h2 class="name-correo">ltoro57@gmail.com</h2>
                                <div class="flex-center inputnumber">
                                    <input placeholder=" # " type="" minlength="1" maxlength="1">
                                    <input placeholder=" # " type="" minlength="1" maxlength="1">
                                    <input placeholder=" # " type="" minlength="1" maxlength="1">
                                    <input placeholder=" # " type="" minlength="1" maxlength="1">
                                </div>
                                <p class="txt-center">Número de intentos restantes <b>4</b></p>
                                <div class="flex-center-align">
                                    <button type="button" class="btn btn-gral-green"
                                        data-dismiss="modal">Enviar</button>
                                    <button type="button" class="btn btn-gral-blue">Limpiar</button>

                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="wrapper-form">
                        <form action="">                            
                            <div class="border-gral">
                                <i class="icon-phone"></i>
                                <p class="mt-15">Por favor introduzca el código enviado a su celular</p>
                                <h2 class="name-correo">301 479 8499</h2>
                                <div class="flex-center inputnumber">
                                    <input placeholder="#" type="" minlength="1" maxlength="1">
                                    <input placeholder="#" type="" minlength="1" maxlength="1">
                                    <input placeholder="#" type="" minlength="1" maxlength="1">
                                    <input placeholder="#" type="" minlength="1" maxlength="1">
                                </div>
                                <p class="txt-center">Número de intentos restantes <b>4</b></p>
                                <div class="flex-center-align">
                                    <button type="button" class="btn btn-gral-green"
                                        data-dismiss="modal">Enviar</button>
                                    <button type="button" class="btn btn-gral-blue">Limpiar</button>

                                </div>
                            </div>
                        </form>
                    </div>





                </div>
            </div>

        </div>
    </div>

</div>