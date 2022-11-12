<?php


class MyClass
{

    private string $spaak = 'yj';

    /**
     * MyClass constructor.
     * @param string|null $spaak
     */
    public function __construct(string $spaak = null)
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