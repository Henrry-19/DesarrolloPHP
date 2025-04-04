-- 1. Crear una base de datos
CREATE DATABASE mibasededatos;

-- 2. Listar todas las bases de datos disponibles
-- Esta consulta muestra todas las bases de datos en el servidor
\l

-- 3. Conectarse a una base de datos
-- Cambiar la conexión a la base de datos 'mibasededatos'
\c mibasededatos

-- 4. Crear una tabla llamada 'clientes'
CREATE TABLE clientes (
    id SERIAL PRIMARY KEY,               -- Columna id de tipo SERIAL (autoincremental)
    nombre VARCHAR(100) NOT NULL,         -- Columna nombre, tipo VARCHAR (cadena de texto), no puede ser nula
    correo VARCHAR(100) UNIQUE NOT NULL,  -- Columna correo, debe ser único y no puede ser nula
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP  -- Columna fecha_registro con valor por defecto (fecha y hora actual)
);

-- 5. Insertar un registro en la tabla 'clientes'
INSERT INTO clientes (nombre, correo) 
VALUES ('Juan Pérez', 'juanperez@example.com');

-- 6. Insertar múltiples registros en la tabla 'clientes'
INSERT INTO clientes (nombre, correo) 
VALUES
('María López', 'marialopez@example.com'),
('Carlos Torres', 'carlostorres@example.com');

-- 7. Consultar todos los registros de la tabla 'clientes'
SELECT * FROM clientes;

-- 8. Consultar sólo los nombres y correos de los clientes
SELECT nombre, correo FROM clientes;

-- 9. Filtrar los resultados donde el nombre sea 'Juan Pérez'
SELECT * FROM clientes WHERE nombre = 'Juan Pérez';

-- 10. Ordenar los resultados por nombre en orden ascendente
SELECT * FROM clientes ORDER BY nombre ASC;

-- 11. Actualizar el correo de un cliente en la tabla 'clientes'
UPDATE clientes 
SET correo = 'nuevoemail@example.com' 
WHERE nombre = 'Juan Pérez';

-- 12. Eliminar un registro de la tabla 'clientes' donde el id sea 1
DELETE FROM clientes WHERE id = 1;

-- 13. Eliminar todos los registros de la tabla 'clientes' (cuidado con esta operación)
DELETE FROM clientes;

-- 14. Crear un índice en la columna 'correo' de la tabla 'clientes' para mejorar el rendimiento de las consultas
CREATE INDEX idx_clientes_correo ON clientes (correo);

-- 15. Ver el plan de ejecución de una consulta (útil para optimizarla)
EXPLAIN ANALYZE SELECT * FROM clientes WHERE correo = 'juanperez@example.com';

-- 16. Crear una vista que muestre clientes registrados después del 1 de enero de 2024
CREATE VIEW vista_clientes AS
SELECT id, nombre, correo 
FROM clientes 
WHERE fecha_registro > '2024-01-01';

-- 17. Consultar la vista 'vista_clientes'
SELECT * FROM vista_clientes;

-- 18. Crear una función que cuente el número de clientes
CREATE FUNCTION contar_clientes() RETURNS INT AS $$
BEGIN
    RETURN (SELECT COUNT(*) FROM clientes);  -- Devuelve la cantidad de registros en la tabla 'clientes'
END;
$$ LANGUAGE plpgsql;

-- 19. Ejecutar la función contar_clientes
SELECT contar_clientes();

-- 20. Crear un disparador (trigger) para actualizar la fecha de registro antes de cada actualización de un cliente
CREATE FUNCTION actualizar_fecha() RETURNS TRIGGER AS $$
BEGIN
    NEW.fecha_registro = NOW();  -- Actualiza la fecha de registro con la fecha actual
    RETURN NEW;
END;
$$ LANGUAGE plpgsql;

-- 21. Crear un trigger que ejecute la función actualizar_fecha antes de cada actualización en la tabla 'clientes'
CREATE TRIGGER trg_actualizar_fecha
BEFORE UPDATE ON clientes
FOR EACH ROW
EXECUTE FUNCTION actualizar_fecha();

-- 22. Crear una tabla con una columna JSON
CREATE TABLE productos (
    id SERIAL PRIMARY KEY,     -- Columna id de tipo SERIAL (autoincremental)
    detalles JSONB             -- Columna detalles de tipo JSONB
);

-- 23. Insertar un valor JSON en la tabla 'productos'
INSERT INTO productos (detalles) 
VALUES ('{"nombre": "Laptop", "precio": 1200}');

-- 24. Consultar un valor dentro de la columna JSON en la tabla 'productos'
SELECT detalles->>'nombre' AS nombre_producto FROM productos;

-- 25. Hacer un respaldo (dump) de la base de datos a un archivo
pg_dump -U postgres -F c -b -v -f "C:\backup\mibasededatos.backup" mibasededatos;

-- 26. Restaurar una base de datos desde un archivo de respaldo
pg_restore -U postgres -d mibasededatos -v "C:\backup\mibasededatos.backup";
