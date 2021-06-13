<?php
namespace flexycms\FlexySiteSkeletonBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FlexySiteSkeletonBundle extends Bundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }
}