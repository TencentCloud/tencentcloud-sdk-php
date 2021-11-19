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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述cpu,内存等维度的价格
 *
 * @method integer getDiscount() 获取表示折扣，20 表示20%，打2折
 * @method void setDiscount(integer $Discount) 设置表示折扣，20 表示20%，打2折
 * @method integer getDiscountPrice() 获取打折后价格，单位分
 * @method void setDiscountPrice(integer $DiscountPrice) 设置打折后价格，单位分
 * @method integer getOriginalPrice() 获取折扣前价格，单位分
 * @method void setOriginalPrice(integer $OriginalPrice) 设置折扣前价格，单位分
 */
class PriceDetail extends AbstractModel
{
    /**
     * @var integer 表示折扣，20 表示20%，打2折
     */
    public $Discount;

    /**
     * @var integer 打折后价格，单位分
     */
    public $DiscountPrice;

    /**
     * @var integer 折扣前价格，单位分
     */
    public $OriginalPrice;

    /**
     * @param integer $Discount 表示折扣，20 表示20%，打2折
     * @param integer $DiscountPrice 打折后价格，单位分
     * @param integer $OriginalPrice 折扣前价格，单位分
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
        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }
    }
}
