module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            sass: {
              files: ['**/*.scss'],
              tasks: ['sass']
            }
          },
        sass: {
            options: {
              implementation: require('sass'),
              sourceMap: true
            },
            dist: {
              files: {
                'sass.css': 'src/sass/*.scss'
              }
            }
          }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
  
    grunt.registerTask('default', ['watch']);

};