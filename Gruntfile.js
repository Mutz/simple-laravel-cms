module.exports = function(grunt) {

  //Initializing the configuration object
    grunt.initConfig({

      // Task configuration
      less: {
          development: {
              options: {
                compress: true,  //minifying the result
              },
              files: {
                //compiling frontend.less into frontend.css
                "./php/assets/stylesheets/frontend.css":"./app/assets/stylesheets/frontend.less",
                //compiling backend.less into backend.css
                "./php/assets/stylesheets/backend.css":"./app/assets/stylesheets/backend.less"
              }
          }
      },
      concat: {
        options: {
          separator: ';',
        },
        js_frontend: {
          src: [
              './bower_components/modernizr/modernizr.js',
              './bower_components/jquery/jquery.min.js',
              './bower_components/eventEmitter/EventEmitter.js',
              './bower_components/eventie/eventie.js',
              './bower_components/doc-ready/doc-ready.js',
              './bower_components/get-style-property/get-style-property.js',
              './bower_components/get-size/get-size.js',
              './bower_components/matches-selector/matches-selector.js',
              './bower_components/outlayer/item.js',
              './bower_components/outlayer/outlayer.js',
              './bower_components/masonry/masonry.js',
              './bower_components/jquery-waypoints/waypoints.js',
              './bower_components/jquery-backstretch/jquery.backstretch.min.js',
              './bower_components/bootstrap/dist/js/bootstrap.min.js',
              './app/assets/javascript/frontend.js',
              './app/assets/javascript/contactFormValidator.js',
              ],
          dest: './php/assets/javascript/frontend.js',
        },
        js_backend: {
          src: [
              './bower_components/jquery/jquery.min.js',
              './bower_components/bootstrap/dist/js/bootstrap.min.js',
              './bower_components/tinymce/js/tinymce/tinymce.min.js',
              './app/assets/javascript/backend.js'
          ],
          dest: './php/assets/javascript/backend.js',
        },
        css: {
          src: [
              './php/assets/stylesheets/backend.css',
          ],
          dest: './php/assets/stylesheets/backend.css',
        },
      },
      uglify: {
        options: {
          mangle: false  // Use if you want the names of your functions and variables unchanged
        },
        dist: {
          files: {
            './php/assets/javascript/frontend.js': './php/assets/javascript/frontend.js',
            './php/assets/javascript/backend.js': './php/assets/javascript/backend.js'
          }
        },
      },
      watch: {
        js_frontend: {
          files: ['./app/assets/javascript/frontend.js'],   //watched files
          tasks: ['concat:js_frontend'],     //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        },
        js_backend: {
          files: [
              './bower_components/jquery/jquery.min.js',
              './bower_components/bootstrap/dist/js/bootstrap.min.js',
              './app/assets/javascript/backend.js'
          ],   //watched files
          tasks: ['concat:js_backend','uglify:dist'],     //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        },
        less: {
          files: ['./app/assets/stylesheets/*.less'],  //watched files
          tasks: ['less','concat:css'],                          //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        },
      }
    });

  // Plugin loading
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-uglify');


  // Task definition
  grunt.registerTask('default', ['watch']);

};