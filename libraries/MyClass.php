<?php
namespace libraries;

/**
 * File comments
 *
 * @category Yadieyadyadya
 */

/**
 * Class comment
 *
 * @category Taf
 */
class MyClass
{

    /**
     * @var string
     */
    private string $_spaak = 'yj';

    /**
     * MyClass constructor.
     *
     * @param string|null $spaak tektew
     * @param int $getal tewtwe
     */
    public function __construct(string $spaak = null, int $getal = 2)
    {

        if (!empty($spaak)) {
            $this->_spaak = $spaak . $getal;
        }


        $raap = 1;

    }

    /**
     * @return string
     */
    function getSpaak()
    {

        return $this->_spaak;
    }

    /**
     * @return string
     */
    function getSpaak2()
    {

        return $this->_spaak;
    }

}