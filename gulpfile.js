'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var merge = require('merge-stream');

var BOWER_COMPONENTS_PATH = './bower_components';

// Gulp copy vendor libraries files
gulp.task('copy_vendors', function() {
    console.log('Starting copy_vendors task');

    var jquery = gulp.src(BOWER_COMPONENTS_PATH+'/jquery/dist/jquery.min.js')
        .pipe(gulp.dest('js/vendors/jquery/'));
    var bootstrap = gulp.src(BOWER_COMPONENTS_PATH+'/bootstrap-sass/assets/javascripts/bootstrap.js')
        .pipe(gulp.dest('js/vendors/bootstrap/'));

    return merge(jquery, bootstrap);
});

gulp.task('copy_fonts', function() {
    console.log('Starting copy_fonts task');
    var glyphicons = gulp.src(BOWER_COMPONENTS_PATH+'/bootstrap-sass/assets/fonts/bootstrap/*')
        .pipe(gulp.dest('fonts/bootstrap/'));
    return merge(glyphicons);
});

// Styles - Sass
gulp.task('sass', function () {
    return gulp.src('./dev/sass/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(autoprefixer())
        .pipe(gulp.dest('./'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./sass/**/*.scss', ['sass']);
});


// Run this task at project initialization
gulp.task('init_project', ['copy_vendors','copy_fonts', 'sass']);

// Scripts - javascript

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['sass']);