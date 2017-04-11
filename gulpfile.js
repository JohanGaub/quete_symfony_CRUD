const gulp = require('gulp');
const sass = require('gulp-sass');

gulp.task('default', function() {
});

gulp.task('sass', function () {
    return gulp.src('src/WCS/CoavBundle/Resources/public/sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('web/assets/css'));
});

