


var filtersConfig = {
  // instruct TableFilter location to import ressources from
  base_path: 'https://unpkg.com/tablefilter@latest/dist/tablefilter/',
  rows_counter: true,
  btn_reset: true,
  loader: true,
  mark_active_columns: true,
  highlight_keywords: true,
  no_results_message: true,
  responsive: true,
  paging: {
    results_per_page: ['Einträge pro Seite: ', [10, 25, 50, 100]]
  }

};

var tf = new TableFilter('log', filtersConfig);
tf.init();
