

const puzzlegamehook = require('../../hooks/puzzlegamehook');

module.exports = {
  before: {
    all: [],
    find: [puzzlegamehook()],
    get: [puzzlegamehook()],
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
