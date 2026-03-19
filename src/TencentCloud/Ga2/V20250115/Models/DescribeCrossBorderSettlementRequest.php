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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCrossBorderSettlement请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取全球加速实例ID。
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置全球加速实例ID。
 * @method string getAccelerateRegion() 获取加速地域。
 * @method void setAccelerateRegion(string $AccelerateRegion) 设置加速地域。
 * @method string getEndpointGroupRegion() 获取终端节点组地域。
 * @method void setEndpointGroupRegion(string $EndpointGroupRegion) 设置终端节点组地域。
 * @method integer getSettlementMonth() 获取账单年月时间。
 * @method void setSettlementMonth(integer $SettlementMonth) 设置账单年月时间。
 */
class DescribeCrossBorderSettlementRequest extends AbstractModel
{
    /**
     * @var string 全球加速实例ID。
     */
    public $GlobalAcceleratorId;

    /**
     * @var string 加速地域。
     */
    public $AccelerateRegion;

    /**
     * @var string 终端节点组地域。
     */
    public $EndpointGroupRegion;

    /**
     * @var integer 账单年月时间。
     */
    public $SettlementMonth;

    /**
     * @param string $GlobalAcceleratorId 全球加速实例ID。
     * @param string $AccelerateRegion 加速地域。
     * @param string $EndpointGroupRegion 终端节点组地域。
     * @param integer $SettlementMonth 账单年月时间。
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("AccelerateRegion",$param) and $param["AccelerateRegion"] !== null) {
            $this->AccelerateRegion = $param["AccelerateRegion"];
        }

        if (array_key_exists("EndpointGroupRegion",$param) and $param["EndpointGroupRegion"] !== null) {
            $this->EndpointGroupRegion = $param["EndpointGroupRegion"];
        }

        if (array_key_exists("SettlementMonth",$param) and $param["SettlementMonth"] !== null) {
            $this->SettlementMonth = $param["SettlementMonth"];
        }
    }
}
