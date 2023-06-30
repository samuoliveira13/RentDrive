CREATE TABLE vehicles (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    picture IMAGE,
    model TEXT NOT NULL,
    mark TEXT NOT NULL,
    year TEXT NOT NULL,
    transmission TEXT NOT NULL,
    location_id INTEGER,
    FOREIGN KEY (location_id) REFERENCES locations(id)
);

CREATE TABLE locations (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    street TEXT NOT NULL,
    country TEXT NOT NULL
);