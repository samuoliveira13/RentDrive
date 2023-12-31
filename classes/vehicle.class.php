<?php
    declare(strict_types=1);



    class Vehicle {
        public int $id;
        public string $name;
        public string $picture;
        public string $model;
        public string $mark;
        public string $year;
        public string $transmission;
        public int $location_id;
        public ?int $assigned_to;
        

        public function __construct($id, string $name, string $picture, string $model, string $mark, string $year, string $transmission,  $location_id, $assigned_to) {

            $this->id = intval($id);
            $this->name = $name;
            $this->picture = $picture;
            $this->model = $model;
            $this->mark = $mark;
            $this->year = $year;
            $this->transmission = $transmission;
            $this->location_id = intval($location_id);
            $this->assigned_to = $assigned_to;
        }

        static function getVehicles(PDO $db) : array {
            $stmt = $db->prepare('SELECT id, name, picture, model, mark, year, transmission, location_id, assigned_to FROM vehicles');
            $stmt->execute();

            $vehicles = array();
            while($vehicle = $stmt->fetch()) {
                $vehicles[] = new Vehicle (
                    intval($vehicle['id']),
                    $vehicle['name'],
                    $vehicle['picture'],
                    $vehicle['model'],
                    $vehicle['mark'],
                    $vehicle['year'],
                    $vehicle['transmission'],
                    $vehicle['location_id'],
                    $vehicle['assigned_to'],
                );
            }
            return $vehicles;
        }

        static function getvehicle(PDO $db, int $id) : vehicle {
            $stmt = $db->prepare('SELECT id, name, picture, model, mark, year, transmission, location_id, assigned_to FROM vehicles WHERE id = ?');
            $stmt->execute(array($id));

            $vehicle = $stmt->fetch();

            return new vehicle (
                intval($vehicle['id']),
                $vehicle['name'],
                $vehicle['picture'],
                $vehicle['model'],
                $vehicle['mark'],
                $vehicle['year'],
                $vehicle['transmission'],     
                $vehicle['location_id'],     
                $vehicle['assigned_to'],     
            );
        }
        
        static function getvehicle_name($db, int $id) :string {
            $stmt = $db->prepare('SELECT name FROM vehicles WHERE id = :vehicle_id');
            $stmt->bindParam(':vehicle_id', $id);
            $stmt->execute();
        
            $vehicle = $stmt->fetch();

            return $vehicle['name'];
        }

        function save($db) {
            $stmt = $db->prepare('
              UPDATE vehicles SET name = ?, picture = ?, model = ?, mark = ?
              WHERE id = ?
            ');
      
            $stmt->execute(array($this->name, $this->picture, $this->model, $this->mark,  $this->id));
        }
        
    }
?>