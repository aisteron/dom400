module.exports = function (grunt)
{
	grunt.initConfig({
		pkg:grunt.file.readJSON('package.json'),


	pug: {
		  compile: {
		    options: {
		      data: {
		        debug: false
		      }
		    },
		    files: {
		      'index.html': ['dev/index.pug'],
		      'dev/sections/section3.html': ['dev/sections/section3.pug'],
		      'dev/sections/section4.html': ['dev/sections/section4.pug'],
		      'dev/sections/section7.html': ['dev/sections/section7.pug'],
		      'dev/sections/section6.html': ['dev/sections/section6.pug']

		    }
		  }
		},

	less: {

			  production: {
			    options: {
			      paths: ['dev/css'],
			      plugins: [
			        new (require('less-plugin-autoprefix'))({browsers: ["last 3 versions"]}),
			        new (require('less-plugin-clean-css'))()
			      ]
			    },
			    files: {
			      'dev/css/custom.css': 'dev/css/custom.less'
			    }
			  }
			},
	watch:
	{
		css:
		{
			files:['dev/css/custom.less', 
				   'dev/css/sections/section2.less', 
				   'dev/css/sections/section3.less', 
				   'dev/css/sections/section4.less', 
				   'dev/css/sections/section6.less', 
				   'dev/css/sections/section7.less', 
				   'dev/css/sections/section5.less'],
			tasks:['less'],
			options: {
		      livereload: true,
		    }
		},
		scripts:
		{
			files:['dev/index.pug', 
			'dev/sections/section3.pug', 
			'dev/sections/section6.pug', 
			'dev/sections/section7.pug', 
			'dev/sections/section4.pug'],
			tasks:['pug'],
			options: {
		      livereload: true,
		    }
		}
	}				
		
	});

	grunt.loadNpmTasks('grunt-contrib-pug');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default',['pug','less','watch'])
};