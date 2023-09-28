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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVpcPeeringConnection请求参数结构体
 *
 * @method string getPeeringConnectionId() 获取对等连接ID。
 * @method void setPeeringConnectionId(string $PeeringConnectionId) 设置对等连接ID。
 * @method string getPeeringConnectionName() 获取对等连接名称。
 * @method void setPeeringConnectionName(string $PeeringConnectionName) 设置对等连接名称。
 * @method integer getBandwidth() 获取带宽上限，单位Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置带宽上限，单位Mbps。
 * @method string getChargeType() 获取计费模式，日峰值POSTPAID_BY_DAY_MAX，月95 POSTPAID_BY_MONTH_95。
 * @method void setChargeType(string $ChargeType) 设置计费模式，日峰值POSTPAID_BY_DAY_MAX，月95 POSTPAID_BY_MONTH_95。
 */
class ModifyVpcPeeringConnectionRequest extends AbstractModel
{
    /**
     * @var string 对等连接ID。
     */
    public $PeeringConnectionId;

    /**
     * @var string 对等连接名称。
     */
    public $PeeringConnectionName;

    /**
     * @var integer 带宽上限，单位Mbps。
     */
    public $Bandwidth;

    /**
     * @var string 计费模式，日峰值POSTPAID_BY_DAY_MAX，月95 POSTPAID_BY_MONTH_95。
     */
    public $ChargeType;

    /**
     * @param string $PeeringConnectionId 对等连接ID。
     * @param string $PeeringConnectionName 对等连接名称。
     * @param integer $Bandwidth 带宽上限，单位Mbps。
     * @param string $ChargeType 计费模式，日峰值POSTPAID_BY_DAY_MAX，月95 POSTPAID_BY_MONTH_95。
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
        if (array_key_exists("PeeringConnectionId",$param) and $param["PeeringConnectionId"] !== null) {
            $this->PeeringConnectionId = $param["PeeringConnectionId"];
        }

        if (array_key_exists("PeeringConnectionName",$param) and $param["PeeringConnectionName"] !== null) {
            $this->PeeringConnectionName = $param["PeeringConnectionName"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }
    }
}
