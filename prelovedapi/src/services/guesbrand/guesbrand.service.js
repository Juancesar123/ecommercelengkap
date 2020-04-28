// Initializes the `guesbrand` service on path `/guesbrand`
const { Guesbrand } = require('./guesbrand.class');
const createModel = require('../../models/guesbrand.model');
const hooks = require('./guesbrand.hooks');

module.exports = function (app) {
  const Model = createModel(app);
  const paginate = app.get('paginate');

  const options = {
    Model,
    paginate
  };

  // Initialize our service with any options it requires
  app.use('/guesbrand', new Guesbrand(options, app));

  // Get our initialized service so that we can register hooks
  const service = app.service('guesbrand');

  service.hooks(hooks);
};
