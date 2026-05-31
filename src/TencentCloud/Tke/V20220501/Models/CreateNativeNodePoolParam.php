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
 * 原生节点池创建参数
 *
 * @method MachineSetScaling getScaling() 获取<p>节点池伸缩配置</p>
 * @method void setScaling(MachineSetScaling $Scaling) 设置<p>节点池伸缩配置</p>
 * @method array getSubnetIds() 获取<p>子网列表</p>
 * @method void setSubnetIds(array $SubnetIds) 设置<p>子网列表</p>
 * @method string getInstanceChargeType() 获取<p>节点计费类型。PREPAID：包年包月；POSTPAID_BY_HOUR：按量计费（默认）；</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>节点计费类型。PREPAID：包年包月；POSTPAID_BY_HOUR：按量计费（默认）；</p>
 * @method Disk getSystemDisk() 获取<p>系统盘配置</p>
 * @method void setSystemDisk(Disk $SystemDisk) 设置<p>系统盘配置</p>
 * @method array getInstanceTypes() 获取<p>机型列表</p>
 * @method void setInstanceTypes(array $InstanceTypes) 设置<p>机型列表</p>
 * @method array getSecurityGroupIds() 获取<p>安全组列表</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>安全组列表</p>
 * @method MachineUpgradeSettings getUpgradeSettings() 获取<p>自动升级配置</p>
 * @method void setUpgradeSettings(MachineUpgradeSettings $UpgradeSettings) 设置<p>自动升级配置</p>
 * @method boolean getAutoRepair() 获取<p>是否开启自愈能力</p>
 * @method void setAutoRepair(boolean $AutoRepair) 设置<p>是否开启自愈能力</p>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取<p>包年包月机型计费配置</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置<p>包年包月机型计费配置</p>
 * @method ManagementConfig getManagement() 获取<p>节点池 Management 参数设置</p>
 * @method void setManagement(ManagementConfig $Management) 设置<p>节点池 Management 参数设置</p>
 * @method string getHealthCheckPolicyName() 获取<p>故障自愈规则名称</p>
 * @method void setHealthCheckPolicyName(string $HealthCheckPolicyName) 设置<p>故障自愈规则名称</p>
 * @method string getHostNamePattern() 获取<p>原生节点池hostName模式串</p>
 * @method void setHostNamePattern(string $HostNamePattern) 设置<p>原生节点池hostName模式串</p>
 * @method array getKubeletArgs() 获取<p>kubelet 自定义参数</p>
 * @method void setKubeletArgs(array $KubeletArgs) 设置<p>kubelet 自定义参数</p>
 * @method LifecycleConfig getLifecycle() 获取<p>预定义脚本</p>
 * @method void setLifecycle(LifecycleConfig $Lifecycle) 设置<p>预定义脚本</p>
 * @method string getRuntimeRootDir() 获取<p>运行时根目录</p>
 * @method void setRuntimeRootDir(string $RuntimeRootDir) 设置<p>运行时根目录</p>
 * @method boolean getEnableAutoscaling() 获取<p>是否开启弹性伸缩</p>
 * @method void setEnableAutoscaling(boolean $EnableAutoscaling) 设置<p>是否开启弹性伸缩</p>
 * @method integer getReplicas() 获取<p>期望节点数</p>
 * @method void setReplicas(integer $Replicas) 设置<p>期望节点数</p>
 * @method InternetAccessible getInternetAccessible() 获取<p>公网带宽设置</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置<p>公网带宽设置</p>
 * @method array getDataDisks() 获取<p>原生节点池数据盘列表</p>
 * @method void setDataDisks(array $DataDisks) 设置<p>原生节点池数据盘列表</p>
 * @method boolean getQGPUEnable() 获取<p>qgpu开关</p>
 * @method void setQGPUEnable(boolean $QGPUEnable) 设置<p>qgpu开关</p>
 * @method array getKeyIds() 获取<p>节点池ssh公钥id数组</p>
 * @method void setKeyIds(array $KeyIds) 设置<p>节点池ssh公钥id数组</p>
 * @method string getMachineType() 获取<p>节点池类型</p>
 * @method void setMachineType(string $MachineType) 设置<p>节点池类型</p>
 * @method boolean getAutomationService() 获取<p>原生节点池安装节点自动化助手开关</p>
 * @method void setAutomationService(boolean $AutomationService) 设置<p>原生节点池安装节点自动化助手开关</p>
 * @method string getPassword() 获取<p>原生节点池密码</p>
 * @method void setPassword(string $Password) 设置<p>原生节点池密码</p>
 */
class CreateNativeNodePoolParam extends AbstractModel
{
    /**
     * @var MachineSetScaling <p>节点池伸缩配置</p>
     */
    public $Scaling;

    /**
     * @var array <p>子网列表</p>
     */
    public $SubnetIds;

    /**
     * @var string <p>节点计费类型。PREPAID：包年包月；POSTPAID_BY_HOUR：按量计费（默认）；</p>
     */
    public $InstanceChargeType;

    /**
     * @var Disk <p>系统盘配置</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>机型列表</p>
     */
    public $InstanceTypes;

    /**
     * @var array <p>安全组列表</p>
     */
    public $SecurityGroupIds;

    /**
     * @var MachineUpgradeSettings <p>自动升级配置</p>
     */
    public $UpgradeSettings;

    /**
     * @var boolean <p>是否开启自愈能力</p>
     */
    public $AutoRepair;

    /**
     * @var InstanceChargePrepaid <p>包年包月机型计费配置</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var ManagementConfig <p>节点池 Management 参数设置</p>
     */
    public $Management;

    /**
     * @var string <p>故障自愈规则名称</p>
     */
    public $HealthCheckPolicyName;

    /**
     * @var string <p>原生节点池hostName模式串</p>
     */
    public $HostNamePattern;

    /**
     * @var array <p>kubelet 自定义参数</p>
     */
    public $KubeletArgs;

    /**
     * @var LifecycleConfig <p>预定义脚本</p>
     */
    public $Lifecycle;

    /**
     * @var string <p>运行时根目录</p>
     */
    public $RuntimeRootDir;

    /**
     * @var boolean <p>是否开启弹性伸缩</p>
     */
    public $EnableAutoscaling;

    /**
     * @var integer <p>期望节点数</p>
     */
    public $Replicas;

    /**
     * @var InternetAccessible <p>公网带宽设置</p>
     */
    public $InternetAccessible;

    /**
     * @var array <p>原生节点池数据盘列表</p>
     */
    public $DataDisks;

    /**
     * @var boolean <p>qgpu开关</p>
     */
    public $QGPUEnable;

    /**
     * @var array <p>节点池ssh公钥id数组</p>
     */
    public $KeyIds;

    /**
     * @var string <p>节点池类型</p>
     */
    public $MachineType;

    /**
     * @var boolean <p>原生节点池安装节点自动化助手开关</p>
     */
    public $AutomationService;

    /**
     * @var string <p>原生节点池密码</p>
     */
    public $Password;

    /**
     * @param MachineSetScaling $Scaling <p>节点池伸缩配置</p>
     * @param array $SubnetIds <p>子网列表</p>
     * @param string $InstanceChargeType <p>节点计费类型。PREPAID：包年包月；POSTPAID_BY_HOUR：按量计费（默认）；</p>
     * @param Disk $SystemDisk <p>系统盘配置</p>
     * @param array $InstanceTypes <p>机型列表</p>
     * @param array $SecurityGroupIds <p>安全组列表</p>
     * @param MachineUpgradeSettings $UpgradeSettings <p>自动升级配置</p>
     * @param boolean $AutoRepair <p>是否开启自愈能力</p>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>包年包月机型计费配置</p>
     * @param ManagementConfig $Management <p>节点池 Management 参数设置</p>
     * @param string $HealthCheckPolicyName <p>故障自愈规则名称</p>
     * @param string $HostNamePattern <p>原生节点池hostName模式串</p>
     * @param array $KubeletArgs <p>kubelet 自定义参数</p>
     * @param LifecycleConfig $Lifecycle <p>预定义脚本</p>
     * @param string $RuntimeRootDir <p>运行时根目录</p>
     * @param boolean $EnableAutoscaling <p>是否开启弹性伸缩</p>
     * @param integer $Replicas <p>期望节点数</p>
     * @param InternetAccessible $InternetAccessible <p>公网带宽设置</p>
     * @param array $DataDisks <p>原生节点池数据盘列表</p>
     * @param boolean $QGPUEnable <p>qgpu开关</p>
     * @param array $KeyIds <p>节点池ssh公钥id数组</p>
     * @param string $MachineType <p>节点池类型</p>
     * @param boolean $AutomationService <p>原生节点池安装节点自动化助手开关</p>
     * @param string $Password <p>原生节点池密码</p>
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

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new Disk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
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

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
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

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
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

        if (array_key_exists("QGPUEnable",$param) and $param["QGPUEnable"] !== null) {
            $this->QGPUEnable = $param["QGPUEnable"];
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("AutomationService",$param) and $param["AutomationService"] !== null) {
            $this->AutomationService = $param["AutomationService"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
