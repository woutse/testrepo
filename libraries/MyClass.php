<?php


class MyClass
{

    private string $spaak = 'yj';

    /**
     * MyClass constructor.
     */
    public function __construct($spaak = null)
    {

        if (!empty($spaak)) {
            $this->spaak = $spaak;
        }

    }

    /**
     * @return mixed|string|null
     */
    function getSpaak()
    {

        return $this->spaak;
    }

}