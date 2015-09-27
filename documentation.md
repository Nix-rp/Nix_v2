#Règles / Architecture / Infos

Pour que ce site soit organisé et propre, il va falloir définir quelques règles de code.
Elles seront ajoutées au fur et à mesure des besoins, pour l'instant copiez l'architecture des pages du nouveau site déjà existantes.

###Accès à la base de données

Pour protéger l'accès à la base de donnée, le fichier permettant de l'utiliser et contenant les identifiant et mot de passe n'est pas accessible (obviously).
Voilà la méthode d'utilisation :
``` php
  include(../../db.php);
  $db = init_db();
```
Le $db retourné est un objet PDO.

###Accès aux fichiers

Le nouveau site sera pour l'instant dans le répertoire Nix_v2/.
