var gulp = require('gulp'),
	browserSync = require('browser-sync').create(),
	reload = browserSync.reload,
	$ = require('gulp-load-plugins')();


// style task
gulp.task('style', function(){
	gulp.src('app/styles/**/*.scss')
		.pipe($.compass({
			config_file: './config.rb',
			css: 'app/css',
			sass: 'app/styles'
		}))
		.pipe($.sass().on('error', $.sass.logError))
		.pipe(gulp.dest('app/css'))
		.pipe(reload({stream: true}))
});

// serve task
gulp.task('serve', ['style'], function(){
	browserSync.init({
		port: 9000,
		server: {
			baseDir: './app'
		}
	});

	gulp.watch([
		'app/js/**/*.js', 
		'app/**/*.html'
	]).on('change', reload);

	gulp.watch('app/styles/**/*.scss', ['style']);
});