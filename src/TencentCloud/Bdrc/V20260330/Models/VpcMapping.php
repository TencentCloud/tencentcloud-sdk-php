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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点对vpc映射信息
 *
 * @method integer getId() 获取映射规则主键ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置映射规则主键ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSitePairId() 获取所属容灾策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSitePairId(string $SitePairId) 设置所属容灾策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceVpc() 获取源端VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceVpc(string $SourceVpc) 设置源端VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceSubnet() 获取源端子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceSubnet(string $SourceSubnet) 设置源端子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetVpc() 获取目标端VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetVpc(string $TargetVpc) 设置目标端VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetSubnet() 获取目标端子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetSubnet(string $TargetSubnet) 设置目标端子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取映射状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置映射状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLifeState() 获取生命周期状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeState(string $LifeState) 设置生命周期状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class VpcMapping extends AbstractModel
{
    /**
     * @var integer 映射规则主键ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 所属容灾策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SitePairId;

    /**
     * @var string 源端VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceVpc;

    /**
     * @var string 源端子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceSubnet;

    /**
     * @var string 目标端VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetVpc;

    /**
     * @var string 目标端子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetSubnet;

    /**
     * @var string 映射状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 生命周期状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeState;

    /**
     * @param integer $Id 映射规则主键ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SitePairId 所属容灾策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceVpc 源端VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceSubnet 源端子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetVpc 目标端VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetSubnet 目标端子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 映射状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LifeState 生命周期状态
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SitePairId",$param) and $param["SitePairId"] !== null) {
            $this->SitePairId = $param["SitePairId"];
        }

        if (array_key_exists("SourceVpc",$param) and $param["SourceVpc"] !== null) {
            $this->SourceVpc = $param["SourceVpc"];
        }

        if (array_key_exists("SourceSubnet",$param) and $param["SourceSubnet"] !== null) {
            $this->SourceSubnet = $param["SourceSubnet"];
        }

        if (array_key_exists("TargetVpc",$param) and $param["TargetVpc"] !== null) {
            $this->TargetVpc = $param["TargetVpc"];
        }

        if (array_key_exists("TargetSubnet",$param) and $param["TargetSubnet"] !== null) {
            $this->TargetSubnet = $param["TargetSubnet"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }
    }
}
