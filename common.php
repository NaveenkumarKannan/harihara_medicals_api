<?php
/**
 * Created by PhpStorm.
 * User: kc
 * Date: 11/29/2018
 * Time: 7:50 PM
 */

class Common
{
  public function uploadData($connection,$productname,$commany,$category,$price,$dosage,$prescriptionrequired,$SKU,$expirydate,$stock)
  {
      $mainQuery = "INSERT INTO  products SET productname='$name',company='$company',category='$category',price='$price',dosage='$dosage',prescriptionrequired='$prescriptionrequired',SKU='$SKU',expirydate='$expirydate',stock='$stock'";
      $result1 = $connection->query($mainQuery) or die("Error in main Query".$connection->error);
      return $result1;
  }
}