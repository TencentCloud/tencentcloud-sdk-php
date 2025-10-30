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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预释放价格区间配置
 *
 * @method float getMaxPrice() 获取最高价格 单位元
 * @method void setMaxPrice(float $MaxPrice) 设置最高价格 单位元
 * @method float getMinPrice() 获取最低价格 单位元
 * @method void setMinPrice(float $MinPrice) 设置最低价格 单位元
 * @method float getPrice() 获取价格幅度 单位元
 * @method void setPrice(float $Price) 设置价格幅度 单位元
 * @method float getDepositPrice() 获取保证金 单位元
 * @method void setDepositPrice(float $DepositPrice) 设置保证金 单位元
 */
class PriceScopeConf extends AbstractModel
{
    /**
     * @var float 最高价格 单位元
     */
    public $MaxPrice;

    /**
     * @var float 最低价格 单位元
     */
    public $MinPrice;

    /**
     * @var float 价格幅度 单位元
     */
    public $Price;

    /**
     * @var float 保证金 单位元
     */
    public $DepositPrice;

    /**
     * @param float $MaxPrice 最高价格 单位元
     * @param float $MinPrice 最低价格 单位元
     * @param float $Price 价格幅度 单位元
     * @param float $DepositPrice 保证金 单位元
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
        if (array_key_exists("MaxPrice",$param) and $param["MaxPrice"] !== null) {
            $this->MaxPrice = $param["MaxPrice"];
        }

        if (array_key_exists("MinPrice",$param) and $param["MinPrice"] !== null) {
            $this->MinPrice = $param["MinPrice"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("DepositPrice",$param) and $param["DepositPrice"] !== null) {
            $this->DepositPrice = $param["DepositPrice"];
        }
    }
}
