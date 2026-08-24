
const { test, describe } = require('node:test')
const { equal } = require('node:assert')


const { EventbriteSDK } = require('..')


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await EventbriteSDK.test()
    equal(null !== testsdk, true)
  })

})
