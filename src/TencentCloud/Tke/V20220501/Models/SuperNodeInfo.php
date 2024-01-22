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
 * 超级节点信息
 *
 * @method string getName() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取自动续费标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceType() 获取资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCPU() 获取节点的 CPU 规格，单位：核。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCPU(float $CPU) 设置节点的 CPU 规格，单位：核。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUsedCPU() 获取节点上 Pod 的 CPU总和，单位：核。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedCPU(float $UsedCPU) 设置节点上 Pod 的 CPU总和，单位：核。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMemory() 获取节点的内存规格，单位：Gi。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(float $Memory) 设置节点的内存规格，单位：Gi。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUsedMemory() 获取节点上 Pod 的内存总和，单位：Gi。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedMemory(float $UsedMemory) 设置节点上 Pod 的内存总和，单位：Gi。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取VPC 唯一 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置VPC 唯一 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网唯一 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网唯一 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActiveAt() 获取生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveAt(string $ActiveAt) 设置生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireAt() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireAt(string $ExpireAt) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxCPUScheduledPod() 获取可调度的单 Pod 最大 CPU 规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxCPUScheduledPod(integer $MaxCPUScheduledPod) 设置可调度的单 Pod 最大 CPU 规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceAttribute() 获取实例属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceAttribute(string $InstanceAttribute) 设置实例属性
注意：此字段可能返回 null，表示取不到有效值。
 */
class SuperNodeInfo extends AbstractModel
{
    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 自动续费标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var string 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var float 节点的 CPU 规格，单位：核。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CPU;

    /**
     * @var float 节点上 Pod 的 CPU总和，单位：核。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedCPU;

    /**
     * @var float 节点的内存规格，单位：Gi。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var float 节点上 Pod 的内存总和，单位：Gi。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedMemory;

    /**
     * @var string 可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string VPC 唯一 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网唯一 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 生效时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveAt;

    /**
     * @var string 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireAt;

    /**
     * @var integer 可调度的单 Pod 最大 CPU 规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxCPUScheduledPod;

    /**
     * @var string 实例属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceAttribute;

    /**
     * @param string $Name 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 自动续费标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceType 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CPU 节点的 CPU 规格，单位：核。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UsedCPU 节点上 Pod 的 CPU总和，单位：核。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Memory 节点的内存规格，单位：Gi。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UsedMemory 节点上 Pod 的内存总和，单位：Gi。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId VPC 唯一 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网唯一 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActiveAt 生效时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireAt 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxCPUScheduledPod 可调度的单 Pod 最大 CPU 规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceAttribute 实例属性
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

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("UsedCPU",$param) and $param["UsedCPU"] !== null) {
            $this->UsedCPU = $param["UsedCPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("UsedMemory",$param) and $param["UsedMemory"] !== null) {
            $this->UsedMemory = $param["UsedMemory"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ActiveAt",$param) and $param["ActiveAt"] !== null) {
            $this->ActiveAt = $param["ActiveAt"];
        }

        if (array_key_exists("ExpireAt",$param) and $param["ExpireAt"] !== null) {
            $this->ExpireAt = $param["ExpireAt"];
        }

        if (array_key_exists("MaxCPUScheduledPod",$param) and $param["MaxCPUScheduledPod"] !== null) {
            $this->MaxCPUScheduledPod = $param["MaxCPUScheduledPod"];
        }

        if (array_key_exists("InstanceAttribute",$param) and $param["InstanceAttribute"] !== null) {
            $this->InstanceAttribute = $param["InstanceAttribute"];
        }
    }
}
