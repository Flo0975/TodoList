Installation : 

- git clone 
- Cr�er une base de donn�e
- aller dans app/config/database.php et changer les informations (lignes : 55/64):
	'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'todo2',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
- Faire un: php artisan migrate
- Puis un: php artisan db::seed
- Et aller sur le lien localhost/todolist3/public

Voil�, 
J'ai pu faire le register, login, supprimer une t�che, et la validation de la t�che. 
Il me manque de l'�diter, je n'ai pas eu le temps et beaucoup de bug.

Bien cordialement
