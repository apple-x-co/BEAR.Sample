<?php


namespace MyVendor\MyProject\Resource\App;


use BEAR\Resource\ResourceObject;

/**
 * Class Blog
 * @package MyVendor\MyProject\Resource\App
 *
 * @see https://bearsunday.github.io/manuals/1.0/ja/router.html
 */
class Blog extends ResourceObject
{
    /**
     * @param integer $id
     *
     * @return ResourceObject
     */
    public function onGet($id) : ResourceObject
    {
        $this->body = [
            'id' => $id
        ];

        return $this;
    }
}