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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGatewayLoadBalancers请求参数结构体
 *
 * @method array getLoadBalancerIds() 获取<p>网关负载均衡实例ID。支持批量筛选的实例ID数量上限为20个。</p>
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置<p>网关负载均衡实例ID。支持批量筛选的实例ID数量上限为20个。</p>
 * @method integer getLimit() 获取<p>一次批量返回网关负载均衡实例的数量，默认为20，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>一次批量返回网关负载均衡实例的数量，默认为20，最大值为100。</p>
 * @method integer getOffset() 获取<p>返回网关负载均衡实例列表的起始偏移量，默认0。</p>
 * @method void setOffset(integer $Offset) 设置<p>返回网关负载均衡实例列表的起始偏移量，默认0。</p>
 * @method array getFilters() 获取<p>查询负载均衡详细信息列表的过滤条件，每次请求的Filters的上限为10，Filter.Values的上限为100。Filter.Name和Filter.Values皆为必填项。详细的过滤条件如下：- VpcId - String - 是否必填：否 - （过滤条件）按照网关负载均衡实例所属的私有网络过滤，如“vpc-bhqk****”。- Vips - String  - 是否必填：否 - （过滤条件）按照网关负载均衡实例的VIP进行过滤，如“10.1.1.1”- tag:tag-key - String - 是否必填：否 - （过滤条件）按照GWLB标签键值对进行过滤，tag-key使用具体的标签键进行替换。</p>
 * @method void setFilters(array $Filters) 设置<p>查询负载均衡详细信息列表的过滤条件，每次请求的Filters的上限为10，Filter.Values的上限为100。Filter.Name和Filter.Values皆为必填项。详细的过滤条件如下：- VpcId - String - 是否必填：否 - （过滤条件）按照网关负载均衡实例所属的私有网络过滤，如“vpc-bhqk****”。- Vips - String  - 是否必填：否 - （过滤条件）按照网关负载均衡实例的VIP进行过滤，如“10.1.1.1”- tag:tag-key - String - 是否必填：否 - （过滤条件）按照GWLB标签键值对进行过滤，tag-key使用具体的标签键进行替换。</p>
 * @method string getSearchKey() 获取<p>搜索字段，模糊匹配名称、VIP。</p>
 * @method void setSearchKey(string $SearchKey) 设置<p>搜索字段，模糊匹配名称、VIP。</p>
 */
class DescribeGatewayLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array <p>网关负载均衡实例ID。支持批量筛选的实例ID数量上限为20个。</p>
     */
    public $LoadBalancerIds;

    /**
     * @var integer <p>一次批量返回网关负载均衡实例的数量，默认为20，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>返回网关负载均衡实例列表的起始偏移量，默认0。</p>
     */
    public $Offset;

    /**
     * @var array <p>查询负载均衡详细信息列表的过滤条件，每次请求的Filters的上限为10，Filter.Values的上限为100。Filter.Name和Filter.Values皆为必填项。详细的过滤条件如下：- VpcId - String - 是否必填：否 - （过滤条件）按照网关负载均衡实例所属的私有网络过滤，如“vpc-bhqk****”。- Vips - String  - 是否必填：否 - （过滤条件）按照网关负载均衡实例的VIP进行过滤，如“10.1.1.1”- tag:tag-key - String - 是否必填：否 - （过滤条件）按照GWLB标签键值对进行过滤，tag-key使用具体的标签键进行替换。</p>
     */
    public $Filters;

    /**
     * @var string <p>搜索字段，模糊匹配名称、VIP。</p>
     */
    public $SearchKey;

    /**
     * @param array $LoadBalancerIds <p>网关负载均衡实例ID。支持批量筛选的实例ID数量上限为20个。</p>
     * @param integer $Limit <p>一次批量返回网关负载均衡实例的数量，默认为20，最大值为100。</p>
     * @param integer $Offset <p>返回网关负载均衡实例列表的起始偏移量，默认0。</p>
     * @param array $Filters <p>查询负载均衡详细信息列表的过滤条件，每次请求的Filters的上限为10，Filter.Values的上限为100。Filter.Name和Filter.Values皆为必填项。详细的过滤条件如下：- VpcId - String - 是否必填：否 - （过滤条件）按照网关负载均衡实例所属的私有网络过滤，如“vpc-bhqk****”。- Vips - String  - 是否必填：否 - （过滤条件）按照网关负载均衡实例的VIP进行过滤，如“10.1.1.1”- tag:tag-key - String - 是否必填：否 - （过滤条件）按照GWLB标签键值对进行过滤，tag-key使用具体的标签键进行替换。</p>
     * @param string $SearchKey <p>搜索字段，模糊匹配名称、VIP。</p>
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
