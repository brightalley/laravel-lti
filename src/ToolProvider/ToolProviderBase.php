<?php

namespace RobertBoes\LaravelLti\ToolProvider;

use IMSGlobal\LTI\ToolProvider\ToolProvider as IMSToolProvider;
use RobertBoes\LaravelLti\Exceptions\ToolConsumerInvalidCallException;

class ToolProviderBase extends IMSToolProvider
{
    public function onLaunch()
    {

    }

    public function onContentItem()
    {

    }

    public function onRegister()
    {

    }

    /**
     * @throws ToolConsumerInvalidCallException
     */
    protected function onError() : void
    {
        throw new ToolConsumerInvalidCallException($this->reason);
    }
}
