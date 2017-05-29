window.$ = require('jquery');
window.jQuery = window.$;
window.debounce = require('debounce');
window.throttle = require('./libraries/throttle');
window.niceSelect = require('./libraries/jquery-nice-select/jquery.nice-select');
require('./libraries/jquery.countdown.js');

// Require our js files.
require('./offcanvas');
require('./accordion');
require('./countdown');
require('./stickyMenu');
require('./callout');
require('./carousel');
require('./table-content-tab');
require('./tabs');

$('select').niceSelect();
