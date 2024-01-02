<?php
namespace Ivan\Amasty\Block;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    public function sayHi(string $name): string
    {
        return "Hi, {$name}";
    }
}