const app = require('../../src/app');

describe('\'users_detail\' service', () => {
  it('registered the service', () => {
    const service = app.service('users-detail');
    expect(service).toBeTruthy();
  });
});
