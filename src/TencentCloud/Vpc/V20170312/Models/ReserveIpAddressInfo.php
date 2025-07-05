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
 * 内网保留IP数据
 *
 * @method string getReserveIpId() 获取内网保留IP唯一 ID。
 * @method void setReserveIpId(string $ReserveIpId) 设置内网保留IP唯一 ID。
 * @method string getVpcId() 获取VPC唯一 ID。
 * @method void setVpcId(string $VpcId) 设置VPC唯一 ID。
 * @method string getSubnetId() 获取子网唯一 ID。
 * @method void setSubnetId(string $SubnetId) 设置子网唯一 ID。
 * @method string getReserveIpAddress() 获取内网保留IP地址。
 * @method void setReserveIpAddress(string $ReserveIpAddress) 设置内网保留IP地址。
 * @method string getResourceId() 获取内网保留 IP绑定的资源实例 ID。
 * @method void setResourceId(string $ResourceId) 设置内网保留 IP绑定的资源实例 ID。
 * @method integer getIpType() 获取产品申请的IpType。
 * @method void setIpType(integer $IpType) 设置产品申请的IpType。
 * @method string getState() 获取绑定状态，UnBind-未绑定， Bind-绑定。
 * @method void setState(string $State) 设置绑定状态，UnBind-未绑定， Bind-绑定。
 * @method string getName() 获取保留 IP名称。
 * @method void setName(string $Name) 设置保留 IP名称。
 * @method string getDescription() 获取保留 IP描述。
 * @method void setDescription(string $Description) 设置保留 IP描述。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method array getTagSet() 获取标签键值对。
 * @method void setTagSet(array $TagSet) 设置标签键值对。
 */
class ReserveIpAddressInfo extends AbstractModel
{
    /**
     * @var string 内网保留IP唯一 ID。
     */
    public $ReserveIpId;

    /**
     * @var string VPC唯一 ID。
     */
    public $VpcId;

    /**
     * @var string 子网唯一 ID。
     */
    public $SubnetId;

    /**
     * @var string 内网保留IP地址。
     */
    public $ReserveIpAddress;

    /**
     * @var string 内网保留 IP绑定的资源实例 ID。
     */
    public $ResourceId;

    /**
     * @var integer 产品申请的IpType。
     */
    public $IpType;

    /**
     * @var string 绑定状态，UnBind-未绑定， Bind-绑定。
     */
    public $State;

    /**
     * @var string 保留 IP名称。
     */
    public $Name;

    /**
     * @var string 保留 IP描述。
     */
    public $Description;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var array 标签键值对。
     */
    public $TagSet;

    /**
     * @param string $ReserveIpId 内网保留IP唯一 ID。
     * @param string $VpcId VPC唯一 ID。
     * @param string $SubnetId 子网唯一 ID。
     * @param string $ReserveIpAddress 内网保留IP地址。
     * @param string $ResourceId 内网保留 IP绑定的资源实例 ID。
     * @param integer $IpType 产品申请的IpType。
     * @param string $State 绑定状态，UnBind-未绑定， Bind-绑定。
     * @param string $Name 保留 IP名称。
     * @param string $Description 保留 IP描述。
     * @param string $CreatedTime 创建时间。
     * @param array $TagSet 标签键值对。
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
        if (array_key_exists("ReserveIpId",$param) and $param["ReserveIpId"] !== null) {
            $this->ReserveIpId = $param["ReserveIpId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ReserveIpAddress",$param) and $param["ReserveIpAddress"] !== null) {
            $this->ReserveIpAddress = $param["ReserveIpAddress"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("IpType",$param) and $param["IpType"] !== null) {
            $this->IpType = $param["IpType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
