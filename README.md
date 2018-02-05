// $Id: README.txt,v 1.1 02∕04∕2011

ABOUT THEME
-----------

Thème RWD pour les sites de l'Association développés sous Drupal 6.
Thème développé avec Sass - Susy 3. Version 2018.
Utilisation de Gulp + NodeJS

MODULES NODE.JS via NPM
----------------------------------
Installation de Gulp
:/var/www/drupal-6/sites/all/themes/dossier_projet$ sudo npm init (création du fichier  package.json + dossier node_modules)
:/var/www/drupal-6/sites/all/themes/dossier_projet$ npm install gulp --save-dev

Plugin pour Gulp (permet de charger tous les plugins)
:/var/www/drupal-6/sites/all/themes/dossier_projet$ npm install gulp-load-plugins --save-dev

Plugin pour Sass:
npm install --save-dev  event-stream gulp-util node-sass-import-once gulp-sass  gulp-autoprefixer gulp-size gulp-shell gulp-notify notify-send gulp-sourcemaps typey susy node-normalize-scss gulp-plumber

Vérifier versions des npm:
npm-check

https://github.com/at-import/breakpoint

BROWSER SYNC
-----------------
:/var/www/drupal-6/sites/all/themes/dossier_projet$ npm install browser-sync --save-dev


REGLAGES A FAIRE
----------------

dans template.php :
remplacer le nom du theme dans les fonctions necessaires.

Changer le nom du fichier .info

Changer le favicon
Changer le screenshot
Changer le logo

dans fichiers tpl
remplacer le nom du theme dans les appels d'includes
<pre>
 <?php
$theme_path = drupal_get_path('theme', 'starterd6_pf_rwd'); //Nom du thème idem nom du fichier .info
include ($theme_path.'/chemin/vers/fichier.php');
?>
</pre>

-- INUTILE --

Pour le thème en production, inutile d'envoyer sur le serveur les dossiers sass, node-module

Dans images
-----------

Mettre a jour les images du theme

Compilation des fichiers scss
-----------------------------
dans le terminal (sur serveur Linux) :
user@vm-server1:~$ cd /PATH/TO/THEMENAMEFOLDER/
user@vm-server1:/var/www/drupal-6/PATH/TO/THEMENAMEFOLDER$ gulp


Usage de Susy 3
------------------------
Il n'existe plus de mixins dans Susy3, tout passe par span()
Ainsi:
.classe{ @include container;} devient .classe { width: span (3);}
.classe{ @include span( 12 of $desktopcol);} devient .classe { width: span( 12 of $desktopcol);} 
.classe{@include push (1); } devient .classe{ margin-left: span(1 wide); }
.classe{@include pull (1); } devient .classe{ margin-left: 0 - span(3 wide); }

 Breakpoints pour SUSY
----------------------------------
<pre>
 @include breakpoint ($mobile){}
 @include breakpoint ($desktop){}
 @include breakpoint ($tablet){}
</pre>

Diaporama homepage surimpression
------------------------------------
Changer le code HTML dans Views 
<div id="transparency"></div>
<div id="contenu-diapo">
<h2>[teaser]</h2>
</div>
par 
<div id="transparency">
<h2>[teaser]</h2>
</div>

JAVASCRIPT
------------------------
LazyLoad : remplacer "src" par "data-src" pour images, video, etc, par exemple:
>> data-src="https://www.youtube.com/embed/