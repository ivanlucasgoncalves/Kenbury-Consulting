// Compile SASS into CSS
module.exports = {
  dist: {
    options: {
      style: 'compressed',
      sourcemap: 'none',
      noCache: true, 
    },
    files: [{
      expand: true,
      cwd: 'src/css',
      src: ['*.scss'],
      dest: 'assets/css',
      ext: '.min.css'
    }]
  }
};
