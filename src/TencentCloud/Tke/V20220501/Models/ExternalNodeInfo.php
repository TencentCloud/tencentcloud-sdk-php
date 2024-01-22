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
 * 第三方节点
 *
 * @method string getName() 获取第三方节点名称
 * @method void setName(string $Name) 设置第三方节点名称
 * @method integer getCPU() 获取CPU核数，单位：核
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCPU(integer $CPU) 设置CPU核数，单位：核
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取节点内存容量，单位：`GB`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置节点内存容量，单位：`GB`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getK8SVersion() 获取第三方节点kubelet版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setK8SVersion(string $K8SVersion) 设置第三方节点kubelet版本信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExternalNodeInfo extends AbstractModel
{
    /**
     * @var string 第三方节点名称
     */
    public $Name;

    /**
     * @var integer CPU核数，单位：核
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CPU;

    /**
     * @var integer 节点内存容量，单位：`GB`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var string 第三方节点kubelet版本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $K8SVersion;

    /**
     * @param string $Name 第三方节点名称
     * @param integer $CPU CPU核数，单位：核
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory 节点内存容量，单位：`GB`
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $K8SVersion 第三方节点kubelet版本信息
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("K8SVersion",$param) and $param["K8SVersion"] !== null) {
            $this->K8SVersion = $param["K8SVersion"];
        }
    }
}
