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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子网对象
 *
 * @method string getVpcId() 获取<p><code>VPC</code>实例<code>ID</code>。</p>
 * @method void setVpcId(string $VpcId) 设置<p><code>VPC</code>实例<code>ID</code>。</p>
 * @method string getSubnetId() 获取<p>子网实例<code>ID</code>，例如：subnet-bthucmmy。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网实例<code>ID</code>，例如：subnet-bthucmmy。</p>
 * @method string getSubnetName() 获取<p>子网名称。</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>子网名称。</p>
 * @method string getCidrBlock() 获取<p>子网的 <code>IPv4</code> <code>CIDR</code>。</p>
 * @method void setCidrBlock(string $CidrBlock) 设置<p>子网的 <code>IPv4</code> <code>CIDR</code>。</p>
 * @method boolean getIsDefault() 获取<p>是否默认子网。</p>
 * @method void setIsDefault(boolean $IsDefault) 设置<p>是否默认子网。</p>
 * @method boolean getEnableBroadcast() 获取<p>是否开启广播。</p>
 * @method void setEnableBroadcast(boolean $EnableBroadcast) 设置<p>是否开启广播。</p>
 * @method string getZone() 获取<p>可用区。</p>
 * @method void setZone(string $Zone) 设置<p>可用区。</p>
 * @method string getRouteTableId() 获取<p>路由表实例ID，例如：rtb-l2h8d7c2。</p>
 * @method void setRouteTableId(string $RouteTableId) 设置<p>路由表实例ID，例如：rtb-l2h8d7c2。</p>
 * @method string getCreatedTime() 获取<p>创建时间。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。</p>
 * @method integer getAvailableIpAddressCount() 获取<p>可用<code>IPv4</code>数。</p>
 * @method void setAvailableIpAddressCount(integer $AvailableIpAddressCount) 设置<p>可用<code>IPv4</code>数。</p>
 * @method string getIpv6CidrBlock() 获取<p>子网的 <code>IPv6</code> <code>CIDR</code>。</p>
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置<p>子网的 <code>IPv6</code> <code>CIDR</code>。</p>
 * @method string getNetworkAclId() 获取<p>关联<code>ACL</code>ID</p>
 * @method void setNetworkAclId(string $NetworkAclId) 设置<p>关联<code>ACL</code>ID</p>
 * @method boolean getIsRemoteVpcSnat() 获取<p>是否为 <code>SNAT</code> 地址池子网。</p>
 * @method void setIsRemoteVpcSnat(boolean $IsRemoteVpcSnat) 设置<p>是否为 <code>SNAT</code> 地址池子网。</p>
 * @method integer getTotalIpAddressCount() 获取<p>子网<code>IPv4</code>总数。</p>
 * @method void setTotalIpAddressCount(integer $TotalIpAddressCount) 设置<p>子网<code>IPv4</code>总数。</p>
 * @method array getTagSet() 获取<p>标签键值对。</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签键值对。</p>
 * @method string getCdcId() 获取<p>CDC实例ID。</p>
 * @method void setCdcId(string $CdcId) 设置<p>CDC实例ID。</p>
 * @method integer getIsCdcSubnet() 获取<p>是否是CDC所属子网。0:否 1:是</p>
 * @method void setIsCdcSubnet(integer $IsCdcSubnet) 设置<p>是否是CDC所属子网。0:否 1:是</p>
 */
class Subnet extends AbstractModel
{
    /**
     * @var string <p><code>VPC</code>实例<code>ID</code>。</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网实例<code>ID</code>，例如：subnet-bthucmmy。</p>
     */
    public $SubnetId;

    /**
     * @var string <p>子网名称。</p>
     */
    public $SubnetName;

    /**
     * @var string <p>子网的 <code>IPv4</code> <code>CIDR</code>。</p>
     */
    public $CidrBlock;

    /**
     * @var boolean <p>是否默认子网。</p>
     */
    public $IsDefault;

    /**
     * @var boolean <p>是否开启广播。</p>
     */
    public $EnableBroadcast;

    /**
     * @var string <p>可用区。</p>
     */
    public $Zone;

    /**
     * @var string <p>路由表实例ID，例如：rtb-l2h8d7c2。</p>
     */
    public $RouteTableId;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreatedTime;

    /**
     * @var integer <p>可用<code>IPv4</code>数。</p>
     */
    public $AvailableIpAddressCount;

    /**
     * @var string <p>子网的 <code>IPv6</code> <code>CIDR</code>。</p>
     */
    public $Ipv6CidrBlock;

    /**
     * @var string <p>关联<code>ACL</code>ID</p>
     */
    public $NetworkAclId;

    /**
     * @var boolean <p>是否为 <code>SNAT</code> 地址池子网。</p>
     */
    public $IsRemoteVpcSnat;

    /**
     * @var integer <p>子网<code>IPv4</code>总数。</p>
     */
    public $TotalIpAddressCount;

    /**
     * @var array <p>标签键值对。</p>
     */
    public $TagSet;

    /**
     * @var string <p>CDC实例ID。</p>
     */
    public $CdcId;

    /**
     * @var integer <p>是否是CDC所属子网。0:否 1:是</p>
     */
    public $IsCdcSubnet;

    /**
     * @param string $VpcId <p><code>VPC</code>实例<code>ID</code>。</p>
     * @param string $SubnetId <p>子网实例<code>ID</code>，例如：subnet-bthucmmy。</p>
     * @param string $SubnetName <p>子网名称。</p>
     * @param string $CidrBlock <p>子网的 <code>IPv4</code> <code>CIDR</code>。</p>
     * @param boolean $IsDefault <p>是否默认子网。</p>
     * @param boolean $EnableBroadcast <p>是否开启广播。</p>
     * @param string $Zone <p>可用区。</p>
     * @param string $RouteTableId <p>路由表实例ID，例如：rtb-l2h8d7c2。</p>
     * @param string $CreatedTime <p>创建时间。</p>
     * @param integer $AvailableIpAddressCount <p>可用<code>IPv4</code>数。</p>
     * @param string $Ipv6CidrBlock <p>子网的 <code>IPv6</code> <code>CIDR</code>。</p>
     * @param string $NetworkAclId <p>关联<code>ACL</code>ID</p>
     * @param boolean $IsRemoteVpcSnat <p>是否为 <code>SNAT</code> 地址池子网。</p>
     * @param integer $TotalIpAddressCount <p>子网<code>IPv4</code>总数。</p>
     * @param array $TagSet <p>标签键值对。</p>
     * @param string $CdcId <p>CDC实例ID。</p>
     * @param integer $IsCdcSubnet <p>是否是CDC所属子网。0:否 1:是</p>
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("EnableBroadcast",$param) and $param["EnableBroadcast"] !== null) {
            $this->EnableBroadcast = $param["EnableBroadcast"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("AvailableIpAddressCount",$param) and $param["AvailableIpAddressCount"] !== null) {
            $this->AvailableIpAddressCount = $param["AvailableIpAddressCount"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
            $this->NetworkAclId = $param["NetworkAclId"];
        }

        if (array_key_exists("IsRemoteVpcSnat",$param) and $param["IsRemoteVpcSnat"] !== null) {
            $this->IsRemoteVpcSnat = $param["IsRemoteVpcSnat"];
        }

        if (array_key_exists("TotalIpAddressCount",$param) and $param["TotalIpAddressCount"] !== null) {
            $this->TotalIpAddressCount = $param["TotalIpAddressCount"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("IsCdcSubnet",$param) and $param["IsCdcSubnet"] !== null) {
            $this->IsCdcSubnet = $param["IsCdcSubnet"];
        }
    }
}
