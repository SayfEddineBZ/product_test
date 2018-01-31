Product_test
============

**Installation**

1-Cloner le projet de gitHub:

`git clone https://github.com/SayfEddineBZ/product_test.git`

2- installer les _vendors_

`composer install`

3-Création et la configuration de la Bases de données:

`php bin/console doctrine:database:create`

`php bin/console doctrine:schema:create`


4-Recharger les Fixtures:

`php bin/console doctrine:fixtures:load --append`

5- Création de premier utlisateur:

`php bin/console fos:user:create admin admin@admin.com admin`

6- Affecter le Role_ADMIN:

`php bin/console fos:user:promote admin ROLE_ADMIN`

7-Install les assets:

`php bin/console assets:install`

8- Vider le cache:

`php bin/console cache:clear`

9- Vous pouvez accéder a la page front a partir de la racine de site `/`
10-Pour la partie admin vous pouvez accéder depuis `/admin`

`login: admin`

`password: admin`

