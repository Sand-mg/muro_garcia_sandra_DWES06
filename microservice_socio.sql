CREATE DATABASE IF NOT EXISTS socio;
USE socio;

CREATE TABLE IF NOT EXISTS socio (
	id_socio INT AUTO_INCREMENT PRIMARY KEY,
    nombre_socio VARCHAR(100),
    apellidos_socio VARCHAR(50),
    num_contacto INT(9)
);

INSERT INTO socio (nombre_socio, apellidos_socio, num_contacto) VALUES 
('Juan', 'Pérez García', 612345678),
('María', 'López Martínez', 634567890),
('Carlos', 'Gómez Sánchez', 645678912),
('Ana', 'Ramírez Torres', 623456789),
('Luis', 'Fernández Pérez', 678901234);