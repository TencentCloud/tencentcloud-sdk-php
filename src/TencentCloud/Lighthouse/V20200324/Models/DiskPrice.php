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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云硬盘价格
 *
 * @method float getOriginalDiskPrice() 获取云硬盘单价。
 * @method void setOriginalDiskPrice(float $OriginalDiskPrice) 设置云硬盘单价。
 * @method float getOriginalPrice() 获取云硬盘总价。
 * @method void setOriginalPrice(float $OriginalPrice) 设置云硬盘总价。
 * @method float getDiscount() 获取折扣。
 * @method void setDiscount(float $Discount) 设置折扣。
 * @method float getDiscountPrice() 获取折后总价。
 * @method void setDiscountPrice(float $DiscountPrice) 设置折后总价。
 * @method array getDetailPrices() 获取计费项目明细列表。
 * @method void setDetailPrices(array $DetailPrices) 设置计费项目明细列表。
 */
class DiskPrice extends AbstractModel
{
    /**
     * @var float 云硬盘单价。
     */
    public $OriginalDiskPrice;

    /**
     * @var float 云硬盘总价。
     */
    public $OriginalPrice;

    /**
     * @var float 折扣。
     */
    public $Discount;

    /**
     * @var float 折后总价。
     */
    public $DiscountPrice;

    /**
     * @var array 计费项目明细列表。
     */
    public $DetailPrices;

    /**
     * @param float $OriginalDiskPrice 云硬盘单价。
     * @param float $OriginalPrice 云硬盘总价。
     * @param float $Discount 折扣。
     * @param float $DiscountPrice 折后总价。
     * @param array $DetailPrices 计费项目明细列表。
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
        if (array_key_exists("OriginalDiskPrice",$param) and $param["OriginalDiskPrice"] !== null) {
            $this->OriginalDiskPrice = $param["OriginalDiskPrice"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("DetailPrices",$param) and $param["DetailPrices"] !== null) {
            $this->DetailPrices = [];
            foreach ($param["DetailPrices"] as $key => $value){
                $obj = new DetailPrice();
                $obj->deserialize($value);
                array_push($this->DetailPrices, $obj);
            }
        }
    }
}
