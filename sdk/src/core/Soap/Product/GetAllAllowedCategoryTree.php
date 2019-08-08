<?php
/**
 * Created by Goci
 * Created by Goci
 * Date: 8/8/2019
 * Time: 16:30
 */

namespace Sdk\Soap\Product;


use Sdk\Soap\XmlUtils;

class GetAllAllowedCategoryTree
{
    private $_tag = 'GetAllAllowedCategoryTree';

    private $_xmlns = '';

    private $_xmlUtil;

    public function __construct($xmlns = 'xmlns="http://www.goci.ci"')
    {
        $this->_xmlns = $xmlns;
        $this->_xmlUtil = new XmlUtils('');
    }

    private function _generateOpeningBalise()
    {
        $inlines = array($this->_xmlns);

        return $this->_xmlUtil->generateOpenBaliseWithInline($this->_tag, $inlines);
    }

    private function _generateClosingBalise()
    {
        return $this->_xmlUtil->generateCloseBalise($this->_tag);
    }

    public function generateEnclosingBalise($child)
    {
        $xml = $this->_generateOpeningBalise();
        $xml .= $child;
        $xml .= $this->_generateClosingBalise();
        return $xml;
    }
}
