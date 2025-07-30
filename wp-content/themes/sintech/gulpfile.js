const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const terser = require('gulp-terser');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const uglifycss = require('gulp-uglifycss');
const concat = require('gulp-concat');
const { src, series, parallel, dest, watch } = require('gulp');


//source directory
const scssPath = 'src/sass/**/theme.scss';
const scssAll = 'src/sass/**/*.scss'
const jsPath = 'src/js/**/theme.js';
// const bootstrapJs = './node_modules/bootstrap/dist/js/bootstrap.min.js';
const bootstrapBundleJs = './node_modules/bootstrap/dist/js/bootstrap.bundle.min.js';
const owlCarouselJs = './node_modules/owl.carousel/dist/owl.carousel.min.js';
const aos = './node_modules/aos/dist/aos.js';
const slick = './node_modules/slick-carousel/slick/slick.min.js';


//compile and min scss
function scssTask() {
  return src(scssPath) // change to your source directory
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(cleanCSS())
    .pipe(uglifycss())
    .pipe(sourcemaps.write('.'))
    .pipe(dest('css')); // change to your final/public directory
}

// minify js
function jsTask(){
return src([jsPath,bootstrapBundleJs,owlCarouselJs,aos,slick]) // change to your source directory
    .pipe(sourcemaps.init())
    .pipe(concat('theme.js'))
    .pipe(terser())
    .pipe(sourcemaps.write('.'))
    .pipe(dest('js')); // change to your final/public directory
}


//watchtask
function watchTask() {
  watch([scssAll,scssPath,jsPath], parallel(scssTask,jsTask));
}

// Default Gulp task 
exports.scssTask = scssTask;
exports.jsTask = jsTask;


exports.default = series(
  parallel(scssTask,jsTask),
  watchTask
);