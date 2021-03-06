<?php include 'head.php';?>

<section>
    <div class="fondo_seccion" id="login">
        <div class="wrapper-all-content">
            <div class="wrapper-flex-login">
                <h3 class="title-gral">Bienvenido(a) al registro de tu usuario. </h3>
                <div class="wrapper-form">
                    <p>Crear tu cuenta es muy fácil, solo diligencia el formulario y comienza a disfrutar de los
                        beneficios que Tu Billetera tiene para tí.</p>
                    <form action="ultimo-paso.php" method="post">
                        <div class="form-group m-none">
                            <input required="" placeholder="Cédula de Ciudadanía" type="number">
                            <input required="" placeholder="Nombre(s)" type="text">
                            <input required="" placeholder="Apellido(s)" type="text">
                            <input required="" class="icon-email" required="" type="email" class="form-control" placeholder="Correo"
                                name="" id="">
                            <input class="icon-mobile" required="" type="number" class="form-control"
                                placeholder="Teléfono Celular " name="" id="">
                        <div class="form-group flex-left">    
                            <input type="checkbox"  required class="regular-checkbox big-checkbox" />
                           <p> Acepto los <a href="/legales.php" target="_blank"> términos y condiciones </a> </p>
                        </div>
                        <div class="form-group flex-left">    
                        <input type="checkbox" id="" required class="regular-checkbox big-checkbox" />
                         <p> Acepto la  <a href="/tratamiento.php"  target="_blank"> política de tratamiento de datos personales</a> </p>
                        </div>
                        <div class="aling-item-right">
                             <button class="btn-gral btn-green" type="submit">Continuar</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'calculadora.php'; ?>
<?php include 'footer.php';?>
