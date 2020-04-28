// Initializes the `spinnergame` service on path `/spinnergame`
const { Spinnergame } = require('./spinnergame.class');
const createModel = require('../../models/spinnergame.model');
const hooks = require('./spinnergame.hooks');

module.exports = function (app) {
  const Model = createModel(app);
  const paginate = app.get('paginate');

  const options = {
    Model,
    paginate
  };

  // Initialize our service with any options it requires
  app.use('/spinnergame', new Spinnergame(options, app));

  // Get our initialized service so that we can register hooks
  const service = app.service('spinnergame');

  service.hooks(hooks);
};
