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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点池弹性伸缩配置
 *
 * @method integer getMinReplicas() 获取节点池最小副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinReplicas(integer $MinReplicas) 设置节点池最小副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxReplicas() 获取节点池最大副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxReplicas(integer $MaxReplicas) 设置节点池最大副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatePolicy() 获取节点池扩容策略。ZoneEquality：多可用区打散；ZonePriority：首选可用区优先；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatePolicy(string $CreatePolicy) 设置节点池扩容策略。ZoneEquality：多可用区打散；ZonePriority：首选可用区优先；
注意：此字段可能返回 null，表示取不到有效值。
 */
class MachineSetScaling extends AbstractModel
{
    /**
     * @var integer 节点池最小副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinReplicas;

    /**
     * @var integer 节点池最大副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxReplicas;

    /**
     * @var string 节点池扩容策略。ZoneEquality：多可用区打散；ZonePriority：首选可用区优先；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatePolicy;

    /**
     * @param integer $MinReplicas 节点池最小副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxReplicas 节点池最大副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatePolicy 节点池扩容策略。ZoneEquality：多可用区打散；ZonePriority：首选可用区优先；
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
        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("CreatePolicy",$param) and $param["CreatePolicy"] !== null) {
            $this->CreatePolicy = $param["CreatePolicy"];
        }
    }
}
