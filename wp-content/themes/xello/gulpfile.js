var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

gulp.task('sass', function () {
  return gulp.src('./assets/sass/main.sass')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./assets/dist/css/'));
});

gulp.task('scripts', function() {
  gulp.src([
    './node_modules/popper.js/dist/js/popper.min.js',
    './node_modules/bootstrap/dist/js/bootstrap.min.js',
    './assets/js/*.js',
  ])
    .pipe(concat('main.js'))
    .pipe(gulp.dest('./assets/dist/js/'));
});

gulp.task('uglify', function() {
  return gulp.src('./assets/dist/js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('assets/dist/js/'));
});

gulp.task('watch', function () {
  gulp.watch('./assets/sass/**/*.sass', ['sass']);
  gulp.watch('./assets/js/*.js', ['scripts', 'uglify']);
});

gulp.task('default', ['sass', 'scripts', 'uglify']);