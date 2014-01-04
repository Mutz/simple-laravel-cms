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
                "./public/assets/stylesheets/frontend.css":"./app/assets/stylesheets/frontend.less",
                //compiling backend.less into backend.css
                "./public/assets/stylesheets/backend.css":"./app/assets/stylesheets/backend.less"
              }
          }
      },
      concat: {
        options: {
          separator: ';',
        },
        js_frontend: {
          src: [
              './bower_components/jquery/jquery.min.js',
              './app/assets/javascript/frontend.js',
              './app/assets/javascript/slider.js',
              './app/assets/javascript/classie.js',
              ],
          dest: './public/assets/javascript/frontend.js',
        },
        js_backend: {
          src: [
              './bower_components/jquery/jquery.min.js',
              './bower_components/bootstrap/dist/js/bootstrap.min.js',
              './bower_components/tinymce/js/tinymce/tinymce.min.js',
              './app/assets/javascript/backend.js'
          ],
          dest: './public/assets/javascript/backend.js',
        },
        css: {
          src: [
              './public/assets/stylesheets/backend.css',
              './bower_components/blueimp-file-upload/css/jquery.fileupload.css'
          ],
          dest: './public/assets/stylesheets/backend.css',
        },
      },
      uglify: {
        options: {
          mangle: false  // Use if you want the names of your functions and variables unchanged
        },
        dist: {
          files: {
            './public/assets/javascript/frontend.js': './public/assets/javascript/frontend.js',
            './public/assets/javascript/backend.js': './public/assets/javascript/backend.js'
          }
        },
      },
      watch: {
        js_frontend: {
          files: ['./app/assets/javascript/frontend.js'],   //watched files
          tasks: ['concat:js_frontend','uglify'],     //tasks to run
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