<p align="center"><img src="https://www.coastercms.org/uploads/images/logo_coaster_github4.jpg"></p>

<p align="center">
  <a href="https://packagist.org/packages/web-feet/coastercms"><img src="https://poser.pugx.org/web-feet/coastercms/downloads.svg"></a>
  <a href="https://packagist.org/packages/web-feet/coastercms"><img src="https://poser.pugx.org/web-feet/coastercms/version.svg"></a>
  <a href="https://www.gnu.org/licenses/gpl-3.0.en.html"><img src="https://poser.pugx.org/web-feet/coastercms/license.svg"></a>
</p>

The repository for Coaster CMS (coastercms.org) a Laravel based Content Management System with advanced features and Physical Web integration.

## Table of Contents

* [Features](#item0)
* [Quick Start](#item1)
* [Install](#item2)
* [Adding to an existing project](#item3)

<a name="item0"></a>
## Features

We aim to make Coaster CMS as feature rich as possible. Built upon the Laravel PHP framework, Coaster CMS is both fast and secure. Create beautiful content with TinyMCE and take a look into the future with the Internet Of Things.

* Built with Laravel 5 (v5.4)
* Responsive file manager
* WYSIWYG editor
* Block based templating system
* Beacon support

<a name="item1"></a>
## Quick Start

To get up and running with Coaster CMS as quickly as possible you can use Laravel's built-in php artisan serve command. Simply run the following command from your project's directory:

<code>
php artisan serve
</code>

This will take care of the web server side of things, but you'll still need to install and configure a local MySQL database.

<a name="item2"></a>
## Install

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
## Add to an Existing Project

If you'd rather add Coaster CMS to an existing Laravel (v5.4) project, follow the steps through below:

1. Add "web-feet/coasterframework": "5.4.*" to the composer.json file and run composer update
2. Go to the root directory of your project. 
3. Add the folders /coaster and /uploads to your public folder.
4. Run the script <code>php vendor/web-feet/coasterframework/updateAssets</code>
5. Add the service provider CoasterCms\CmsServiceProvider::class and CoasterCms\Providers\CoasterRoutesProvider::class, to your config/app.php file.
