<?php

namespace app\model;


/**
 * Représente une bière et ses propriétés associées, ainsi que les méthodes pour récupérer
 * les informations depuis la base de données et hydrater l'objet.
 *
 * @package app\model
 */
class Connexion
{

    private array $structure;
    private array $utilisateurs;

    private int $id;
    private string $username;
    private string $password;
    private string $mail;
    private string $nom;
    private string $prenom;


    /** 
     * Constructeur de la classe Biere
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
        // $this->getCatalogue();
    }

    /**
     * Récupère les utilisateurs depuis la base de données et les hydrate
     *
     * @return void
     */
    private function getCatalogue()
    {
        $db = Database::getInstance()->getConnection();

        $sql = 'SELECT * FROM utilisateur';
        $stmt = $db->query($sql);

        while ($data = $stmt->fetch()) {
            $utilisateur = new Connexion();
            $utilisateur->hydrate($data);
            $this->utilisateurs[] = $utilisateur;
        }
    }

    /**
     * Récupère l'ensemble des utilisateurs de la db
     *
     * @return array tableau des utilisateurs
     */
    public function getUtilisateurs() {
        return $this->utilisateurs;
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
     * Retourne le pwd de l'utilisaateur
     *
     * @return string Passsword de l'utilisateur
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Retourne le mail de l'utilisateur
     *
     * @return string mail de l'utilisateur
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
     * Récupère les informations stockées en base de données concernant l'utilisateur 
     * l'id est passée en paramètre et hydrate l'objet.
     * 
     * @param int $id Identifiant de l'utilisateur.
     * @return Utilisateur|null Objet Utilisateur hydraté ou null si l'enregistrement n'est pas trouvé.
     */
    public static function findById($ref)
    {
        $db = Database::getInstance()->getConnection();

        $query = "SELECT * FROM utilisaateur WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $ref);
        $stmt->execute();

        $data = $stmt->fetch();

        if ($data) {
            $utilisateur = new Connexion();
            $utilisateur->hydrate($data);
            return $utilisateur;
        } else {
            return null; // Retourne null si l'enregistrement n'est pas trouvé
        }
    }

    /**
     * Hydrate les propriétés de l'objet à partir d'un tableau associatif.
     *
     * @param array $data Tableau associatif contenant les données à utiliser pour hydrater l'objet.
     * @return void
     */
    public function hydrate($data)
    {
        // Méthode pour remplir les propriétés de l'objet à partir d'un tableau associatif
        foreach ($this->structure as $key => $id) {
            if (isset($data[$id])) {
                $this->$key = $data[$id];
            }
        }
    }
}
