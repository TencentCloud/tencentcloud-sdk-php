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
 * 原生节点池信息
 *
 * @method MachineSetScaling getScaling() 获取伸缩配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaling(MachineSetScaling $Scaling) 设置伸缩配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubnetIds() 获取子网列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网列表
 * @method array getSecurityGroupIds() 获取安全组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method MachineUpgradeSettings getUpgradeSettings() 获取自动升级配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpgradeSettings(MachineUpgradeSettings $UpgradeSettings) 设置自动升级配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoRepair() 获取是否开启自愈能力
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRepair(boolean $AutoRepair) 设置是否开启自愈能力
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceChargeType() 获取节点计费类型
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置节点计费类型
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取包年包月机型计费配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置包年包月机型计费配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method Disk getSystemDisk() 获取系统盘配置
 * @method void setSystemDisk(Disk $SystemDisk) 设置系统盘配置
 * @method array getKeyIds() 获取密钥 ID 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyIds(array $KeyIds) 设置密钥 ID 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method ManagementConfig getManagement() 获取Machine 系统配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManagement(ManagementConfig $Management) 设置Machine 系统配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHealthCheckPolicyName() 获取故障自愈规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckPolicyName(string $HealthCheckPolicyName) 设置故障自愈规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostNamePattern() 获取原生节点池hostName模式串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostNamePattern(string $HostNamePattern) 设置原生节点池hostName模式串
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKubeletArgs() 获取kubelet 自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKubeletArgs(array $KubeletArgs) 设置kubelet 自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method LifecycleConfig getLifecycle() 获取预定义脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifecycle(LifecycleConfig $Lifecycle) 设置预定义脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuntimeRootDir() 获取运行时根目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeRootDir(string $RuntimeRootDir) 设置运行时根目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableAutoscaling() 获取是否开启弹性伸缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableAutoscaling(boolean $EnableAutoscaling) 设置是否开启弹性伸缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceTypes() 获取机型列表
 * @method void setInstanceTypes(array $InstanceTypes) 设置机型列表
 * @method integer getReplicas() 获取期望节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(integer $Replicas) 设置期望节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReadyReplicas() 获取就绪 Machine 个数
 * @method void setReadyReplicas(integer $ReadyReplicas) 设置就绪 Machine 个数
 * @method InternetAccessible getInternetAccessible() 获取公网带宽设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置公网带宽设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataDisks() 获取原生节点池数据盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDisks(array $DataDisks) 设置原生节点池数据盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachineType() 获取原生节点机型 Native, NativeCVM
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineType(string $MachineType) 设置原生节点机型 Native, NativeCVM
注意：此字段可能返回 null，表示取不到有效值。
 */
class NativeNodePoolInfo extends AbstractModel
{
    /**
     * @var MachineSetScaling 伸缩配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scaling;

    /**
     * @var array 子网列表
     */
    public $SubnetIds;

    /**
     * @var array 安全组列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroupIds;

    /**
     * @var MachineUpgradeSettings 自动升级配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpgradeSettings;

    /**
     * @var boolean 是否开启自愈能力
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRepair;

    /**
     * @var string 节点计费类型
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid 包年包月机型计费配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceChargePrepaid;

    /**
     * @var Disk 系统盘配置
     */
    public $SystemDisk;

    /**
     * @var array 密钥 ID 列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyIds;

    /**
     * @var ManagementConfig Machine 系统配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Management;

    /**
     * @var string 故障自愈规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckPolicyName;

    /**
     * @var string 原生节点池hostName模式串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostNamePattern;

    /**
     * @var array kubelet 自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KubeletArgs;

    /**
     * @var LifecycleConfig 预定义脚本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lifecycle;

    /**
     * @var string 运行时根目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeRootDir;

    /**
     * @var boolean 是否开启弹性伸缩
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableAutoscaling;

    /**
     * @var array 机型列表
     */
    public $InstanceTypes;

    /**
     * @var integer 期望节点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @var integer 就绪 Machine 个数
     */
    public $ReadyReplicas;

    /**
     * @var InternetAccessible 公网带宽设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetAccessible;

    /**
     * @var array 原生节点池数据盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDisks;

    /**
     * @var string 原生节点机型 Native, NativeCVM
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineType;

    /**
     * @param MachineSetScaling $Scaling 伸缩配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubnetIds 子网列表
     * @param array $SecurityGroupIds 安全组列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param MachineUpgradeSettings $UpgradeSettings 自动升级配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoRepair 是否开启自愈能力
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceChargeType 节点计费类型
     * @param InstanceChargePrepaid $InstanceChargePrepaid 包年包月机型计费配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param Disk $SystemDisk 系统盘配置
     * @param array $KeyIds 密钥 ID 列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param ManagementConfig $Management Machine 系统配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HealthCheckPolicyName 故障自愈规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostNamePattern 原生节点池hostName模式串
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KubeletArgs kubelet 自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param LifecycleConfig $Lifecycle 预定义脚本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuntimeRootDir 运行时根目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableAutoscaling 是否开启弹性伸缩
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceTypes 机型列表
     * @param integer $Replicas 期望节点数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReadyReplicas 就绪 Machine 个数
     * @param InternetAccessible $InternetAccessible 公网带宽设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataDisks 原生节点池数据盘
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachineType 原生节点机型 Native, NativeCVM
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
        if (array_key_exists("Scaling",$param) and $param["Scaling"] !== null) {
            $this->Scaling = new MachineSetScaling();
            $this->Scaling->deserialize($param["Scaling"]);
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("UpgradeSettings",$param) and $param["UpgradeSettings"] !== null) {
            $this->UpgradeSettings = new MachineUpgradeSettings();
            $this->UpgradeSettings->deserialize($param["UpgradeSettings"]);
        }

        if (array_key_exists("AutoRepair",$param) and $param["AutoRepair"] !== null) {
            $this->AutoRepair = $param["AutoRepair"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new Disk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("Management",$param) and $param["Management"] !== null) {
            $this->Management = new ManagementConfig();
            $this->Management->deserialize($param["Management"]);
        }

        if (array_key_exists("HealthCheckPolicyName",$param) and $param["HealthCheckPolicyName"] !== null) {
            $this->HealthCheckPolicyName = $param["HealthCheckPolicyName"];
        }

        if (array_key_exists("HostNamePattern",$param) and $param["HostNamePattern"] !== null) {
            $this->HostNamePattern = $param["HostNamePattern"];
        }

        if (array_key_exists("KubeletArgs",$param) and $param["KubeletArgs"] !== null) {
            $this->KubeletArgs = $param["KubeletArgs"];
        }

        if (array_key_exists("Lifecycle",$param) and $param["Lifecycle"] !== null) {
            $this->Lifecycle = new LifecycleConfig();
            $this->Lifecycle->deserialize($param["Lifecycle"]);
        }

        if (array_key_exists("RuntimeRootDir",$param) and $param["RuntimeRootDir"] !== null) {
            $this->RuntimeRootDir = $param["RuntimeRootDir"];
        }

        if (array_key_exists("EnableAutoscaling",$param) and $param["EnableAutoscaling"] !== null) {
            $this->EnableAutoscaling = $param["EnableAutoscaling"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("ReadyReplicas",$param) and $param["ReadyReplicas"] !== null) {
            $this->ReadyReplicas = $param["ReadyReplicas"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }
    }
}
