// WARNING!!!!!
// Order Matters In Every Plugin That's Why no ** or * Blop Pattern Used

module.exports = function (grunt) {
    // Project configuration.
    grunt.initConfig({
        'dart-sass': {
            dev: {
                files: [
                    {
                        src: 'sass/Layout/Header.scss',
                        dest: 'build/css/Header.css',
                    },
                    {
                        src: 'sass/Layout/Footer.scss',
                        dest: 'build/css/Footer.css',
                    },
                    {
                        src: 'sass/Pages/Page1.scss',
                        dest: 'build/css/Page1.css',
                    },
                    {
                        src: 'sass/Pages/Page2.scss',
                        dest: 'build/css/Page2.css',
                    },
                ],
            },
        },

        concat: {
            css: {
                files: [
                    {
                        src: [
                            'build/css/Header.css',
                            'build/css/Footer.css',
                            'build/css/Page1.css',
                            'build/css/Page2.css',
                        ],
                        dest: 'build/css/all.css',
                    },
                ],
            },

            js: {
                files: [
                    {
                        src: ['js/app.js', 'js/popup.js'],
                        dest: 'build/js/all.js',
                    },
                ],
            },
        },

        cssmin: {
            prod: {
                files: [
                    {
                        src: 'build/css/all.css',
                        dest: 'build/css/all.min.css',
                    },
                ],
            },
        },

        uglify: {
            prod: {
                options: {
                    mangle: true,
                },
                files: {
                    'build/js/all.min.js': 'build/js/all.js',
                },
            },
        },

        watch: {
            files: ['sass/**/*.scss', 'js/**/.js'],
            tasks: ['dart-sass', 'concat', 'cssmin', 'uglify'],
        },
    });

    grunt.loadNpmTasks('grunt-dart-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('all', [
        'dart-sass',
        'concat',
        'cssmin',
        'uglify',
        'watch',
    ]);

    // Default task(s).
    grunt.registerTask('default', ['all']);
};
