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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 公网询价出参
 *
 * @method InternetPriceDetail getAddressPrice() 获取公网IP网络费询价详细参数。
 * @method void setAddressPrice(InternetPriceDetail $AddressPrice) 设置公网IP网络费询价详细参数。
 * @method InternetPriceDetail getIPPrice() 获取公网IP资源费询价详细参数。仅原生IP价格查询返回。
 * @method void setIPPrice(InternetPriceDetail $IPPrice) 设置公网IP资源费询价详细参数。仅原生IP价格查询返回。
 * @method float getOriginalPrice() 获取总原价，单位：元，仅预付费价格查询返回。
 * @method void setOriginalPrice(float $OriginalPrice) 设置总原价，单位：元，仅预付费价格查询返回。
 * @method float getDiscountPrice() 获取折扣后的总价格，单位：元。仅预付费价格查询返回。
 * @method void setDiscountPrice(float $DiscountPrice) 设置折扣后的总价格，单位：元。仅预付费价格查询返回。
 */
class InternetPrice extends AbstractModel
{
    /**
     * @var InternetPriceDetail 公网IP网络费询价详细参数。
     */
    public $AddressPrice;

    /**
     * @var InternetPriceDetail 公网IP资源费询价详细参数。仅原生IP价格查询返回。
     */
    public $IPPrice;

    /**
     * @var float 总原价，单位：元，仅预付费价格查询返回。
     */
    public $OriginalPrice;

    /**
     * @var float 折扣后的总价格，单位：元。仅预付费价格查询返回。
     */
    public $DiscountPrice;

    /**
     * @param InternetPriceDetail $AddressPrice 公网IP网络费询价详细参数。
     * @param InternetPriceDetail $IPPrice 公网IP资源费询价详细参数。仅原生IP价格查询返回。
     * @param float $OriginalPrice 总原价，单位：元，仅预付费价格查询返回。
     * @param float $DiscountPrice 折扣后的总价格，单位：元。仅预付费价格查询返回。
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
        if (array_key_exists("AddressPrice",$param) and $param["AddressPrice"] !== null) {
            $this->AddressPrice = new InternetPriceDetail();
            $this->AddressPrice->deserialize($param["AddressPrice"]);
        }

        if (array_key_exists("IPPrice",$param) and $param["IPPrice"] !== null) {
            $this->IPPrice = new InternetPriceDetail();
            $this->IPPrice->deserialize($param["IPPrice"]);
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }
    }
}
