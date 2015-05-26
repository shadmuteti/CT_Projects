var gulp=require('gulp')

// including plugins
//, minifyHtml = require("gulp-minify-html");
 
// task
//gulp.task('minify-html', function () {
  //  gulp.src('Files/index.html') // path to your files
    //.pipe(minifyHtml())
   // .pipe(gulp.dest('Files/output'));
// });
// task
 ,minifyCss = require("gulp-minify-css");
gulp.task('minify-css', function () {
    gulp.src('Files/CSS/style.css') // path to your file
    .pipe(minifyCss())
    .pipe(gulp.dest('Files/output'));

});
