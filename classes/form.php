<?php
/**
 * Created by PhpStorm.
 * User: skillup
 * Date: 10.06.19
 * Time: 19:14
 */

class form
{


    private $elements;
    public function add($type,$name)
    {
        $this ->elements[$name] = $type;
    }

    /**
     * @return mixed
     */
    public function getElements()
    {
        return $this->elements;
    }
    public function render ()
    {
        $html = '<form>';
        foreach ($this->elements as $element)
        {
            $html .=$element->render().'<br>';
        }

        $html .= '</form>';
       return $html;
    }



}