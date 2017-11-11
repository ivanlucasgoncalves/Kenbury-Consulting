// Run tasks concurrently
module.exports = {
  options: {
    logConcurrentOutput: true
  },
  serve: ['sass','jshint','imagemin','watch']
};
