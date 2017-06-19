/**
 * Created by alex vaught.
 * license MIT
 * date 2017
 */
'use strict';
module.exports = function (grunt) {
    grunt.initConfig({
        /**
         * CONFIG GENERAL
         */
        pkg: grunt.file.readJSON('package.json'),
        /**
         * LESS
         */
        less: {
            compile: {
                files: {
                    //****** MAIN CARIBBEAN PARADISE  LESS -> CSS *****//
                    'dev/less/main-generals.css': 'dev/less/generals.less'
                }
            }
        },
        /**
         * CSSMIN
         */
        cssmin: {
            options: {
                shorthandCompacting: false,
                roundingPrecision: -1
            },
            target: {
                files: {
                    //****** MINIFY MAIN CARIBBEAN PARADISE CSS -> MIN.CSS *****//
                    'dist/wp-content/themes/divi-child/assets/css/wpboilerplate.min.css': ['dev/less/main-generals.css']
                }
            }
        },
        /**
         * CONCAT
         */
        concat: {
            options: {
                stripBanners: true,
                banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
                '<%= grunt.template.today("yyyy-mm-dd") %> */',
            },
            //****** CONCAT * TOP MENU -> JS *****//
            dist: {
                src: ['dev/scripts/base.js','dev/scripts/func.js'],
                dest: 'dev/scripts/generals.js'
            }
        },
        /**
         *  UGLIFY
         */
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
                '<%= grunt.template.today("yyyy-mm-dd") %> */'
            },
            my_target: {
                files: {
                    //****** UGLIFY TOP-MENU JS *****//
                    'dist/wp-content/themes/divi-child/assets/scripts/wpboilerplate.min.js': ['dev/scripts/generals.js'],
                }
            }
        },
        /**
         * WATCH
         */
        watch: {
            files: ['dev/**/*'],
            tasks: ['less', 'cssmin', 'concat', 'uglify']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.registerTask('default', ['watch']);

};