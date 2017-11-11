# Made Neat

Hi. I'm a starter theme created by Made Neat. We pride ourselves on a combination of hard work and passion for creating the best product we can.

## Precursor

A Website for **** designed by **Jackson Poultney** and developed by **Ivan Lucas**. This project is managed by **Paul Tevis**.

---

## Technology

* Built using **Grunt**
* Uses SASS
* Uses JSHint
* Uses PostCSS for autoprefixer
* Uses Minify JS and CSS
* Uses Minify Images

## Plugins

* Advanced Custom Fields - ACF
* Gravity Forms
* Woocommerce


## Installation

* You will require `Ruby`, `Node`, `Composer` & `grunt-cli`
* Create your `.git` repository
* Copy and paste `composer.json` and `install.sh` into the `.git` repository folder
* Then run in your terminal `sh install.sh`
* Wait until the magic is done to stepping forward
* After that, go to your new theme folder
* Run `npm install` in install packages
* Run `grunt` to launch

---

## NOTES


## Setup
Copy in the root of the repo, local-config-sample.php to local-config.php which is where you need to put configuration that is specific to your local environment.
NOTE local-config.php is defined in the .gitignore and should never be committed to the repository.

## Git Branching
This repo uses feature branches with some static branches used to trigger deployments to different environments.

## WordPress Core as a Subdirectory
To keep the repo cleaner and make WordPress releases faster, the site has WordPress core configure a sub directory wp/.

Nothing should ever be committed inside the wp/ directory, unless performing a WordPress update. This includes themes, plugins and anything else. All of the plugins and themes live in the top level content/ directory, as with a standard WordPress set up.

## Uploads
The uploads directory is configured on deploy for staging and production. You have to create the content/uploads directory manually on local (git ignored)


* Afterwards, in your admin panel, go to Appearance > Themes
* Then click Activate to use your new awesome theme right away.

---

// drink coffee and relax
