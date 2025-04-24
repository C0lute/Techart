const path = require('path');

module.exports = {
  entry: {
	import: './src/index.js',
  },
  output: {
    filename: 'new.js',
    path: path.resolve(__dirname, 'dist'),
  },
};