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
    protected string $_spaak = 'yj';


    /**
     * MyClass constructor
     *
     * @param string|null $spaak
     * @param int $getal
     */
    public function __construct(string $spaak = null, int $getal = 2)
    {
        if (!empty($spaak)) {
            $this->_spaak = $spaak . $getal;
        }
    }
}
