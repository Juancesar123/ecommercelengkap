const app = require('../../src/app');

describe('\'lelang\' service', () => {
  it('registered the service', () => {
    const service = app.service('lelang');
    expect(service).toBeTruthy();
  });
});
