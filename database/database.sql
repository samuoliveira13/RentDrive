CREATE TABLE vehicles (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    picture IMAGE,
    model TEXT NOT NULL,
    mark TEXT NOT NULL,
    year TEXT NOT NULL,
    transmission TEXT NOT NULL
)