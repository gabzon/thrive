// import external dependencies
import 'jquery';
// import 'bootstrap/dist/js/bootstrap';
import 'imagesloaded/imagesloaded.pkgd.js';
import 'isotope-layout/dist/isotope.pkgd.js';
import 'semantic-ui/dist/semantic';

// import local dependencies
import Router from './util/router';
import common from './routes/Common';
import home from './routes/Home';
import aboutUs from './routes/About';
import toolbox from './routes/Toolbox';

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
const routes = {
    // All pages
  common,
    // Home page
  home,
    // About us page, note the change from about-us to aboutUs.
  aboutUs,

  toolbox,
};

// Load Events
document.addEventListener('DOMContentLoaded', () => new Router(routes).loadEvents());
