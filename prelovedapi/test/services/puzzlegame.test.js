const app = require('../../src/app');

describe('\'puzzlegame\' service', () => {
  it('registered the service', () => {
    const service = app.service('puzzlegame');
    expect(service).toBeTruthy();
  });
});
