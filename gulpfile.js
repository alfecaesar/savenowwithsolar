var gulp = require('gulp');
var sass = require('gulp-sass');
var runSequence = require('run-sequence');
var uglify = require('gulp-uglify');


gulp.task('sass', function() {
  return gulp.src('assets/scss/**/*.scss') 
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(gulp.dest('assets/css'));
})


// Watchers
gulp.task('watch', function() {
  gulp.watch('assets/scss/**/*.scss', ['sass']);
  gulp.watch('assets/*.html');
  gulp.watch('assets/js/**/*.js');
})

// JS
gulp.task('scripts', function() {
  return gulp.src('assets/js/**/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('assets/js/minified'))
});


// Initiate All Task
gulp.task('init', function(callback) {
  runSequence(['sass'], 'watch',
    callback
  )
})

