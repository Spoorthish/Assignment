<?php

namespace I95dev\Productimage\Helper;
use \Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
       public function getStoreConfig()
       {
               $num=-9.99;
   echo "negative float number: " . $num . "\n";
   echo "absolute value : " . abs($num) . "\n";
   $num=25.55;
   echo "positive float number: " . $num . "\n";
   echo "absolute value : " . round($num);
       }
}
