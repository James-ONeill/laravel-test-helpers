<?php

namespace JamesONeill\TestHelpers\Rest;

trait TestsResourceCreation
{
    protected $createResourcePath = '/';

    protected $resourceClass;

    protected $defaultFields = [];

    protected $createdFields;

    protected $createdResource;

    protected $response;

    protected function createResource($fields = [])
    {
        $this->createdFields = array_merge($this->defaultFields, $fields);

        $this->response = $this->postJson($this->createResourcePath, $this->createdFields);
    }

    protected function assertResourceCreated()
    {
        $this->assertEquals(1, $this->resourceClass::count());
    }

    protected function assertResourceNotCreated()
    {
        $this->assertEquals(0, $this->resourceClass::count());
    }
}