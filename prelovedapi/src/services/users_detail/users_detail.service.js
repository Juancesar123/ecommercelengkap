// Initializes the `users_detail` service on path `/users-detail`
const { UsersDetail } = require('./users_detail.class');
const createModel = require('../../models/users_detail.model');
const hooks = require('./users_detail.hooks');

module.exports = function (app) {
  const Model = createModel(app);
  const paginate = app.get('paginate');

  const options = {
    Model,
    paginate
  };

  // Initialize our service with any options it requires
  app.use('/users-detail', new UsersDetail(options, app));

  // Get our initialized service so that we can register hooks
  const service = app.service('users-detail');

  service.hooks(hooks);
};
