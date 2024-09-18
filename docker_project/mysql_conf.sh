#!/bin/bash
# Este script se ejecutará automáticamente al iniciar el contenedor

# Espera que MySQL esté listo
echo "Esperando a que MySQL se inicie..."
while ! mysqladmin ping -h "localhost" --silent; do
    sleep 1
done

echo "MySQL está listo. Configurando la base de datos."

# Crea el esquema y la tabla
mysql -uroot -p12345678 <<-EOSQL
    CREATE DATABASE IF NOT EXISTS db_proyecto;
    USE db_proyecto;
    CREATE TABLE IF NOT EXISTS usuario (
        ID_usuario INT AUTO_INCREMENT PRIMARY KEY,
        Nombre VARCHAR(100),
        Apellido VARCHAR(100)
    );

    INSERT INTO db_proyecto.usuario (ID_usuario, Nombre, Apellido)
    VALUES (2, 'Carlos', 'Perez');

EOSQL

echo "Base de datos y tabla creadas correctamente."
