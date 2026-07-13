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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取云原生API网关基础信息响应结果。
 *
 * @method string getGatewayId() 获取<p>云原生API网关ID。</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>云原生API网关ID。</p>
 * @method string getStatus() 获取<p>云原生API网关状态。</p>
 * @method void setStatus(string $Status) 设置<p>云原生API网关状态。</p>
 * @method string getName() 获取<p>云原生API网关名。</p>
 * @method void setName(string $Name) 设置<p>云原生API网关名。</p>
 * @method string getType() 获取<p>云原生API网关类型。</p>
 * @method void setType(string $Type) 设置<p>云原生API网关类型。</p>
 * @method string getGatewayVersion() 获取<p>实例版本：</p><ul><li>2.4.1</li><li>2.5.1</li></ul>
 * @method void setGatewayVersion(string $GatewayVersion) 设置<p>实例版本：</p><ul><li>2.4.1</li><li>2.5.1</li></ul>
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() 获取<p>云原生API网关节点信息。</p>
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) 设置<p>云原生API网关节点信息。</p>
 * @method CloudNativeAPIGatewayVpcConfig getVpcConfig() 获取<p>云原生API网关vpc配置。</p>
 * @method void setVpcConfig(CloudNativeAPIGatewayVpcConfig $VpcConfig) 设置<p>云原生API网关vpc配置。</p>
 * @method string getDescription() 获取<p>云原生API网关描述。</p>
 * @method void setDescription(string $Description) 设置<p>云原生API网关描述。</p>
 * @method string getCreateTime() 获取<p>云原生API网关创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>云原生API网关创建时间。</p>
 * @method array getTags() 获取<p>实例的标签信息</p>
 * @method void setTags(array $Tags) 设置<p>实例的标签信息</p>
 * @method boolean getEnableCls() 获取<p>是否开启 cls 日志</p>
 * @method void setEnableCls(boolean $EnableCls) 设置<p>是否开启 cls 日志</p>
 * @method integer getTradeType() 获取<p>付费模式，0表示后付费，1预付费</p>
 * @method void setTradeType(integer $TradeType) 设置<p>付费模式，0表示后付费，1预付费</p>
 * @method string getFeatureVersion() 获取<p>实例版本，当前支持开发版、标准版、专业版【TRIAL、STANDARD、PROFESSIONAL】</p>
 * @method void setFeatureVersion(string $FeatureVersion) 设置<p>实例版本，当前支持开发版、标准版、专业版【TRIAL、STANDARD、PROFESSIONAL】</p>
 * @method integer getInternetMaxBandwidthOut() 获取<p>公网出流量带宽，[1,2048]Mbps</p>
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置<p>公网出流量带宽，[1,2048]Mbps</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标记，0表示默认状态(用户未设置，即初始状态)；<br>1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续费，需要设置为0</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标记，0表示默认状态(用户未设置，即初始状态)；<br>1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续费，需要设置为0</p>
 * @method string getCurDeadline() 获取<p>到期时间，预付费时使用</p>
 * @method void setCurDeadline(string $CurDeadline) 设置<p>到期时间，预付费时使用</p>
 * @method string getIsolateTime() 获取<p>隔离时间，实例隔离时使用</p>
 * @method void setIsolateTime(string $IsolateTime) 设置<p>隔离时间，实例隔离时使用</p>
 * @method boolean getEnableInternet() 获取<p>是否开启客户端公网。</p>
 * @method void setEnableInternet(boolean $EnableInternet) 设置<p>是否开启客户端公网。</p>
 * @method string getEngineRegion() 获取<p>实例实际的地域信息</p>
 * @method void setEngineRegion(string $EngineRegion) 设置<p>实例实际的地域信息</p>
 * @method string getIngressClassName() 获取<p>Ingress class名称</p>
 * @method void setIngressClassName(string $IngressClassName) 设置<p>Ingress class名称</p>
 * @method string getInternetPayMode() 获取<p>公网计费方式。可选取值 BANDWIDTH | TRAFFIC ，表示按带宽和按流量计费。</p>
 * @method void setInternetPayMode(string $InternetPayMode) 设置<p>公网计费方式。可选取值 BANDWIDTH | TRAFFIC ，表示按带宽和按流量计费。</p>
 * @method string getGatewayMinorVersion() 获取<p>云原生API网关小版本号</p>
 * @method void setGatewayMinorVersion(string $GatewayMinorVersion) 设置<p>云原生API网关小版本号</p>
 * @method InstancePort getInstancePort() 获取<p>实例监听的端口信息</p>
 * @method void setInstancePort(InstancePort $InstancePort) 设置<p>实例监听的端口信息</p>
 * @method string getLoadBalancerType() 获取<p>公网CLB默认类型</p>
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置<p>公网CLB默认类型</p>
 * @method array getPublicIpAddresses() 获取<p>公网IP地址列表</p>
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置<p>公网IP地址列表</p>
 * @method boolean getDeleteProtect() 获取<p>是否开启删除保护</p>
 * @method void setDeleteProtect(boolean $DeleteProtect) 设置<p>是否开启删除保护</p>
 * @method array getAvailableVersions() 获取<p>表示可以升级的版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableVersions(array $AvailableVersions) 设置<p>表示可以升级的版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAvailableUpgradeVersions() 获取<p>网关可以升级的版本号列表</p>
 * @method void setAvailableUpgradeVersions(array $AvailableUpgradeVersions) 设置<p>网关可以升级的版本号列表</p>
 * @method boolean getAvailableUpgrade() 获取<p>是否提示可升级</p>
 * @method void setAvailableUpgrade(boolean $AvailableUpgrade) 设置<p>是否提示可升级</p>
 * @method string getAvailableRollbackVersion() 获取<p>可回退的版本</p>
 * @method void setAvailableRollbackVersion(string $AvailableRollbackVersion) 设置<p>可回退的版本</p>
 * @method boolean getForceHTTPSRedirect() 获取<p>强制跳转HTTPS开关</p>
 * @method void setForceHTTPSRedirect(boolean $ForceHTTPSRedirect) 设置<p>强制跳转HTTPS开关</p>
 */
class DescribeCloudNativeAPIGatewayResult extends AbstractModel
{
    /**
     * @var string <p>云原生API网关ID。</p>
     */
    public $GatewayId;

    /**
     * @var string <p>云原生API网关状态。</p>
     */
    public $Status;

    /**
     * @var string <p>云原生API网关名。</p>
     */
    public $Name;

    /**
     * @var string <p>云原生API网关类型。</p>
     */
    public $Type;

    /**
     * @var string <p>实例版本：</p><ul><li>2.4.1</li><li>2.5.1</li></ul>
     */
    public $GatewayVersion;

    /**
     * @var CloudNativeAPIGatewayNodeConfig <p>云原生API网关节点信息。</p>
     */
    public $NodeConfig;

    /**
     * @var CloudNativeAPIGatewayVpcConfig <p>云原生API网关vpc配置。</p>
     */
    public $VpcConfig;

    /**
     * @var string <p>云原生API网关描述。</p>
     */
    public $Description;

    /**
     * @var string <p>云原生API网关创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var array <p>实例的标签信息</p>
     */
    public $Tags;

    /**
     * @var boolean <p>是否开启 cls 日志</p>
     */
    public $EnableCls;

    /**
     * @var integer <p>付费模式，0表示后付费，1预付费</p>
     */
    public $TradeType;

    /**
     * @var string <p>实例版本，当前支持开发版、标准版、专业版【TRIAL、STANDARD、PROFESSIONAL】</p>
     */
    public $FeatureVersion;

    /**
     * @var integer <p>公网出流量带宽，[1,2048]Mbps</p>
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var integer <p>自动续费标记，0表示默认状态(用户未设置，即初始状态)；<br>1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续费，需要设置为0</p>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>到期时间，预付费时使用</p>
     */
    public $CurDeadline;

    /**
     * @var string <p>隔离时间，实例隔离时使用</p>
     */
    public $IsolateTime;

    /**
     * @var boolean <p>是否开启客户端公网。</p>
     */
    public $EnableInternet;

    /**
     * @var string <p>实例实际的地域信息</p>
     */
    public $EngineRegion;

    /**
     * @var string <p>Ingress class名称</p>
     */
    public $IngressClassName;

    /**
     * @var string <p>公网计费方式。可选取值 BANDWIDTH | TRAFFIC ，表示按带宽和按流量计费。</p>
     */
    public $InternetPayMode;

    /**
     * @var string <p>云原生API网关小版本号</p>
     */
    public $GatewayMinorVersion;

    /**
     * @var InstancePort <p>实例监听的端口信息</p>
     */
    public $InstancePort;

    /**
     * @var string <p>公网CLB默认类型</p>
     */
    public $LoadBalancerType;

    /**
     * @var array <p>公网IP地址列表</p>
     */
    public $PublicIpAddresses;

    /**
     * @var boolean <p>是否开启删除保护</p>
     */
    public $DeleteProtect;

    /**
     * @var array <p>表示可以升级的版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableVersions;

    /**
     * @var array <p>网关可以升级的版本号列表</p>
     */
    public $AvailableUpgradeVersions;

    /**
     * @var boolean <p>是否提示可升级</p>
     */
    public $AvailableUpgrade;

    /**
     * @var string <p>可回退的版本</p>
     */
    public $AvailableRollbackVersion;

    /**
     * @var boolean <p>强制跳转HTTPS开关</p>
     */
    public $ForceHTTPSRedirect;

    /**
     * @param string $GatewayId <p>云原生API网关ID。</p>
     * @param string $Status <p>云原生API网关状态。</p>
     * @param string $Name <p>云原生API网关名。</p>
     * @param string $Type <p>云原生API网关类型。</p>
     * @param string $GatewayVersion <p>实例版本：</p><ul><li>2.4.1</li><li>2.5.1</li></ul>
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig <p>云原生API网关节点信息。</p>
     * @param CloudNativeAPIGatewayVpcConfig $VpcConfig <p>云原生API网关vpc配置。</p>
     * @param string $Description <p>云原生API网关描述。</p>
     * @param string $CreateTime <p>云原生API网关创建时间。</p>
     * @param array $Tags <p>实例的标签信息</p>
     * @param boolean $EnableCls <p>是否开启 cls 日志</p>
     * @param integer $TradeType <p>付费模式，0表示后付费，1预付费</p>
     * @param string $FeatureVersion <p>实例版本，当前支持开发版、标准版、专业版【TRIAL、STANDARD、PROFESSIONAL】</p>
     * @param integer $InternetMaxBandwidthOut <p>公网出流量带宽，[1,2048]Mbps</p>
     * @param integer $AutoRenewFlag <p>自动续费标记，0表示默认状态(用户未设置，即初始状态)；<br>1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续费，需要设置为0</p>
     * @param string $CurDeadline <p>到期时间，预付费时使用</p>
     * @param string $IsolateTime <p>隔离时间，实例隔离时使用</p>
     * @param boolean $EnableInternet <p>是否开启客户端公网。</p>
     * @param string $EngineRegion <p>实例实际的地域信息</p>
     * @param string $IngressClassName <p>Ingress class名称</p>
     * @param string $InternetPayMode <p>公网计费方式。可选取值 BANDWIDTH | TRAFFIC ，表示按带宽和按流量计费。</p>
     * @param string $GatewayMinorVersion <p>云原生API网关小版本号</p>
     * @param InstancePort $InstancePort <p>实例监听的端口信息</p>
     * @param string $LoadBalancerType <p>公网CLB默认类型</p>
     * @param array $PublicIpAddresses <p>公网IP地址列表</p>
     * @param boolean $DeleteProtect <p>是否开启删除保护</p>
     * @param array $AvailableVersions <p>表示可以升级的版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AvailableUpgradeVersions <p>网关可以升级的版本号列表</p>
     * @param boolean $AvailableUpgrade <p>是否提示可升级</p>
     * @param string $AvailableRollbackVersion <p>可回退的版本</p>
     * @param boolean $ForceHTTPSRedirect <p>强制跳转HTTPS开关</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("GatewayVersion",$param) and $param["GatewayVersion"] !== null) {
            $this->GatewayVersion = $param["GatewayVersion"];
        }

        if (array_key_exists("NodeConfig",$param) and $param["NodeConfig"] !== null) {
            $this->NodeConfig = new CloudNativeAPIGatewayNodeConfig();
            $this->NodeConfig->deserialize($param["NodeConfig"]);
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new CloudNativeAPIGatewayVpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new InstanceTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EnableCls",$param) and $param["EnableCls"] !== null) {
            $this->EnableCls = $param["EnableCls"];
        }

        if (array_key_exists("TradeType",$param) and $param["TradeType"] !== null) {
            $this->TradeType = $param["TradeType"];
        }

        if (array_key_exists("FeatureVersion",$param) and $param["FeatureVersion"] !== null) {
            $this->FeatureVersion = $param["FeatureVersion"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("CurDeadline",$param) and $param["CurDeadline"] !== null) {
            $this->CurDeadline = $param["CurDeadline"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("EnableInternet",$param) and $param["EnableInternet"] !== null) {
            $this->EnableInternet = $param["EnableInternet"];
        }

        if (array_key_exists("EngineRegion",$param) and $param["EngineRegion"] !== null) {
            $this->EngineRegion = $param["EngineRegion"];
        }

        if (array_key_exists("IngressClassName",$param) and $param["IngressClassName"] !== null) {
            $this->IngressClassName = $param["IngressClassName"];
        }

        if (array_key_exists("InternetPayMode",$param) and $param["InternetPayMode"] !== null) {
            $this->InternetPayMode = $param["InternetPayMode"];
        }

        if (array_key_exists("GatewayMinorVersion",$param) and $param["GatewayMinorVersion"] !== null) {
            $this->GatewayMinorVersion = $param["GatewayMinorVersion"];
        }

        if (array_key_exists("InstancePort",$param) and $param["InstancePort"] !== null) {
            $this->InstancePort = new InstancePort();
            $this->InstancePort->deserialize($param["InstancePort"]);
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("DeleteProtect",$param) and $param["DeleteProtect"] !== null) {
            $this->DeleteProtect = $param["DeleteProtect"];
        }

        if (array_key_exists("AvailableVersions",$param) and $param["AvailableVersions"] !== null) {
            $this->AvailableVersions = $param["AvailableVersions"];
        }

        if (array_key_exists("AvailableUpgradeVersions",$param) and $param["AvailableUpgradeVersions"] !== null) {
            $this->AvailableUpgradeVersions = $param["AvailableUpgradeVersions"];
        }

        if (array_key_exists("AvailableUpgrade",$param) and $param["AvailableUpgrade"] !== null) {
            $this->AvailableUpgrade = $param["AvailableUpgrade"];
        }

        if (array_key_exists("AvailableRollbackVersion",$param) and $param["AvailableRollbackVersion"] !== null) {
            $this->AvailableRollbackVersion = $param["AvailableRollbackVersion"];
        }

        if (array_key_exists("ForceHTTPSRedirect",$param) and $param["ForceHTTPSRedirect"] !== null) {
            $this->ForceHTTPSRedirect = $param["ForceHTTPSRedirect"];
        }
    }
}
