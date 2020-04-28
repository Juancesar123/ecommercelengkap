const app = require('../../src/app');

describe('\'guesprice\' service', () => {
  it('registered the service', () => {
    const service = app.service('guesprice');
    expect(service).toBeTruthy();
  });
});
