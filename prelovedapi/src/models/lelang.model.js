// See http://docs.sequelizejs.com/en/latest/docs/models-definition/
// for more of what you can do here.
const Sequelize = require('sequelize');
const DataTypes = Sequelize.DataTypes;

module.exports = function (app) {
  const sequelizeClient = app.get('sequelizeClient');
  const lelang = sequelizeClient.define('lelang', {
    name_influencer: {
      type: DataTypes.STRING,
      allowNull: false
    },
    edited_quote: {
      type: DataTypes.STRING,
      allowNull: false
    },
    nama_barang_lelang: {
      type: DataTypes.STRING,
      allowNull: false
    },
    brand: {
      type: DataTypes.STRING,
      allowNull: false
    },
    size: {
      type: DataTypes.STRING,
      allowNull: false
    },
    harga_awal: {
      type: DataTypes.STRING,
      allowNull: false
    },
    foto_product: {
      type: DataTypes.STRING,
      allowNull: false
    },
    detail_defact: {
      type: DataTypes.STRING,
      allowNull: false
    },
    product_description: {
      type: DataTypes.STRING,
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
  lelang.associate = function (models) {
    // Define associations here
    // See http://docs.sequelizejs.com/en/latest/docs/associations/
  };

  return lelang;
};
