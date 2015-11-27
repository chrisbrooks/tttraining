var paths = {
	build: 'tttraining/',
	src: 'src/',
	assets: 'src/assets/',
	bower: 'src/bower_components/'
}

var scriptsList = {
	'tttraining/scripts/combined.min.js': [
		paths.assets + 'scripts/custom/vimeo-banner.js',
		paths.assets + 'scripts/custom/initialize.js',
	],
	'tttraining/scripts/plugins.min.js': [
		paths.bower + 'jquery/dist/jquery.min.js',
		paths.bower + 'jquery_lazyload/jquery.lazyload.js',
		paths.assets + 'scripts/vendor/viewportchecker.js',
		paths.assets + 'scripts/vendor/jquery.mmenu.min.js',
		paths.assets + 'scripts/vendor/jquery.bxslider.js',
		paths.assets + 'scripts/vendor/jquery.easytabs.js'
	]
};

module.exports = function(grunt) {

	grunt.initConfig({

		jshint: {

			files: paths.assets + 'scripts/custom/*.js',

			options: {
				globals: {
					jQuery: true,
					console: true,
					module: true
				}
			}
		},

		uglify: {

			development : {
				options: {
					//compress: true
				},
				files: scriptsList
			},

			release : {
				files: scriptsList
			}
		},

		sass: {

			development: {
				options: {
					style: 'compressed'
				},
				files: {
					'tttraining/styles/style.css': paths.assets + 'styles/styles.scss',
				}
			},

			release: {
				options: {
					style: 'compressed'
				},
				files: {
					'tttraining/styles/style.css': paths.assets + 'styles/styles.scss',
				}
			}
		},

		autoprefixer: {

			build: {
				expand: true,
				flatten: true,
				src: paths.build + 'styles/**/*.css',
				dest: paths.build + 'styles/'
			}
		},

		copy: {

			images: {
				files: [{
					expand: true,
					cwd: paths.assets + 'images',
					src: ['**/*.{png,jpg,gif,svg}'],
					dest: paths.build + 'images/'
				}]
			},

			media: {
				files: [{
					expand: true,
					cwd: paths.assets + 'media',
					src: ['**/*.{png,jpg,gif,svg}'],
					dest: paths.build + 'media/'
				}]
			},

			fonts: {
				files: [
					{
						expand: true,
						cwd: paths.assets + 'fonts',
						src: ['**/*.{eot,svg,ttf,woff,woff2,otf}'],
						dest: paths.build + 'fonts/'
					}
				]
			},

			videos: {
				files: [{
					expand: true,
					cwd: paths.assets + 'video',
					src: ['**/*'],
					dest: paths.build + 'video/'
				}]
			},

			pdf: {
				files: [{
					expand: true,
					cwd: paths.assets,
					src: ['**/*.pdf'],
					dest: paths.build + ''
				}]
			}
		},

		clean: {

			build: {
				src: ['tttraining/images', 'tttraining/scripts', 'tttraining/style.css','tttraining/video','tttraining/fonts']
			}
		},

		watch: {

			// Run SASS compliler when precompiled files are changed
			styles: {
				files: paths.assets + 'styles/**/*.scss',
				tasks: ['sass:development'],
				options: {
					livereload: false,
					spawn: false
				}
			},

			images: {
				files: [paths.assets + 'images/**/*.{png,jpg,gif}'],
				tasks: ['copy:images'],
				options: {
					livereload: false,
					interrupt: true
				}
			},

			media: {
				files: [paths.assets + 'media/**/*.{png,jpg,gif}'],
				tasks: ['copy:media'],
				options: {
					livereload: false,
					interrupt: true
				}
			},

			videos: {
				files: [paths.assets + 'video/**/*.{mp4,ogv,webm}'],
				tasks: ['copy:videos'],
				options: {
					livereload: false,
					interrupt: true
				}
			},

			scripts: {
				files: [paths.assets + 'scripts/**/*.js'],
				tasks: ['uglify:development'],
				options: {
					livereload: false,
					interrupt: true
				}
			},

		},

	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');

	// Register task(s) to run when 'grunt' command is executed
	grunt.registerTask('default', ['development']);

	// Register task(s) to run when 'grunt development' command is executed
	grunt.registerTask('development', [
		'jshint',
		'clean',
		'sass:development',
		'autoprefixer',
		'copy',
		'uglify:development',
		'watch'
	]);

	// Register task(s) to run when 'grunt release' command is executed
	grunt.registerTask('release', [
		'clean',
		'sass:release',
		'autoprefixer',
		'copy',
		'uglify:release'
	]);

};
