
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { EventbriteSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await EventbriteSDK.test()
    equal(null !== testsdk, true)
  })

})
