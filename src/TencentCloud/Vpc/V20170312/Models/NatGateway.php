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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NAT网关对象。
 *
 * @method string getNatGatewayId() 获取NAT网关的ID。
 * @method void setNatGatewayId(string $NatGatewayId) 设置NAT网关的ID。
 * @method string getNatGatewayName() 获取NAT网关的名称。
 * @method void setNatGatewayName(string $NatGatewayName) 设置NAT网关的名称。
 * @method string getCreatedTime() 获取NAT网关创建的时间。
 * @method void setCreatedTime(string $CreatedTime) 设置NAT网关创建的时间。
 * @method string getState() 获取NAT网关的状态。
 'PENDING'：生产中，'DELETING'：删除中/子实例关闭中，'AVAILABLE'：运行中，'UPDATING'：升级中，
‘PENDFAILURE’：创建失败，‘DELETEFAILURE：删除失败，‘DENIED’：子实例关闭中
 * @method void setState(string $State) 设置NAT网关的状态。
 'PENDING'：生产中，'DELETING'：删除中/子实例关闭中，'AVAILABLE'：运行中，'UPDATING'：升级中，
‘PENDFAILURE’：创建失败，‘DELETEFAILURE：删除失败，‘DENIED’：子实例关闭中
 * @method integer getInternetMaxBandwidthOut() 获取网关最大外网出带宽(单位:Mbps)。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置网关最大外网出带宽(单位:Mbps)。
 * @method integer getMaxConcurrentConnection() 获取网关并发连接上限。
 * @method void setMaxConcurrentConnection(integer $MaxConcurrentConnection) 设置网关并发连接上限。
 * @method array getPublicIpAddressSet() 获取绑定NAT网关的公网IP对象数组。
 * @method void setPublicIpAddressSet(array $PublicIpAddressSet) 设置绑定NAT网关的公网IP对象数组。
 * @method string getNetworkState() 获取NAT网关网络状态。“AVAILABLE”:运行中, “UNAVAILABLE”:不可用, “INSUFFICIENT”:欠费停服。
 * @method void setNetworkState(string $NetworkState) 设置NAT网关网络状态。“AVAILABLE”:运行中, “UNAVAILABLE”:不可用, “INSUFFICIENT”:欠费停服。
 * @method array getDestinationIpPortTranslationNatRuleSet() 获取NAT网关的端口转发规则。
 * @method void setDestinationIpPortTranslationNatRuleSet(array $DestinationIpPortTranslationNatRuleSet) 设置NAT网关的端口转发规则。
 * @method string getVpcId() 获取VPC实例ID。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
 * @method string getZone() 获取NAT网关所在的可用区。
 * @method void setZone(string $Zone) 设置NAT网关所在的可用区。
 * @method array getDirectConnectGatewayIds() 获取绑定的专线网关ID。
 * @method void setDirectConnectGatewayIds(array $DirectConnectGatewayIds) 设置绑定的专线网关ID。
 * @method string getSubnetId() 获取所属子网ID。
 * @method void setSubnetId(string $SubnetId) 设置所属子网ID。
 * @method array getTagSet() 获取标签键值对。
 * @method void setTagSet(array $TagSet) 设置标签键值对。
 * @method array getSecurityGroupSet() 获取NAT网关绑定的安全组列表
 * @method void setSecurityGroupSet(array $SecurityGroupSet) 设置NAT网关绑定的安全组列表
 * @method array getSourceIpTranslationNatRuleSet() 获取NAT网关的SNAT转发规则。
 * @method void setSourceIpTranslationNatRuleSet(array $SourceIpTranslationNatRuleSet) 设置NAT网关的SNAT转发规则。
 * @method boolean getIsExclusive() 获取是否独享型NAT。
 * @method void setIsExclusive(boolean $IsExclusive) 设置是否独享型NAT。
 * @method integer getExclusiveGatewayBandwidth() 获取独享型NAT所在的网关集群的带宽(单位:Mbps)，当IsExclusive为false时无此字段。
 * @method void setExclusiveGatewayBandwidth(integer $ExclusiveGatewayBandwidth) 设置独享型NAT所在的网关集群的带宽(单位:Mbps)，当IsExclusive为false时无此字段。
 * @method string getRestrictState() 获取NAT网关是否被封禁。“NORMAL”：未被封禁，“RESTRICTED”：已被封禁。
 * @method void setRestrictState(string $RestrictState) 设置NAT网关是否被封禁。“NORMAL”：未被封禁，“RESTRICTED”：已被封禁。
 * @method integer getNatProductVersion() 获取NAT网关类型，1表示传统型NAT网关，2表示标准型NAT网关
 * @method void setNatProductVersion(integer $NatProductVersion) 设置NAT网关类型，1表示传统型NAT网关，2表示标准型NAT网关
 * @method boolean getSmartScheduleMode() 获取是否启用根据目的网段选择SNAT使用的EIP功能	
 * @method void setSmartScheduleMode(boolean $SmartScheduleMode) 设置是否启用根据目的网段选择SNAT使用的EIP功能	
 * @method string getDedicatedClusterId() 获取NAT实例归属的专属集群id
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置NAT实例归属的专属集群id
 */
class NatGateway extends AbstractModel
{
    /**
     * @var string NAT网关的ID。
     */
    public $NatGatewayId;

    /**
     * @var string NAT网关的名称。
     */
    public $NatGatewayName;

    /**
     * @var string NAT网关创建的时间。
     */
    public $CreatedTime;

    /**
     * @var string NAT网关的状态。
 'PENDING'：生产中，'DELETING'：删除中/子实例关闭中，'AVAILABLE'：运行中，'UPDATING'：升级中，
‘PENDFAILURE’：创建失败，‘DELETEFAILURE：删除失败，‘DENIED’：子实例关闭中
     */
    public $State;

    /**
     * @var integer 网关最大外网出带宽(单位:Mbps)。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var integer 网关并发连接上限。
     */
    public $MaxConcurrentConnection;

    /**
     * @var array 绑定NAT网关的公网IP对象数组。
     */
    public $PublicIpAddressSet;

    /**
     * @var string NAT网关网络状态。“AVAILABLE”:运行中, “UNAVAILABLE”:不可用, “INSUFFICIENT”:欠费停服。
     */
    public $NetworkState;

    /**
     * @var array NAT网关的端口转发规则。
     */
    public $DestinationIpPortTranslationNatRuleSet;

    /**
     * @var string VPC实例ID。
     */
    public $VpcId;

    /**
     * @var string NAT网关所在的可用区。
     */
    public $Zone;

    /**
     * @var array 绑定的专线网关ID。
     */
    public $DirectConnectGatewayIds;

    /**
     * @var string 所属子网ID。
     */
    public $SubnetId;

    /**
     * @var array 标签键值对。
     */
    public $TagSet;

    /**
     * @var array NAT网关绑定的安全组列表
     */
    public $SecurityGroupSet;

    /**
     * @var array NAT网关的SNAT转发规则。
     */
    public $SourceIpTranslationNatRuleSet;

    /**
     * @var boolean 是否独享型NAT。
     */
    public $IsExclusive;

    /**
     * @var integer 独享型NAT所在的网关集群的带宽(单位:Mbps)，当IsExclusive为false时无此字段。
     */
    public $ExclusiveGatewayBandwidth;

    /**
     * @var string NAT网关是否被封禁。“NORMAL”：未被封禁，“RESTRICTED”：已被封禁。
     */
    public $RestrictState;

    /**
     * @var integer NAT网关类型，1表示传统型NAT网关，2表示标准型NAT网关
     */
    public $NatProductVersion;

    /**
     * @var boolean 是否启用根据目的网段选择SNAT使用的EIP功能	
     */
    public $SmartScheduleMode;

    /**
     * @var string NAT实例归属的专属集群id
     */
    public $DedicatedClusterId;

    /**
     * @param string $NatGatewayId NAT网关的ID。
     * @param string $NatGatewayName NAT网关的名称。
     * @param string $CreatedTime NAT网关创建的时间。
     * @param string $State NAT网关的状态。
 'PENDING'：生产中，'DELETING'：删除中/子实例关闭中，'AVAILABLE'：运行中，'UPDATING'：升级中，
‘PENDFAILURE’：创建失败，‘DELETEFAILURE：删除失败，‘DENIED’：子实例关闭中
     * @param integer $InternetMaxBandwidthOut 网关最大外网出带宽(单位:Mbps)。
     * @param integer $MaxConcurrentConnection 网关并发连接上限。
     * @param array $PublicIpAddressSet 绑定NAT网关的公网IP对象数组。
     * @param string $NetworkState NAT网关网络状态。“AVAILABLE”:运行中, “UNAVAILABLE”:不可用, “INSUFFICIENT”:欠费停服。
     * @param array $DestinationIpPortTranslationNatRuleSet NAT网关的端口转发规则。
     * @param string $VpcId VPC实例ID。
     * @param string $Zone NAT网关所在的可用区。
     * @param array $DirectConnectGatewayIds 绑定的专线网关ID。
     * @param string $SubnetId 所属子网ID。
     * @param array $TagSet 标签键值对。
     * @param array $SecurityGroupSet NAT网关绑定的安全组列表
     * @param array $SourceIpTranslationNatRuleSet NAT网关的SNAT转发规则。
     * @param boolean $IsExclusive 是否独享型NAT。
     * @param integer $ExclusiveGatewayBandwidth 独享型NAT所在的网关集群的带宽(单位:Mbps)，当IsExclusive为false时无此字段。
     * @param string $RestrictState NAT网关是否被封禁。“NORMAL”：未被封禁，“RESTRICTED”：已被封禁。
     * @param integer $NatProductVersion NAT网关类型，1表示传统型NAT网关，2表示标准型NAT网关
     * @param boolean $SmartScheduleMode 是否启用根据目的网段选择SNAT使用的EIP功能	
     * @param string $DedicatedClusterId NAT实例归属的专属集群id
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("MaxConcurrentConnection",$param) and $param["MaxConcurrentConnection"] !== null) {
            $this->MaxConcurrentConnection = $param["MaxConcurrentConnection"];
        }

        if (array_key_exists("PublicIpAddressSet",$param) and $param["PublicIpAddressSet"] !== null) {
            $this->PublicIpAddressSet = [];
            foreach ($param["PublicIpAddressSet"] as $key => $value){
                $obj = new NatGatewayAddress();
                $obj->deserialize($value);
                array_push($this->PublicIpAddressSet, $obj);
            }
        }

        if (array_key_exists("NetworkState",$param) and $param["NetworkState"] !== null) {
            $this->NetworkState = $param["NetworkState"];
        }

        if (array_key_exists("DestinationIpPortTranslationNatRuleSet",$param) and $param["DestinationIpPortTranslationNatRuleSet"] !== null) {
            $this->DestinationIpPortTranslationNatRuleSet = [];
            foreach ($param["DestinationIpPortTranslationNatRuleSet"] as $key => $value){
                $obj = new DestinationIpPortTranslationNatRule();
                $obj->deserialize($value);
                array_push($this->DestinationIpPortTranslationNatRuleSet, $obj);
            }
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DirectConnectGatewayIds",$param) and $param["DirectConnectGatewayIds"] !== null) {
            $this->DirectConnectGatewayIds = $param["DirectConnectGatewayIds"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("SecurityGroupSet",$param) and $param["SecurityGroupSet"] !== null) {
            $this->SecurityGroupSet = $param["SecurityGroupSet"];
        }

        if (array_key_exists("SourceIpTranslationNatRuleSet",$param) and $param["SourceIpTranslationNatRuleSet"] !== null) {
            $this->SourceIpTranslationNatRuleSet = [];
            foreach ($param["SourceIpTranslationNatRuleSet"] as $key => $value){
                $obj = new SourceIpTranslationNatRule();
                $obj->deserialize($value);
                array_push($this->SourceIpTranslationNatRuleSet, $obj);
            }
        }

        if (array_key_exists("IsExclusive",$param) and $param["IsExclusive"] !== null) {
            $this->IsExclusive = $param["IsExclusive"];
        }

        if (array_key_exists("ExclusiveGatewayBandwidth",$param) and $param["ExclusiveGatewayBandwidth"] !== null) {
            $this->ExclusiveGatewayBandwidth = $param["ExclusiveGatewayBandwidth"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
        }

        if (array_key_exists("NatProductVersion",$param) and $param["NatProductVersion"] !== null) {
            $this->NatProductVersion = $param["NatProductVersion"];
        }

        if (array_key_exists("SmartScheduleMode",$param) and $param["SmartScheduleMode"] !== null) {
            $this->SmartScheduleMode = $param["SmartScheduleMode"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }
    }
}
