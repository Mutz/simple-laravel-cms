# Casa de pedra website and content management system

*This small project is far from perfect. We still have a lot of things to do, but it's a start...*

## Introduction

A simple internationalized CMS with image uploading/editing created with Laravel Framework.
The project uses [TinyMCE](http://www.tinymce.com/), and [elFinder](http://elfinder.org/) with [Barry Heuvel's](https://github.com/barryvdh) awesome
[laravel-elfinder](https://github.com/barryvdh/laravel-elfinder) package.

## Attributes that you may find useful

* Bower for front-end dependencies
* Grunt for task automation (LESS compilation, concatenation, minification, live reload)
* Fully restful
* TinyMCE WYSIWYG editor
* elFinder file manager (once again, big "Thank You" to Barry Heuvels for his laravel-elfinder package)
* Validator service with separate validation for creating and editing
* Image upload and editing
* Internationalization
* Automatic slug generation, making URI-s which are user and SEO friendly (i.e. www.mysite.com/cool-category/even-cooler-article)
* Caching (with event listeners to clean appropriate cache keys on any change in articles(create,update,delete))
* [OpenShift](https://openshift.redhat.com/) deploy ready ("public" folder renamed to "php", and deploy hook creating a symlink to the "data" folder so uploaded images don't get wiped out on deploy)
* Portuguese localization files

## TODO

* Tests, maybe you could help with that?
* User management (working on it. I should have started there, by all rules, but the client was in a rush to start writing his articles).
* **Categories management** - not because of complexity, but because of lack of time. For now, I'm seeding the categories from `/app/database/seeds/CategorySeeder.php`. Create your own seed file or issue a pull request for category management.
* Empty cache on article edit
* A page to edit contact details so we can automatically generate a contact page on the site.
* A dashboard
* <del>The front-end is ugly</del>
* Add localization for TinyMCE and elFinder
* Much more, obviously...

**P.S 1:** I'm tracking the "vendor" folder. Don't shoot me! I was having issues with composer on OpenShift. At the moment I don't remeber what the error was, but I'll post is here as soon as I can, maybe someone can help me solve it and do things right.

**P.S 2** The bootstrap theme I'm using is [DesignR](https://wrapbootstrap.com/theme/designr-one-page-personal-portfolio-WB0L1JT31). I bought the single site license, so if you'd like to use it for your site, please buy it, it's only 8 bucks or so.

## Screenshots list

### Article list
![Article list](http://s13.postimg.org/4ua6ksluv/List_of_articles.png)

### Adding a new article
![Adding a new article](http://s29.postimg.org/pw1f9cvyv/Add_a_new_article.png)

### File manager
![File manager](http://s27.postimg.org/xvin6whc3/File_Manager.png)

### Image editing
![Image editing](http://s29.postimg.org/lz5puehg7/Image_editing.png)

