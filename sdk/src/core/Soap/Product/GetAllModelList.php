<?php
/**
 * Created by Goci
 * Created by Goci
 * Date: 8/08/2019
 * Time: 16:30
 */

namespace Sdk\Soap\Product;


use Sdk\Soap\BaliseTool;

class GetAllModelList extends BaliseTool
{

    public function __construct($xmlns = 'xmlns="https://www.goci.ci"')
    {
        $this->_xmlns = $xmlns;
        $this->_tag = 'GetAllModelList';
        parent::__construct();
    }
}
