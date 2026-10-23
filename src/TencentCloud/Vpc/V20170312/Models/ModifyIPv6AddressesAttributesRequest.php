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
 * ModifyIPv6AddressesAttributes请求参数结构体
 *
 * @method array getIPv6AddressIds() 获取<p>弹性公网IPv6唯一ID列表。可以使用<a href="https://cloud.tencent.com/document/api/215/113677">DescribeIPv6Addresses</a>接口获取IPv6AddressIds。</p>
 * @method void setIPv6AddressIds(array $IPv6AddressIds) 设置<p>弹性公网IPv6唯一ID列表。可以使用<a href="https://cloud.tencent.com/document/api/215/113677">DescribeIPv6Addresses</a>接口获取IPv6AddressIds。</p>
 * @method string getIPv6AddressName() 获取<p>弹性公网IPv6地址名称，长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符&quot;-&quot;和下划线&quot;_&quot;，不能包含空格。</p>
 * @method void setIPv6AddressName(string $IPv6AddressName) 设置<p>弹性公网IPv6地址名称，长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符&quot;-&quot;和下划线&quot;_&quot;，不能包含空格。</p>
 * @method boolean getEipVisibleOnEni() 获取<p>是否开启弹性公网IPv6地址网卡可见</p>
 * @method void setEipVisibleOnEni(boolean $EipVisibleOnEni) 设置<p>是否开启弹性公网IPv6地址网卡可见</p>
 */
class ModifyIPv6AddressesAttributesRequest extends AbstractModel
{
    /**
     * @var array <p>弹性公网IPv6唯一ID列表。可以使用<a href="https://cloud.tencent.com/document/api/215/113677">DescribeIPv6Addresses</a>接口获取IPv6AddressIds。</p>
     */
    public $IPv6AddressIds;

    /**
     * @var string <p>弹性公网IPv6地址名称，长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符&quot;-&quot;和下划线&quot;_&quot;，不能包含空格。</p>
     */
    public $IPv6AddressName;

    /**
     * @var boolean <p>是否开启弹性公网IPv6地址网卡可见</p>
     */
    public $EipVisibleOnEni;

    /**
     * @param array $IPv6AddressIds <p>弹性公网IPv6唯一ID列表。可以使用<a href="https://cloud.tencent.com/document/api/215/113677">DescribeIPv6Addresses</a>接口获取IPv6AddressIds。</p>
     * @param string $IPv6AddressName <p>弹性公网IPv6地址名称，长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符&quot;-&quot;和下划线&quot;_&quot;，不能包含空格。</p>
     * @param boolean $EipVisibleOnEni <p>是否开启弹性公网IPv6地址网卡可见</p>
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

        if (array_key_exists("IPv6AddressName",$param) and $param["IPv6AddressName"] !== null) {
            $this->IPv6AddressName = $param["IPv6AddressName"];
        }

        if (array_key_exists("EipVisibleOnEni",$param) and $param["EipVisibleOnEni"] !== null) {
            $this->EipVisibleOnEni = $param["EipVisibleOnEni"];
        }
    }
}
