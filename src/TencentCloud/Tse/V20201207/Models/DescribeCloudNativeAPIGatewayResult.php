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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取云原生API网关基础信息响应结果。
 *
 * @method string getGatewayId() 获取云原生API网关ID。
 * @method void setGatewayId(string $GatewayId) 设置云原生API网关ID。
 * @method string getStatus() 获取云原生API网关状态。
 * @method void setStatus(string $Status) 设置云原生API网关状态。
 * @method string getName() 获取云原生API网关名。
 * @method void setName(string $Name) 设置云原生API网关名。
 * @method string getType() 获取云原生API网关类型。
 * @method void setType(string $Type) 设置云原生API网关类型。
 * @method string getGatewayVersion() 获取实例版本：
- 2.4.1
- 2.5.1
 * @method void setGatewayVersion(string $GatewayVersion) 设置实例版本：
- 2.4.1
- 2.5.1
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() 获取云原生API网关节点信息。
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) 设置云原生API网关节点信息。
 * @method CloudNativeAPIGatewayVpcConfig getVpcConfig() 获取云原生API网关vpc配置。
 * @method void setVpcConfig(CloudNativeAPIGatewayVpcConfig $VpcConfig) 设置云原生API网关vpc配置。
 * @method string getDescription() 获取云原生API网关描述。
 * @method void setDescription(string $Description) 设置云原生API网关描述。
 * @method string getCreateTime() 获取云原生API网关创建时间。
 * @method void setCreateTime(string $CreateTime) 设置云原生API网关创建时间。
 * @method array getTags() 获取实例的标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置实例的标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableCls() 获取是否开启 cls 日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableCls(boolean $EnableCls) 设置是否开启 cls 日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTradeType() 获取付费模式，0表示后付费，1预付费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeType(integer $TradeType) 设置付费模式，0表示后付费，1预付费
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFeatureVersion() 获取实例版本，当前支持开发版、标准版、专业版【TRIAL、STANDARD、PROFESSIONAL】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeatureVersion(string $FeatureVersion) 设置实例版本，当前支持开发版、标准版、专业版【TRIAL、STANDARD、PROFESSIONAL】
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInternetMaxBandwidthOut() 获取公网出流量带宽，[1,2048]Mbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置公网出流量带宽，[1,2048]Mbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取自动续费标记，0表示默认状态(用户未设置，即初始状态)；
1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续费，需要设置为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记，0表示默认状态(用户未设置，即初始状态)；
1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续费，需要设置为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurDeadline() 获取到期时间，预付费时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurDeadline(string $CurDeadline) 设置到期时间，预付费时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolateTime() 获取隔离时间，实例隔离时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateTime(string $IsolateTime) 设置隔离时间，实例隔离时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableInternet() 获取是否开启客户端公网。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableInternet(boolean $EnableInternet) 设置是否开启客户端公网。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineRegion() 获取实例实际的地域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineRegion(string $EngineRegion) 设置实例实际的地域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIngressClassName() 获取Ingress class名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIngressClassName(string $IngressClassName) 设置Ingress class名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInternetPayMode() 获取公网计费方式。可选取值 BANDWIDTH | TRAFFIC ，表示按带宽和按流量计费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetPayMode(string $InternetPayMode) 设置公网计费方式。可选取值 BANDWIDTH | TRAFFIC ，表示按带宽和按流量计费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayMinorVersion() 获取云原生API网关小版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayMinorVersion(string $GatewayMinorVersion) 设置云原生API网关小版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstancePort getInstancePort() 获取实例监听的端口信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstancePort(InstancePort $InstancePort) 设置实例监听的端口信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerType() 获取公网CLB默认类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置公网CLB默认类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPublicIpAddresses() 获取公网IP地址列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置公网IP地址列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeCloudNativeAPIGatewayResult extends AbstractModel
{
    /**
     * @var string 云原生API网关ID。
     */
    public $GatewayId;

    /**
     * @var string 云原生API网关状态。
     */
    public $Status;

    /**
     * @var string 云原生API网关名。
     */
    public $Name;

    /**
     * @var string 云原生API网关类型。
     */
    public $Type;

    /**
     * @var string 实例版本：
- 2.4.1
- 2.5.1
     */
    public $GatewayVersion;

    /**
     * @var CloudNativeAPIGatewayNodeConfig 云原生API网关节点信息。
     */
    public $NodeConfig;

    /**
     * @var CloudNativeAPIGatewayVpcConfig 云原生API网关vpc配置。
     */
    public $VpcConfig;

    /**
     * @var string 云原生API网关描述。
     */
    public $Description;

    /**
     * @var string 云原生API网关创建时间。
     */
    public $CreateTime;

    /**
     * @var array 实例的标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var boolean 是否开启 cls 日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableCls;

    /**
     * @var integer 付费模式，0表示后付费，1预付费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeType;

    /**
     * @var string 实例版本，当前支持开发版、标准版、专业版【TRIAL、STANDARD、PROFESSIONAL】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeatureVersion;

    /**
     * @var integer 公网出流量带宽，[1,2048]Mbps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var integer 自动续费标记，0表示默认状态(用户未设置，即初始状态)；
1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续费，需要设置为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var string 到期时间，预付费时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurDeadline;

    /**
     * @var string 隔离时间，实例隔离时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateTime;

    /**
     * @var boolean 是否开启客户端公网。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableInternet;

    /**
     * @var string 实例实际的地域信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineRegion;

    /**
     * @var string Ingress class名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IngressClassName;

    /**
     * @var string 公网计费方式。可选取值 BANDWIDTH | TRAFFIC ，表示按带宽和按流量计费。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetPayMode;

    /**
     * @var string 云原生API网关小版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayMinorVersion;

    /**
     * @var InstancePort 实例监听的端口信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstancePort;

    /**
     * @var string 公网CLB默认类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerType;

    /**
     * @var array 公网IP地址列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIpAddresses;

    /**
     * @param string $GatewayId 云原生API网关ID。
     * @param string $Status 云原生API网关状态。
     * @param string $Name 云原生API网关名。
     * @param string $Type 云原生API网关类型。
     * @param string $GatewayVersion 实例版本：
- 2.4.1
- 2.5.1
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig 云原生API网关节点信息。
     * @param CloudNativeAPIGatewayVpcConfig $VpcConfig 云原生API网关vpc配置。
     * @param string $Description 云原生API网关描述。
     * @param string $CreateTime 云原生API网关创建时间。
     * @param array $Tags 实例的标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableCls 是否开启 cls 日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TradeType 付费模式，0表示后付费，1预付费
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FeatureVersion 实例版本，当前支持开发版、标准版、专业版【TRIAL、STANDARD、PROFESSIONAL】
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InternetMaxBandwidthOut 公网出流量带宽，[1,2048]Mbps
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 自动续费标记，0表示默认状态(用户未设置，即初始状态)；
1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续费，需要设置为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurDeadline 到期时间，预付费时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolateTime 隔离时间，实例隔离时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableInternet 是否开启客户端公网。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineRegion 实例实际的地域信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IngressClassName Ingress class名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InternetPayMode 公网计费方式。可选取值 BANDWIDTH | TRAFFIC ，表示按带宽和按流量计费。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayMinorVersion 云原生API网关小版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstancePort $InstancePort 实例监听的端口信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerType 公网CLB默认类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PublicIpAddresses 公网IP地址列表
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
    }
}
