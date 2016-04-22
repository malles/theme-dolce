/**
 * Popular Tasks
 * -------------
 *
 * compile: compiles the .less files of the specified packages
 * lint: runs jshint on all .js files
 */

var gulp       = require('gulp'),
    header     = require('gulp-header'),
    less       = require('gulp-less'),
    rename     = require('gulp-rename'),
    path       = require('path'),
    fs         = require('fs'),
    glob       = require('glob'),
    concat     = require('gulp-concat')

// banner for the css files
var banner = "/*! <%= data.title %> <%= data.version %> | (c) 2014 Pagekit | MIT License */\n";

gulp.task('default', ['compile', 'compile-styles']);


/**
 * Compile all less files
 */
gulp.task('compile', function () {

    return gulp.src('less/theme.less', {base: __dirname})
        .pipe(less({compress: true}))
        .pipe(header(banner, { data: require('./package.json') }))
        .pipe(rename(function (file) {
            // the compiled less file should be stored in the css/ folder instead of the less/ folder
            file.dirname = file.dirname.replace('less', 'css');
        }))
        .pipe(gulp.dest(__dirname));
});


/**
 * Compile style less files
 */
gulp.task('compile-styles', function() {

    var files = glob.sync('less/styles/*/style.less');

    files.forEach(function(file) {

        var dest = path.dirname(file).replace('less', 'css');

        if (!fs.existsSync(dest)) {
            fs.mkdirSync(dest);
        }

        return gulp.src(['less/theme.less', file])
            .pipe(concat('theme.less'))
            .pipe(less({compress: true}))
            .pipe(header(banner, { data: require('./package.json') }))
            .pipe(gulp.dest(dest));
    });

});

/**
 * Watch for changes in files
 */
gulp.task('watch', function (cb) {
    gulp.watch('**/*.less', ['compile']);
});
