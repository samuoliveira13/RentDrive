<?php
    declare(strict_types=1);

    class Location {
        public int $id;
        public string $street;
        public string $country;


        public function __construct($id, string $street, string $country) {

            $this->id = intval($id);
            $this->street = $street;
            $this->country = $country;

        }

        static function getLocations(PDO $db) : array {
            $stmt = $db->prepare('SELECT id, street, country FROM locations');
            $stmt->execute();

            $locations = array();
            while($location = $stmt->fetch()) {
                $locations[] = new location (
                    intval($location['id']),
                    $location['street'],
                    $location['country'],
                );
            }
            return $locations;
        }
        
    }
?>