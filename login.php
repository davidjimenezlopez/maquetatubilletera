<?php include 'head.php';?>
<?php include 'modals.php';?>

<section>
    <div class="fondo_seccion" id="login">
        <div class="wrapper-all-content">
            <div class="wrapper-flex-login">
                <h3 class="title-gral">Iniciar Sesión</h3>
                <div class="wrapper-form">
                    <form action="" method="post">
                        <input type="hidden" name="" value="">
                        <input type="hidden" name="" value="">
                        <div class="form-group">
                            <input class="icon-email" required="" type="email" class="form-control" placeholder="Correo"
                                name="" id="">
                            <input class="icon-pass" required="" type="password" class="form-control"
                                placeholder="Contraseña" name="" id="">
                        </div>
                        <div class="flex">
                            <a href="" data-toggle="modal" data-target="#recuperar">Olvidé Contraseña</a>
                            <button class="btn-gral btn-green" type="submit">Ingresar</button>
                        </div>                                             
                    </form>
                </div>
                <div class="wrapper-form padding-10">
                <div class="flex">
                        <p>Soy usuario nuevo</p>
                        <a class="btn-gral-link btn-blue" href="registro.php">Regístrese</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-modals" style="    width: 95%;
    margin: 0 auto;
    background: white;
    padding: 25px;
    border-radius: 9px;
    border: 1px solid red;    margin-bottom: 40px;">
            <p>Listado de modals</p>
            <ul>
                <li style="padding:0;" ><a style="font-size: 16px;font-weight: bold" href=""  data-toggle="modal" data-target="#confirme">Confirme su correo electrónico</a></li>    
                <li style="padding:0;" ><a style="font-size: 16px;font-weight: bold" href=""  data-toggle="modal" data-target="#recuperar">Recuperar Clave</a></li>                                
                <li style="padding:0;" ><a style="font-size: 16px;font-weight: bold" href=""  data-toggle="modal" data-target="#confirmacion">Confirme su correo electrónico</a></li>
                <li style="padding:0;" ><a style="font-size: 16px;font-weight: bold" href=""  data-toggle="modal" data-target="#verificacion">Verificación 2 pasos</a></li>
                <li style="padding:0;" ><a style="font-size: 16px;font-weight: bold" href=""  >Verificación 2 pasos</a></li>
                <li style="padding:0;" ><a style="font-size: 16px;font-weight: bold" href="mailings/mailing-bienvenido.html" target="_blank" >correo de bienvenida</a></li>
                <li style="padding:0;" ><a style="font-size: 16px;font-weight: bold" href="mailings/mailing-reestrablecer-contrasenia.html
                " target="_blank" >correo restablecer password</a></li>
            </ul>         
        </div>


    </div>

</section>
<?php include 'calculadora.php'; ?>
<?php include 'footer.php';?>
