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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 重保授权包列表对象
 *
 * @method string getQUUID() 获取<p>机器唯一ID</p>
 * @method void setQUUID(string $QUUID) 设置<p>机器唯一ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getPublicIP() 获取<p>公网IP</p>
 * @method void setPublicIP(string $PublicIP) 设置<p>公网IP</p>
 * @method string getPrivateIP() 获取<p>内网IP</p>
 * @method void setPrivateIP(string $PrivateIP) 设置<p>内网IP</p>
 * @method array getTags() 获取<p>云标签信息</p>
 * @method void setTags(array $Tags) 设置<p>云标签信息</p>
 * @method array getProtectionVersion() 获取<p>防护版本信息</p><ul><li>CriticalProtection 重保防护包</li><li>Pro 容器安全-专业版</li><li>Ultimate 主机安全-旗舰版</li></ul>
 * @method void setProtectionVersion(array $ProtectionVersion) 设置<p>防护版本信息</p><ul><li>CriticalProtection 重保防护包</li><li>Pro 容器安全-专业版</li><li>Ultimate 主机安全-旗舰版</li></ul>
 * @method integer getConfigurationSetting() 获取<p>防护设置</p><ul><li>0 未配置</li><li>1 已配置</li></ul>
 * @method void setConfigurationSetting(integer $ConfigurationSetting) 设置<p>防护设置</p><ul><li>0 未配置</li><li>1 已配置</li></ul>
 * @method integer getEnable() 获取<p>总开关</p><ul><li>0 未开启</li><li>1已开启</li></ul>
 * @method void setEnable(integer $Enable) 设置<p>总开关</p><ul><li>0 未开启</li><li>1已开启</li></ul>
 * @method integer getVulDefEnable() 获取<p>漏洞防御开关</p><ul><li>0 未开启</li><li>1 开启</li></ul>
 * @method void setVulDefEnable(integer $VulDefEnable) 设置<p>漏洞防御开关</p><ul><li>0 未开启</li><li>1 开启</li></ul>
 * @method integer getVulDefMode() 获取<p>漏洞防御模式</p><ul><li>0 标准</li><li>1 重保</li></ul>
 * @method void setVulDefMode(integer $VulDefMode) 设置<p>漏洞防御模式</p><ul><li>0 标准</li><li>1 重保</li></ul>
 * @method integer getVulDefAction() 获取<p>漏洞防御动作</p><ul><li>0 仅检测</li><li>1 检测+防御</li></ul>
 * @method void setVulDefAction(integer $VulDefAction) 设置<p>漏洞防御动作</p><ul><li>0 仅检测</li><li>1 检测+防御</li></ul>
 * @method integer getMemShellDefEnable() 获取<p>内存马防御开关</p><ul><li>0 未开启</li><li>1 开启</li></ul>
 * @method void setMemShellDefEnable(integer $MemShellDefEnable) 设置<p>内存马防御开关</p><ul><li>0 未开启</li><li>1 开启</li></ul>
 * @method integer getSafeInject() 获取<p>更多防护</p><ul><li>0 不注入会重启的进程 </li><li>1 注入会重启的进程</li></ul>
 * @method void setSafeInject(integer $SafeInject) 设置<p>更多防护</p><ul><li>0 不注入会重启的进程 </li><li>1 注入会重启的进程</li></ul>
 * @method integer getPerformanceLimit() 获取<p>性能阈值配置开关</p><ul><li>0 未开启</li><li>1 开启</li></ul>
 * @method void setPerformanceLimit(integer $PerformanceLimit) 设置<p>性能阈值配置开关</p><ul><li>0 未开启</li><li>1 开启</li></ul>
 * @method integer getPerformanceLimitCpu() 获取<p>CPU阈值,取值1-99</p>
 * @method void setPerformanceLimitCpu(integer $PerformanceLimitCpu) 设置<p>CPU阈值,取值1-99</p>
 * @method integer getPerformanceLimitMem() 获取<p>内存阈值,取值1-99</p>
 * @method void setPerformanceLimitMem(integer $PerformanceLimitMem) 设置<p>内存阈值,取值1-99</p>
 * @method integer getPerformanceLimitMemAmount() 获取<p>内存剩余阈值</p>
 * @method void setPerformanceLimitMemAmount(integer $PerformanceLimitMemAmount) 设置<p>内存剩余阈值</p>
 * @method integer getRaspException() 获取<p>插件状态</p><ul><li>0 使用正常</li><li>1 存在异常</li><li>2 未使用</li></ul>
 * @method void setRaspException(integer $RaspException) 设置<p>插件状态</p><ul><li>0 使用正常</li><li>1 存在异常</li><li>2 未使用</li></ul>
 * @method string getLatestUpdateTime() 获取<p>最近更新时间</p>
 * @method void setLatestUpdateTime(string $LatestUpdateTime) 设置<p>最近更新时间</p>
 * @method string getClusterName() 获取<p>集群ID,仅容器资产有值</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群ID,仅容器资产有值</p>
 * @method string getClusterId() 获取<p>集群名称,仅容器资产有值</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群名称,仅容器资产有值</p>
 * @method OrderDetail getOrderDetail() 获取<p>订单信息</p>
 * @method void setOrderDetail(OrderDetail $OrderDetail) 设置<p>订单信息</p>
 * @method boolean getIsUnBind() 获取<p>是否允许解绑,fasle 不允许 true 允许</p>
 * @method void setIsUnBind(boolean $IsUnBind) 设置<p>是否允许解绑,fasle 不允许 true 允许</p>
 * @method string getUUID() 获取<p>uuid 机器唯一ID,仅AssetType = CWP 时有值</p>
 * @method void setUUID(string $UUID) 设置<p>uuid 机器唯一ID,仅AssetType = CWP 时有值</p>
 * @method string getReason() 获取<p>无注入/注入失败原因</p><p>默认值：空</p><p>注入失败才会有值</p>
 * @method void setReason(string $Reason) 设置<p>无注入/注入失败原因</p><p>默认值：空</p><p>注入失败才会有值</p>
 */
class RaspLicenseList extends AbstractModel
{
    /**
     * @var string <p>机器唯一ID</p>
     */
    public $QUUID;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>公网IP</p>
     */
    public $PublicIP;

    /**
     * @var string <p>内网IP</p>
     */
    public $PrivateIP;

    /**
     * @var array <p>云标签信息</p>
     */
    public $Tags;

    /**
     * @var array <p>防护版本信息</p><ul><li>CriticalProtection 重保防护包</li><li>Pro 容器安全-专业版</li><li>Ultimate 主机安全-旗舰版</li></ul>
     */
    public $ProtectionVersion;

    /**
     * @var integer <p>防护设置</p><ul><li>0 未配置</li><li>1 已配置</li></ul>
     */
    public $ConfigurationSetting;

    /**
     * @var integer <p>总开关</p><ul><li>0 未开启</li><li>1已开启</li></ul>
     */
    public $Enable;

    /**
     * @var integer <p>漏洞防御开关</p><ul><li>0 未开启</li><li>1 开启</li></ul>
     */
    public $VulDefEnable;

    /**
     * @var integer <p>漏洞防御模式</p><ul><li>0 标准</li><li>1 重保</li></ul>
     */
    public $VulDefMode;

    /**
     * @var integer <p>漏洞防御动作</p><ul><li>0 仅检测</li><li>1 检测+防御</li></ul>
     */
    public $VulDefAction;

    /**
     * @var integer <p>内存马防御开关</p><ul><li>0 未开启</li><li>1 开启</li></ul>
     */
    public $MemShellDefEnable;

    /**
     * @var integer <p>更多防护</p><ul><li>0 不注入会重启的进程 </li><li>1 注入会重启的进程</li></ul>
     */
    public $SafeInject;

    /**
     * @var integer <p>性能阈值配置开关</p><ul><li>0 未开启</li><li>1 开启</li></ul>
     */
    public $PerformanceLimit;

    /**
     * @var integer <p>CPU阈值,取值1-99</p>
     */
    public $PerformanceLimitCpu;

    /**
     * @var integer <p>内存阈值,取值1-99</p>
     */
    public $PerformanceLimitMem;

    /**
     * @var integer <p>内存剩余阈值</p>
     */
    public $PerformanceLimitMemAmount;

    /**
     * @var integer <p>插件状态</p><ul><li>0 使用正常</li><li>1 存在异常</li><li>2 未使用</li></ul>
     */
    public $RaspException;

    /**
     * @var string <p>最近更新时间</p>
     */
    public $LatestUpdateTime;

    /**
     * @var string <p>集群ID,仅容器资产有值</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群名称,仅容器资产有值</p>
     */
    public $ClusterId;

    /**
     * @var OrderDetail <p>订单信息</p>
     */
    public $OrderDetail;

    /**
     * @var boolean <p>是否允许解绑,fasle 不允许 true 允许</p>
     */
    public $IsUnBind;

    /**
     * @var string <p>uuid 机器唯一ID,仅AssetType = CWP 时有值</p>
     */
    public $UUID;

    /**
     * @var string <p>无注入/注入失败原因</p><p>默认值：空</p><p>注入失败才会有值</p>
     */
    public $Reason;

    /**
     * @param string $QUUID <p>机器唯一ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $PublicIP <p>公网IP</p>
     * @param string $PrivateIP <p>内网IP</p>
     * @param array $Tags <p>云标签信息</p>
     * @param array $ProtectionVersion <p>防护版本信息</p><ul><li>CriticalProtection 重保防护包</li><li>Pro 容器安全-专业版</li><li>Ultimate 主机安全-旗舰版</li></ul>
     * @param integer $ConfigurationSetting <p>防护设置</p><ul><li>0 未配置</li><li>1 已配置</li></ul>
     * @param integer $Enable <p>总开关</p><ul><li>0 未开启</li><li>1已开启</li></ul>
     * @param integer $VulDefEnable <p>漏洞防御开关</p><ul><li>0 未开启</li><li>1 开启</li></ul>
     * @param integer $VulDefMode <p>漏洞防御模式</p><ul><li>0 标准</li><li>1 重保</li></ul>
     * @param integer $VulDefAction <p>漏洞防御动作</p><ul><li>0 仅检测</li><li>1 检测+防御</li></ul>
     * @param integer $MemShellDefEnable <p>内存马防御开关</p><ul><li>0 未开启</li><li>1 开启</li></ul>
     * @param integer $SafeInject <p>更多防护</p><ul><li>0 不注入会重启的进程 </li><li>1 注入会重启的进程</li></ul>
     * @param integer $PerformanceLimit <p>性能阈值配置开关</p><ul><li>0 未开启</li><li>1 开启</li></ul>
     * @param integer $PerformanceLimitCpu <p>CPU阈值,取值1-99</p>
     * @param integer $PerformanceLimitMem <p>内存阈值,取值1-99</p>
     * @param integer $PerformanceLimitMemAmount <p>内存剩余阈值</p>
     * @param integer $RaspException <p>插件状态</p><ul><li>0 使用正常</li><li>1 存在异常</li><li>2 未使用</li></ul>
     * @param string $LatestUpdateTime <p>最近更新时间</p>
     * @param string $ClusterName <p>集群ID,仅容器资产有值</p>
     * @param string $ClusterId <p>集群名称,仅容器资产有值</p>
     * @param OrderDetail $OrderDetail <p>订单信息</p>
     * @param boolean $IsUnBind <p>是否允许解绑,fasle 不允许 true 允许</p>
     * @param string $UUID <p>uuid 机器唯一ID,仅AssetType = CWP 时有值</p>
     * @param string $Reason <p>无注入/注入失败原因</p><p>默认值：空</p><p>注入失败才会有值</p>
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
