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
 * CreateReserveIpAddresses请求参数结构体
 *
 * @method string getVpcId() 获取VPC唯一 ID。
 * @method void setVpcId(string $VpcId) 设置VPC唯一 ID。
 * @method array getIpAddresses() 获取指定IP申请的内网保留IP地址。
 * @method void setIpAddresses(array $IpAddresses) 设置指定IP申请的内网保留IP地址。
 * @method integer getIpAddressCount() 获取不指定IP地址，指定个数自动分配保留内网IP。
 * @method void setIpAddressCount(integer $IpAddressCount) 设置不指定IP地址，指定个数自动分配保留内网IP。
 * @method string getSubnetId() 获取子网唯一 ID。
 * @method void setSubnetId(string $SubnetId) 设置子网唯一 ID。
 * @method string getName() 获取内网保留 IP名称。
 * @method void setName(string $Name) 设置内网保留 IP名称。
 * @method string getDescription() 获取内网保留 IP描述。
 * @method void setDescription(string $Description) 设置内网保留 IP描述。
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 */
class CreateReserveIpAddressesRequest extends AbstractModel
{
    /**
     * @var string VPC唯一 ID。
     */
    public $VpcId;

    /**
     * @var array 指定IP申请的内网保留IP地址。
     */
    public $IpAddresses;

    /**
     * @var integer 不指定IP地址，指定个数自动分配保留内网IP。
     */
    public $IpAddressCount;

    /**
     * @var string 子网唯一 ID。
     */
    public $SubnetId;

    /**
     * @var string 内网保留 IP名称。
     */
    public $Name;

    /**
     * @var string 内网保留 IP描述。
     */
    public $Description;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
     */
    public $Tags;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     */
    public $ClientToken;

    /**
     * @param string $VpcId VPC唯一 ID。
     * @param array $IpAddresses 指定IP申请的内网保留IP地址。
     * @param integer $IpAddressCount 不指定IP地址，指定个数自动分配保留内网IP。
     * @param string $SubnetId 子网唯一 ID。
     * @param string $Name 内网保留 IP名称。
     * @param string $Description 内网保留 IP描述。
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
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

        if (array_key_exists("IpAddresses",$param) and $param["IpAddresses"] !== null) {
            $this->IpAddresses = $param["IpAddresses"];
        }

        if (array_key_exists("IpAddressCount",$param) and $param["IpAddressCount"] !== null) {
            $this->IpAddressCount = $param["IpAddressCount"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
