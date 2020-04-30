const users = require('./users/users.service.js');
const spinnergame = require('./spinnergame/spinnergame.service.js');
const guesprice = require('./guesprice/guesprice.service.js');
const guesbrand = require('./guesbrand/guesbrand.service.js');
const puzzlegame = require('./puzzlegame/puzzlegame.service.js');
const usersDetail = require('./users_detail/users_detail.service.js');
const lelang = require('./lelang/lelang.service.js');
// eslint-disable-next-line no-unused-vars
module.exports = function (app) {
  app.configure(users);
  app.configure(spinnergame);
  app.configure(guesprice);
  app.configure(guesbrand);
  app.configure(puzzlegame);
  app.configure(usersDetail);
  app.configure(lelang);
};
