<?php


namespace MyVendor\MyProject\Resource\Page;


use BEAR\Resource\Annotation\JsonSchema;
use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

/**
 * Class World
 * @package MyVendor\MyProject\Resource\Page
 *
 * @see https://bearsunday.github.io/manuals/1.0/ja/resource.html
 */
class World extends ResourceObject
{
    use ResourceInject;

    /**
     * @param string $name
     *
     * @return ResourceObject
     */
    public function onGet($name)
    {
        $this->body = $this->resource->get('app://self/world', ['name' => $name])->body;

        return $this;
    }

    /**
     * @param $name
     *
     * @return ResourceObject
     */
    public function onPost($name)
    {
        $this->body = $this->resource->post('app://self/world', ['name' => $name])->body;

        return $this;
    }
}