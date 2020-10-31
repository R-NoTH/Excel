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
    <!-- ----------------------exportar excel -->
    <?php
header('Content-type:application/vnd.ms-excel; UTF-8');
header('Content-Disposition:attachment;filename=excelregistro.xls');
header('Pragma:no-cache');
header('Expires:0');
    ?>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <br>
        <br>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>


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
                   
                </tr>

                <?php } 
    ?>

            </tbody>
        </table>

    </div>
</body>


</html>