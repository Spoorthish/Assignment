<?php

namespace I95dev\Productimage\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use I95dev\Productimage\Helper\Data;


class Index extends Action
{

    protected $helper;


    public function __construct(
        Context  $context,
        Data $helper
    )
    {
        $this->helper = $helper;

        parent::__construct($context);
    }


    public function execute()
    {

$objectManager = \Magento\Framework\App\ObjectManager::getInstance();

$productId =  1 ;
$product = $objectManager->create('Magento\Catalog\Model\Product')->load($productId);
$productRepository = $objectManager->create('Magento\Catalog\Api\ProductRepositoryInterface');
$existingMediaGalleryEntries = $product->getMediaGalleryEntries();
foreach ($existingMediaGalleryEntries as $key => $entry) {
    unset($existingMediaGalleryEntries[$key]);
}
$product->setMediaGalleryEntries($existingMediaGalleryEntries);
$productRepository->save($product);

$imagePath = "/magento244/pub/media/product_images/imagesbag.jpeg";
$product->addImageToMediaGallery($imagePath, array('image', 'small_image', 'thumbnail'), false, false);
$product->save();

    exit();
       echo  $this->helper->getStoreConfig();
    }
}
?>
