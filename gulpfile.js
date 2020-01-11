const gulp         = require('gulp');
const sass         = require('gulp-sass');
const browserSync  = require('browser-sync').create();
const reload       = browserSync.reload;
const imagemin     = require('gulp-imagemin');
const newer        = require('gulp-newer');
const autoprefixer = require('gulp-autoprefixer');


function style()
{
  return gulp.src([
    // 'node_modules/bootstrap/scss/bootstrap.scss',
    './scss/custom.scss'
  ])
  .pipe(autoprefixer())
  .pipe(sass({outputStyle: 'compressed'}))
  .pipe(gulp.dest('./css'))
  .pipe(browserSync.stream());
}

// function js()
// {
//   return gulp.src([
//     'node_modules/bootstrap/dist/js/bootstrap.min.js',
//     'node_modules/jquery/dist/jquery.min.js',
//     'node_modules/popper.js/dist/umd/popper.min.js'
//   ])
//   .pipe(gulp.dest('./js'))
//   .pipe(browserSync.stream());
// }

function images()
{
  return gulp.src('./images/orig/**/*.**')
  // .pipe(newer('./images/orig/'))
  .pipe(
    imagemin([
      imagemin.gifsicle({interlaced       : true}),
      imagemin.jpegtran({progressive      : true}),
      imagemin.optipng({optimizationLevel : 5}),
      imagemin.svgo({
        plugins : [
          {
            removeViewBox : false,
            collapseGroups : true
          }
        ]
      })
    ])
  )
  .pipe(gulp.dest('./images/mini/'));
}

// function fontawesome()
// {
//   return gulp.src('node_modules/@fortawesome/fontawesome-free/css/all.min.css')
//   .pipe(gulp.dest('./css'));
// }

// function fonts()
// {
//   return gulp.src('node_modules/@fortawesome/fontawesome-free/webfonts/*')
//   .pipe(gulp.dest('./webfonts/'));
// }

function bs()
{
  browserSync.init({
    proxy  : 'http://localhost/appClab',
    notify : false, 
    files  : [
      './**/*.php',
      './**/*.js',
      './images/orig/'
    ]
  });
  gulp.watch('./scss/**/*.scss',style);
  // gulp.watch('./**/*.php/').on('change',reload);
  gulp.watch('./images/orig/').on('change',gulp.series(images,reload));
  gulp.watch('./js/**/*.js/').on('change',reload);

}


exports.style       = style;
// exports.js          = js;
// exports.fontawesome = fontawesome;
// exports.fonts       = fonts;
exports.images      = images;
exports.bs          = bs;

exports.default = gulp.series(
  gulp.parallel(style,images,bs)
);






