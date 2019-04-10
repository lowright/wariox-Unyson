const { series, watch, parallel } = require('gulp');
const sass = require('gulp-sass');
const gulp = require('gulp');

const scssFile = './assets/scss/style.scss';
const cssFile = './assets/css/';

gulp.task('scss', function(done){
    return gulp.src(scssFile)
        .pipe(sass())
        .pipe(gulp.dest(cssFile));

    done();
})


gulp.task('watch', function(){
    watch('./assets/scss/*.scss', series('scss'));
});
