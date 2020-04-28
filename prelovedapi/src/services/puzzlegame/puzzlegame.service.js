// Initializes the `puzzlegame` service on path `/puzzlegame`
const { Puzzlegame } = require('./puzzlegame.class');
const createModel = require('../../models/puzzlegame.model');
const hooks = require('./puzzlegame.hooks');

module.exports = function (app) {
  const Model = createModel(app);
  const paginate = app.get('paginate');

  const options = {
    Model,
    paginate
  };

  // Initialize our service with any options it requires
  app.use('/puzzlegame', new Puzzlegame(options, app));

  // Get our initialized service so that we can register hooks
  const service = app.service('puzzlegame');

  service.hooks(hooks);
};
