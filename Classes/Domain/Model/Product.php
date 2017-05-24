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
 * Product
 */
class Product extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = null;
    
    /**
     * priceBundle
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ESET\Catalog\Domain\Model\Item>
     * @cascade remove
     */
    protected $priceBundle = null;
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->priceBundle = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Adds a Item
     *
     * @param \ESET\Catalog\Domain\Model\Item $priceBundle
     * @return void
     */
    public function addPriceBundle(\ESET\Catalog\Domain\Model\Item $priceBundle)
    {
        $this->priceBundle->attach($priceBundle);
    }
    
    /**
     * Removes a Item
     *
     * @param \ESET\Catalog\Domain\Model\Item $priceBundleToRemove The Item to be removed
     * @return void
     */
    public function removePriceBundle(\ESET\Catalog\Domain\Model\Item $priceBundleToRemove)
    {
        $this->priceBundle->detach($priceBundleToRemove);
    }
    
    /**
     * Returns the priceBundle
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ESET\Catalog\Domain\Model\Item> $priceBundle
     */
    public function getPriceBundle()
    {
        return $this->priceBundle;
    }
    
    /**
     * Sets the priceBundle
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ESET\Catalog\Domain\Model\Item> $priceBundle
     * @return void
     */
    public function setPriceBundle(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $priceBundle)
    {
        $this->priceBundle = $priceBundle;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

}