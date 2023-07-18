<?php
    declare(strict_types=1);



    class User {
        public int $id;
        public string $f_name;
        public string $l_name;
        public string $email;
        public string $password;
        public string $role;

        public function __construct(int $id, string $f_name, string $l_name, string $email, string $password, string $role) {

            $this->id = $id;
            $this->f_name = $f_name;
            $this->l_name = $l_name;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
        }
        
        static function getUser(PDO $db, int $id) : User {
            $stmt = $db->prepare('SELECT id, name, username, email, password, role, department_id FROM users WHERE id = ?');
            $stmt->execute(array($id));

            $user = $stmt->fetch();

            return new User (
                intval($user['id']),
                $user['f_name'],
                $user['f_name'],
                $user['email'],
                $user['password'],
                $user['role'],    
            );
        }

        static function getUserById($db, $userId) {
            $query = "SELECT f_name, l_name FROM users WHERE id = :userId";
            $statement = $db->prepare($query);
            $statement->bindValue(':userId', $userId, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
    }