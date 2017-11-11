// Minify images
const gifsicle = require('imagemin-gifsicle');
const jpegtran = require('imagemin-jpegtran');
const optipng = require('imagemin-optipng');
module.exports = {
  minifyimages: {
    options: {
      cache: false,
      optimizationLevel: 5,
      progressive: true,
      use: [gifsicle(), jpegtran(), optipng()]
    },
    files: [{
        expand: true,
        cwd: 'src/images',
        src: ['**/*.{png,jpg,gif}'],
        dest: 'assets/images',
    }]
  }
};
