// function isot($) {
//   const $container = $('.isotope');
//   function imgLoaded() {
//     $container.isotope({
//       itemSelector: '.isotope-item',
//     });
//   }
//   $container.imagesLoaded(imgLoaded());
//   // store filter for each group
//   const filters = {};
//
//   $('#filters').on('click', '.button', function filtersButtons() {
//     const $this = $(this);
//     // get group key
//     const $buttonGroup = $this.parents('.button-group');
//     const filterGroup = $buttonGroup.attr('data-filter-group');
//     // set filter for group
//     filters[filterGroup] = $this.attr('data-filter');
//     // combine filters
//     let filterValue = '';
//     for (let prop = 0; prop < filters.length; prop += 1) {
//       filterValue += filters[prop];
//     }
//     if (!filterValue) { filterValue = '*'; }
//     // set filter for Isotope
//     $container.isotope({ filter: filterValue });
//   });
//
//   // change is-checked class on buttons
//   function eachButton(i, buttonGroup) {
//     const $buttonGroup = $(buttonGroup);
//     $buttonGroup.on('click', 'button', function buttonG() {
//       $buttonGroup.find('.active').removeClass('active');
//       $(this).addClass('active');
//     });
//   }
//   $('.button-group').each(eachButton());
// }

export default {
  init() {},
  finalize() {

  },
};
