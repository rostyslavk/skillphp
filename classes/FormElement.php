<?php
/**
 * Created by PhpStorm.
 * User: skillup
 * Date: 10.06.19
 * Time: 19:31
 */

abstract class FormElement
{
    /**
     * @var string
     */
    private $name;
    private $lable;
    public function __construct(string $name,string $lable)
    {
    $this->name = $name;
    $this->lable =$lable;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    public function getLabel(): string
    {
        return $this->lable;
    }

    abstract public function render(): string;







}
