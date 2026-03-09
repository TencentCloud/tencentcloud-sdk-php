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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关于Lighthouse Instance实例的价格信息。
 *
 * @method float getOriginalBundlePrice() 获取<p>套餐单价原价。</p><p>单位：元</p>
 * @method void setOriginalBundlePrice(float $OriginalBundlePrice) 设置<p>套餐单价原价。</p><p>单位：元</p>
 * @method float getOriginalPrice() 获取<p>原价。</p><p>单位：元</p>
 * @method void setOriginalPrice(float $OriginalPrice) 设置<p>原价。</p><p>单位：元</p>
 * @method float getDiscount() 获取<p>折扣。</p>
 * @method void setDiscount(float $Discount) 设置<p>折扣。</p>
 * @method float getDiscountPrice() 获取<p>折后价。</p><p>单位：元</p>
 * @method void setDiscountPrice(float $DiscountPrice) 设置<p>折后价。</p><p>单位：元</p>
 * @method string getCurrency() 获取<p>价格货币单位。取值范围CNY:人民币。USD:美元。</p>
 * @method void setCurrency(string $Currency) 设置<p>价格货币单位。取值范围CNY:人民币。USD:美元。</p>
 * @method array getDetailPrices() 获取<p>计费项目明细。</p>
 * @method void setDetailPrices(array $DetailPrices) 设置<p>计费项目明细。</p>
 */
class InstancePrice extends AbstractModel
{
    /**
     * @var float <p>套餐单价原价。</p><p>单位：元</p>
     */
    public $OriginalBundlePrice;

    /**
     * @var float <p>原价。</p><p>单位：元</p>
     */
    public $OriginalPrice;

    /**
     * @var float <p>折扣。</p>
     */
    public $Discount;

    /**
     * @var float <p>折后价。</p><p>单位：元</p>
     */
    public $DiscountPrice;

    /**
     * @var string <p>价格货币单位。取值范围CNY:人民币。USD:美元。</p>
     */
    public $Currency;

    /**
     * @var array <p>计费项目明细。</p>
     */
    public $DetailPrices;

    /**
     * @param float $OriginalBundlePrice <p>套餐单价原价。</p><p>单位：元</p>
     * @param float $OriginalPrice <p>原价。</p><p>单位：元</p>
     * @param float $Discount <p>折扣。</p>
     * @param float $DiscountPrice <p>折后价。</p><p>单位：元</p>
     * @param string $Currency <p>价格货币单位。取值范围CNY:人民币。USD:美元。</p>
     * @param array $DetailPrices <p>计费项目明细。</p>
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
        if (array_key_exists("OriginalBundlePrice",$param) and $param["OriginalBundlePrice"] !== null) {
            $this->OriginalBundlePrice = $param["OriginalBundlePrice"];
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

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
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
