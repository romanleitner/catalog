<?php
namespace ESET\Catalog\Controller;

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
 * ProductController
 */
class ProductController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * productRepository
     *
     * @var \ESET\Catalog\Domain\Repository\ProductRepository
     * @inject
     */
    protected $productRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {    
      $flexFormSelectedProduct = 1;
      $product = $this->productRepository->findByUid($flexFormSelectedProduct);
      $this->view->assign('product', $product);
    }
    
    /**
     * action ajax
     *
     * @return void
     */
    public function ajaxAction()
    {
      $arguments = \TYPO3\CMS\Core\Utility\GeneralUtility::_GP('tx_catalog_eset');
      
      if ( (int)$arguments['uid'] > 0 ){
        $extbaseObjectManager  = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $productRepository = $extbaseObjectManager->get('ESET\\Catalog\\Domain\\Repository\\ProductRepository');
        $product = $productRepository->findByUid( (int)$arguments['uid'] );   
        
        foreach($product->getPriceBundle() as $bundle){
          if( $bundle->getNrLicences() == (int)$arguments['users'] && $bundle->getNrYears() == (int)$arguments['years'] ){
            $priceArray = \TYPO3\CMS\Core\Utility\GeneralUtility::intExplode('.', $bundle->getPrice());

            echo json_encode( array('amount' => $priceArray[0].'.', 'cents' => $priceArray[1], 'arguments' => $arguments) );
            die();
          }
        }
             
      }       
      
      echo json_encode( array('status' => FALSE, 'arguments' => $arguments) );
      die();
    }    

}