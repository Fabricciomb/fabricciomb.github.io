var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
gulp.task('sass', function () {
 return gulp.src('wp-content/themes/buenom/assets/sass/**/*.sass')
   .pipe(sass({outputStyle: 'compressed'})
   .on('error', sass.logError))
   .pipe(gulp.dest('wp-content/themes/buenom'))
})
gulp.task('watch', function () {
  gulp.watch('wp-content/themes/buenom/assets/sass/**/*.sass', ['sass'])
})
gulp.task('default', ['sass', 'watch'])