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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 重保授权包列表对象
 *
 * @method string getQUUID() 获取机器唯一ID
 * @method void setQUUID(string $QUUID) 设置机器唯一ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getPublicIP() 获取公网IP
 * @method void setPublicIP(string $PublicIP) 设置公网IP
 * @method string getPrivateIP() 获取内网IP
 * @method void setPrivateIP(string $PrivateIP) 设置内网IP
 * @method array getTags() 获取云标签信息
 * @method void setTags(array $Tags) 设置云标签信息
 * @method array getProtectionVersion() 获取防护版本信息
- CriticalProtection 重保防护包
- Pro 容器安全-专业版
- Ultimate 主机安全-旗舰版
 * @method void setProtectionVersion(array $ProtectionVersion) 设置防护版本信息
- CriticalProtection 重保防护包
- Pro 容器安全-专业版
- Ultimate 主机安全-旗舰版
 * @method integer getConfigurationSetting() 获取防护设置
- 0 未配置
- 1 已配置
 * @method void setConfigurationSetting(integer $ConfigurationSetting) 设置防护设置
- 0 未配置
- 1 已配置
 * @method integer getEnable() 获取总开关
- 0 未开启
- 1已开启
 * @method void setEnable(integer $Enable) 设置总开关
- 0 未开启
- 1已开启
 * @method integer getVulDefEnable() 获取漏洞防御开关
- 0 未开启
- 1 开启
 * @method void setVulDefEnable(integer $VulDefEnable) 设置漏洞防御开关
- 0 未开启
- 1 开启
 * @method integer getVulDefMode() 获取漏洞防御模式
- 0 标准
- 1 重保
 * @method void setVulDefMode(integer $VulDefMode) 设置漏洞防御模式
- 0 标准
- 1 重保
 * @method integer getVulDefAction() 获取漏洞防御动作
- 0 仅检测
- 1 检测+防御
 * @method void setVulDefAction(integer $VulDefAction) 设置漏洞防御动作
- 0 仅检测
- 1 检测+防御
 * @method integer getMemShellDefEnable() 获取内存马防御开关
- 0 未开启
- 1 开启
 * @method void setMemShellDefEnable(integer $MemShellDefEnable) 设置内存马防御开关
- 0 未开启
- 1 开启
 * @method integer getSafeInject() 获取更多防护
- 0 不注入会重启的进程 
- 1 注入会重启的进程
 * @method void setSafeInject(integer $SafeInject) 设置更多防护
- 0 不注入会重启的进程 
- 1 注入会重启的进程
 * @method integer getPerformanceLimit() 获取性能阈值配置开关
- 0 未开启
- 1 开启
 * @method void setPerformanceLimit(integer $PerformanceLimit) 设置性能阈值配置开关
- 0 未开启
- 1 开启
 * @method integer getPerformanceLimitCpu() 获取CPU阈值,取值1-99
 * @method void setPerformanceLimitCpu(integer $PerformanceLimitCpu) 设置CPU阈值,取值1-99
 * @method integer getPerformanceLimitMem() 获取内存阈值,取值1-99
 * @method void setPerformanceLimitMem(integer $PerformanceLimitMem) 设置内存阈值,取值1-99
 * @method integer getPerformanceLimitMemAmount() 获取内存剩余阈值
 * @method void setPerformanceLimitMemAmount(integer $PerformanceLimitMemAmount) 设置内存剩余阈值
 * @method integer getRaspException() 获取插件状态
- 0 使用正常
- 1 存在异常
- 2 未使用
 * @method void setRaspException(integer $RaspException) 设置插件状态
- 0 使用正常
- 1 存在异常
- 2 未使用
 * @method string getLatestUpdateTime() 获取最近更新时间
 * @method void setLatestUpdateTime(string $LatestUpdateTime) 设置最近更新时间
 * @method string getClusterName() 获取集群ID,仅容器资产有值
 * @method void setClusterName(string $ClusterName) 设置集群ID,仅容器资产有值
 * @method string getClusterId() 获取集群名称,仅容器资产有值
 * @method void setClusterId(string $ClusterId) 设置集群名称,仅容器资产有值
 * @method OrderDetail getOrderDetail() 获取订单信息
 * @method void setOrderDetail(OrderDetail $OrderDetail) 设置订单信息
 * @method boolean getIsUnBind() 获取是否允许解绑,fasle 不允许 true 允许
 * @method void setIsUnBind(boolean $IsUnBind) 设置是否允许解绑,fasle 不允许 true 允许
 * @method string getUUID() 获取uuid 机器唯一ID,仅AssetType = CWP 时有值
 * @method void setUUID(string $UUID) 设置uuid 机器唯一ID,仅AssetType = CWP 时有值
 * @method string getReason() 获取无注入/注入失败原因
 * @method void setReason(string $Reason) 设置无注入/注入失败原因
 */
class RaspLicenseList extends AbstractModel
{
    /**
     * @var string 机器唯一ID
     */
    public $QUUID;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 公网IP
     */
    public $PublicIP;

    /**
     * @var string 内网IP
     */
    public $PrivateIP;

    /**
     * @var array 云标签信息
     */
    public $Tags;

    /**
     * @var array 防护版本信息
- CriticalProtection 重保防护包
- Pro 容器安全-专业版
- Ultimate 主机安全-旗舰版
     */
    public $ProtectionVersion;

    /**
     * @var integer 防护设置
- 0 未配置
- 1 已配置
     */
    public $ConfigurationSetting;

    /**
     * @var integer 总开关
- 0 未开启
- 1已开启
     */
    public $Enable;

    /**
     * @var integer 漏洞防御开关
- 0 未开启
- 1 开启
     */
    public $VulDefEnable;

    /**
     * @var integer 漏洞防御模式
- 0 标准
- 1 重保
     */
    public $VulDefMode;

    /**
     * @var integer 漏洞防御动作
- 0 仅检测
- 1 检测+防御
     */
    public $VulDefAction;

    /**
     * @var integer 内存马防御开关
- 0 未开启
- 1 开启
     */
    public $MemShellDefEnable;

    /**
     * @var integer 更多防护
- 0 不注入会重启的进程 
- 1 注入会重启的进程
     */
    public $SafeInject;

    /**
     * @var integer 性能阈值配置开关
- 0 未开启
- 1 开启
     */
    public $PerformanceLimit;

    /**
     * @var integer CPU阈值,取值1-99
     */
    public $PerformanceLimitCpu;

    /**
     * @var integer 内存阈值,取值1-99
     */
    public $PerformanceLimitMem;

    /**
     * @var integer 内存剩余阈值
     */
    public $PerformanceLimitMemAmount;

    /**
     * @var integer 插件状态
- 0 使用正常
- 1 存在异常
- 2 未使用
     */
    public $RaspException;

    /**
     * @var string 最近更新时间
     */
    public $LatestUpdateTime;

    /**
     * @var string 集群ID,仅容器资产有值
     */
    public $ClusterName;

    /**
     * @var string 集群名称,仅容器资产有值
     */
    public $ClusterId;

    /**
     * @var OrderDetail 订单信息
     */
    public $OrderDetail;

    /**
     * @var boolean 是否允许解绑,fasle 不允许 true 允许
     */
    public $IsUnBind;

    /**
     * @var string uuid 机器唯一ID,仅AssetType = CWP 时有值
     */
    public $UUID;

    /**
     * @var string 无注入/注入失败原因
     */
    public $Reason;

    /**
     * @param string $QUUID 机器唯一ID
     * @param string $InstanceName 实例名称
     * @param string $InstanceId 实例ID
     * @param string $PublicIP 公网IP
     * @param string $PrivateIP 内网IP
     * @param array $Tags 云标签信息
     * @param array $ProtectionVersion 防护版本信息
- CriticalProtection 重保防护包
- Pro 容器安全-专业版
- Ultimate 主机安全-旗舰版
     * @param integer $ConfigurationSetting 防护设置
- 0 未配置
- 1 已配置
     * @param integer $Enable 总开关
- 0 未开启
- 1已开启
     * @param integer $VulDefEnable 漏洞防御开关
- 0 未开启
- 1 开启
     * @param integer $VulDefMode 漏洞防御模式
- 0 标准
- 1 重保
     * @param integer $VulDefAction 漏洞防御动作
- 0 仅检测
- 1 检测+防御
     * @param integer $MemShellDefEnable 内存马防御开关
- 0 未开启
- 1 开启
     * @param integer $SafeInject 更多防护
- 0 不注入会重启的进程 
- 1 注入会重启的进程
     * @param integer $PerformanceLimit 性能阈值配置开关
- 0 未开启
- 1 开启
     * @param integer $PerformanceLimitCpu CPU阈值,取值1-99
     * @param integer $PerformanceLimitMem 内存阈值,取值1-99
     * @param integer $PerformanceLimitMemAmount 内存剩余阈值
     * @param integer $RaspException 插件状态
- 0 使用正常
- 1 存在异常
- 2 未使用
     * @param string $LatestUpdateTime 最近更新时间
     * @param string $ClusterName 集群ID,仅容器资产有值
     * @param string $ClusterId 集群名称,仅容器资产有值
     * @param OrderDetail $OrderDetail 订单信息
     * @param boolean $IsUnBind 是否允许解绑,fasle 不允许 true 允许
     * @param string $UUID uuid 机器唯一ID,仅AssetType = CWP 时有值
     * @param string $Reason 无注入/注入失败原因
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
        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("PrivateIP",$param) and $param["PrivateIP"] !== null) {
            $this->PrivateIP = $param["PrivateIP"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ProtectionVersion",$param) and $param["ProtectionVersion"] !== null) {
            $this->ProtectionVersion = $param["ProtectionVersion"];
        }

        if (array_key_exists("ConfigurationSetting",$param) and $param["ConfigurationSetting"] !== null) {
            $this->ConfigurationSetting = $param["ConfigurationSetting"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VulDefEnable",$param) and $param["VulDefEnable"] !== null) {
            $this->VulDefEnable = $param["VulDefEnable"];
        }

        if (array_key_exists("VulDefMode",$param) and $param["VulDefMode"] !== null) {
            $this->VulDefMode = $param["VulDefMode"];
        }

        if (array_key_exists("VulDefAction",$param) and $param["VulDefAction"] !== null) {
            $this->VulDefAction = $param["VulDefAction"];
        }

        if (array_key_exists("MemShellDefEnable",$param) and $param["MemShellDefEnable"] !== null) {
            $this->MemShellDefEnable = $param["MemShellDefEnable"];
        }

        if (array_key_exists("SafeInject",$param) and $param["SafeInject"] !== null) {
            $this->SafeInject = $param["SafeInject"];
        }

        if (array_key_exists("PerformanceLimit",$param) and $param["PerformanceLimit"] !== null) {
            $this->PerformanceLimit = $param["PerformanceLimit"];
        }

        if (array_key_exists("PerformanceLimitCpu",$param) and $param["PerformanceLimitCpu"] !== null) {
            $this->PerformanceLimitCpu = $param["PerformanceLimitCpu"];
        }

        if (array_key_exists("PerformanceLimitMem",$param) and $param["PerformanceLimitMem"] !== null) {
            $this->PerformanceLimitMem = $param["PerformanceLimitMem"];
        }

        if (array_key_exists("PerformanceLimitMemAmount",$param) and $param["PerformanceLimitMemAmount"] !== null) {
            $this->PerformanceLimitMemAmount = $param["PerformanceLimitMemAmount"];
        }

        if (array_key_exists("RaspException",$param) and $param["RaspException"] !== null) {
            $this->RaspException = $param["RaspException"];
        }

        if (array_key_exists("LatestUpdateTime",$param) and $param["LatestUpdateTime"] !== null) {
            $this->LatestUpdateTime = $param["LatestUpdateTime"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("OrderDetail",$param) and $param["OrderDetail"] !== null) {
            $this->OrderDetail = new OrderDetail();
            $this->OrderDetail->deserialize($param["OrderDetail"]);
        }

        if (array_key_exists("IsUnBind",$param) and $param["IsUnBind"] !== null) {
            $this->IsUnBind = $param["IsUnBind"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
