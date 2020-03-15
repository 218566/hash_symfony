# hash_symfony

echo "# hash_symfony" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/218566/hash_symfony.git
git push -u origin master

START PROJECT:
- composer create-project symfony/website-skeleton my_project_name
- /etc/apache2/sites-available create file xxx.conf
- sudo a2ensite xxx.conf
- sudo nano /etc/hosts
- add 127.0.0.1 www.xxx.symfony
- reload apache2
- composer require (annotations & symfony/apache-pack
