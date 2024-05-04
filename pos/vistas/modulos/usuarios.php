<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Administrar usuarios

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Administrar usuarios</li>

        </ol>

    </section>


    <section class="content">


        <div class="box">

            <div class="box-header with-border">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
                    Agregar Usuario
                </button>
            </div>

            <div class="box-body"> <!--El cuerpo donde traere formulario para agregar-->

                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Usuarioo</th>
                        <th>Foto</th>
                        <th>Perfil</th>
                        <th>Estado</th>
                        <th>Ultimo login</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Usuario Administrador</td>
                        <td>admin</td>
                        <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px">
                        </td>
                        <td>Administrador</td>
                        <td>
                            <button class="btn btn-success btn-xs">Activado</button>
                        </td>
                        <td>2024-02-04 13:49:21</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>


        </div>


    </section>

</div>
<!-- /.content-wrapper -->

<!----Modal para agregar usuario----->
<!-- Modal -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">

                <!-- CABEZA DEL MODAL-->
                <div class="modal-header" style="background: #3c8dbc; color: white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar Usuario</h4>
                </div>

                <!-- Cuerpo DEL MODAL-->
                <div class="modal-body">
                    <div class="box-body">

                        <!--Entrada para el nombre-->
                        <div class="form-group">
                            <div class="input-group">
                                <spa class="input-group-addon"><i class="fa fa-user"></i></spa>

                                <input type="text" class="form-control input-lg" name="nuevoNombre"
                                       placeholder="Ingresar nombre" required>

                            </div>
                        </div>
                        <!--Entrada para el usuario-->
                        <div class="form-group">
                            <div class="input-group">
                                <spa class="input-group-addon"><i class="fa fa-key"></i></spa>

                                <input type="text" class="form-control input-lg" name="nuevoUsuario"
                                       placeholder="Ingresar usuario" required>

                            </div>
                        </div>

                        <!--Entrada para la contraseña-->
                        <div class="form-group">
                            <div class="input-group">
                                <spa class="input-group-addon"><i class="fa fa-lock"></i></spa>

                                <input type="password" class="form-control input-lg" name="nuevoPassword"
                                       placeholder="Ingresar contraseña" required>

                            </div>
                        </div>

                        <!--Entrada para seleccionar su perfil-->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select class="form-control input-lg" name="nuevoPerfil">
                                    <option value="#">Seleccionar Perfil</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Miembro">Miembro</option>
                                </select>
                            </div>
                        </div>

                        <!--Entrada para subir una foto-->
                        <div class="form-group">

                            <di class="panel">Subir foto</di>

                            <input type="file" id="nuevaFoto" name="nuevaFoto">

                            <p class="help-block">Peso maximo de la foto 200Mb</p>
                            <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">
                        </div>


                    </div>
                </div>

                <!-- PIE DE PAGINA DEL MODAL-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary">Guardar usuario</button>
                </div>

                <?php

                $crearUsuario = new ControladorUsuarios();
                $crearUsuario -> ctrCrearUsuario();

                ?>


            </form>
        </div>

    </div>
</div>