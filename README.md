<h1>Coaster CMS - web-feet/coastercms</h1>

The repository for Coaster Cms (coastercms.org) a  Laravel based Content Management System with advanced features and The Physical Web Integration.

<h2>Install</h2>

(This isntallation assumes you have nginx/apache, php and MySQL already installed)

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

/public/cache

/public/themes

/public/uploads

/.env

Then follow the simple instructions in the install script.

For more details go to <link>https://www.coastercms.org/documentation/developer-documentation</link>


## Installing or adding to an existing Laravel project

The steps are are as follows:

1. Add "web-feet/coasterframework": "5.2.*" to the composer.json file and run composer update
2. Go to the root directory of your project. 
3. Add the folders /coaster and /uploads to your public folder.
4. Run the script <code>php vendor/web-feet/coasterframework/updateAssets</code>
5. Add the service provider CoasterCms\CmsServiceProvider::class to your config/app.php file.
