// Load all the modules from package.json
var gulp = require( 'gulp' ),
  plumber = require( 'gulp-plumber' ),
  autoprefixer = require('gulp-autoprefixer'),
  watch = require( 'gulp-watch' ),
  jshint = require( 'gulp-jshint' ),
  stylish = require( 'jshint-stylish' ),
  uglify = require( 'gulp-uglify' ),
  rename = require( 'gulp-rename' ),
  notify = require( 'gulp-notify' ),
  concat = require('gulp-concat'),
  // include = require( 'gulp-include' ),
  sass = require( 'gulp-sass' ),
  browserSync = require('browser-sync').create(),
  critical = require('critical'),
  zip = require('gulp-zip');


var projectURL = 'dev8'; // Project URL. Could be something like localhost:8888.


var scriptSRC = [
                './js/src/navigation.js', // Pure JS class toggling
                './js/src/skip-link-focus-fix.js' ,
                './js/src/custom.js' 
              ]; // Path to JS vendor and custom files in order.
var scriptDestination     = './js'; // Path to save the compiled JS file.
var scriptFile            = 'scripts'; // Compiled JS file name.


var config = {
     nodeDir: './node_modules' 
}

// Default error handler
var onError = function( err ) {
  console.log( 'An error occured:', err.message );
  this.emit('end');
}

// JS to watch
var jsFiles = [
  './js/src/*.js',
  '!./js/vendor/*.js'
];
 
// Sass files to watch
var cssFiles = [
  './sass/**/*.scss'
];

// automatically reloads the page when files changed
var browserSyncWatchFiles = [
    './*.min.css',
    './js/*.min.js',
    './**/*.php'
];

// see: https://www.browsersync.io/docs/options/
var browserSyncOptions = {
    proxy: projectURL,    // Project URL
    watchTask: true,
    // injectChanges: true,
    port: 7000            // Use a specific port (instead of the one auto-detected by Browsersync)
}

// Zip files up
gulp.task('zip', function () {
 return gulp.src([
   '*',
   './css/*',
   './fonts/*',
   './images/**/*',
   './inc/**/*',
   './js/**/*',
   './languages/*',
   './sass/**/*',
   './template-parts/*',
   './templates/*',
   '!bower_components',
   '!node_modules',
  ], {base: "."})
  .pipe(zip('strappress.zip'))
  .pipe(gulp.dest('.'));
});


// SCRIPTS TASK
// Get JS source files, error check, concat, rename, minify, save to JS folder
gulp.task( 'scripts', function() {
  gulp.src( scriptSRC )
  .pipe( jshint() )
  .pipe( jshint.reporter( stylish ) )
  .pipe( jshint.reporter( 'fail' ) )
  .pipe( concat( scriptFile + '.js' ) )
  .pipe( gulp.dest( scriptDestination ) )
  .pipe( uglify() )
  .pipe(rename( { suffix: '.min' } ) )
  .pipe( gulp.dest( scriptDestination ) )
  .pipe(browserSync.reload({stream: true}))
  .pipe( notify({ message: 'scripts task complete' }));
});


// Sass - Creates a regular and minified .css file in root 
gulp.task('sass', function() {
  return gulp.src('./sass/style.scss')
    .pipe(plumber())
    .pipe(sass({
        errLogToConsole: true,
        precision: 8,
        noCache: true,
        //imagePath: 'assets/img',
        includePaths: [
          config.nodeDir + '/bootstrap/scss',
        ]
      }).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest('.'))
    .pipe(sass({ outputStyle:'compressed'}).on('error', sass.logError))
    .pipe(rename( { suffix: '.min' } ) )
    .pipe(gulp.dest('.'))
    .pipe(browserSync.reload({stream: true}))
    .pipe(notify({ title: 'Sass', message: 'sass task complete'  }));
});

// Generate & Inline Critical-path CSS
gulp.task('critical', function (cb) {
    critical.generate({
        base: './',
        src: projectURL,
        dest: 'css/home.min.css',
        ignore: ['@font-face'],
        dimensions: [{
          width: 320,
          height: 480
        },{
          width: 768,
          height: 1024
        },{
          width: 1280,
          height: 960
        }],
        minify: true
    });
});


// Starts browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    browserSync.init(browserSyncWatchFiles, browserSyncOptions);
});
 
 
// Start the livereload server and watch files for change
gulp.task( 'watch', function() {
 
  // don't listen to whole js folder, it'll create an infinite loop
  gulp.watch( jsFiles, gulp.parallel('scripts') );
 
  gulp.watch( cssFiles, gulp.parallel('sass') );
   
} );
 
 
gulp.task( 'default', gulp.parallel('watch', 'browser-sync'));