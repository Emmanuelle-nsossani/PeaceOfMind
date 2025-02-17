<?php foreach ($utilisateurs as $user): ?>
    <tr>
        <td><?= htmlspecialchars($user->getId()) ?></td>
        <td><?= htmlspecialchars($user->getNom()) ?></td>
        <td><?= htmlspecialchars($user->getPrenom()) ?></td>
        <td><?= htmlspecialchars($user->getMail()) ?></td>
        <td><?= htmlspecialchars($user->getUsername()) ?></td>
    </tr>
<?php endforeach; ?>
<main id="connexion">
    <section id="banniere">
        <img src="public\images\titre noir POM.png" alt="">
        <p>L'espoir d'un nouveau départ</p>
    </section>
    <section id="form">
        <div id="container-form">
            <form action="" id="form-connexion">
                <div id="title">
                    <h2>Bienvenue</h2>
                    <p>Parmis nous :)</p>
                </div>
                <label for="pseudo">Pseudo</label>
                <input name="pseudo" type="text" placeholder="Mon pseuso" />
                <label for="password">Mot de passe</label>
                <input name="password" type="password" placeholder="Mot de passe" />
                <button class="button">Se connecter</button>
                <div id="bottom-form">
                    <a href="">Mot de pass oublié ?</a>
                    <p>Pas de compte ? <span id="connexion-button">S'inscrire</span></p>
                </div>
            </form>
            <form action="index.php?page=send-inscription" method="POST" id="form-inscription" class="form-hidden">
                <div id="title">
                    <h2>Bienvenue</h2>
                    <p>Rejoignez-nous :)</p>
                </div>
                <label for="prenom">Prénom</label>
                <input name="prenom" type="text" placeholder="Will" required />
                <label for="nom">Nom</label>
                <input name="nom" type="text" placeholder="Smith" required />
                <label for="pseudo">Pseudo</label>
                <input name="pseudo" type="text" placeholder="Smith94dab" required />
                <label for="mail">Adresse mail</label>
                <input name="mail" type="email" placeholder="will.smith@pom.fr" required />
                <label for="password">Mot de passe</label>
                <input name="password" type="password" placeholder="Mot de passe" required />
                <button class="button" type="submit">S'inscrire</button>
                <div id="bottom-form">
                    <a href="">Mot de passe oublié ?</a>
                    <p>J'ai déjà un compte, <br> <span id="inscription-button">je me connecte</span>.</p>
                </div>
            </form>
        </div>
    </section>
</main>