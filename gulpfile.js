const gulp =  require("gulp"),
		sass= require("gulp-sass"),
		uglify = require("gulp-uglify"),
		uglifycss=require("gulp-uglifycss"),
		watch= require("gulp-watch"),
		requirejs = require('requirejs')
		imagemin = require("gulp-imagemin");



gulp.task('build-css',function(){
	return(
			gulp.src("assets/css/scss/**/*")
			.pipe(sass())
			.pipe(uglifycss())
			.pipe(gulp.dest("assets/css/min"))
		);
});

gulp.task('build-js',function(done){
	return(
		gulp.src("assets/js/*.js")
		.pipe(uglify())
		.pipe(gulp.dest('assets/js/min'))	
	);
	done();
});	


gulp.task('imagemin',function(){
	return(
		gulp.src("assets/images/**/*")
		.pipe(imagemin())
		.pipe(gulp.dest("assets/images/"))
		);
})


gulp.task("watch",function(done){
	gulp.watch('assets/css/scss/**/*.scss',gulp.series('build-css'));
	gulp.watch('assets/js/**/*.js',gulp.series('build-js'));
	// gulp.watch('assets/images',gulp.series('imagemin'));
	done();
})


gulp.task('copy',function(done){
	let fontAwesome = gulp.src('node_modules/font-awesome/**')
	.pipe(gulp.dest('assets/fonts/font-awesome'));

	let swiperJs = gulp.src('node_modules/swiper/dist/js/swiper.min.js')
			.pipe(gulp.dest('assets/js/libs/'));

	let swiperCss = gulp.src('node_modules/swiper/dist/css/swiper.min.css')
					.pipe(gulp.dest('assets/css/min/'))

	done();
})

gulp.task('default',gulp.series('build-css','build-js','imagemin','watch'));