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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机型信息和其可支持的最大VPC-CNI模式Pod数量信息
 *
 * @method string getZone() 获取机型所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置机型所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceFamily() 获取机型所属机型族
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceFamily(string $InstanceFamily) 设置机型所属机型族
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取实例机型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置实例机型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method PodLimitsByType getPodLimits() 获取机型可支持的最大VPC-CNI模式Pod数量信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodLimits(PodLimitsByType $PodLimits) 设置机型可支持的最大VPC-CNI模式Pod数量信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class PodLimitsInstance extends AbstractModel
{
    /**
     * @var string 机型所在可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 机型所属机型族
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceFamily;

    /**
     * @var string 实例机型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var PodLimitsByType 机型可支持的最大VPC-CNI模式Pod数量信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodLimits;

    /**
     * @param string $Zone 机型所在可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceFamily 机型所属机型族
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 实例机型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param PodLimitsByType $PodLimits 机型可支持的最大VPC-CNI模式Pod数量信息
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("PodLimits",$param) and $param["PodLimits"] !== null) {
            $this->PodLimits = new PodLimitsByType();
            $this->PodLimits->deserialize($param["PodLimits"]);
        }
    }
}
