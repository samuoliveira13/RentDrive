INSERT INTO vehicles (name, picture, model, mark, year, transmission, location_id, assigned_to)
VALUES ('BMW M4', '../assets/m4_reserva.png', 'M4', 'BMW', '2020', 'Automatic', 1, NULL);

INSERT INTO vehicles (name, picture, model, mark, year, transmission, location_id, assigned_to)
VALUES ('Mercedes E63', '../assets/e63_reserva.png', 'E63', 'Mercedes', '2021', 'Manual', 2, NULL);

INSERT INTO vehicles (name, picture, model, mark, year, transmission, location_id, assigned_to)
VALUES ('Toyota Supra', '../assets/supra_reserva.png', 'Supra', 'Toyota', '2020', 'Manual', 1, NULL);

INSERT INTO vehicles (name, picture, model, mark, year, transmission, location_id, assigned_to)
VALUES ('Renault Clio', '../assets/clio_reserva.png', 'Clio', 'Renault', '2016', 'Manual', 2, NULL);


INSERT INTO locations (street, city, country, coordinates)
VALUES ('123 Main Street', 'New York', 'United States', '41.032232, -73.768920');

INSERT INTO locations (street, city, country, coordinates)
VALUES ('Avenida dos Aliados', 'Porto', 'Portugal', '41.149307, -8.610898');

INSERT INTO users (f_name, l_name, email, password, role)
VALUES ('Samuel', 'Oliveira', 'samuel@gmail.com', '$2y$12$wZVmdyhmuUCiwkVyyfEIt.zvw9gCRlO1IAsEz6d2f7WgYacttNRjS', 'admin');