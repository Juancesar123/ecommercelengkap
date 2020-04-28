const { authenticate } = require('@feathersjs/authentication').hooks;

const guespricehook = require('../../hooks/guespricehook');
//authenticate('jwt')
module.exports = {
  before: {
    all: [],
    find: [guespricehook()],
    get: [guespricehook()],
    create: [],
    update: [],
    patch: [],
    remove: []
  },

  after: {
    all: [],
    find: [],
    get: [],
    create: [],
    update: [],
    patch: [],
    remove: []
  },

  error: {
    all: [],
    find: [],
    get: [],
    create: [],
    update: [],
    patch: [],
    remove: []
  }
};
