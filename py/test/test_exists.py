# Eventbrite SDK exists test

import pytest
from eventbrite_sdk import EventbriteSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = EventbriteSDK.test(None, None)
        assert testsdk is not None
