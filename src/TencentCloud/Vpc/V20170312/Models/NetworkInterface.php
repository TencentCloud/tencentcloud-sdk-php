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
 * 弹性网卡
 *
 * @method string getNetworkInterfaceId() 获取<p>弹性网卡实例ID，例如：eni-f1xjkw1b。</p>
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置<p>弹性网卡实例ID，例如：eni-f1xjkw1b。</p>
 * @method string getNetworkInterfaceName() 获取<p>弹性网卡名称。</p>
 * @method void setNetworkInterfaceName(string $NetworkInterfaceName) 设置<p>弹性网卡名称。</p>
 * @method string getNetworkInterfaceDescription() 获取<p>弹性网卡描述。</p>
 * @method void setNetworkInterfaceDescription(string $NetworkInterfaceDescription) 设置<p>弹性网卡描述。</p>
 * @method string getSubnetId() 获取<p>子网实例ID。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网实例ID。</p>
 * @method string getVpcId() 获取<p>VPC实例ID。</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC实例ID。</p>
 * @method array getGroupSet() 获取<p>绑定的安全组。</p>
 * @method void setGroupSet(array $GroupSet) 设置<p>绑定的安全组。</p>
 * @method boolean getPrimary() 获取<p>是否是主网卡。</p>
 * @method void setPrimary(boolean $Primary) 设置<p>是否是主网卡。</p>
 * @method string getMacAddress() 获取<p>MAC地址。</p>
 * @method void setMacAddress(string $MacAddress) 设置<p>MAC地址。</p>
 * @method string getState() 获取<p>弹性网卡状态：</p><li><code>PENDING</code>：创建中</li><li><code>AVAILABLE</code>：可用的</li><li><code>ATTACHING</code>：绑定中</li><li><code>DETACHING</code>：解绑中</li><li><code>DELETING</code>：删除中</li>
 * @method void setState(string $State) 设置<p>弹性网卡状态：</p><li><code>PENDING</code>：创建中</li><li><code>AVAILABLE</code>：可用的</li><li><code>ATTACHING</code>：绑定中</li><li><code>DETACHING</code>：解绑中</li><li><code>DELETING</code>：删除中</li>
 * @method string getNetworkInterfaceState() 获取<p>弹性网卡状态：</p><li><code>PENDING</code>：创建中</li><li><code>AVAILABLE</code>：可用的</li><li><code>ATTACHING</code>：绑定中</li><li><code>DETACHING</code>：解绑中</li><li><code>DELETING</code>：删除中</li><li><code>INUSE</code>：已绑定</li>
 * @method void setNetworkInterfaceState(string $NetworkInterfaceState) 设置<p>弹性网卡状态：</p><li><code>PENDING</code>：创建中</li><li><code>AVAILABLE</code>：可用的</li><li><code>ATTACHING</code>：绑定中</li><li><code>DETACHING</code>：解绑中</li><li><code>DELETING</code>：删除中</li><li><code>INUSE</code>：已绑定</li>
 * @method array getPrivateIpAddressSet() 获取<p>内网IP信息。</p>
 * @method void setPrivateIpAddressSet(array $PrivateIpAddressSet) 设置<p>内网IP信息。</p>
 * @method NetworkInterfaceAttachment getAttachment() 获取<p>绑定的云服务器对象。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachment(NetworkInterfaceAttachment $Attachment) 设置<p>绑定的云服务器对象。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取<p>可用区。</p>
 * @method void setZone(string $Zone) 设置<p>可用区。</p>
 * @method string getCreatedTime() 获取<p>创建时间。格式：YYYY-MM-DD hh:mm:ss。示例值：2020-10-28 08:23:59</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。格式：YYYY-MM-DD hh:mm:ss。示例值：2020-10-28 08:23:59</p>
 * @method array getIpv6AddressSet() 获取<p><code>IPv6</code>地址列表。</p>
 * @method void setIpv6AddressSet(array $Ipv6AddressSet) 设置<p><code>IPv6</code>地址列表。</p>
 * @method array getTagSet() 获取<p>标签键值对。</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签键值对。</p>
 * @method integer getEniType() 获取<p>网卡类型。“0”-辅助网卡，“1”-主网卡，“2”：中继网卡</p>
 * @method void setEniType(integer $EniType) 设置<p>网卡类型。“0”-辅助网卡，“1”-主网卡，“2”：中继网卡</p>
 * @method string getBusiness() 获取<p>网卡绑定的子机类型：cvm（普通CVM子机），eks（弹性容器服务Elastic Kubernetes Service）， hai（高性能应用服务Hyper Application Inventor）。</p>
 * @method void setBusiness(string $Business) 设置<p>网卡绑定的子机类型：cvm（普通CVM子机），eks（弹性容器服务Elastic Kubernetes Service）， hai（高性能应用服务Hyper Application Inventor）。</p>
 * @method string getCdcId() 获取<p>网卡所关联的CDC实例ID。</p>
 * @method void setCdcId(string $CdcId) 设置<p>网卡所关联的CDC实例ID。</p>
 * @method integer getAttachType() 获取<p>弹性网卡类型：0:标准型/1:扩展型。默认值为0。</p>
 * @method void setAttachType(integer $AttachType) 设置<p>弹性网卡类型：0:标准型/1:扩展型。默认值为0。</p>
 * @method string getResourceId() 获取<p>用于保留网卡主IP的资源ID用于保留网卡主IP的资源ID。用于删除网卡时作为入参数。</p>
 * @method void setResourceId(string $ResourceId) 设置<p>用于保留网卡主IP的资源ID用于保留网卡主IP的资源ID。用于删除网卡时作为入参数。</p>
 * @method string getQosLevel() 获取<p>服务质量级别：<br>PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。</p><p>可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。</p>
 * @method void setQosLevel(string $QosLevel) 设置<p>服务质量级别：<br>PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。</p><p>可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。</p>
 * @method array getIpv6Addresses() 获取<p>指定的<code>IPv6</code>地址列表，单次最多指定10个。与入参<code>Ipv6AddressCount</code>合并计算配额。</p>
 * @method void setIpv6Addresses(array $Ipv6Addresses) 设置<p>指定的<code>IPv6</code>地址列表，单次最多指定10个。与入参<code>Ipv6AddressCount</code>合并计算配额。</p>
 * @method integer getIpv6AddressCount() 获取<p>自动分配<code>IPv6</code>地址个数，内网IP地址个数总和不能超过配额数。与入参<code>Ipv6Addresses</code>合并计算配额。</p><p>取值范围：[1, 10]</p><p>单位：个</p>
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) 设置<p>自动分配<code>IPv6</code>地址个数，内网IP地址个数总和不能超过配额数。与入参<code>Ipv6Addresses</code>合并计算配额。</p><p>取值范围：[1, 10]</p><p>单位：个</p>
 */
class NetworkInterface extends AbstractModel
{
    /**
     * @var string <p>弹性网卡实例ID，例如：eni-f1xjkw1b。</p>
     */
    public $NetworkInterfaceId;

    /**
     * @var string <p>弹性网卡名称。</p>
     */
    public $NetworkInterfaceName;

    /**
     * @var string <p>弹性网卡描述。</p>
     */
    public $NetworkInterfaceDescription;

    /**
     * @var string <p>子网实例ID。</p>
     */
    public $SubnetId;

    /**
     * @var string <p>VPC实例ID。</p>
     */
    public $VpcId;

    /**
     * @var array <p>绑定的安全组。</p>
     */
    public $GroupSet;

    /**
     * @var boolean <p>是否是主网卡。</p>
     */
    public $Primary;

    /**
     * @var string <p>MAC地址。</p>
     */
    public $MacAddress;

    /**
     * @var string <p>弹性网卡状态：</p><li><code>PENDING</code>：创建中</li><li><code>AVAILABLE</code>：可用的</li><li><code>ATTACHING</code>：绑定中</li><li><code>DETACHING</code>：解绑中</li><li><code>DELETING</code>：删除中</li>
     */
    public $State;

    /**
     * @var string <p>弹性网卡状态：</p><li><code>PENDING</code>：创建中</li><li><code>AVAILABLE</code>：可用的</li><li><code>ATTACHING</code>：绑定中</li><li><code>DETACHING</code>：解绑中</li><li><code>DELETING</code>：删除中</li><li><code>INUSE</code>：已绑定</li>
     */
    public $NetworkInterfaceState;

    /**
     * @var array <p>内网IP信息。</p>
     */
    public $PrivateIpAddressSet;

    /**
     * @var NetworkInterfaceAttachment <p>绑定的云服务器对象。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Attachment;

    /**
     * @var string <p>可用区。</p>
     */
    public $Zone;

    /**
     * @var string <p>创建时间。格式：YYYY-MM-DD hh:mm:ss。示例值：2020-10-28 08:23:59</p>
     */
    public $CreatedTime;

    /**
     * @var array <p><code>IPv6</code>地址列表。</p>
     */
    public $Ipv6AddressSet;

    /**
     * @var array <p>标签键值对。</p>
     */
    public $TagSet;

    /**
     * @var integer <p>网卡类型。“0”-辅助网卡，“1”-主网卡，“2”：中继网卡</p>
     */
    public $EniType;

    /**
     * @var string <p>网卡绑定的子机类型：cvm（普通CVM子机），eks（弹性容器服务Elastic Kubernetes Service）， hai（高性能应用服务Hyper Application Inventor）。</p>
     */
    public $Business;

    /**
     * @var string <p>网卡所关联的CDC实例ID。</p>
     */
    public $CdcId;

    /**
     * @var integer <p>弹性网卡类型：0:标准型/1:扩展型。默认值为0。</p>
     */
    public $AttachType;

    /**
     * @var string <p>用于保留网卡主IP的资源ID用于保留网卡主IP的资源ID。用于删除网卡时作为入参数。</p>
     */
    public $ResourceId;

    /**
     * @var string <p>服务质量级别：<br>PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。</p><p>可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。</p>
     */
    public $QosLevel;

    /**
     * @var array <p>指定的<code>IPv6</code>地址列表，单次最多指定10个。与入参<code>Ipv6AddressCount</code>合并计算配额。</p>
     */
    public $Ipv6Addresses;

    /**
     * @var integer <p>自动分配<code>IPv6</code>地址个数，内网IP地址个数总和不能超过配额数。与入参<code>Ipv6Addresses</code>合并计算配额。</p><p>取值范围：[1, 10]</p><p>单位：个</p>
     */
    public $Ipv6AddressCount;

    /**
     * @param string $NetworkInterfaceId <p>弹性网卡实例ID，例如：eni-f1xjkw1b。</p>
     * @param string $NetworkInterfaceName <p>弹性网卡名称。</p>
     * @param string $NetworkInterfaceDescription <p>弹性网卡描述。</p>
     * @param string $SubnetId <p>子网实例ID。</p>
     * @param string $VpcId <p>VPC实例ID。</p>
     * @param array $GroupSet <p>绑定的安全组。</p>
     * @param boolean $Primary <p>是否是主网卡。</p>
     * @param string $MacAddress <p>MAC地址。</p>
     * @param string $State <p>弹性网卡状态：</p><li><code>PENDING</code>：创建中</li><li><code>AVAILABLE</code>：可用的</li><li><code>ATTACHING</code>：绑定中</li><li><code>DETACHING</code>：解绑中</li><li><code>DELETING</code>：删除中</li>
     * @param string $NetworkInterfaceState <p>弹性网卡状态：</p><li><code>PENDING</code>：创建中</li><li><code>AVAILABLE</code>：可用的</li><li><code>ATTACHING</code>：绑定中</li><li><code>DETACHING</code>：解绑中</li><li><code>DELETING</code>：删除中</li><li><code>INUSE</code>：已绑定</li>
     * @param array $PrivateIpAddressSet <p>内网IP信息。</p>
     * @param NetworkInterfaceAttachment $Attachment <p>绑定的云服务器对象。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone <p>可用区。</p>
     * @param string $CreatedTime <p>创建时间。格式：YYYY-MM-DD hh:mm:ss。示例值：2020-10-28 08:23:59</p>
     * @param array $Ipv6AddressSet <p><code>IPv6</code>地址列表。</p>
     * @param array $TagSet <p>标签键值对。</p>
     * @param integer $EniType <p>网卡类型。“0”-辅助网卡，“1”-主网卡，“2”：中继网卡</p>
     * @param string $Business <p>网卡绑定的子机类型：cvm（普通CVM子机），eks（弹性容器服务Elastic Kubernetes Service）， hai（高性能应用服务Hyper Application Inventor）。</p>
     * @param string $CdcId <p>网卡所关联的CDC实例ID。</p>
     * @param integer $AttachType <p>弹性网卡类型：0:标准型/1:扩展型。默认值为0。</p>
     * @param string $ResourceId <p>用于保留网卡主IP的资源ID用于保留网卡主IP的资源ID。用于删除网卡时作为入参数。</p>
     * @param string $QosLevel <p>服务质量级别：<br>PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。</p><p>可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。</p>
     * @param array $Ipv6Addresses <p>指定的<code>IPv6</code>地址列表，单次最多指定10个。与入参<code>Ipv6AddressCount</code>合并计算配额。</p>
     * @param integer $Ipv6AddressCount <p>自动分配<code>IPv6</code>地址个数，内网IP地址个数总和不能超过配额数。与入参<code>Ipv6Addresses</code>合并计算配额。</p><p>取值范围：[1, 10]</p><p>单位：个</p>
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("NetworkInterfaceName",$param) and $param["NetworkInterfaceName"] !== null) {
            $this->NetworkInterfaceName = $param["NetworkInterfaceName"];
        }

        if (array_key_exists("NetworkInterfaceDescription",$param) and $param["NetworkInterfaceDescription"] !== null) {
            $this->NetworkInterfaceDescription = $param["NetworkInterfaceDescription"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("GroupSet",$param) and $param["GroupSet"] !== null) {
            $this->GroupSet = $param["GroupSet"];
        }

        if (array_key_exists("Primary",$param) and $param["Primary"] !== null) {
            $this->Primary = $param["Primary"];
        }

        if (array_key_exists("MacAddress",$param) and $param["MacAddress"] !== null) {
            $this->MacAddress = $param["MacAddress"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("NetworkInterfaceState",$param) and $param["NetworkInterfaceState"] !== null) {
            $this->NetworkInterfaceState = $param["NetworkInterfaceState"];
        }

        if (array_key_exists("PrivateIpAddressSet",$param) and $param["PrivateIpAddressSet"] !== null) {
            $this->PrivateIpAddressSet = [];
            foreach ($param["PrivateIpAddressSet"] as $key => $value){
                $obj = new PrivateIpAddressSpecification();
                $obj->deserialize($value);
                array_push($this->PrivateIpAddressSet, $obj);
            }
        }

        if (array_key_exists("Attachment",$param) and $param["Attachment"] !== null) {
            $this->Attachment = new NetworkInterfaceAttachment();
            $this->Attachment->deserialize($param["Attachment"]);
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Ipv6AddressSet",$param) and $param["Ipv6AddressSet"] !== null) {
            $this->Ipv6AddressSet = [];
            foreach ($param["Ipv6AddressSet"] as $key => $value){
                $obj = new Ipv6Address();
                $obj->deserialize($value);
                array_push($this->Ipv6AddressSet, $obj);
            }
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("EniType",$param) and $param["EniType"] !== null) {
            $this->EniType = $param["EniType"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("AttachType",$param) and $param["AttachType"] !== null) {
            $this->AttachType = $param["AttachType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }

        if (array_key_exists("Ipv6Addresses",$param) and $param["Ipv6Addresses"] !== null) {
            $this->Ipv6Addresses = [];
            foreach ($param["Ipv6Addresses"] as $key => $value){
                $obj = new Ipv6Address();
                $obj->deserialize($value);
                array_push($this->Ipv6Addresses, $obj);
            }
        }

        if (array_key_exists("Ipv6AddressCount",$param) and $param["Ipv6AddressCount"] !== null) {
            $this->Ipv6AddressCount = $param["Ipv6AddressCount"];
        }
    }
}
