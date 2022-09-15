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
 * DescribeNetworkAclQuintupleEntries请求参数结构体
 *
 * @method string getNetworkAclId() 获取网络ACL实例ID。形如：acl-12345678。
 * @method void setNetworkAclId(string $NetworkAclId) 设置网络ACL实例ID。形如：acl-12345678。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最小值为1，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最小值为1，最大值为100。
 * @method array getFilters() 获取过滤条件，参数不支持同时指定`HaVipIds`和`Filters`。
<li>protocol - String - 协议，形如：`TCP`。</li>
<li>description - String - 描述。</li>
<li>destination-cidr - String - 目的CIDR， 形如：'192.168.0.0/24'。</li>
<li>source-cidr- String - 源CIDR， 形如：'192.168.0.0/24'。</li>
<li>action - String - 动作，形如ACCEPT或DROP。</li>
<li>network-acl-quintuple-entry-id - String - 五元组唯一ID，形如：'acli45-ahnu4rv5'。</li>
<li>network-acl-direction - String - 方向，形如：'INGRESS'或'EGRESS'。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，参数不支持同时指定`HaVipIds`和`Filters`。
<li>protocol - String - 协议，形如：`TCP`。</li>
<li>description - String - 描述。</li>
<li>destination-cidr - String - 目的CIDR， 形如：'192.168.0.0/24'。</li>
<li>source-cidr- String - 源CIDR， 形如：'192.168.0.0/24'。</li>
<li>action - String - 动作，形如ACCEPT或DROP。</li>
<li>network-acl-quintuple-entry-id - String - 五元组唯一ID，形如：'acli45-ahnu4rv5'。</li>
<li>network-acl-direction - String - 方向，形如：'INGRESS'或'EGRESS'。</li>
 */
class DescribeNetworkAclQuintupleEntriesRequest extends AbstractModel
{
    /**
     * @var string 网络ACL实例ID。形如：acl-12345678。
     */
    public $NetworkAclId;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最小值为1，最大值为100。
     */
    public $Limit;

    /**
     * @var array 过滤条件，参数不支持同时指定`HaVipIds`和`Filters`。
<li>protocol - String - 协议，形如：`TCP`。</li>
<li>description - String - 描述。</li>
<li>destination-cidr - String - 目的CIDR， 形如：'192.168.0.0/24'。</li>
<li>source-cidr- String - 源CIDR， 形如：'192.168.0.0/24'。</li>
<li>action - String - 动作，形如ACCEPT或DROP。</li>
<li>network-acl-quintuple-entry-id - String - 五元组唯一ID，形如：'acli45-ahnu4rv5'。</li>
<li>network-acl-direction - String - 方向，形如：'INGRESS'或'EGRESS'。</li>
     */
    public $Filters;

    /**
     * @param string $NetworkAclId 网络ACL实例ID。形如：acl-12345678。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最小值为1，最大值为100。
     * @param array $Filters 过滤条件，参数不支持同时指定`HaVipIds`和`Filters`。
<li>protocol - String - 协议，形如：`TCP`。</li>
<li>description - String - 描述。</li>
<li>destination-cidr - String - 目的CIDR， 形如：'192.168.0.0/24'。</li>
<li>source-cidr- String - 源CIDR， 形如：'192.168.0.0/24'。</li>
<li>action - String - 动作，形如ACCEPT或DROP。</li>
<li>network-acl-quintuple-entry-id - String - 五元组唯一ID，形如：'acli45-ahnu4rv5'。</li>
<li>network-acl-direction - String - 方向，形如：'INGRESS'或'EGRESS'。</li>
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
        if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
            $this->NetworkAclId = $param["NetworkAclId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
