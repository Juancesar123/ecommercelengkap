const app = require('../../src/app');

describe('\'guesbrand\' service', () => {
  it('registered the service', () => {
    const service = app.service('guesbrand');
    expect(service).toBeTruthy();
  });
});
