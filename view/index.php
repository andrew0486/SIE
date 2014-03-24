<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SIE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">
</head>
<body>
    <?php
        include '../view/general/header_hero.php';
        //include '../view/general/form_login.php';
    ?>
    
    <div class="container-fluid">
    <div class="row-fluid">
        <div class="span6 offset3">
            <form class="form-horizontal" action="../model/session/login.php" method="post">
                <fieldset>
                    <legend>Inicio de Sesión</legend>

                    <div class="control-group">
                            <label class="control-label" for="username"><strong>Usuario</strong></label>
                            <div class="controls">
                                <input type="text" class="input-xlarge :wait;0000 :min_length;7 :number" 
                                       id="username" name="username" placeholder="Número de Documento. Ej: 123456789"
                                       autocomplete="off" required>
                            </div>
                    </div>

                    <div class="control-group">
                            <label class="control-label" for="pass"><strong>Contraseña</strong></label>
                            <div class="controls">
                                <input type="password" class="input-xlarge :wait;0000 :min_length;7 :max_length;20" id="pass" name="pass" 
                                       placeholder="*******"  required>
                            </div>
                    </div>

                    <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                            <button class="btn large">Cancelar</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
    
    <a href="../model/query/query_employees.php">cargar bd</a>

    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/vanadium.js"></script>
</body>
</html>