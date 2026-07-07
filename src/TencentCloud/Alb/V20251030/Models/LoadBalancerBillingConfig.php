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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用型负载均衡实例计费配置。
 *
 * @method string getChargeType() 获取实例的计费类型。

取值**POSTPAID_BY_HOUR**：表示按量计费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(string $ChargeType) 设置实例的计费类型。

取值**POSTPAID_BY_HOUR**：表示按量计费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBandwidthPackageId() 获取共享带宽包 ID。
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置共享带宽包 ID。
 */
class LoadBalancerBillingConfig extends AbstractModel
{
    /**
     * @var string 实例的计费类型。

取值**POSTPAID_BY_HOUR**：表示按量计费。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var string 共享带宽包 ID。
     */
    public $BandwidthPackageId;

    /**
     * @param string $ChargeType 实例的计费类型。

取值**POSTPAID_BY_HOUR**：表示按量计费。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BandwidthPackageId 共享带宽包 ID。
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
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }
    }
}
