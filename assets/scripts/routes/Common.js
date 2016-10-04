
export default {
  init() {
    $('.languages.dropdown').dropdown({
      transition: 'drop',
    });
    $('.cards .image').dimmer({
      on: 'hover',
    });
    function toolboxClick() {
      $('#filters.bottom.sidebar').sidebar('toggle');
    }
    $('#toolbox-filter').on('click', toolboxClick());
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
