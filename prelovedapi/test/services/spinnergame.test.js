const app = require('../../src/app');

describe('\'spinnergame\' service', () => {
  it('registered the service', () => {
    const service = app.service('spinnergame');
    expect(service).toBeTruthy();
  });
});
