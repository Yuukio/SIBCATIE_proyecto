<?php

include_once 'Conexion.inc.php';
include_once 'Usuario.inc.php';

class RepositorioUsuario {

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

    public static function insertarUsuario($conexion, $usuario) {

        $usuario_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO Usuario(nombre, apellido, email, nombre_usuario, password, fecha_registro, rol, telefono) "
                        . "VALUES(:nombre, :apellido, :email, :nombre_usuario, :password, NOW(), 1, :telefono)";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':nombre', $usuario->getNombre(), PDO::PARAM_STR);
                $sentencia->bindParam(':apellido', $usuario->getApellido(), PDO::PARAM_STR);
                $sentencia->bindParam(':email', $usuario->getEmail(), PDO::PARAM_STR);
                $sentencia->bindParam(':nombre_usuario', $usuario->getNombreUsuario(), PDO::PARAM_STR);
                $sentencia->bindParam(':password', $usuario->getPassword(), PDO::PARAM_STR);
                $sentencia->bindParam(':telefono', $usuario->getTelefono(), PDO::PARAM_STR);

                $usuario_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $usuario_insertado;
        }
    }

}
