<?php include 'head.php';?>

<section>
<div class="fondo_seccion" id="login">
<div class="wrapper-all-content">
<div class="wrapper-flex-login">
<h3 class="title-gral f30">Leady,</h3>
<div class="wrapper-form">
    <p>Felicidades estás a un paso de terminar tu registro y comenzar a usar todos los beneficios que
        <b class="navy-blue"><span>Tu</span> Billetera</b> tiene para tí. Sólo unos datos más para tu
        perfil y listo.
    </p>
    <form action="" method="post">
        <div class="form-group m-none">
            <input required="" placeholder="Fecha de expedición del documento " type="">
            
            <select name="">
                <option value="" disabled selected>Seleccione su estado civil</option>
                <option>Cédula de Ciudadanía</option>                
            </select>
            <div class="flex">
                <div>
                    <input type="radio" id="radio-1-2" name="radio-1-set" class="regular-radio">
                    <label for="radio-1-2"></label>Masculino
                </div>

                <div>
                    <input type="radio" id="radio-1-3" name="radio-1-set" class="regular-radio">
                    <label for="radio-1-3"></label>Femenino
                </div>
            </div>
            <select name="">
                <option value="" disabled selected>Tipo de ocupación</option>
                <option>Tipo de ocupación</option>
                <option>Tipo de ocupación</option>
                <option>Tipo de ocupación</option>
                <option>Tipo de ocupación</option>
            </select>

            
           
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