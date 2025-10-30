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
 * 云原生API网关配置信息。
 *
 * @method string getConsoleType() 获取控制台类型。
 * @method void setConsoleType(string $ConsoleType) 设置控制台类型。
 * @method string getHttpUrl() 获取HTTP链接地址。
 * @method void setHttpUrl(string $HttpUrl) 设置HTTP链接地址。
 * @method string getHttpsUrl() 获取HTTPS链接地址。
 * @method void setHttpsUrl(string $HttpsUrl) 设置HTTPS链接地址。
 * @method string getNetType() 获取网络类型, Open|Internal。
 * @method void setNetType(string $NetType) 设置网络类型, Open|Internal。
 * @method string getAdminUser() 获取管理员用户名。
 * @method void setAdminUser(string $AdminUser) 设置管理员用户名。
 * @method string getAdminPassword() 获取管理员密码。
 * @method void setAdminPassword(string $AdminPassword) 设置管理员密码。
 * @method string getStatus() 获取网络状态, Open|Closed|Updating
 * @method void setStatus(string $Status) 设置网络状态, Open|Closed|Updating
 * @method NetworkAccessControl getAccessControl() 获取网络访问策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessControl(NetworkAccessControl $AccessControl) 设置网络访问策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取内网子网 ID
 * @method void setSubnetId(string $SubnetId) 设置内网子网 ID
 * @method string getVpcId() 获取内网VPC ID
 * @method void setVpcId(string $VpcId) 设置内网VPC ID
 * @method string getDescription() 获取负载均衡的描述
 * @method void setDescription(string $Description) 设置负载均衡的描述
 * @method string getSlaType() 获取负载均衡的规格类型
 * @method void setSlaType(string $SlaType) 设置负载均衡的规格类型
 * @method string getSlaName() 获取clb规格名称
 * @method void setSlaName(string $SlaName) 设置clb规格名称
 * @method string getVip() 获取clb vip
 * @method void setVip(string $Vip) 设置clb vip
 * @method integer getInternetMaxBandwidthOut() 获取带宽
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置带宽
 * @method boolean getMultiZoneFlag() 获取是否多可用区
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) 设置是否多可用区
 * @method string getMasterZoneId() 获取主可用区
 * @method void setMasterZoneId(string $MasterZoneId) 设置主可用区
 * @method string getSlaveZoneId() 获取备可用区
 * @method void setSlaveZoneId(string $SlaveZoneId) 设置备可用区
 * @method string getMasterZoneName() 获取主可用区名称
 * @method void setMasterZoneName(string $MasterZoneName) 设置主可用区名称
 * @method string getSlaveZoneName() 获取备可用区名称
 * @method void setSlaveZoneName(string $SlaveZoneName) 设置备可用区名称
 * @method string getNetworkId() 获取网络 id
 * @method void setNetworkId(string $NetworkId) 设置网络 id
 * @method boolean getIPV6FullChain() 获取是否为新 ipv6 CLB
 * @method void setIPV6FullChain(boolean $IPV6FullChain) 设置是否为新 ipv6 CLB
 * @method string getCustomizedConfigContent() 获取负载均衡个性化配置内容
 * @method void setCustomizedConfigContent(string $CustomizedConfigContent) 设置负载均衡个性化配置内容
 */
class CloudNativeAPIGatewayConfig extends AbstractModel
{
    /**
     * @var string 控制台类型。
     */
    public $ConsoleType;

    /**
     * @var string HTTP链接地址。
     */
    public $HttpUrl;

    /**
     * @var string HTTPS链接地址。
     */
    public $HttpsUrl;

    /**
     * @var string 网络类型, Open|Internal。
     */
    public $NetType;

    /**
     * @var string 管理员用户名。
     */
    public $AdminUser;

    /**
     * @var string 管理员密码。
     */
    public $AdminPassword;

    /**
     * @var string 网络状态, Open|Closed|Updating
     */
    public $Status;

    /**
     * @var NetworkAccessControl 网络访问策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessControl;

    /**
     * @var string 内网子网 ID
     */
    public $SubnetId;

    /**
     * @var string 内网VPC ID
     */
    public $VpcId;

    /**
     * @var string 负载均衡的描述
     */
    public $Description;

    /**
     * @var string 负载均衡的规格类型
     */
    public $SlaType;

    /**
     * @var string clb规格名称
     */
    public $SlaName;

    /**
     * @var string clb vip
     */
    public $Vip;

    /**
     * @var integer 带宽
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean 是否多可用区
     */
    public $MultiZoneFlag;

    /**
     * @var string 主可用区
     */
    public $MasterZoneId;

    /**
     * @var string 备可用区
     */
    public $SlaveZoneId;

    /**
     * @var string 主可用区名称
     */
    public $MasterZoneName;

    /**
     * @var string 备可用区名称
     */
    public $SlaveZoneName;

    /**
     * @var string 网络 id
     */
    public $NetworkId;

    /**
     * @var boolean 是否为新 ipv6 CLB
     */
    public $IPV6FullChain;

    /**
     * @var string 负载均衡个性化配置内容
     */
    public $CustomizedConfigContent;

    /**
     * @param string $ConsoleType 控制台类型。
     * @param string $HttpUrl HTTP链接地址。
     * @param string $HttpsUrl HTTPS链接地址。
     * @param string $NetType 网络类型, Open|Internal。
     * @param string $AdminUser 管理员用户名。
     * @param string $AdminPassword 管理员密码。
     * @param string $Status 网络状态, Open|Closed|Updating
     * @param NetworkAccessControl $AccessControl 网络访问策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 内网子网 ID
     * @param string $VpcId 内网VPC ID
     * @param string $Description 负载均衡的描述
     * @param string $SlaType 负载均衡的规格类型
     * @param string $SlaName clb规格名称
     * @param string $Vip clb vip
     * @param integer $InternetMaxBandwidthOut 带宽
     * @param boolean $MultiZoneFlag 是否多可用区
     * @param string $MasterZoneId 主可用区
     * @param string $SlaveZoneId 备可用区
     * @param string $MasterZoneName 主可用区名称
     * @param string $SlaveZoneName 备可用区名称
     * @param string $NetworkId 网络 id
     * @param boolean $IPV6FullChain 是否为新 ipv6 CLB
     * @param string $CustomizedConfigContent 负载均衡个性化配置内容
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
        if (array_key_exists("ConsoleType",$param) and $param["ConsoleType"] !== null) {
            $this->ConsoleType = $param["ConsoleType"];
        }

        if (array_key_exists("HttpUrl",$param) and $param["HttpUrl"] !== null) {
            $this->HttpUrl = $param["HttpUrl"];
        }

        if (array_key_exists("HttpsUrl",$param) and $param["HttpsUrl"] !== null) {
            $this->HttpsUrl = $param["HttpsUrl"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("AdminUser",$param) and $param["AdminUser"] !== null) {
            $this->AdminUser = $param["AdminUser"];
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = new NetworkAccessControl();
            $this->AccessControl->deserialize($param["AccessControl"]);
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("SlaName",$param) and $param["SlaName"] !== null) {
            $this->SlaName = $param["SlaName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("MultiZoneFlag",$param) and $param["MultiZoneFlag"] !== null) {
            $this->MultiZoneFlag = $param["MultiZoneFlag"];
        }

        if (array_key_exists("MasterZoneId",$param) and $param["MasterZoneId"] !== null) {
            $this->MasterZoneId = $param["MasterZoneId"];
        }

        if (array_key_exists("SlaveZoneId",$param) and $param["SlaveZoneId"] !== null) {
            $this->SlaveZoneId = $param["SlaveZoneId"];
        }

        if (array_key_exists("MasterZoneName",$param) and $param["MasterZoneName"] !== null) {
            $this->MasterZoneName = $param["MasterZoneName"];
        }

        if (array_key_exists("SlaveZoneName",$param) and $param["SlaveZoneName"] !== null) {
            $this->SlaveZoneName = $param["SlaveZoneName"];
        }

        if (array_key_exists("NetworkId",$param) and $param["NetworkId"] !== null) {
            $this->NetworkId = $param["NetworkId"];
        }

        if (array_key_exists("IPV6FullChain",$param) and $param["IPV6FullChain"] !== null) {
            $this->IPV6FullChain = $param["IPV6FullChain"];
        }

        if (array_key_exists("CustomizedConfigContent",$param) and $param["CustomizedConfigContent"] !== null) {
            $this->CustomizedConfigContent = $param["CustomizedConfigContent"];
        }
    }
}
