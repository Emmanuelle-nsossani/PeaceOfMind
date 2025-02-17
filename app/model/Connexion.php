<?php

namespace app\model;

/**
 * Représente un utilisateur avec ses propriétés et méthodes pour accéder aux données.
 *
 * @package app\model
 */
class Connexion
{
    private array $structure;
    private array $utilisateurs;

    private int $id = 0; // Initialisation de $id à 0
    private string $username = ''; // Initialisation de $username à une chaîne vide
    private string $password = ''; // Initialisation de $password à une chaîne vide
    private string $mail = ''; // Initialisation de $mail à une chaîne vide
    private string $nom = ''; // Initialisation de $nom à une chaîne vide
    private string $prenom = ''; // Initialisation de $prenom à une chaîne vide

    /** 
     * Constructeur de la classe
     * Initialise la structure pour le mapping entre la base de données et les propriétés de l'objet.
     */
    public function __construct()
    {
        $this->structure = [
            'id' => 'id',
            'username' => 'username',
            'password' => 'password',
            'mail' => 'mail',
            'nom' => 'nom',
            'prenom' => 'prenom',
        ];

        $this->utilisateurs = [];
    }

    /**
     * Récupère tous les utilisateurs de la base de données.
     *
     * @return array Tableau d'objets Connexion
     */
    public static function getAllUsers(): array
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT * FROM utilisateur';
        $stmt = $db->query($sql);
        $users = [];

        while ($data = $stmt->fetch()) {
            $user = new Connexion();
            $user->hydrate($data);  // Hydrate l'objet avec les données
            $users[] = $user;
        }

        return $users;
    }

    // Méthodes pour définir les propriétés (setters)
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    
    }
    /**
     * Retourne l'id de l'utilisateur
     *
     * @return int Id de l'utilisateur
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Retourne le username de l'utilisateur
     *
     * @return string Username de l'utilisateur
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Retourne le mot de passe de l'utilisateur
     *
     * @return string Mot de passe de l'utilisateur
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Retourne le mail de l'utilisateur
     *
     * @return string Email de l'utilisateur
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * Retourne le nom de l'utilisateur
     *
     * @return string Nom de l'utilisateur
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Retourne le prénom de l'utilisateur
     *
     * @return string Prénom de l'utilisateur
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Récupère les informations d'un utilisateur par son ID.
     *
     * @param int $ref Identifiant de l'utilisateur
     * @return Connexion|null Objet Connexion ou null si non trouvé
     */
    public static function findById($ref)
    {
        $db = Database::getInstance()->getConnection();

        $query = "SELECT * FROM utilisateur WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $ref);
        $stmt->execute();

        $data = $stmt->fetch();

        if ($data) {
            $utilisateur = new Connexion();
            $utilisateur->hydrate($data);
            return $utilisateur;
        } else {
            return null; // Aucun utilisateur trouvé
        }
    }

    public function save()
    {
        $db = Database::getInstance()->getConnection();

        // Préparer la requête d'insertion
        $query = "INSERT INTO utilisateur (prenom, nom, username, mail, password) 
                  VALUES (:prenom, :nom, :username, :mail, :password)";
        $stmt = $db->prepare($query);

        // Lier les paramètres
        $stmt->bindParam(':prenom', $this->prenom);
        $stmt->bindParam(':nom', $this->nom);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':mail', $this->mail);
        $stmt->bindParam(':password', $this->password);

        // Exécuter la requête
        $stmt->execute();
    }

    /**
     * Vérifie si l'email existe déjà dans la base de données.
     */
    public static function emailExiste($email)
    {
        $db = Database::getInstance()->getConnection();
        $query = "SELECT COUNT(*) FROM utilisateur WHERE mail = :mail";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':mail', $email);
        $stmt->execute();

        return $stmt->fetchColumn() > 0;
    }

    /**
     * Hydrate les propriétés de l'objet à partir d'un tableau associatif.
     *
     * @param array $data Tableau associatif contenant les données
     */
    public function hydrate($data)
    {
        foreach ($this->structure as $key => $id) {
            if (isset($data[$id])) {
                $this->$key = $data[$id];
            }
        }
    }
}
