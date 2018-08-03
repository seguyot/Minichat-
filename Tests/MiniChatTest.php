<?php
use PHPUnit\Framework\TestCase;
class MiniChatTest extends TestCase
{
    public function testMinichat()
    {
        // Instanciation de la connexion à base de données 
    
        // utilisée pour vérifier la présence du message dans la table messages
        $pdo = new PDO ('mysql:host=127.0.0.1;dbname=minichat;charset=utf8', 'root', '');

        // Définition des données POST qui simulent un message
        $data = [
            'pseudo' => 'Céline',
            'message' => 'Je suis divinement parfaite',
        ];
        // Envoi de la requête POST
        $result = $this->postRequest('http://localhost/tests/Minichat/send.php', $data);

        // Si $result vaut "" alors c'est bien : la requête s'est executée
        // Si $result vaut FALSE alors c'est pas bien : la requête a échouée
      
        if ($result === false) {
            die('problem request');
        }
          // Si $result contient quelque chose ici ( une string remplie ), 
        // c'est forcément une erreur retournée par store.php
        if ($result) {
            die('Error '. $result);
        }
        
        // Si $result est vide c'est que la requête POST a bien été envoyée.
        // = store.php n'a renvoyé aucune erreur et donc n'a rien affiché.
        $this->assertEmpty($result);

        // On vérifie que le message existe bien dans la table messages
        $messageQuery  =  $pdo->query('SELECT * FROM messages ORDER BY id DESC LIMIT 10');
        $message = $messageQuery->fetchall()[0];
        // Pour vérifier que les datas sont identiques
        $this->assertEquals($data["pseudo"], $message["pseudo"]);
        $this->assertEquals($data["message"], $message["message"]);
    }
    private function postRequest($url, $data) 
    {
        $data = $data;
        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => 
                    "Content-type: application/x-www-form-urlencoded\r\n".
                     "User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
                ,
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return $result;
    }
}
    // Création de la fonction PostRequest()
