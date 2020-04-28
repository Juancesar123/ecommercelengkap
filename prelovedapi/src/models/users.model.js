// See http://docs.sequelizejs.com/en/latest/docs/models-definition/
// for more of what you can do here.
const Sequelize = require('sequelize');
const DataTypes = Sequelize.DataTypes;

module.exports = function (app) {
  const sequelizeClient = app.get('sequelizeClient');
  const users = sequelizeClient.define('users', {
  
    email: {
      type: DataTypes.STRING,
      allowNull: false,
      unique: true
    },
    password: {
      type: DataTypes.STRING,
      allowNull: false
    },
  
  
  }, {
    hooks: {
      beforeCount(options) {
        options.raw = true;
      }
    }
  });

  // eslint-disable-next-line no-unused-vars
  users.associate = function (models) {
    const Users = models.users;
    const Spinnergame  = models.spinnergame;
    Users.hasOne(Spinnergame);
    const Guesprice  = models.guesprice;
    Users.hasOne(Guesprice);
    const Guesbrand  = models.guesprice;
    Users.hasOne(Guesbrand);
    const Puzzlegame  = models.puzzlegame;
    Users.hasOne(Puzzlegame);
    // Define associations here
    // See http://docs.sequelizejs.com/en/latest/docs/associations/
  };

  return users;
};
