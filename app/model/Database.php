<?php
namespace app\model;


require_once __DIR__ . '/../../config.php';

use PDO;
use PDOException;

/**
 * Singleton responsable de la gestion de la connexion à la base de données.
 *
 * @package app\model
 */
class Database 
{
    private static $instance = null;
    private $conn;
    private $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME. ';charset=utf8';
    
    /**
     * Constructeur privé pour empêcher l'instanciation directe de la classe.
     */
    private function __construct() {
        try {
            $this->conn = new PDO($this->dsn, DB_USER, DB_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }

    /**
     * Retourne l'instance unique de la classe Database (Singleton).
     *
     * @return Database L'instance unique de la classe Database.
     */
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    /**
     * Retourne la connexion à la base de données.
     *
     * @return PDO La connexion à la base de données.
     */
    public function getConnection() {
        return $this->conn;
    }
}