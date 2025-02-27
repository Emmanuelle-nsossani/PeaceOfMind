<?php

namespace app\model;

/**
 * Représente une question-réponse de la FAQ.
 */
class FAQ
{
    private string $categorie; 
    private string $question;
    private string $reponse; 

    public function __construct()
    {
        $this->categorie = '';
        $this->question = '';
        $this->reponse = '';
    }

    /**
     * Récupère toutes les questions selon leur catégorie.
     *
     * @return array Tableau des questions classées par catégorie
     */
    public static function getAllQuestions(): array
    {
        $db = Database::getInstance()->getConnection();
        $sql = 'SELECT categorie, question, reponse FROM faq ORDER BY categorie';
        $stmt = $db->query($sql);
        
        $questionsParCategorie = [];

        while ($data = $stmt->fetch()) {
            $categorie = $data['categorie'];
            
            // Si la catégorie n'existe pas encore dans le tableau, on l'initialise
            if (!isset($questionsParCategorie[$categorie])) {
                $questionsParCategorie[$categorie] = [];
            }

            // Ajout de la question dans la bonne catégorie
            $faq = new FAQ();
            $faq->hydrate($data);
            $questionsParCategorie[$categorie][] = $faq;
        }

        return $questionsParCategorie;
    }

    public function getCategorie(): string
    {
        return $this->categorie;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function getReponse(): string
    {
        return $this->reponse;
    }

    /**
     * Hydrate l'objet avec les données de la base.
     */
    public function hydrate(array $data)
    {
        $this->categorie = $data['categorie'] ?? '';
        $this->question = $data['question'] ?? '';
        $this->reponse = $data['reponse'] ?? '';
    }
}
