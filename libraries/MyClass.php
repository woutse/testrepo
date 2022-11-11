<?php


class MyClass
{

    private $spaak = null;

    /**
     * MyClass constructor.
     */
    public function __construct($spaak = null)
    {

        if (!empty($spaak)) {
            $this->spaak = $spaak;
        }

    }

    function getSpaak()
    {
        return $this->spaak;
    }

}