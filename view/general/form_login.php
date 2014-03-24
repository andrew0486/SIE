<div class="container-fluid">
    <div class="row-fluid">
        <div class="span6 offset3">
            <form class="form-horizontal" action="../../model/session/login.php" method="post">
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