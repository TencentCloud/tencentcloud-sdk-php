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
 * 返回多运营商IPv6 Cidr Block
 *
 * @method string getIPv6CidrBlock() 获取<p>IPv6网段</p>
 * @method void setIPv6CidrBlock(string $IPv6CidrBlock) 设置<p>IPv6网段</p>
 * @method string getISPType() 获取<p>网络运营商类型</p><p>枚举值：</p><ul><li>BGP： 默认</li><li>CMCC： 中国移动</li><li>CTCC： 中国电信</li><li>CUCC： 中国联通</li></ul>
 * @method void setISPType(string $ISPType) 设置<p>网络运营商类型</p><p>枚举值：</p><ul><li>BGP： 默认</li><li>CMCC： 中国移动</li><li>CTCC： 中国电信</li><li>CUCC： 中国联通</li></ul>
 * @method string getAddressType() 获取<p>IPv6网段类型</p><p>枚举值：</p><ul><li>GUA： 全球单播地址</li><li>ULA： 唯一本地地址</li></ul>
 * @method void setAddressType(string $AddressType) 设置<p>IPv6网段类型</p><p>枚举值：</p><ul><li>GUA： 全球单播地址</li><li>ULA： 唯一本地地址</li></ul>
 */
class ISPIPv6CidrBlock extends AbstractModel
{
    /**
     * @var string <p>IPv6网段</p>
     */
    public $IPv6CidrBlock;

    /**
     * @var string <p>网络运营商类型</p><p>枚举值：</p><ul><li>BGP： 默认</li><li>CMCC： 中国移动</li><li>CTCC： 中国电信</li><li>CUCC： 中国联通</li></ul>
     */
    public $ISPType;

    /**
     * @var string <p>IPv6网段类型</p><p>枚举值：</p><ul><li>GUA： 全球单播地址</li><li>ULA： 唯一本地地址</li></ul>
     */
    public $AddressType;

    /**
     * @param string $IPv6CidrBlock <p>IPv6网段</p>
     * @param string $ISPType <p>网络运营商类型</p><p>枚举值：</p><ul><li>BGP： 默认</li><li>CMCC： 中国移动</li><li>CTCC： 中国电信</li><li>CUCC： 中国联通</li></ul>
     * @param string $AddressType <p>IPv6网段类型</p><p>枚举值：</p><ul><li>GUA： 全球单播地址</li><li>ULA： 唯一本地地址</li></ul>
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
        if (array_key_exists("IPv6CidrBlock",$param) and $param["IPv6CidrBlock"] !== null) {
            $this->IPv6CidrBlock = $param["IPv6CidrBlock"];
        }

        if (array_key_exists("ISPType",$param) and $param["ISPType"] !== null) {
            $this->ISPType = $param["ISPType"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }
    }
}
