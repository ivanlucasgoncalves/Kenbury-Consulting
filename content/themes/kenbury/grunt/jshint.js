// Validate files with JSHint
module.exports = {
  jshint: {
    options: {
      jshintrc: '.jshintrc',
      node: true
    },
    'files': {
      'src': [
        'src/{,*/}*.js'
      ]
    }
  }
};
