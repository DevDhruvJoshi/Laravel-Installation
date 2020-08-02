# Laravel-Installation
Perfect Installation Laravel on Linux with Virtual Host
```bash
composer create-project --prefer-dist laravel/laravel myapp
cd myapp
php artisan key:generate
```


# Laravel Debug Tools (debugbar)
```bash
composer require barryvdh/laravel-debugbar --dev
```

# Laravel UI - If you needed 
```bash
composer require laravel/ui
php artisan ui react
npm install react-router react-router-dom
php artisan ui react --auth
npm install
npm run dev
npm run development -- --watch
sudo chown -R www-data:www-data .
sudo chmod -R 777 .
```
# Create Virtual Host

```bash
sudo -i subl /etc/hosts

```
*. add new line in this file 

```bash
127.0.0.1 myapp.loc

```

```bash
sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/myapp.loc.conf
sudo subl /etc/apache2/sites-available/myapp.loc.conf

```
*. add this code in after last line, just check code path

```bash
<VirtualHost *:80>
    ServerAdmin webmaster@myapp.loc
    DocumentRoot "/home/i/pro/myapp/public"
    ServerName   myapp.loc
    ServerAlias *.myapp.loc
    <Directory "/home/i/pro/myapp/public" >
        Options Indexes FollowSymLinks MultiViews Includes ExecCGI
        AllowOverride All
        Order Allow,Deny
        Allow from all
        Require all granted
    </Directory>
</VirtualHost>

```

after than run this command for activated this side and restart apache server

```bash
sudo a2ensite myapp.loc.conf
sudo systemctl restart apache2

```
now successfully setup for laravel installation
thanks with regards. 
