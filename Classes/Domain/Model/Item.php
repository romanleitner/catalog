<?php
namespace ESET\Catalog\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Roman Leitner <rleitner77@gmai.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Item
 */
class Item extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * nrLicences
     *
     * @var int
     */
    protected $nrLicences = 0;
    
    /**
     * nrYears
     *
     * @var int
     */
    protected $nrYears = 0;
    
    /**
     * price
     *
     * @var float
     */
    protected $price = 0.0;
    
    /**
     * Returns the nrLicences
     *
     * @return int $nrLicences
     */
    public function getNrLicences()
    {
        return $this->nrLicences;
    }
    
    /**
     * Sets the nrLicences
     *
     * @param int $nrLicences
     * @return void
     */
    public function setNrLicences($nrLicences)
    {
        $this->nrLicences = $nrLicences;
    }
    
    /**
     * Returns the nrYears
     *
     * @return int $nrYears
     */
    public function getNrYears()
    {
        return $this->nrYears;
    }
    
    /**
     * Sets the nrYears
     *
     * @param int $nrYears
     * @return void
     */
    public function setNrYears($nrYears)
    {
        $this->nrYears = $nrYears;
    }
    
    /**
     * Returns the price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * Sets the price
     *
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

}