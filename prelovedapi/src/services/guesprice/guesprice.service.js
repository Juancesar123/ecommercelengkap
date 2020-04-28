// Initializes the `guesprice` service on path `/guesprice`
const { Guesprice } = require('./guesprice.class');
const createModel = require('../../models/guesprice.model');
const hooks = require('./guesprice.hooks');

module.exports = function (app) {
  const Model = createModel(app);
  const paginate = app.get('paginate');

  const options = {
    Model,
    paginate
  };

  // Initialize our service with any options it requires
  app.use('/guesprice', new Guesprice(options, app));

  // Get our initialized service so that we can register hooks
  const service = app.service('guesprice');

  service.hooks(hooks);
};
