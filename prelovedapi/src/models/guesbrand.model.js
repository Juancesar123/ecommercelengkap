// See http://docs.sequelizejs.com/en/latest/docs/models-definition/
// for more of what you can do here.
const Sequelize = require('sequelize');
const DataTypes = Sequelize.DataTypes;

module.exports = function (app) {
  const sequelizeClient = app.get('sequelizeClient');
  const guesbrand = sequelizeClient.define('guesbrand', {
    time: {
      type: DataTypes.TIME,
      allowNull: false
    },
    total_answer_correct: {
      type: DataTypes.INTEGER,
      allowNull: false
    },
    status_hadiah: {
      type: DataTypes.CHAR(1),
      allowNull: false
    }
  }, {
    hooks: {
      beforeCount(options) {
        options.raw = true;
      }
    }
  });

  // eslint-disable-next-line no-unused-vars
  guesbrand.associate = function (models) {
    const Users = models.users;
    const Guesbrand  = models.guesbrand;
    Guesbrand.belongsTo(Users);
    // Define associations here
    // See http://docs.sequelizejs.com/en/latest/docs/associations/
  };

  return guesbrand;
};
