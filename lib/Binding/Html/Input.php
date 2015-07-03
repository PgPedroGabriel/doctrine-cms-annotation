<?php

namespace Binding\Html;

/**
* Input Template
*/
class Input implements HtmlInterface
{

    private $_property  = null;
    private $_label     = null;
    private $_classes   = null;
    private $_id        = null;
    private $_html      = null;
    private $_type      = "text";
    private $_maxlength = 255;
    private $_minlength = 255;


    function __construct($property = null, $label = null, $classes = array(), $id = null, $type = "text", $maxlength = null, $minlength = null) {

        if(!is_array($classes))
            throw new HtmlException("Invalid classes param. Param need be an array. Sended param: ".var_dump($classes), 102);

        self::checkType($type);

        $this->_property  = $property;
        $this->_label     = $label;
        $this->_classes   = $classes;
        $this->_id        = $id;
        $this->_type      = $type;
        $this->_maxlength = (int)$maxlength;
        $this->_minlength = (int)$minlength;

        $this->_setHtml();
    }

    public function getHtml()
    {
        return $this->_html;
    }

    private function _setHtml()
    {

        if(empty($this->_property) ||
           empty($this->_label)    ||
           empty($this->_type))
            throw new HtmlException("No arguments required sended, Send Property and Label to the HTML", 101);

        \HtmlTemplates\Input::get();

    }

    public abstract function checkType($type = null)
    {

        if(empty($type))
            throw new HtmlException("Invalid Type in HTML. Empty Type", 105);

        switch ($type) {
            case 'text':
            case 'password':
            case 'email':
            case 'number':
                return;
            default:
                throw new HtmlException("Invalid Type in HTML. Type: $type", 102);
                break;
        }
    }
}