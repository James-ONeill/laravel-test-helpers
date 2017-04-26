<?php

namespace JamesONeill\TestHelpers;

trait JsonResponseAssertions
{
    private function decodeResponseJson()
    {
        return $this->response->decodeResponseJson();
    }
}