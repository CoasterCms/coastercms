<p align="center"><img src="https://www.coastercms.org/uploads/images/logo_coaster_github4.jpg"></p>

<p align="center">
  <a href="https://packagist.org/packages/coastercms/coastercms"><img src="https://poser.pugx.org/web-feet/coastercms/downloads.svg"></a>
  <a href="https://packagist.org/packages/coastercms/coastercms"><img src="https://poser.pugx.org/coastercms/coastercms/version.svg"></a>
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

* Built with Laravel 8 (v8)
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
composer create-project coastercms/coastercms [project-name]
</code>

Set up a MySQL database to host your content


Make sure the following folders/file are/is writable:

* /public/uploads

* /.env

* /storage


Then follow the simple instructions in the install script.

For more details go to <link>https://www.coastercms.org/documentation/developer-documentation</link>

<a name="item3"></a>
## Add to an Existing Project

If you'd rather add Coaster CMS to an existing Laravel (v8) project, follow the steps through below:

1. Go to the root directory of your project
2. Run <code>composer require coastercms/framework:~8.0</code> to install package
3. Run <code>php artisan coaster:update-assets</code> to download admin assets
4. Add the provider CoasterCms\Providers\CoasterRoutesProvider::class to your config/app.php file (near end as it registers a catch-all route)
5. Go to a web browser and follow the install script that should have appeared
6. Upload or create a theme


