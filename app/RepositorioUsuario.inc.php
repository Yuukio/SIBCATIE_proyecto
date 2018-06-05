<?php

class RepositorioUsuario {

    public static function obtenerTodos($conexion) {

        $usuarios = array();

        if (isset($conexion)) {
            try {
                include_once 'Usuario.inc.php';

                $sql = "SELECT * FROM usuario";

                $sencencia = $conexion->prepare($sql);
                $sencencia->execute();
                $resultado = $sencencia->fetchALL();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuarios[] = new Usuario(
                                $fila['id'], $fila['nombre'], $fila['email'], $fila['password'], $fila['fecha_registro'], $fila['activo']
                        );
                    }
                } else {
                    print 'No hay usuarios';
                }
            } catch (Exception $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $usuarios;
    }

    public static function obtenerNumeroUsuarios($conexion) {
        $total_usuarios = null;

        if (isset($conexion)) {
            try {
                $sql = "SELECT COUNT(*) as total FROM usuario";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                $total_usuarios = $resultado['total'];
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $total_usuarios;
    }
}
