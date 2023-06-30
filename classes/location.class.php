<?php
    declare(strict_types=1);

    class Location {
        public int $id;
        public string $street;
        public string $city;
        public string $country;
        public string $coordinates;

        public function __construct($id, string $street, string $city, string $country, string $coordinates) {

            $this->id = intval($id);
            $this->street = $street;
            $this->city = $city;
            $this->country = $country;
            $this->coordinates = $coordinates;

        }

        static function getLocations(PDO $db) : array {
            $stmt = $db->prepare('SELECT id, street, city, country, coordinates FROM locations');
            $stmt->execute();

            $locations = array();
            while($location = $stmt->fetch()) {
                $locations[] = new location (
                    intval($location['id']),
                    $location['street'],
                    $location['city'],
                    $location['country'],
                    $location['coordinates'],
                );
            }
            return $locations;
        }
        
    }
?>