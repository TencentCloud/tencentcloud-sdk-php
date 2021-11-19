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
 * 实例价格信息
 *
 * @method InstancePricesPartDetail getInstancePricesPartDetail() 获取分部描述实例子维度的价格
 * @method void setInstancePricesPartDetail(InstancePricesPartDetail $InstancePricesPartDetail) 设置分部描述实例子维度的价格
 * @method integer getDiscount() 获取实例总价折扣
 * @method void setDiscount(integer $Discount) 设置实例总价折扣
 * @method integer getDiscountPrice() 获取折扣后价格
 * @method void setDiscountPrice(integer $DiscountPrice) 设置折扣后价格
 * @method integer getOriginalPrice() 获取折扣前价格，原始总价
 * @method void setOriginalPrice(integer $OriginalPrice) 设置折扣前价格，原始总价
 */
class InstancesPrice extends AbstractModel
{
    /**
     * @var InstancePricesPartDetail 分部描述实例子维度的价格
     */
    public $InstancePricesPartDetail;

    /**
     * @var integer 实例总价折扣
     */
    public $Discount;

    /**
     * @var integer 折扣后价格
     */
    public $DiscountPrice;

    /**
     * @var integer 折扣前价格，原始总价
     */
    public $OriginalPrice;

    /**
     * @param InstancePricesPartDetail $InstancePricesPartDetail 分部描述实例子维度的价格
     * @param integer $Discount 实例总价折扣
     * @param integer $DiscountPrice 折扣后价格
     * @param integer $OriginalPrice 折扣前价格，原始总价
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
        if (array_key_exists("InstancePricesPartDetail",$param) and $param["InstancePricesPartDetail"] !== null) {
            $this->InstancePricesPartDetail = new InstancePricesPartDetail();
            $this->InstancePricesPartDetail->deserialize($param["InstancePricesPartDetail"]);
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
