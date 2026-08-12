<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商品信息
 *
 * @method string getItemId() 获取<p>商品ID</p>
 * @method void setItemId(string $ItemId) 设置<p>商品ID</p>
 * @method string getItemName() 获取<p>商品名称</p>
 * @method void setItemName(string $ItemName) 设置<p>商品名称</p>
 * @method string getCategory() 获取<p>商品类别</p>
 * @method void setCategory(string $Category) 设置<p>商品类别</p>
 * @method Amount getPrice() 获取<p>商品单价</p>
 * @method void setPrice(Amount $Price) 设置<p>商品单价</p>
 * @method string getUPC() 获取<p>如果商品有UPC码（Universal Product Code），请提供</p>
 * @method void setUPC(string $UPC) 设置<p>如果商品有UPC码（Universal Product Code），请提供</p>
 * @method string getEAN() 获取<p>如果商品有EAN码（European Article Number），请提供</p>
 * @method void setEAN(string $EAN) 设置<p>如果商品有EAN码（European Article Number），请提供</p>
 * @method string getSKU() 获取<p>如果商品有SKU码（Stock Keeping Unit），请提供</p>
 * @method void setSKU(string $SKU) 设置<p>如果商品有SKU码（Stock Keeping Unit），请提供</p>
 * @method string getISBN() 获取<p>如果商品有ISBN码（International Standard Book Number ），请提供</p>
 * @method void setISBN(string $ISBN) 设置<p>如果商品有ISBN码（International Standard Book Number ），请提供</p>
 * @method string getBrand() 获取<p>商品品牌</p>
 * @method void setBrand(string $Brand) 设置<p>商品品牌</p>
 * @method integer getQuantity() 获取<p>商品数量</p>
 * @method void setQuantity(integer $Quantity) 设置<p>商品数量</p>
 * @method string getManufacturer() 获取<p>生产厂商</p>
 * @method void setManufacturer(string $Manufacturer) 设置<p>生产厂商</p>
 * @method string getTags() 获取<p>商品标签</p>
 * @method void setTags(string $Tags) 设置<p>商品标签</p>
 */
class Item extends AbstractModel
{
    /**
     * @var string <p>商品ID</p>
     */
    public $ItemId;

    /**
     * @var string <p>商品名称</p>
     */
    public $ItemName;

    /**
     * @var string <p>商品类别</p>
     */
    public $Category;

    /**
     * @var Amount <p>商品单价</p>
     */
    public $Price;

    /**
     * @var string <p>如果商品有UPC码（Universal Product Code），请提供</p>
     */
    public $UPC;

    /**
     * @var string <p>如果商品有EAN码（European Article Number），请提供</p>
     */
    public $EAN;

    /**
     * @var string <p>如果商品有SKU码（Stock Keeping Unit），请提供</p>
     */
    public $SKU;

    /**
     * @var string <p>如果商品有ISBN码（International Standard Book Number ），请提供</p>
     */
    public $ISBN;

    /**
     * @var string <p>商品品牌</p>
     */
    public $Brand;

    /**
     * @var integer <p>商品数量</p>
     */
    public $Quantity;

    /**
     * @var string <p>生产厂商</p>
     */
    public $Manufacturer;

    /**
     * @var string <p>商品标签</p>
     */
    public $Tags;

    /**
     * @param string $ItemId <p>商品ID</p>
     * @param string $ItemName <p>商品名称</p>
     * @param string $Category <p>商品类别</p>
     * @param Amount $Price <p>商品单价</p>
     * @param string $UPC <p>如果商品有UPC码（Universal Product Code），请提供</p>
     * @param string $EAN <p>如果商品有EAN码（European Article Number），请提供</p>
     * @param string $SKU <p>如果商品有SKU码（Stock Keeping Unit），请提供</p>
     * @param string $ISBN <p>如果商品有ISBN码（International Standard Book Number ），请提供</p>
     * @param string $Brand <p>商品品牌</p>
     * @param integer $Quantity <p>商品数量</p>
     * @param string $Manufacturer <p>生产厂商</p>
     * @param string $Tags <p>商品标签</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new Amount();
            $this->Price->deserialize($param["Price"]);
        }

        if (array_key_exists("UPC",$param) and $param["UPC"] !== null) {
            $this->UPC = $param["UPC"];
        }

        if (array_key_exists("EAN",$param) and $param["EAN"] !== null) {
            $this->EAN = $param["EAN"];
        }

        if (array_key_exists("SKU",$param) and $param["SKU"] !== null) {
            $this->SKU = $param["SKU"];
        }

        if (array_key_exists("ISBN",$param) and $param["ISBN"] !== null) {
            $this->ISBN = $param["ISBN"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
