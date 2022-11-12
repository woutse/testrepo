<?php


class MyClass
{

    private string $spaak = 'yj';

    /**
     * MyClass constructor.
     * @param string|null $spaak
     */
    public function __construct(string $spaak = null, $getal = 2)
    {

        if (!empty($spaak)) {
            $this->spaak = $spaak;
        }

    }

    /**
     * @return string
     */
    function getSpaak()
    {

        return $this->spaak;
    }

    function getSpaak2()
    {

        return $this->spaak;
    }

}