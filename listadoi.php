<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
    
</head>
    

<body onbeforeunload="ConfirmClose()" onunload="HandleOnClose()">
    <div class="container">
        <br>
        <h2 class="text-center">Listado de Excel</h2><br>

        <!-- Button trigger modal -->
        <a href="index.html" class="btn btn-dark" role="button" aria-pressed="true"><span class="icon icon-home"></span> </a>
        <button style="margin: 10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertar">
            Nuevo Registro
        </button>
        <a href="exportarExcel.php" class="btn btn-dark" role="button" aria-pressed="true">Exportar Excel</a>
        
        <br>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>


                </tr>
            </thead>
            <tbody>
                <?php  
    require_once ('listar.php');
    ?>

                <?php
        for ($i=0; $i <count($registros) ; $i++) { 
    ?>

                <tr>
                    <td>
                        <?php echo $registros[$i]['id'] ?>

                    </td>
                    <td>
                        <?php echo $registros[$i]['nombre'] ?>

                    </td>
                    <td>
                        <?php echo $registros[$i]['description'] ?>

                    </td>
                    <td>
                        <button style="margin: 10px;" type="button" class="btn btn-primary editbn" data-toggle="modal"
                            data-target="#editar">Editar</button>

                    </td>
                    <td>
                        <button style="margin: 10px;" type="button" class="btn btn-danger elimtbn" data-toggle="modal"
                            data-target="#eliminar">Eliminar </button>

                    </td>
                </tr>

                <?php } 
    ?>

            </tbody>
        </table>

    </div>
    <!-- Modal insertar-->
    <div class="modal fade" id="insertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="registrar.php" method="POST" id="basic-form">
                        <div class="form-grup">
                            <label for="">Id</label>
                            <input type="text" class="form-control" name="id" id="idd">
                        </div>
                        <div class="form-grup">

                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombree">
                        </div>
                        <div class="form-grup">

                            <label for="">Description</label>
                            <input type="text" class="form-control" name="description" id="descriptionn">
                        </div>
                        <br>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar Registro</button>
                    </form>

                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal editar-->
    <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="editar.php" method="POST">
                        <div class="form-grup">
                            <label for="">Id</label>
                            <input type="text" class="form-control" name="id" id="id">
                        </div>
                        <div class="form-grup">

                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                        <div class="form-grup">

                            <label for="">Description</label>
                            <input type="text" class="form-control" name="description" id="description">
                        </div>
                        <br>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar Registro</button>
                    </form>

                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal eliminar-->
    <div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="eliminar.php" method="POST">
                        <input type="hidden" name="id" id="update_id">
                        <div class="form-grup">
                            <h4>Esta seguro de eliminar?</h4>
                            <label for=""></label>
                            <input type="hidden" class="form-control" name="id" id="delete_id">
                        </div>

                        <br>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('.editbn').on('click', function () {
        $tr = $(this).closest('tr');
        let datos = $tr.children("td").map(function () {
            return $(this).text();
        });
        // $('#update_id').val(datos[0]);
        $('#id').val(datos[0]);
        $('#nombre').val(datos[1]);
        $('#description').val(datos[2]);

    })
</script>
<script>
    $('.elimtbn').on('click', function () {
        $tr = $(this).closest('tr');
        let datos = $tr.children("td").map(function () {
            return $(this).text();
        });

        $('#delete_id').val(datos[0]);


    })
</script>
<script>
    $(document).ready(function () {
        $("#basic-form").validate({
            rules: {
                idd: {
                    required: true,
                    number: true,
                },
                nombree: {
                    required: true,
                    maxlength: 50
                },
                descriptionn: {
                    required: true,

                },


            }
        });
    });
</script>

</html>