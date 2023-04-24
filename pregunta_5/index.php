<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>case when</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
<div class="container-fluid">
    <div class="col-10 mx-auto mt-5">
        <h3 class="text-center fw-3 mb-4">PROMEDIO DE NOTAS POR DEPARTAMENTO</h3>
        <table class="table table-striped table-hover table-bordered table-responsive">
    <thead>
        <th>DEPARTAMENTO</th>
        <th>CHUQUISACA</th>
        <th>LA PAZ</th>
        <th>ORURO</th>
        <th>POTOSI</th>
        <th>SUCRE</th>
        <th>SANTA CRUZ</th>
        <th>COCHABAMBA</th>
        <th>BENI</th>
        <th>PANDO</th>
    </thead>
    <tbody class="table-group-divider">

    <?php
    include 'conexion.php';
	
		$stmt = Conexion::conectar()->prepare("SELECT SUM(CASE WHEN departamento='01' THEN cantidad else 0 end) AS CHQ, 
                                                    SUM(CASE WHEN departamento='02' THEN cantidad else 0 end) AS LPZ,
                                                    SUM(CASE WHEN departamento='03' THEN cantidad else 0 end) AS ORU,
                                                    SUM(CASE WHEN departamento='04' THEN cantidad else 0 end) AS PTS,
                                                    SUM(CASE WHEN departamento='05' THEN cantidad else 0 end) AS CHU,
                                                    SUM(CASE WHEN departamento='06' THEN cantidad else 0 end) AS SCZ,
                                                    SUM(CASE WHEN departamento='07' THEN cantidad else 0 end) AS CBBA,
                                                    SUM(CASE WHEN departamento='08' THEN cantidad else 0 end) AS BENI,
                                                    SUM(CASE WHEN departamento='09' THEN cantidad else 0 end) AS PND
                                                FROM  (
                                                SELECT xp.departamento AS departamento, AVG(xi.notaFinal) AS cantidad
                                                FROM persona xp, inscripcion xi
                                                WHERE xp.ci = xi.ciEstudiante
                                                GROUP BY xp.departamento) depto");
		$stmt -> execute();
		$resultado = $stmt -> fetchAll();

        //print_r($resultado);
        foreach ($resultado as $key => $value){
            $key = 'PROMEDIO';
            echo '<tr>
                      <td class="fw-5">'.$key.'</td>
                      <td>'.$value["CHQ"].'</td>
                      <td>'.$value["LPZ"].'</td>
                      <td>'.$value["ORU"].'</td>
                      <td>'.$value["PTS"].'</td>
                      <td>'.$value["CHU"].'</td>
                      <td>'.$value["SCZ"].'</td>
                      <td>'.$value["CBBA"].'</td>
                      <td>'.$value["BENI"].'</td>
                      <td>'.$value["PND"].'</td>
                     

                </tr>';
        }

    ?>

    
    </tbody>
</table>

    </div>
</div>




</body>
</html>