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
 * AssignIpv6Addresses请求参数结构体
 *
 * @method string getNetworkInterfaceId() 获取<p>弹性网卡实例<code>ID</code>，形如：<code>eni-m6dyj72l</code>。可通过<a href="https://cloud.tencent.com/document/product/215/15817">DescribeNetworkInterfaces</a>接口获取。</p>
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置<p>弹性网卡实例<code>ID</code>，形如：<code>eni-m6dyj72l</code>。可通过<a href="https://cloud.tencent.com/document/product/215/15817">DescribeNetworkInterfaces</a>接口获取。</p>
 * @method array getIpv6Addresses() 获取<p>指定的<code>IPv6</code>地址列表，单次最多指定10个。与入参<code>Ipv6AddressCount</code>合并计算配额。与Ipv6AddressCount必填一个。</p>
 * @method void setIpv6Addresses(array $Ipv6Addresses) 设置<p>指定的<code>IPv6</code>地址列表，单次最多指定10个。与入参<code>Ipv6AddressCount</code>合并计算配额。与Ipv6AddressCount必填一个。</p>
 * @method integer getIpv6AddressCount() 获取<p>自动分配<code>IPv6</code>地址个数，内网IP地址个数总和不能超过配额数。与入参<code>Ipv6Addresses</code>合并计算配额。与Ipv6Addresses必填一个。</p>
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) 设置<p>自动分配<code>IPv6</code>地址个数，内网IP地址个数总和不能超过配额数。与入参<code>Ipv6Addresses</code>合并计算配额。与Ipv6Addresses必填一个。</p>
 * @method string getClientToken() 获取<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 */
class AssignIpv6AddressesRequest extends AbstractModel
{
    /**
     * @var string <p>弹性网卡实例<code>ID</code>，形如：<code>eni-m6dyj72l</code>。可通过<a href="https://cloud.tencent.com/document/product/215/15817">DescribeNetworkInterfaces</a>接口获取。</p>
     */
    public $NetworkInterfaceId;

    /**
     * @var array <p>指定的<code>IPv6</code>地址列表，单次最多指定10个。与入参<code>Ipv6AddressCount</code>合并计算配额。与Ipv6AddressCount必填一个。</p>
     */
    public $Ipv6Addresses;

    /**
     * @var integer <p>自动分配<code>IPv6</code>地址个数，内网IP地址个数总和不能超过配额数。与入参<code>Ipv6Addresses</code>合并计算配额。与Ipv6Addresses必填一个。</p>
     */
    public $Ipv6AddressCount;

    /**
     * @var string <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     */
    public $ClientToken;

    /**
     * @param string $NetworkInterfaceId <p>弹性网卡实例<code>ID</code>，形如：<code>eni-m6dyj72l</code>。可通过<a href="https://cloud.tencent.com/document/product/215/15817">DescribeNetworkInterfaces</a>接口获取。</p>
     * @param array $Ipv6Addresses <p>指定的<code>IPv6</code>地址列表，单次最多指定10个。与入参<code>Ipv6AddressCount</code>合并计算配额。与Ipv6AddressCount必填一个。</p>
     * @param integer $Ipv6AddressCount <p>自动分配<code>IPv6</code>地址个数，内网IP地址个数总和不能超过配额数。与入参<code>Ipv6Addresses</code>合并计算配额。与Ipv6Addresses必填一个。</p>
     * @param string $ClientToken <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
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

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
