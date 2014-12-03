module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-coffee');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.initConfig({
    coffee: {
      compile: {
        files: {
          'web/js/app.js': ['web/coffee/*.coffee']
        }
      }
    },
    uglify: {
      options: {
        separator: ';'
      },
      compile: {
        src: 'web/js/app.js',
        dest: 'web/js/app.min.js'
      }
    },
    less: {
        dist: {
          files: {
            "web/css/app.css": ["web/less/*.less"]
          }
        }
    },
    cssmin: {
        combine: {
          files: {
            'web/css/app.min.css': ['web/css/app.css']
          }
        }
    },
    watch: {
      scripts: {
        files: '**/*.coffee',
        tasks: ['coffee:compile', 'uglify:compile']
      },
      
      styles: {
        files: '**/*.less',
        tasks: ['less:dist', 'cssmin:combine']
      }
    }
  });

  grunt.registerTask('default', ['coffee', 'uglify', 'less', 'cssmin', 'watch']);
};
