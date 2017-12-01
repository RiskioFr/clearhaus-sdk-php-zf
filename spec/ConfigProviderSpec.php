<?php

namespace spec\ClearhausModule;

use ClearhausModule\ConfigProvider;
use PhpSpec\ObjectBehavior;

class ConfigProviderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ConfigProvider::class);
    }

    function it_should_config()
    {
        $this->__invoke()->shouldBeArray();
    }
}
