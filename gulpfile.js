'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var watch = require('gulp-watch');


gulp.task('workflow', function () {
    gulp.src('./src/sass/**/*.scss')
    .pipe(watch('./src/sass/**/*.scss'))
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
        cascade: false
    }))
    .pipe(cssnano())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./dist/css/'))
});

gulp.task('default', function () {
    gulp.watch('./src/sass/*.scss', gulp.series('workflow'));
});