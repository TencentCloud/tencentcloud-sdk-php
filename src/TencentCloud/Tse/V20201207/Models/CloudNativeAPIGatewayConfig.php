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
 * 云原生API网关配置信息。
 *
 * @method string getConsoleType() 获取控制台类型。
 * @method void setConsoleType(string $ConsoleType) 设置控制台类型。
 * @method string getHttpUrl() 获取HTTP链接地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpUrl(string $HttpUrl) 设置HTTP链接地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpsUrl() 获取HTTPS链接地址。
 * @method void setHttpsUrl(string $HttpsUrl) 设置HTTPS链接地址。
 * @method string getNetType() 获取网络类型, Open|Internal。
 * @method void setNetType(string $NetType) 设置网络类型, Open|Internal。
 * @method string getAdminUser() 获取管理员用户名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminUser(string $AdminUser) 设置管理员用户名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminPassword() 获取管理员密码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminPassword(string $AdminPassword) 设置管理员密码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取网络状态, Open|Closed|Updating
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置网络状态, Open|Closed|Updating
注意：此字段可能返回 null，表示取不到有效值。
 * @method NetworkAccessControl getAccessControl() 获取网络访问策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessControl(NetworkAccessControl $AccessControl) 设置网络访问策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取内网子网 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置内网子网 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取内网VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置内网VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取负载均衡的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置负载均衡的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSlaType() 获取负载均衡的规格类型，传 "SLA" 表示性能容量型，返回空为共享型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlaType(string $SlaType) 设置负载均衡的规格类型，传 "SLA" 表示性能容量型，返回空为共享型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip() 获取clb vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置clb vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInternetMaxBandwidthOut() 获取带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getMultiZoneFlag() 获取是否多可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) 设置是否多可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMasterZoneId() 获取主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterZoneId(string $MasterZoneId) 设置主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSlaveZoneId() 获取备可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlaveZoneId(string $SlaveZoneId) 设置备可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMasterZoneName() 获取主可用区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterZoneName(string $MasterZoneName) 设置主可用区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSlaveZoneName() 获取备可用区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlaveZoneName(string $SlaveZoneName) 设置备可用区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetworkId() 获取网络 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkId(string $NetworkId) 设置网络 id
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudNativeAPIGatewayConfig extends AbstractModel
{
    /**
     * @var string 控制台类型。
     */
    public $ConsoleType;

    /**
     * @var string HTTP链接地址。
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminUser;

    /**
     * @var string 管理员密码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminPassword;

    /**
     * @var string 网络状态, Open|Closed|Updating
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var NetworkAccessControl 网络访问策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessControl;

    /**
     * @var string 内网子网 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 内网VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 负载均衡的描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 负载均衡的规格类型，传 "SLA" 表示性能容量型，返回空为共享型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlaType;

    /**
     * @var string clb vip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var integer 带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean 是否多可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiZoneFlag;

    /**
     * @var string 主可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterZoneId;

    /**
     * @var string 备可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlaveZoneId;

    /**
     * @var string 主可用区名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterZoneName;

    /**
     * @var string 备可用区名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlaveZoneName;

    /**
     * @var string 网络 id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkId;

    /**
     * @param string $ConsoleType 控制台类型。
     * @param string $HttpUrl HTTP链接地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpsUrl HTTPS链接地址。
     * @param string $NetType 网络类型, Open|Internal。
     * @param string $AdminUser 管理员用户名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminPassword 管理员密码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 网络状态, Open|Closed|Updating
注意：此字段可能返回 null，表示取不到有效值。
     * @param NetworkAccessControl $AccessControl 网络访问策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 内网子网 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 内网VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 负载均衡的描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SlaType 负载均衡的规格类型，传 "SLA" 表示性能容量型，返回空为共享型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip clb vip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InternetMaxBandwidthOut 带宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $MultiZoneFlag 是否多可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MasterZoneId 主可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SlaveZoneId 备可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MasterZoneName 主可用区名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SlaveZoneName 备可用区名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetworkId 网络 id
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
    }
}
