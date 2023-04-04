module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            options: {
              implementation: require('sass'),
              sourceMap: true
            },
            dist: {
              files: {
                'sass.css': 'src/sass/style.scss'
              }
            }
          }
    });

    // Load the plugins that provide tasks.
    grunt.loadNpmTasks('grunt-sass');

    // Default task(s).
    grunt.registerTask('default', ['sass']);

};