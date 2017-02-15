var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
gulp.task('sass', function () {
 return gulp.src('assets/sass/**/**.sass')
   .pipe(sass({outputStyle: 'compressed'})
   .on('error', sass.logError))
   .pipe(gulp.dest(''))
})
gulp.task('watch', function () {
  gulp.watch('assets/sass/**/**.sass', ['sass'])
})
gulp.task('default', ['sass', 'watch'])