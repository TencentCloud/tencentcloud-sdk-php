<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
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
 * @method string getState() 获取取值范围：PENDING|AVAILABLE|ATTACHING|DETACHING|DELETING。
 * @method void setState(string $State) 设置取值范围：PENDING|AVAILABLE|ATTACHING|DETACHING|DELETING。
 * @method array getPrivateIpAddressSet() 获取内网IP信息。
 * @method void setPrivateIpAddressSet(array $PrivateIpAddressSet) 设置内网IP信息。
 * @method NetworkInterfaceAttachment getAttachment() 获取绑定的云服务器对象。
 * @method void setAttachment(NetworkInterfaceAttachment $Attachment) 设置绑定的云服务器对象。
 * @method string getZone() 获取可用区。
 * @method void setZone(string $Zone) 设置可用区。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 */

/**
 *弹性网卡
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
     * @var string 取值范围：PENDING|AVAILABLE|ATTACHING|DETACHING|DELETING。
     */
    public $State;

    /**
     * @var array 内网IP信息。
     */
    public $PrivateIpAddressSet;

    /**
     * @var NetworkInterfaceAttachment 绑定的云服务器对象。
     */
    public $Attachment;

    /**
     * @var string 可用区。
     */
    public $Zone;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;
    /**
     * @param string $NetworkInterfaceId 弹性网卡实例ID，例如：eni-f1xjkw1b。
     * @param string $NetworkInterfaceName 弹性网卡名称。
     * @param string $NetworkInterfaceDescription 弹性网卡描述。
     * @param string $SubnetId 子网实例ID。
     * @param string $VpcId VPC实例ID。
     * @param array $GroupSet 绑定的安全组。
     * @param boolean $Primary 是否是主网卡。
     * @param string $MacAddress MAC地址。
     * @param string $State 取值范围：PENDING|AVAILABLE|ATTACHING|DETACHING|DELETING。
     * @param array $PrivateIpAddressSet 内网IP信息。
     * @param NetworkInterfaceAttachment $Attachment 绑定的云服务器对象。
     * @param string $Zone 可用区。
     * @param string $CreatedTime 创建时间。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
    }
}
