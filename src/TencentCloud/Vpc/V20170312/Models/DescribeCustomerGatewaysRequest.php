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
 * DescribeCustomerGateways请求参数结构体
 *
 * @method array getCustomerGatewayIds() 获取<p>对端网关ID，例如：cgw-2wqq41m9。每次请求的实例的上限为100。参数不支持同时指定CustomerGatewayIds和Filters。</p>
 * @method void setCustomerGatewayIds(array $CustomerGatewayIds) 设置<p>对端网关ID，例如：cgw-2wqq41m9。每次请求的实例的上限为100。参数不支持同时指定CustomerGatewayIds和Filters。</p>
 * @method array getFilters() 获取<p>过滤条件，详见下表：实例过滤条件表。每次请求的Filters的上限为10，Filter.Values的上限为5。参数不支持同时指定CustomerGatewayIds和Filters。<li>customer-gateway-id - String - （过滤条件）用户网关唯一ID形如：<code>cgw-mgp33pll</code>。</li><li>customer-gateway-name - String - （过滤条件）用户网关名称形如：<code>test-cgw</code>。</li><li>ip-address - String - （过滤条件）公网地址形如：<code>58.211.1.12</code>。</li><li>ip-version - String - （过滤条件）公网地址类型,可选值[&#39;IPv4&#39;,&#39;IPv6&#39;]。</li></p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，详见下表：实例过滤条件表。每次请求的Filters的上限为10，Filter.Values的上限为5。参数不支持同时指定CustomerGatewayIds和Filters。<li>customer-gateway-id - String - （过滤条件）用户网关唯一ID形如：<code>cgw-mgp33pll</code>。</li><li>customer-gateway-name - String - （过滤条件）用户网关名称形如：<code>test-cgw</code>。</li><li>ip-address - String - （过滤条件）公网地址形如：<code>58.211.1.12</code>。</li><li>ip-version - String - （过滤条件）公网地址类型,可选值[&#39;IPv4&#39;,&#39;IPv6&#39;]。</li></p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/11646">简介</a>中的相关小节。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/11646">简介</a>中的相关小节。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。</p>
 */
class DescribeCustomerGatewaysRequest extends AbstractModel
{
    /**
     * @var array <p>对端网关ID，例如：cgw-2wqq41m9。每次请求的实例的上限为100。参数不支持同时指定CustomerGatewayIds和Filters。</p>
     */
    public $CustomerGatewayIds;

    /**
     * @var array <p>过滤条件，详见下表：实例过滤条件表。每次请求的Filters的上限为10，Filter.Values的上限为5。参数不支持同时指定CustomerGatewayIds和Filters。<li>customer-gateway-id - String - （过滤条件）用户网关唯一ID形如：<code>cgw-mgp33pll</code>。</li><li>customer-gateway-name - String - （过滤条件）用户网关名称形如：<code>test-cgw</code>。</li><li>ip-address - String - （过滤条件）公网地址形如：<code>58.211.1.12</code>。</li><li>ip-version - String - （过滤条件）公网地址类型,可选值[&#39;IPv4&#39;,&#39;IPv6&#39;]。</li></p>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/11646">简介</a>中的相关小节。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。</p>
     */
    public $Limit;

    /**
     * @param array $CustomerGatewayIds <p>对端网关ID，例如：cgw-2wqq41m9。每次请求的实例的上限为100。参数不支持同时指定CustomerGatewayIds和Filters。</p>
     * @param array $Filters <p>过滤条件，详见下表：实例过滤条件表。每次请求的Filters的上限为10，Filter.Values的上限为5。参数不支持同时指定CustomerGatewayIds和Filters。<li>customer-gateway-id - String - （过滤条件）用户网关唯一ID形如：<code>cgw-mgp33pll</code>。</li><li>customer-gateway-name - String - （过滤条件）用户网关名称形如：<code>test-cgw</code>。</li><li>ip-address - String - （过滤条件）公网地址形如：<code>58.211.1.12</code>。</li><li>ip-version - String - （过滤条件）公网地址类型,可选值[&#39;IPv4&#39;,&#39;IPv6&#39;]。</li></p>
     * @param integer $Offset <p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/11646">简介</a>中的相关小节。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。</p>
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
        if (array_key_exists("CustomerGatewayIds",$param) and $param["CustomerGatewayIds"] !== null) {
            $this->CustomerGatewayIds = $param["CustomerGatewayIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
