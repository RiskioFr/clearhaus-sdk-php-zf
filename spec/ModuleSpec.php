<?php

namespace spec\ClearhausModule;

use ClearhausModule\Module;
use PhpSpec\ObjectBehavior;

class ModuleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Module::class);
    }

    function it_should_module_config()
    {
        $this->getConfig()->shouldBeArray();
    }
}
