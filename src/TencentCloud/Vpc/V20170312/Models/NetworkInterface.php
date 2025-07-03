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
 * 弹性网卡
 *
 * @method string getNetworkInterfaceId() 获取弹性网卡实例ID，例如：eni-f1xjkw1b。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置弹性网卡实例ID，例如：eni-f1xjkw1b。
 * @method string getNetworkInterfaceName() 获取弹性网卡名称。
 * @method void setNetworkInterfaceName(string $NetworkInterfaceName) 设置弹性网卡名称。
 * @method string getNetworkInterfaceDescription() 获取弹性网卡描述。
 * @method void setNetworkInterfaceDescription(string $NetworkInterfaceDescription) 设置弹性网卡描述。
 * @method string getSubnetId() 获取子网实例ID。
 * @method void setSubnetId(string $SubnetId) 设置子网实例ID。
 * @method string getVpcId() 获取VPC实例ID。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
 * @method array getGroupSet() 获取绑定的安全组。
 * @method void setGroupSet(array $GroupSet) 设置绑定的安全组。
 * @method boolean getPrimary() 获取是否是主网卡。
 * @method void setPrimary(boolean $Primary) 设置是否是主网卡。
 * @method string getMacAddress() 获取MAC地址。
 * @method void setMacAddress(string $MacAddress) 设置MAC地址。
 * @method string getState() 获取弹性网卡状态：
<li>`PENDING`：创建中</li>
<li>`AVAILABLE`：可用的</li>
<li>`ATTACHING`：绑定中</li>
<li>`DETACHING`：解绑中</li>
<li>`DELETING`：删除中</li>
 * @method void setState(string $State) 设置弹性网卡状态：
<li>`PENDING`：创建中</li>
<li>`AVAILABLE`：可用的</li>
<li>`ATTACHING`：绑定中</li>
<li>`DETACHING`：解绑中</li>
<li>`DELETING`：删除中</li>
 * @method string getNetworkInterfaceState() 获取弹性网卡状态：
<li>`PENDING`：创建中</li>
<li>`AVAILABLE`：可用的</li>
<li>`ATTACHING`：绑定中</li>
<li>`DETACHING`：解绑中</li>
<li>`DELETING`：删除中</li>
<li>`INUSE`：已绑定</li>
 * @method void setNetworkInterfaceState(string $NetworkInterfaceState) 设置弹性网卡状态：
<li>`PENDING`：创建中</li>
<li>`AVAILABLE`：可用的</li>
<li>`ATTACHING`：绑定中</li>
<li>`DETACHING`：解绑中</li>
<li>`DELETING`：删除中</li>
<li>`INUSE`：已绑定</li>
 * @method array getPrivateIpAddressSet() 获取内网IP信息。
 * @method void setPrivateIpAddressSet(array $PrivateIpAddressSet) 设置内网IP信息。
 * @method NetworkInterfaceAttachment getAttachment() 获取绑定的云服务器对象。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachment(NetworkInterfaceAttachment $Attachment) 设置绑定的云服务器对象。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取可用区。
 * @method void setZone(string $Zone) 设置可用区。
 * @method string getCreatedTime() 获取创建时间。格式：YYYY-MM-DD hh:mm:ss。示例值：2020-10-28 08:23:59
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。格式：YYYY-MM-DD hh:mm:ss。示例值：2020-10-28 08:23:59
 * @method array getIpv6AddressSet() 获取`IPv6`地址列表。
 * @method void setIpv6AddressSet(array $Ipv6AddressSet) 设置`IPv6`地址列表。
 * @method array getTagSet() 获取标签键值对。
 * @method void setTagSet(array $TagSet) 设置标签键值对。
 * @method integer getEniType() 获取网卡类型。“0”-辅助网卡，“1”-主网卡，“2”：中继网卡
 * @method void setEniType(integer $EniType) 设置网卡类型。“0”-辅助网卡，“1”-主网卡，“2”：中继网卡
 * @method string getBusiness() 获取网卡绑定的子机类型：cvm（普通CVM子机），eks（弹性容器服务Elastic Kubernetes Service）， hai（高性能应用服务Hyper Application Inventor）。
 * @method void setBusiness(string $Business) 设置网卡绑定的子机类型：cvm（普通CVM子机），eks（弹性容器服务Elastic Kubernetes Service）， hai（高性能应用服务Hyper Application Inventor）。
 * @method string getCdcId() 获取网卡所关联的CDC实例ID。
 * @method void setCdcId(string $CdcId) 设置网卡所关联的CDC实例ID。
 * @method integer getAttachType() 获取弹性网卡类型：0:标准型/1:扩展型。默认值为0。
 * @method void setAttachType(integer $AttachType) 设置弹性网卡类型：0:标准型/1:扩展型。默认值为0。
 * @method string getResourceId() 获取用于保留网卡主IP的资源ID用于保留网卡主IP的资源ID。用于删除网卡时作为入参数。
 * @method void setResourceId(string $ResourceId) 设置用于保留网卡主IP的资源ID用于保留网卡主IP的资源ID。用于删除网卡时作为入参数。
 * @method string getQosLevel() 获取服务质量级别：
PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。

可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。

 * @method void setQosLevel(string $QosLevel) 设置服务质量级别：
PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。

可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。
 */
class NetworkInterface extends AbstractModel
{
    /**
     * @var string 弹性网卡实例ID，例如：eni-f1xjkw1b。
     */
    public $NetworkInterfaceId;

    /**
     * @var string 弹性网卡名称。
     */
    public $NetworkInterfaceName;

    /**
     * @var string 弹性网卡描述。
     */
    public $NetworkInterfaceDescription;

    /**
     * @var string 子网实例ID。
     */
    public $SubnetId;

    /**
     * @var string VPC实例ID。
     */
    public $VpcId;

    /**
     * @var array 绑定的安全组。
     */
    public $GroupSet;

    /**
     * @var boolean 是否是主网卡。
     */
    public $Primary;

    /**
     * @var string MAC地址。
     */
    public $MacAddress;

    /**
     * @var string 弹性网卡状态：
<li>`PENDING`：创建中</li>
<li>`AVAILABLE`：可用的</li>
<li>`ATTACHING`：绑定中</li>
<li>`DETACHING`：解绑中</li>
<li>`DELETING`：删除中</li>
     */
    public $State;

    /**
     * @var string 弹性网卡状态：
<li>`PENDING`：创建中</li>
<li>`AVAILABLE`：可用的</li>
<li>`ATTACHING`：绑定中</li>
<li>`DETACHING`：解绑中</li>
<li>`DELETING`：删除中</li>
<li>`INUSE`：已绑定</li>
     */
    public $NetworkInterfaceState;

    /**
     * @var array 内网IP信息。
     */
    public $PrivateIpAddressSet;

    /**
     * @var NetworkInterfaceAttachment 绑定的云服务器对象。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Attachment;

    /**
     * @var string 可用区。
     */
    public $Zone;

    /**
     * @var string 创建时间。格式：YYYY-MM-DD hh:mm:ss。示例值：2020-10-28 08:23:59
     */
    public $CreatedTime;

    /**
     * @var array `IPv6`地址列表。
     */
    public $Ipv6AddressSet;

    /**
     * @var array 标签键值对。
     */
    public $TagSet;

    /**
     * @var integer 网卡类型。“0”-辅助网卡，“1”-主网卡，“2”：中继网卡
     */
    public $EniType;

    /**
     * @var string 网卡绑定的子机类型：cvm（普通CVM子机），eks（弹性容器服务Elastic Kubernetes Service）， hai（高性能应用服务Hyper Application Inventor）。
     */
    public $Business;

    /**
     * @var string 网卡所关联的CDC实例ID。
     */
    public $CdcId;

    /**
     * @var integer 弹性网卡类型：0:标准型/1:扩展型。默认值为0。
     */
    public $AttachType;

    /**
     * @var string 用于保留网卡主IP的资源ID用于保留网卡主IP的资源ID。用于删除网卡时作为入参数。
     */
    public $ResourceId;

    /**
     * @var string 服务质量级别：
PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。

可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。

     */
    public $QosLevel;

    /**
     * @param string $NetworkInterfaceId 弹性网卡实例ID，例如：eni-f1xjkw1b。
     * @param string $NetworkInterfaceName 弹性网卡名称。
     * @param string $NetworkInterfaceDescription 弹性网卡描述。
     * @param string $SubnetId 子网实例ID。
     * @param string $VpcId VPC实例ID。
     * @param array $GroupSet 绑定的安全组。
     * @param boolean $Primary 是否是主网卡。
     * @param string $MacAddress MAC地址。
     * @param string $State 弹性网卡状态：
<li>`PENDING`：创建中</li>
<li>`AVAILABLE`：可用的</li>
<li>`ATTACHING`：绑定中</li>
<li>`DETACHING`：解绑中</li>
<li>`DELETING`：删除中</li>
     * @param string $NetworkInterfaceState 弹性网卡状态：
<li>`PENDING`：创建中</li>
<li>`AVAILABLE`：可用的</li>
<li>`ATTACHING`：绑定中</li>
<li>`DETACHING`：解绑中</li>
<li>`DELETING`：删除中</li>
<li>`INUSE`：已绑定</li>
     * @param array $PrivateIpAddressSet 内网IP信息。
     * @param NetworkInterfaceAttachment $Attachment 绑定的云服务器对象。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 可用区。
     * @param string $CreatedTime 创建时间。格式：YYYY-MM-DD hh:mm:ss。示例值：2020-10-28 08:23:59
     * @param array $Ipv6AddressSet `IPv6`地址列表。
     * @param array $TagSet 标签键值对。
     * @param integer $EniType 网卡类型。“0”-辅助网卡，“1”-主网卡，“2”：中继网卡
     * @param string $Business 网卡绑定的子机类型：cvm（普通CVM子机），eks（弹性容器服务Elastic Kubernetes Service）， hai（高性能应用服务Hyper Application Inventor）。
     * @param string $CdcId 网卡所关联的CDC实例ID。
     * @param integer $AttachType 弹性网卡类型：0:标准型/1:扩展型。默认值为0。
     * @param string $ResourceId 用于保留网卡主IP的资源ID用于保留网卡主IP的资源ID。用于删除网卡时作为入参数。
     * @param string $QosLevel 服务质量级别：
PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。

可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。
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
    }
}
