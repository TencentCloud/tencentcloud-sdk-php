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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改原生节点池参数
 *
 * @method MachineSetScaling getScaling() 获取伸缩配置
 * @method void setScaling(MachineSetScaling $Scaling) 设置伸缩配置
 * @method array getSubnetIds() 获取子网列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网列表
 * @method array getSecurityGroupIds() 获取安全组列表
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组列表
 * @method MachineUpgradeSettings getUpgradeSettings() 获取自动升级配置
 * @method void setUpgradeSettings(MachineUpgradeSettings $UpgradeSettings) 设置自动升级配置
 * @method boolean getAutoRepair() 获取是否开启自愈能力
 * @method void setAutoRepair(boolean $AutoRepair) 设置是否开启自愈能力
 * @method string getInstanceChargeType() 获取节点计费类型变更
当前仅支持按量计费转包年包月：
- PREPAID

 * @method void setInstanceChargeType(string $InstanceChargeType) 设置节点计费类型变更
当前仅支持按量计费转包年包月：
- PREPAID

 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取包年包月机型计费配置
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置包年包月机型计费配置
 * @method Disk getSystemDisk() 获取系统盘配置
 * @method void setSystemDisk(Disk $SystemDisk) 设置系统盘配置
 * @method ManagementConfig getManagement() 获取Machine 系统配置
 * @method void setManagement(ManagementConfig $Management) 设置Machine 系统配置
 * @method string getHealthCheckPolicyName() 获取故障自愈规则名称
 * @method void setHealthCheckPolicyName(string $HealthCheckPolicyName) 设置故障自愈规则名称
 * @method string getHostNamePattern() 获取原生节点池hostName模式串
 * @method void setHostNamePattern(string $HostNamePattern) 设置原生节点池hostName模式串
 * @method array getKubeletArgs() 获取kubelet 自定义参数
 * @method void setKubeletArgs(array $KubeletArgs) 设置kubelet 自定义参数
 * @method LifecycleConfig getLifecycle() 获取预定义脚本
 * @method void setLifecycle(LifecycleConfig $Lifecycle) 设置预定义脚本
 * @method string getRuntimeRootDir() 获取运行时根目录
 * @method void setRuntimeRootDir(string $RuntimeRootDir) 设置运行时根目录
 * @method boolean getEnableAutoscaling() 获取是否开启弹性伸缩
 * @method void setEnableAutoscaling(boolean $EnableAutoscaling) 设置是否开启弹性伸缩
 * @method array getInstanceTypes() 获取机型列表
 * @method void setInstanceTypes(array $InstanceTypes) 设置机型列表
 * @method integer getReplicas() 获取期望节点数
 * @method void setReplicas(integer $Replicas) 设置期望节点数
 * @method boolean getUpdateExistedNode() 获取是否更新存量节点
 * @method void setUpdateExistedNode(boolean $UpdateExistedNode) 设置是否更新存量节点
 * @method array getDataDisks() 获取数据盘列表
 * @method void setDataDisks(array $DataDisks) 设置数据盘列表
 * @method array getKeyIds() 获取ssh公钥id数组
 * @method void setKeyIds(array $KeyIds) 设置ssh公钥id数组
 * @method string getDeletePolicy() 获取节点移出策略，有Random（随机）、Newest（优先移出最新实例）、Oldest（优先移出最旧实例）三种可选，默认是Newest
 * @method void setDeletePolicy(string $DeletePolicy) 设置节点移出策略，有Random（随机）、Newest（优先移出最新实例）、Oldest（优先移出最旧实例）三种可选，默认是Newest
 * @method array getGPUConfigs() 获取节点池 GPU 配置
 * @method void setGPUConfigs(array $GPUConfigs) 设置节点池 GPU 配置
 * @method boolean getAutomationService() 获取原生节点池安装自动化助手开关状态
 * @method void setAutomationService(boolean $AutomationService) 设置原生节点池安装自动化助手开关状态
 * @method string getPassword() 获取原生节点池密码
 * @method void setPassword(string $Password) 设置原生节点池密码
 */
class UpdateNativeNodePoolParam extends AbstractModel
{
    /**
     * @var MachineSetScaling 伸缩配置
     */
    public $Scaling;

    /**
     * @var array 子网列表
     */
    public $SubnetIds;

    /**
     * @var array 安全组列表
     */
    public $SecurityGroupIds;

    /**
     * @var MachineUpgradeSettings 自动升级配置
     */
    public $UpgradeSettings;

    /**
     * @var boolean 是否开启自愈能力
     */
    public $AutoRepair;

    /**
     * @var string 节点计费类型变更
当前仅支持按量计费转包年包月：
- PREPAID

     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid 包年包月机型计费配置
     */
    public $InstanceChargePrepaid;

    /**
     * @var Disk 系统盘配置
     */
    public $SystemDisk;

    /**
     * @var ManagementConfig Machine 系统配置
     */
    public $Management;

    /**
     * @var string 故障自愈规则名称
     */
    public $HealthCheckPolicyName;

    /**
     * @var string 原生节点池hostName模式串
     */
    public $HostNamePattern;

    /**
     * @var array kubelet 自定义参数
     */
    public $KubeletArgs;

    /**
     * @var LifecycleConfig 预定义脚本
     */
    public $Lifecycle;

    /**
     * @var string 运行时根目录
     */
    public $RuntimeRootDir;

    /**
     * @var boolean 是否开启弹性伸缩
     */
    public $EnableAutoscaling;

    /**
     * @var array 机型列表
     */
    public $InstanceTypes;

    /**
     * @var integer 期望节点数
     */
    public $Replicas;

    /**
     * @var boolean 是否更新存量节点
     */
    public $UpdateExistedNode;

    /**
     * @var array 数据盘列表
     */
    public $DataDisks;

    /**
     * @var array ssh公钥id数组
     */
    public $KeyIds;

    /**
     * @var string 节点移出策略，有Random（随机）、Newest（优先移出最新实例）、Oldest（优先移出最旧实例）三种可选，默认是Newest
     */
    public $DeletePolicy;

    /**
     * @var array 节点池 GPU 配置
     */
    public $GPUConfigs;

    /**
     * @var boolean 原生节点池安装自动化助手开关状态
     */
    public $AutomationService;

    /**
     * @var string 原生节点池密码
     */
    public $Password;

    /**
     * @param MachineSetScaling $Scaling 伸缩配置
     * @param array $SubnetIds 子网列表
     * @param array $SecurityGroupIds 安全组列表
     * @param MachineUpgradeSettings $UpgradeSettings 自动升级配置
     * @param boolean $AutoRepair 是否开启自愈能力
     * @param string $InstanceChargeType 节点计费类型变更
当前仅支持按量计费转包年包月：
- PREPAID

     * @param InstanceChargePrepaid $InstanceChargePrepaid 包年包月机型计费配置
     * @param Disk $SystemDisk 系统盘配置
     * @param ManagementConfig $Management Machine 系统配置
     * @param string $HealthCheckPolicyName 故障自愈规则名称
     * @param string $HostNamePattern 原生节点池hostName模式串
     * @param array $KubeletArgs kubelet 自定义参数
     * @param LifecycleConfig $Lifecycle 预定义脚本
     * @param string $RuntimeRootDir 运行时根目录
     * @param boolean $EnableAutoscaling 是否开启弹性伸缩
     * @param array $InstanceTypes 机型列表
     * @param integer $Replicas 期望节点数
     * @param boolean $UpdateExistedNode 是否更新存量节点
     * @param array $DataDisks 数据盘列表
     * @param array $KeyIds ssh公钥id数组
     * @param string $DeletePolicy 节点移出策略，有Random（随机）、Newest（优先移出最新实例）、Oldest（优先移出最旧实例）三种可选，默认是Newest
     * @param array $GPUConfigs 节点池 GPU 配置
     * @param boolean $AutomationService 原生节点池安装自动化助手开关状态
     * @param string $Password 原生节点池密码
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

        if (array_key_exists("UpdateExistedNode",$param) and $param["UpdateExistedNode"] !== null) {
            $this->UpdateExistedNode = $param["UpdateExistedNode"];
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("DeletePolicy",$param) and $param["DeletePolicy"] !== null) {
            $this->DeletePolicy = $param["DeletePolicy"];
        }

        if (array_key_exists("GPUConfigs",$param) and $param["GPUConfigs"] !== null) {
            $this->GPUConfigs = [];
            foreach ($param["GPUConfigs"] as $key => $value){
                $obj = new GPUConfig();
                $obj->deserialize($value);
                array_push($this->GPUConfigs, $obj);
            }
        }

        if (array_key_exists("AutomationService",$param) and $param["AutomationService"] !== null) {
            $this->AutomationService = $param["AutomationService"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
