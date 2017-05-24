<?php

namespace ESET\Catalog\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Roman Leitner <rleitner77@gmai.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \ESET\Catalog\Domain\Model\Item.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Roman Leitner <rleitner77@gmai.com>
 */
class ItemTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \ESET\Catalog\Domain\Model\Item
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \ESET\Catalog\Domain\Model\Item();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNrLicencesReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setNrLicencesForIntSetsNrLicences()
	{	}

	/**
	 * @test
	 */
	public function getNrYearsReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setNrYearsForIntSetsNrYears()
	{	}

	/**
	 * @test
	 */
	public function getPriceReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getPrice()
		);
	}

	/**
	 * @test
	 */
	public function setPriceForFloatSetsPrice()
	{
		$this->subject->setPrice(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'price',
			$this->subject,
			'',
			0.000000001
		);
	}
}
