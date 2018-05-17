/*jshint esversion:6*/

const gulp = require('gulp');
const sass = require('gulp-sass');
const css = require('gulp-cssnano');


gulp.task('sass', function(){
  return gulp.src('scss/style.scss')
    .pipe(sass())
    .pipe(css())
    .pipe(gulp.dest('public/css/'));
});

gulp.task('watch',['sass'], function() {
  gulp.watch('scss/**/*.scss', ['sass']);
});
