Product Sites Sample Theme
============================

This is a sample theme for the [product sites](https://github.com/cambell-prince/web-softwaresite) repository.

## Installation ##

Clone the repo into the htdocs/wp/wp-content/themes directory of the wordpress installation.  Then install the composer and bower dependencies.

```
composer install
bower update
```

We use gulp for our build runner, so if you want to use that you'll need to install the node dependencies also.

`npm install`

## Building ##

This theme uses less which can be compiled using gulp.

`gulp less`

See the gulpfile.json for further details.  There's also a watch target which will watch the less files and build when one is changed.

