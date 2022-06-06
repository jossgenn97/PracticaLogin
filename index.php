<?php include("template/cabecera.php");?>

<div class="col-md-12">

<br><br><br>
                <div class="card">
                    <div class="card-header">
                        LOGIN
                    </div>
                    <div class="card-body">
                        
                        <form method="POST" action="template/login.php">
                        <div class = "form-group">
                        <label >Usuario</label>
                        <input type="text" class="form-control" name="usuario" id="exampleInputEmail1" placeholder="INGRESE SU NOMBRE DE USUARIO">
                        </div>

                        <div class="form-group">
                        <label >Contraseña</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        USUARIO: aeaman
                        PASSWORD: 123
                        <br>
                        <button type="submit" class="btn btn-primary" name="login">Ingresar</button>
                        </form>
                        
                        
                    </div>
                    
                </div>

</div>

<?php include("template/pie.php");?>