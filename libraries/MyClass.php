<?php


class MyClass
{

    private string $spaak = 'yj';


    /**
     * MyClass constructor.
     * @param string|null $spaak
     * @param int $getal
     */
    public function __construct(string $spaak = null, int $getal = 2)
    {

        if (!empty($spaak)) {
            $this->spaak = $spaak . $getal;
        }

    }

    /**
     * @return string
     */
    function getSpaak()
    {

        return $this->spaak;
    }

    /**
     * @return string
     */
    function getSpaak2()
    {

        return $this->spaak;
    }

}