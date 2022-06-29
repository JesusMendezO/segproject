<?php
    header('Content-Type: application/json');
    $pdo = new PDO("mysql:dbname=segproject;host=127.0.0.1","root","");

    $accion= (isset($_GET['accion']))?$_GET['accion']:'leer';
    switch($accion){
        case 'agregar':
            //Instrucción de Agregar
            $sql = $pdo->prepare("INSERT INTO eventos(title,descripcion,color,textColor,start,end)
            VALUES(:title,:descripcion,:color,:textColor,:start,:end)");

            $respuesta = $sql->execute(array(
                "title"=>$_POST['title'],
                "descripcion"=>$_POST['descripcion'],
                "color"=>$_POST['color'],
                "textColor"=>$_POST['textColor'],
                "start"=>$_POST['start'],
                "end"=>$_POST['end'],
            ));
            echo json_encode($respuesta);
            break;

        case 'eliminar':
            //Instrucción de Eliminar
            $respuesta = false;

            if(isset($_POST['id'])){

                $sql = $pdo->prepare("DELETE FROM eventos WHERE ID=:ID");
                $respuesta = $sql->execute(array("ID"=>$_POST['id']));

            };
            echo json_encode($respuesta);
            break;

        case 'modificar':
            //Instrucción de Modificar
            
            $sql = $pdo->prepare("UPDATE eventos SET 
            title=:title,
            descripcion=:descripcion,
            color=:color,
            textColor=:textColor,
            start=:start,
            end=:end 
            WHERE ID=:ID
            ");

            $respuesta = $sql->execute(array(
                "ID"=>$_POST['id'],
                "title"=>$_POST['title'],
                "descripcion"=>$_POST['descripcion'],
                "color"=>$_POST['color'],
                "textColor"=>$_POST['textColor'],
                "start"=>$_POST['start'],
                "end"=>$_POST['end'],
            ));
            echo json_encode($respuesta);
            break;   

        default:
            //Seleccionar los Eventos del Calendario

            $sql = $pdo->prepare("SELECT * FROM eventos");
            $sql -> execute();

            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($resultado);
        break;


    }    

?>