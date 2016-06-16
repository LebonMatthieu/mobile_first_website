var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var rename = require('gulp-rename');
var minify = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var notify = require('gulp-notify');
var concat = require('gulp-concat');

var source = './app/src'; // dossier de travail
var dist = './app/dist'; // dossier à livrer

// Tâche "css" = SASS + autoprefixer + minify
gulp.task('css', function() {
  return gulp.src(source + '/sass/app.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(minify())
    .pipe(gulp.dest(dist + '/css/'))
    .pipe(notify({ message: 'Styles task complete :-) ' }));
});

// Tâche "js" = uglify + concat
gulp.task('js', function() {
  return gulp.src(source + '/js/*.js')
    .pipe(concat('app.min.js'))
    .pipe(uglify().on('error', function(e){
        console.log(e);
      }))
    .pipe(gulp.dest(dist + '/js/'))
    .pipe(notify({ message: 'Scripts task complete :-)' }));
});

// Tâche "img" = Images optimisées
gulp.task('img', function () {
  return gulp.src(source + '/img/*.{png,jpg,jpeg,gif,svg}')
    .pipe(imagemin())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest(dist + '/img'))
    .pipe(notify({ message: 'Images task complete :-)' }));
});


// Tâche "watch" = je surveille SASS et HTML
gulp.task('default', function () {
  gulp.watch(source + '/sass/*.scss', ['css']);
  gulp.watch(source + '/js/*.js', ['js']);
  gulp.watch(source + '/img/*.{png,jpg,jpeg,gif,svg}', ['img']);
});
