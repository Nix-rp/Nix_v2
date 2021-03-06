<?php function nav ()
{
?>
    <nav id="main_nav">
       <ul>
            <h4>Accueil</h4>
            <li><a href="rules.php">Règles</a></li>
            <li><a href="server.php">Le Serveur</a></li>
            <li><a href="candidature.php">Candidature</a></li>
       </ul>
    
        <ul>
            <h4 class="navhead">Communauté</h4>
            <li><a href="forum.php">Forums</a></li>
            <li><a href="members.php">Membres</a></li>
            <li><a href="factions.php">Factions</a></li>
            <li><a href="guilds.php">Guildes</a></li>
            <li><a href="chatbox.php">Chatbox</a></li>
        </ul>
    
        <ul>
            <h4>Quêtes</h4>
            <li><a href="quest.php">Mes quêtes</a></li>
            <li><a href="questadmin.php">Administration des quêtes</a></li>
             <li><a href="proposequest.php">Proposer une quête</a></li>
        </ul>
    
        <ul>
            <h4>Personnage</h4>
            <li><a href="perso.php">Mon Personnage</a></li>
        </ul>
    
        <ul>
            
            <h4>Panel de modération</h4>
            <li><a href="staffrules.php">Règles du staff</a></li>
            <li><a href="whitelist.php">Modération de la whitelist</a></li>
        </ul>

        <ul>
            
            <h4>Panel d'administration</h4>
            <li><a href="mjrules.php">Règles des Maîtres du Jeu</a></li>
            <li><a href="cbmj.php">Chatbox MJ</a></li>
            <li><a href="background.php">Background</a></li>
            <li><a href="administration.php">Administration du Serveur</a></li>
        </ul>
    
        <ul>
            <h4>Compte</h4>
            <li><a href="account.php">Mon Compte</a></li>
            <li><a href="mp.php">Messages privés</a></li>
            <li><a href="login.php">Connection</a></li>
            <li><a href="login.php?action=disconnection">Déconnection</a></li>
        </ul>
    </nav>
<?php
}
?>
