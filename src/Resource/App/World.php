<?php


namespace MyVendor\MyProject\Resource\App;


use BEAR\Resource\Annotation\JsonSchema;
use BEAR\Resource\ResourceObject;

/**
 * Class World
 * @package MyVendor\MyProject\Resource\App
 *
 * @see https://bearsunday.github.io/manuals/1.0/ja/validation.html
 */
class World extends ResourceObject
{
    /**
     * @param string $name
     *
     * @return ResourceObject
     *
     * @JsonSchema(schema="world.json", params="world.params.json")
     */
    public function onGet(string $name = 'BEAR.Sunday') : ResourceObject
    {
        $this->body = [
            'greeting' => 'Hello ' . $name
        ];

        return $this;
    }

    /**
     * @param $name
     *
     * @return ResourceObject
     */
    public function onPost($name)
    {
        $this->body = [
            'name' => $name
        ];

        return $this;
    }
}