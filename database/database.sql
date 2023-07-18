CREATE TABLE vehicles (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    picture IMAGE,
    model TEXT NOT NULL,
    mark TEXT NOT NULL,
    year TEXT NOT NULL,
    transmission TEXT NOT NULL,
    location_id INTEGER,
    assigned_to INTEGER,
    FOREIGN KEY (location_id) REFERENCES locations(id),
    FOREIGN KEY (assigned_to) REFERENCES users(id)
);

CREATE TABLE locations (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    street TEXT NOT NULL,
    city TEXT NOT NULL,
    country TEXT NOT NULL,
    coordinates TEXT NOT NULL  
);

CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    f_name TEXT NOT NULL,
    l_name TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL,
    role TEXT NOT NULL
)