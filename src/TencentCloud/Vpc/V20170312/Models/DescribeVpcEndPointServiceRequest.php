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
 * DescribeVpcEndPointService请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。不支持同时传入参数 EndPointServiceIds and Filters。
<li> service-id - String - （过滤条件）终端节点服务唯一ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
</li>
<li>service-name - String - （过滤条件）终端节点实例名称。</li>
<li>service-instance-id - String - （过滤条件）后端服务的唯一ID，比如lb-dehd3e33。CLB可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)接口获取；
MYSQL可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/240/38568)接口获取；
CRS可通过[DescribeInstances](https://cloud.tencent.com/document/product/239/20018)接口获取；
GWLB可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/product/1782/111683)接口获取。
</li>
<li>service-type - String - （过滤条件）后端PAAS服务类型，CLB（负载均衡），CDB（云数据库 MySQL），CRS（云数据库 Redis），GWLB（网关负载均衡），不填默认查询类型为CLB。</li>
 * @method void setFilters(array $Filters) 设置过滤条件。不支持同时传入参数 EndPointServiceIds and Filters。
<li> service-id - String - （过滤条件）终端节点服务唯一ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
</li>
<li>service-name - String - （过滤条件）终端节点实例名称。</li>
<li>service-instance-id - String - （过滤条件）后端服务的唯一ID，比如lb-dehd3e33。CLB可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)接口获取；
MYSQL可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/240/38568)接口获取；
CRS可通过[DescribeInstances](https://cloud.tencent.com/document/product/239/20018)接口获取；
GWLB可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/product/1782/111683)接口获取。
</li>
<li>service-type - String - （过滤条件）后端PAAS服务类型，CLB（负载均衡），CDB（云数据库 MySQL），CRS（云数据库 Redis），GWLB（网关负载均衡），不填默认查询类型为CLB。</li>
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取单页返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置单页返回数量，默认为20，最大值为100。
 * @method array getEndPointServiceIds() 获取终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。不支持同时传入参数 EndPointServiceIds and Filters。
 * @method void setEndPointServiceIds(array $EndPointServiceIds) 设置终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。不支持同时传入参数 EndPointServiceIds and Filters。
 * @method boolean getIsListAuthorizedEndPointService() 获取<li>不支持同时传入参数 Filters 。</li> <li>列出授权给当前账号的终端节点服务信息。可以配合EndPointServiceIds参数进行过滤，哪些终端节点服务授权了该账户。</li>
 * @method void setIsListAuthorizedEndPointService(boolean $IsListAuthorizedEndPointService) 设置<li>不支持同时传入参数 Filters 。</li> <li>列出授权给当前账号的终端节点服务信息。可以配合EndPointServiceIds参数进行过滤，哪些终端节点服务授权了该账户。</li>
 * @method string getIpAddressType() 获取协议类型，支持 Ipv4，Ipv6， DualStack，默认 Ipv4。使用DualStack查询双栈的时候，必须要使用MaxResult配合NextToken查询。第1次查询的时候只需要携带MaxResult，如果返回NextToken非空，表示有更多可用数据。第2次查询的时候就需要携带NextToken进行分页查询。
 * @method void setIpAddressType(string $IpAddressType) 设置协议类型，支持 Ipv4，Ipv6， DualStack，默认 Ipv4。使用DualStack查询双栈的时候，必须要使用MaxResult配合NextToken查询。第1次查询的时候只需要携带MaxResult，如果返回NextToken非空，表示有更多可用数据。第2次查询的时候就需要携带NextToken进行分页查询。
 * @method integer getMaxResults() 获取每次调用返回的最大结果数。如果查询返回的时候有NextToken返回，您可以使用NextToken值获取更多页结果， 当NextToke返回空或者返回的结果数量小于MaxResults时，表示没有更多数据了。允许的最大页面大小为 100。
 * @method void setMaxResults(integer $MaxResults) 设置每次调用返回的最大结果数。如果查询返回的时候有NextToken返回，您可以使用NextToken值获取更多页结果， 当NextToke返回空或者返回的结果数量小于MaxResults时，表示没有更多数据了。允许的最大页面大小为 100。
 * @method string getNextToken() 获取如果NextToken返回 ，表示还有更多可用结果。 NextToken是每个页面唯一的分页令牌。使用返回的令牌再次调用以检索下一页。需要保持所有其他参数不变。每个分页令牌在 24 小时后过期。
 * @method void setNextToken(string $NextToken) 设置如果NextToken返回 ，表示还有更多可用结果。 NextToken是每个页面唯一的分页令牌。使用返回的令牌再次调用以检索下一页。需要保持所有其他参数不变。每个分页令牌在 24 小时后过期。
 */
class DescribeVpcEndPointServiceRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。不支持同时传入参数 EndPointServiceIds and Filters。
<li> service-id - String - （过滤条件）终端节点服务唯一ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
</li>
<li>service-name - String - （过滤条件）终端节点实例名称。</li>
<li>service-instance-id - String - （过滤条件）后端服务的唯一ID，比如lb-dehd3e33。CLB可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)接口获取；
MYSQL可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/240/38568)接口获取；
CRS可通过[DescribeInstances](https://cloud.tencent.com/document/product/239/20018)接口获取；
GWLB可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/product/1782/111683)接口获取。
</li>
<li>service-type - String - （过滤条件）后端PAAS服务类型，CLB（负载均衡），CDB（云数据库 MySQL），CRS（云数据库 Redis），GWLB（网关负载均衡），不填默认查询类型为CLB。</li>
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 单页返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var array 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。不支持同时传入参数 EndPointServiceIds and Filters。
     */
    public $EndPointServiceIds;

    /**
     * @var boolean <li>不支持同时传入参数 Filters 。</li> <li>列出授权给当前账号的终端节点服务信息。可以配合EndPointServiceIds参数进行过滤，哪些终端节点服务授权了该账户。</li>
     */
    public $IsListAuthorizedEndPointService;

    /**
     * @var string 协议类型，支持 Ipv4，Ipv6， DualStack，默认 Ipv4。使用DualStack查询双栈的时候，必须要使用MaxResult配合NextToken查询。第1次查询的时候只需要携带MaxResult，如果返回NextToken非空，表示有更多可用数据。第2次查询的时候就需要携带NextToken进行分页查询。
     */
    public $IpAddressType;

    /**
     * @var integer 每次调用返回的最大结果数。如果查询返回的时候有NextToken返回，您可以使用NextToken值获取更多页结果， 当NextToke返回空或者返回的结果数量小于MaxResults时，表示没有更多数据了。允许的最大页面大小为 100。
     */
    public $MaxResults;

    /**
     * @var string 如果NextToken返回 ，表示还有更多可用结果。 NextToken是每个页面唯一的分页令牌。使用返回的令牌再次调用以检索下一页。需要保持所有其他参数不变。每个分页令牌在 24 小时后过期。
     */
    public $NextToken;

    /**
     * @param array $Filters 过滤条件。不支持同时传入参数 EndPointServiceIds and Filters。
<li> service-id - String - （过滤条件）终端节点服务唯一ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
</li>
<li>service-name - String - （过滤条件）终端节点实例名称。</li>
<li>service-instance-id - String - （过滤条件）后端服务的唯一ID，比如lb-dehd3e33。CLB可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)接口获取；
MYSQL可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/240/38568)接口获取；
CRS可通过[DescribeInstances](https://cloud.tencent.com/document/product/239/20018)接口获取；
GWLB可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/product/1782/111683)接口获取。
</li>
<li>service-type - String - （过滤条件）后端PAAS服务类型，CLB（负载均衡），CDB（云数据库 MySQL），CRS（云数据库 Redis），GWLB（网关负载均衡），不填默认查询类型为CLB。</li>
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 单页返回数量，默认为20，最大值为100。
     * @param array $EndPointServiceIds 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。不支持同时传入参数 EndPointServiceIds and Filters。
     * @param boolean $IsListAuthorizedEndPointService <li>不支持同时传入参数 Filters 。</li> <li>列出授权给当前账号的终端节点服务信息。可以配合EndPointServiceIds参数进行过滤，哪些终端节点服务授权了该账户。</li>
     * @param string $IpAddressType 协议类型，支持 Ipv4，Ipv6， DualStack，默认 Ipv4。使用DualStack查询双栈的时候，必须要使用MaxResult配合NextToken查询。第1次查询的时候只需要携带MaxResult，如果返回NextToken非空，表示有更多可用数据。第2次查询的时候就需要携带NextToken进行分页查询。
     * @param integer $MaxResults 每次调用返回的最大结果数。如果查询返回的时候有NextToken返回，您可以使用NextToken值获取更多页结果， 当NextToke返回空或者返回的结果数量小于MaxResults时，表示没有更多数据了。允许的最大页面大小为 100。
     * @param string $NextToken 如果NextToken返回 ，表示还有更多可用结果。 NextToken是每个页面唯一的分页令牌。使用返回的令牌再次调用以检索下一页。需要保持所有其他参数不变。每个分页令牌在 24 小时后过期。
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

        if (array_key_exists("EndPointServiceIds",$param) and $param["EndPointServiceIds"] !== null) {
            $this->EndPointServiceIds = $param["EndPointServiceIds"];
        }

        if (array_key_exists("IsListAuthorizedEndPointService",$param) and $param["IsListAuthorizedEndPointService"] !== null) {
            $this->IsListAuthorizedEndPointService = $param["IsListAuthorizedEndPointService"];
        }

        if (array_key_exists("IpAddressType",$param) and $param["IpAddressType"] !== null) {
            $this->IpAddressType = $param["IpAddressType"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
