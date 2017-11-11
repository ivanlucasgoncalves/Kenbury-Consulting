// Keep an eye on source files in case anything changes
module.exports = {
  sass: {
    files: ['src/css/**/*'],
    tasks: ['sass','postcss']
  },
  javascript: {
    files: ['src/js/**/*'],
    tasks: ['jshint','uglify']
  },
  imagesfiles: {
    files: ['src/images/**/*.{png,jpg,gif}'],
    tasks: ['imagemin']
  },
  assetsfiles: {
    files: ['assets/**/*'],
    options: {
      livereload: true,
    }
  },
  phpfiles: {
    files: ['**/*.php'],
    options: {
      livereload: true,
    }
  }
};
