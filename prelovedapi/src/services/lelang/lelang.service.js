// Initializes the `lelang` service on path `/lelang`
const { Lelang } = require('./lelang.class');
const createModel = require('../../models/lelang.model');
const hooks = require('./lelang.hooks');

module.exports = function (app) {
  const Model = createModel(app);
  const paginate = app.get('paginate');

  const options = {
    Model,
    paginate
  };

  // Initialize our service with any options it requires
  app.use('/lelang', new Lelang(options, app));

  // Get our initialized service so that we can register hooks
  const service = app.service('lelang');

  service.hooks(hooks);
};
