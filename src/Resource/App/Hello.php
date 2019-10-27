<?php


namespace MyVendor\MyProject\Resource\App;


use BEAR\Resource\ResourceObject;
use Ray\Validation\Annotation\OnValidate;
use Ray\Validation\Annotation\Valid;
use Ray\Validation\Validation;

/**
 * Class Hello
 * @package MyVendor\MyProject\Resource\App
 *
 * @see https://bearsunday.github.io/manuals/1.0/ja/validation.html
 */
class Hello extends ResourceObject
{
    /**
     * @param string $name
     *
     * @return ResourceObject
     *
     * @Valid
     */
    public function onGet(string $name = 'BEAR.Sunday') : ResourceObject
    {
        $this->body = [
            'greeting' => 'Hello ' . $name
        ];

        return $this;
    }

    /**
     * @param string $name
     *
     * @return Validation
     *
     * @OnValidate
     */
    public function onValidate(string $name = 'BEAR.Sunday') : Validation
    {
        $validation = new Validation;
        if ($name === 'BEAR.Sunday') {
            $validation->addError('name', 'name should be string');
        }

        return $validation;
    }
}