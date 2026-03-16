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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 第三方节点池信息
 *
 * @method string getNodePoolId() 获取第三方节点池ID
 * @method void setNodePoolId(string $NodePoolId) 设置第三方节点池ID
 * @method string getName() 获取第三方节点池名称
 * @method void setName(string $Name) 设置第三方节点池名称
 * @method string getLifeState() 获取节点池生命周期
 * @method void setLifeState(string $LifeState) 设置节点池生命周期
 * @method string getClusterCIDR() 获取集群CIDR
 * @method void setClusterCIDR(string $ClusterCIDR) 设置集群CIDR
 * @method string getNetworkType() 获取集群网络插件类型
 * @method void setNetworkType(string $NetworkType) 设置集群网络插件类型
 * @method RuntimeConfig getRuntimeConfig() 获取第三方节点Runtime配置
 * @method void setRuntimeConfig(RuntimeConfig $RuntimeConfig) 设置第三方节点Runtime配置
 * @method array getLabels() 获取第三方节点label
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置第三方节点label
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaints() 获取第三方节点taint
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaints(array $Taints) 设置第三方节点taint
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() 获取第三方节点高级设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) 设置第三方节点高级设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeletionProtection() 获取删除保护开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置删除保护开关
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExternalNodePool extends AbstractModel
{
    /**
     * @var string 第三方节点池ID
     */
    public $NodePoolId;

    /**
     * @var string 第三方节点池名称
     */
    public $Name;

    /**
     * @var string 节点池生命周期
     */
    public $LifeState;

    /**
     * @var string 集群CIDR
     */
    public $ClusterCIDR;

    /**
     * @var string 集群网络插件类型
     */
    public $NetworkType;

    /**
     * @var RuntimeConfig 第三方节点Runtime配置
     */
    public $RuntimeConfig;

    /**
     * @var array 第三方节点label
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var array 第三方节点taint
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Taints;

    /**
     * @var InstanceAdvancedSettings 第三方节点高级设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceAdvancedSettings;

    /**
     * @var boolean 删除保护开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeletionProtection;

    /**
     * @param string $NodePoolId 第三方节点池ID
     * @param string $Name 第三方节点池名称
     * @param string $LifeState 节点池生命周期
     * @param string $ClusterCIDR 集群CIDR
     * @param string $NetworkType 集群网络插件类型
     * @param RuntimeConfig $RuntimeConfig 第三方节点Runtime配置
     * @param array $Labels 第三方节点label
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Taints 第三方节点taint
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings 第三方节点高级设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeletionProtection 删除保护开关
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
        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("ClusterCIDR",$param) and $param["ClusterCIDR"] !== null) {
            $this->ClusterCIDR = $param["ClusterCIDR"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("RuntimeConfig",$param) and $param["RuntimeConfig"] !== null) {
            $this->RuntimeConfig = new RuntimeConfig();
            $this->RuntimeConfig->deserialize($param["RuntimeConfig"]);
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
