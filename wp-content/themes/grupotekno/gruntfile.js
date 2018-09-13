module.exports = function (grunt) {
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                options: {
                    noCache: true,
                    style: 'compressed'
                },
                files: {
                    'assets/dist/css/styles.min.css': 'assets/src/scss/bundle.scss'
                }
            }
        },

        uglify: {
            dist: {
                files: {
                    'assets/dist/js/scripts.min.js': [
                        'assets/src/js/jquery.js',
                        'assets/src/js/cycle.js',
                        'assets/src/js/timeline.js',
                        'assets/src/js/slider-empresas.js',
                        'assets/src/js/scripts.js',
                    ]
                }
            }
        },

        watch: {
            options: {
                spawn: false,
                interval: 3000
            },
            styles: {
                files: ['**/*.scss'],
                tasks: ['sass'],
            },
            scripts: {
                files: ['**/*.js'],
                tasks: ['uglify'],
                options: {
                    spawn: false
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('w', ['watch']);
    grunt.registerTask('u', ['uglify']);

};