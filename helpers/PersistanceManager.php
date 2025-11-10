<?php
require_once BASE_PATH . '../config.php';
require_once BASE_PATH . '../helpers/SessionManager.php';



class PersistanceManager
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);




            if (!isset($_SESSION['tables_created'])) {
                $this->createTables();
                $_SESSION['tables_created'] = true;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function createTables()
    {
        $query_users = "CREATE TABLE IF NOT EXISTS `users` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `username` varchar(200) NOT NULL,
            `email` varchar(200) NOT NULL,
            `password` varchar(240) NOT NULL,
            `permission` enum('user','operator','doctor') NOT NULL DEFAULT 'user',
            `is_active` tinyint(5) NOT NULL DEFAULT 0,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
          ) ENGINE=InnoDB DEFAULT COLLATE=utf8mb4_unicode_520_ci;";

        $this->pdo->exec($query_users);


        $query_doctors = "CREATE TABLE IF NOT EXISTS `doctors` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `about` VARCHAR(240),
    `photo` VARCHAR(240),
    `is_active` TINYINT(5) NOT NULL DEFAULT 0,
    `user_id` INT(11) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_doctors_user_id FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT COLLATE=utf8mb4_unicode_520_ci;";
        $this->pdo->exec($query_doctors);

        $query_treatments = "CREATE TABLE IF NOT EXISTS `treatments` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `name` varchar(240) NOT NULL,
            `description` text NOT NULL,
            `treatment_fee` DECIMAL(10,2),
            `registration_fee` DECIMAL(10,2),
            `is_active` tinyint(1) NOT NULL DEFAULT 0,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
          ) ENGINE=InnoDB DEFAULT COLLATE=utf8mb4_unicode_520_ci;";

        $this->pdo->exec($query_treatments);

        $query_appointments = "CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    appointment_no VARCHAR(100) NOT NULL,
    patient_name VARCHAR(100) NOT NULL,
    address VARCHAR(240) NOT NULL,
    telephone VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    nic VARCHAR(240) NOT NULL,
    doctor_id INT(11) NOT NULL,
    time_slot_from VARCHAR(240) NOT NULL,
    time_slot_to VARCHAR(240) NOT NULL,
    appointment_date DATE NOT NULL,
    treatment_id INT(11) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_appointments_doctor_id FOREIGN KEY (doctor_id) REFERENCES doctors(id),
    CONSTRAINT fk_appointments_treatment_id FOREIGN KEY (treatment_id) REFERENCES treatments(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;";

        $this->pdo->exec($query_appointments);


        $query_payments = "CREATE TABLE IF NOT EXISTS `payments` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `appointment_id` int(11) NOT NULL,
            `registration_fee` float,
            `treatment_fee_paid` tinyint(1) NOT NULL DEFAULT 0,
            `quantity` int(11)  NOT NULL DEFAULT 1,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            CONSTRAINT fk_payments_appointment_id FOREIGN KEY (appointment_id)REFERENCES appointments(id)
          ) ENGINE=InnoDB DEFAULT COLLATE=utf8mb4_unicode_520_ci;";



        $this->pdo->exec($query_payments);


















        $query_available_channelings = "CREATE TABLE IF NOT EXISTS `doctor_availability` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `day` varchar(100) NOT NULL,
            `session_from` varchar(240) NOT NULL,
            `session_to` varchar(240) NOT NULL,
            `doctor_id` int(11) NOT NULL,
            `is_active` tinyint(5) NOT NULL DEFAULT 0,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            CONSTRAINT fk_doctor_availability_doctor_id
        FOREIGN KEY (doctor_id) REFERENCES doctors(id)
          ) ENGINE=InnoDB DEFAULT COLLATE=utf8mb4_unicode_520_ci;";;

        $this->pdo->exec($query_available_channelings);







        $query_doctor_leaves = "CREATE TABLE IF NOT EXISTS `doctor_leaves` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `reason` varchar(240) NOT NULL,
            `date` date NOT NULL,
            `doctor_id` int(11) NOT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
          ) ENGINE=InnoDB DEFAULT COLLATE=utf8mb4_unicode_520_ci;";

        $this->pdo->exec($query_doctor_leaves);
    }

    public function getCount($query, $param = null)
    {
        $result = $this->executeQuery($query, $param, true);
        return $result['c'];
    }

    public function run($query, $param = null, $fetchFirstRecOnly = false)
    {
        return $this->executeQuery($query, $param, $fetchFirstRecOnly);
    }

    public function insertAndGetLastRowId($query, $param = null)
    {
        return $this->executeQuery($query, $param, true, true);
    }

    private function executeQuery($query, $param = null, $fetchFirstRecOnly = false, $getLastInsertedId = false)
    {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($param);

            if ($getLastInsertedId) {
                return $this->pdo->lastInsertId();
            }

            if ($fetchFirstRecOnly)
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
            else
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


            $stmt->closeCursor();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return -1;
        }
    }
}
