sudo apt-get update
sudo apt-get install apache2 
systemctl start apache2
systemctl enable apache2
systemctl status apache2

sudo apt-get install software-properties-common python-software-properties
sudo add-apt-repository -y ppa:ondrej/php
sudo apt-get update
sudo apt-get install php7.2 php7.2-cli php7.2-common
sudo apt search php7.2
php7.2-json php7.2-mbstring php7.2-intl php7.2-mysql php7.2-xml php7.2-zip
php -v

sudo apt install composer
composer install
cp .env.example .env
php artisan key:generate

sudo apt install mysql-server
sudo mysql_secure_installation
# Correr manualmente
# sudo mysql
# CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';
# GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' WITH GRANT OPTION;
systemctl status mysql.service


sudo apt install mysql-workbench


# php artisan migrate
# php artisan db:seed
# php artisan db:seed --class=CargosTableSeeder