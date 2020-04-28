const { authenticate } = require('@feathersjs/authentication').hooks;

const spinnergamehook = require('../../hooks/spinnergamehook');
//authenticate('jwt')
module.exports = {
  before: {
    all: [  ],
    find: [spinnergamehook()],
    get: [spinnergamehook()],
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
