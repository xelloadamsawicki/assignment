var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', function() {
  //
});

gulp.task('sass', function () {
  return gulp.src('./assets/css/style.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./assets/css/*.sass', ['sass']);
});