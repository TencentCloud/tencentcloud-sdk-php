<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云企付-商品信息
 *
 * @method string getGoodsName() 获取商品标题。默认值“商品支付”。
 * @method void setGoodsName(string $GoodsName) 设置商品标题。默认值“商品支付”。
 * @method string getGoodsDetail() 获取商品详细描述（商品列表）。
 * @method void setGoodsDetail(string $GoodsDetail) 设置商品详细描述（商品列表）。
 * @method string getGoodsDescription() 获取银行附言。不可以有以下字符：<>+{}()%*&';"[]等特殊符号
 * @method void setGoodsDescription(string $GoodsDescription) 设置银行附言。不可以有以下字符：<>+{}()%*&';"[]等特殊符号
 * @method string getGoodsBizType() 获取业务类型。汇付渠道必填，汇付渠道传入固定值100099。
 * @method void setGoodsBizType(string $GoodsBizType) 设置业务类型。汇付渠道必填，汇付渠道传入固定值100099。
 * @method string getSku() 获取商品编号。
 * @method void setSku(string $Sku) 设置商品编号。
 * @method string getPrice() 获取商品单价。
 * @method void setPrice(string $Price) 设置商品单价。
 * @method string getQuantity() 获取商品数量
 * @method void setQuantity(string $Quantity) 设置商品数量
 * @method string getProductImage() 获取商品图片url
 * @method void setProductImage(string $ProductImage) 设置商品图片url
 * @method string getProductUrl() 获取商品链接url
 * @method void setProductUrl(string $ProductUrl) 设置商品链接url
 */
class OpenBankGoodsInfo extends AbstractModel
{
    /**
     * @var string 商品标题。默认值“商品支付”。
     */
    public $GoodsName;

    /**
     * @var string 商品详细描述（商品列表）。
     */
    public $GoodsDetail;

    /**
     * @var string 银行附言。不可以有以下字符：<>+{}()%*&';"[]等特殊符号
     */
    public $GoodsDescription;

    /**
     * @var string 业务类型。汇付渠道必填，汇付渠道传入固定值100099。
     */
    public $GoodsBizType;

    /**
     * @var string 商品编号。
     */
    public $Sku;

    /**
     * @var string 商品单价。
     */
    public $Price;

    /**
     * @var string 商品数量
     */
    public $Quantity;

    /**
     * @var string 商品图片url
     */
    public $ProductImage;

    /**
     * @var string 商品链接url
     */
    public $ProductUrl;

    /**
     * @param string $GoodsName 商品标题。默认值“商品支付”。
     * @param string $GoodsDetail 商品详细描述（商品列表）。
     * @param string $GoodsDescription 银行附言。不可以有以下字符：<>+{}()%*&';"[]等特殊符号
     * @param string $GoodsBizType 业务类型。汇付渠道必填，汇付渠道传入固定值100099。
     * @param string $Sku 商品编号。
     * @param string $Price 商品单价。
     * @param string $Quantity 商品数量
     * @param string $ProductImage 商品图片url
     * @param string $ProductUrl 商品链接url
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
        if (array_key_exists("GoodsName",$param) and $param["GoodsName"] !== null) {
            $this->GoodsName = $param["GoodsName"];
        }

        if (array_key_exists("GoodsDetail",$param) and $param["GoodsDetail"] !== null) {
            $this->GoodsDetail = $param["GoodsDetail"];
        }

        if (array_key_exists("GoodsDescription",$param) and $param["GoodsDescription"] !== null) {
            $this->GoodsDescription = $param["GoodsDescription"];
        }

        if (array_key_exists("GoodsBizType",$param) and $param["GoodsBizType"] !== null) {
            $this->GoodsBizType = $param["GoodsBizType"];
        }

        if (array_key_exists("Sku",$param) and $param["Sku"] !== null) {
            $this->Sku = $param["Sku"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("ProductImage",$param) and $param["ProductImage"] !== null) {
            $this->ProductImage = $param["ProductImage"];
        }

        if (array_key_exists("ProductUrl",$param) and $param["ProductUrl"] !== null) {
            $this->ProductUrl = $param["ProductUrl"];
        }
    }
}
