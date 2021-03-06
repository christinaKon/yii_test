'use strict';
var autoprefixer     = require('gulp-autoprefixer');
var browserSync      = require('browser-sync').create();
var concat           = require('gulp-concat');
var cssmin           = require('gulp-cssmin');
var fs               = require('fs');
var gulp             = require('gulp');
var gulpif           = require("gulp-if");
var jsmin            = require('gulp-jsmin');
var notify           = require("gulp-notify");
var path             = require('path');
var plumber          = require('gulp-plumber');
var prompt           = require('prompt');
var rename           = require('gulp-rename');
var sass             = require('gulp-sass');
var sassGlob         = require('gulp-sass-glob');
var sassLint         = require('gulp-sass-lint');
var sourcemaps       = require("gulp-sourcemaps");
var spritesmith      = require('gulp.spritesmith');
var stripCssComments = require('gulp-strip-css-comments');
var watch            = require('gulp-watch');
var sassLintConf     = require('./sass-lint');
var config           = require('./config');

var $sprites = [
  './img/sprites/*.png'
];

var $files = [
  './node_modules/slick-carousel/slick/ajax-loader.gif'
];

var $css = [
  './node_modules/slick-carousel/slick/slick.css',
  './node_modules/slick-carousel/slick/slick-theme.css',
  './node_modules/select2/dist/css/select2.css',
  './dist/main.css'
];

var $js = [
  './node_modules/slick-carousel/slick/slick.js',
  './node_modules/select2/dist/js/select2.full.js',
  './js/custom.js'
];

/* Local setup */
gulp.task('config', function (cb) {
  prompt.get('target', function (err, result) {
    if (err) console.log(err);
    else {
      fs.writeFileSync(path.join(__dirname, 'config.json'), JSON.stringify(result));
    }
    cb();
  });
});

/* Sprites */
gulp.task('sprite', function () {
  return  gulp.src($sprites)
    .pipe(spritesmith({
      imgName: 'sprite.png',
      cssName: '_sprite.scss',
      padding: 1
    }))
    .pipe(gulpif('*.png', gulp.dest('./dist/')))
    .pipe(gulpif('*.scss', gulp.dest('./sass/mixins/')));
});

/* File transfer */
gulp.task('file', function () {
  return gulp.src($files)
    .pipe(gulp.dest('./dist'));
});

/* CSS concat*/
gulp.task('css_concat', ['sass', 'sass_lint'], function () {
  gulp.src($css)
    .pipe(concat('main.css'))
    .pipe(gulp.dest('./dist'))
    .pipe(cssmin({path: './dist/main.css'}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./dist'));
});

/* JS concat */
gulp.task('js_concat', function () {
  gulp.src($js)
    .pipe(sourcemaps.init())
    .pipe(concat('main.js'))
    .pipe(gulp.dest('./dist'))
    .pipe(jsmin({path: './dist/main.min.js'}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./dist'));
});

/* Linter */
gulp.task('sass_lint', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(sassLint({
      options: sassLintConf.options,
      files: sassLintConf.files,
      rules: sassLintConf.rules,
      configFile: 'sass-lint.yml'
    }))
    .pipe(sassLint.format())
    .pipe(sassLint.failOnError());
});

/* Main SASS task */
gulp.task('sass', function () {
  return gulp.src(['./sass/**/*.s*ss'])
    .pipe(plumber(({
      errorHandler: notify.onError('SASS error: <%= error.message %>')
    })))
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(stripCssComments())
    .pipe(sass({
      style: 'expanded',
      sourceComments: 'map',
      sourceMap: 'sass',
      outputStyle: 'nested'
    }))
    .pipe(sass.sync())
    .pipe(autoprefixer({
      browsers: ['last 5 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('./dist'))
    .pipe(browserSync.stream());
});

/* Watch */
gulp.task('watch', ['css_concat', 'js_concat', 'sprite', 'file'], function() {
  browserSync.init({
    proxy: {
      target: config.target
    }
  });

  watch(['./images/sprites/'], function(event, cb) {
    gulp.start('sprite');
  });

  watch(['./sass/**/*.s*ss'], function(event, cb) {
    gulp.start('css_concat');
  });

  gulp.watch('./dist/main.css').on('change', browserSync.reload);

  watch(['./js/*.js'], function(event, cb) {
    gulp.start('js_concat');
  }).on('change', browserSync.reload);
});

/* Default task */
gulp.task('default', ['watch']);

/* Gulp compile */
gulp.task('compile', ['css_concat', 'js_concat', 'sprite', 'file']);
