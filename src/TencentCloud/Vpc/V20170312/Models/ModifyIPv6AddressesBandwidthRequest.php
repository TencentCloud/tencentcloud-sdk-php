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
 * ModifyIPv6AddressesBandwidth请求参数结构体
 *
 * @method array getIPv6AddressIds() 获取弹性公网IPv6地址唯一ID，可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。
 * @method void setIPv6AddressIds(array $IPv6AddressIds) 设置弹性公网IPv6地址唯一ID，可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。
 * @method integer getInternetMaxBandwidthOut() 获取弹性公网IPv6地址网络带宽，可调整的带宽上限值参考产品文档中[IPv6 计费限制说明](https://cloud.tencent.com/document/product/1142/38369#IPv6)。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置弹性公网IPv6地址网络带宽，可调整的带宽上限值参考产品文档中[IPv6 计费限制说明](https://cloud.tencent.com/document/product/1142/38369#IPv6)。
 */
class ModifyIPv6AddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var array 弹性公网IPv6地址唯一ID，可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。
     */
    public $IPv6AddressIds;

    /**
     * @var integer 弹性公网IPv6地址网络带宽，可调整的带宽上限值参考产品文档中[IPv6 计费限制说明](https://cloud.tencent.com/document/product/1142/38369#IPv6)。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @param array $IPv6AddressIds 弹性公网IPv6地址唯一ID，可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。
     * @param integer $InternetMaxBandwidthOut 弹性公网IPv6地址网络带宽，可调整的带宽上限值参考产品文档中[IPv6 计费限制说明](https://cloud.tencent.com/document/product/1142/38369#IPv6)。
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
        if (array_key_exists("IPv6AddressIds",$param) and $param["IPv6AddressIds"] !== null) {
            $this->IPv6AddressIds = $param["IPv6AddressIds"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}
