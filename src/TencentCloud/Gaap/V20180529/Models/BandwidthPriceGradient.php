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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getBandwidthRange() 获取带宽范围。
 * @method void setBandwidthRange(array $BandwidthRange) 设置带宽范围。
 * @method float getBandwidthUnitPrice() 获取在对应带宽范围内的单宽单价，单位：元/Mbps/天。
 * @method void setBandwidthUnitPrice(float $BandwidthUnitPrice) 设置在对应带宽范围内的单宽单价，单位：元/Mbps/天。
 */

/**
 *带宽梯度价格
 */
class BandwidthPriceGradient extends AbstractModel
{
    /**
     * @var array 带宽范围。
     */
    public $BandwidthRange;

    /**
     * @var float 在对应带宽范围内的单宽单价，单位：元/Mbps/天。
     */
    public $BandwidthUnitPrice;
    /**
     * @param array $BandwidthRange 带宽范围。
     * @param float $BandwidthUnitPrice 在对应带宽范围内的单宽单价，单位：元/Mbps/天。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BandwidthRange",$param) and $param["BandwidthRange"] !== null) {
            $this->BandwidthRange = $param["BandwidthRange"];
        }

        if (array_key_exists("BandwidthUnitPrice",$param) and $param["BandwidthUnitPrice"] !== null) {
            $this->BandwidthUnitPrice = $param["BandwidthUnitPrice"];
        }
    }
}
