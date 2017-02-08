#Coaster CMS - web-feet/coastercms

The repository for Coaster CMS (coastercms.org) a Laravel based Content Management System with advanced features and The Physical Web Integration.

##Table of Contents

* [Quick Start](#item1)
* [Install](#item2)
* [Adding to an existing project](#item3)
* [Screenshots](#item4)

<a name="item1"></a>
##Quick Start

To get up and running with Coaster CMS as quickly as possible you can use Laravel's built-in php artisan serve command.

<a name="item2"></a>
##Install

(This installation assumes you have nginx/apache, php and MySQL already installed)

Install Coaster CMS using composer:
Get composer: 
<link>https://getcomposer.org/</link>

Run the following:

<code>
composer create-project web-feet/coastercms [project-name]
</code>

Set up a MySQL database to host your content

Make sure the following folders/file are/is writable:

/public
/.env

Then follow the simple instructions in the install script.

For more details go to <link>https://www.coastercms.org/documentation/developer-documentation</link>

<a name="item3"></a>
## Adding to an existing Laravel project

The steps are are as follows:

1. Add "web-feet/coasterframework": "5.3.*" to the composer.json file and run composer update
2. Go to the root directory of your project. 
3. Add the folders /coaster and /uploads to your public folder.
4. Run the script <code>php vendor/web-feet/coasterframework/updateAssets</code>
5. Add the service provider CoasterCms\CmsServiceProvider::class to your config/app.php file.

<a name="item4"></a>
## Screenshots

Coaster CMS demo template.

![alt tag](https://www.coastercms.org/themes/coaster/img/demo.png)

Coaster CMS dashboard.

![alt tag](https://www.coastercms.org/themes/coaster/img/admin.png)
