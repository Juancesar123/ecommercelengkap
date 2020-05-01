// See http://docs.sequelizejs.com/en/latest/docs/models-definition/
// for more of what you can do here.
const Sequelize = require('sequelize');
const DataTypes = Sequelize.DataTypes;

module.exports = function (app) {
  const sequelizeClient = app.get('sequelizeClient');
  const puzzlegame = sequelizeClient.define('puzzlegame', {
    fullname: {
      type: DataTypes.STRING,
      allowNull: false
    },
    time: {
      type: DataTypes.STRING,
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
  puzzlegame.associate = function (models) {
    // See http://docs.sequelizejs.com/en/latest/docs/associations/
  };

  return puzzlegame;
};
