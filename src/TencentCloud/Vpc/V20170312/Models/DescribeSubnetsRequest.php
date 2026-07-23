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
 * DescribeSubnets请求参数结构体
 *
 * @method array getSubnetIds() 获取<p>子网实例ID查询。形如：subnet-pxir56ns。每次请求的实例的上限为100（该参数指定的子网是否返回，需要结合分页拉取参数Limit和Offset）。参数不支持同时指定SubnetIds和Filters。</p>
 * @method void setSubnetIds(array $SubnetIds) 设置<p>子网实例ID查询。形如：subnet-pxir56ns。每次请求的实例的上限为100（该参数指定的子网是否返回，需要结合分页拉取参数Limit和Offset）。参数不支持同时指定SubnetIds和Filters。</p>
 * @method array getFilters() 获取<p>过滤条件，参数不支持同时指定SubnetIds和Filters。</p><li>subnet-id - String - （过滤条件）Subnet实例名称。</li><li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li><li>cidr-block - String - （过滤条件）子网网段，形如: 192.168.1.0 。</li><li>is-default - Boolean - （过滤条件）是否是默认子网。</li><li>is-remote-vpc-snat - Boolean - （过滤条件）是否为VPC SNAT地址池子网。</li><li>subnet-name - String - （过滤条件）子网名称。</li><li>zone - String - （过滤条件）可用区。</li><li>tag-key - String -是否必填：否- （过滤条件）按照标签键进行过滤。</li><li>tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。使用请参考示例2。</li><li>cdc-id - String - 是否必填：否 - （过滤条件）按照cdc信息进行过滤。过滤出来制定cdc下的子网。</li><li>is-cdc-subnet - String - 是否必填：否 - （过滤条件）按照是否是cdc子网进行过滤。取值：“0”-非cdc子网，“1”--cdc子网</li><li>ipv6-cidr-block - String - （过滤条件）IPv6子网网段，形如: 2402:4e00:1717:8700::/64 。</li><li>isp-type  - String - （过滤条件）运营商类型，形如: BGP 。</li><li>address-type - String - （过滤条件）IPv6 Cidr 的类型，精确匹配。<code>GUA</code>(全球单播地址), <code>ULA</code>(唯一本地地址)。</li>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，参数不支持同时指定SubnetIds和Filters。</p><li>subnet-id - String - （过滤条件）Subnet实例名称。</li><li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li><li>cidr-block - String - （过滤条件）子网网段，形如: 192.168.1.0 。</li><li>is-default - Boolean - （过滤条件）是否是默认子网。</li><li>is-remote-vpc-snat - Boolean - （过滤条件）是否为VPC SNAT地址池子网。</li><li>subnet-name - String - （过滤条件）子网名称。</li><li>zone - String - （过滤条件）可用区。</li><li>tag-key - String -是否必填：否- （过滤条件）按照标签键进行过滤。</li><li>tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。使用请参考示例2。</li><li>cdc-id - String - 是否必填：否 - （过滤条件）按照cdc信息进行过滤。过滤出来制定cdc下的子网。</li><li>is-cdc-subnet - String - 是否必填：否 - （过滤条件）按照是否是cdc子网进行过滤。取值：“0”-非cdc子网，“1”--cdc子网</li><li>ipv6-cidr-block - String - （过滤条件）IPv6子网网段，形如: 2402:4e00:1717:8700::/64 。</li><li>isp-type  - String - （过滤条件）运营商类型，形如: BGP 。</li><li>address-type - String - （过滤条件）IPv6 Cidr 的类型，精确匹配。<code>GUA</code>(全球单播地址), <code>ULA</code>(唯一本地地址)。</li>
 * @method string getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(string $Offset) 设置<p>偏移量，默认为0。</p>
 * @method string getLimit() 获取<p>返回数量，默认为20，最大值为100。</p>
 * @method void setLimit(string $Limit) 设置<p>返回数量，默认为20，最大值为100。</p>
 * @method integer getMaxResults() 获取<p>每次调用返回的最大结果数。如果查询返回的时候有NextToken返回，您可以使用NextToken值获取更多页结果， 当NextToke返回空或者返回的结果数量小于MaxResults时，表示没有更多数据了。允许的最大页面大小为 100。</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>每次调用返回的最大结果数。如果查询返回的时候有NextToken返回，您可以使用NextToken值获取更多页结果， 当NextToke返回空或者返回的结果数量小于MaxResults时，表示没有更多数据了。允许的最大页面大小为 100。</p>
 * @method string getNextToken() 获取<p>如果NextToken返回非空字符串 ，表示还有更多可用结果。 NextToken是每个页面唯一的分页令牌。使用返回的令牌再次调用以检索下一页。需要保持所有其他参数不变。每个分页令牌在 24 小时后过期。</p>
 * @method void setNextToken(string $NextToken) 设置<p>如果NextToken返回非空字符串 ，表示还有更多可用结果。 NextToken是每个页面唯一的分页令牌。使用返回的令牌再次调用以检索下一页。需要保持所有其他参数不变。每个分页令牌在 24 小时后过期。</p>
 */
class DescribeSubnetsRequest extends AbstractModel
{
    /**
     * @var array <p>子网实例ID查询。形如：subnet-pxir56ns。每次请求的实例的上限为100（该参数指定的子网是否返回，需要结合分页拉取参数Limit和Offset）。参数不支持同时指定SubnetIds和Filters。</p>
     */
    public $SubnetIds;

    /**
     * @var array <p>过滤条件，参数不支持同时指定SubnetIds和Filters。</p><li>subnet-id - String - （过滤条件）Subnet实例名称。</li><li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li><li>cidr-block - String - （过滤条件）子网网段，形如: 192.168.1.0 。</li><li>is-default - Boolean - （过滤条件）是否是默认子网。</li><li>is-remote-vpc-snat - Boolean - （过滤条件）是否为VPC SNAT地址池子网。</li><li>subnet-name - String - （过滤条件）子网名称。</li><li>zone - String - （过滤条件）可用区。</li><li>tag-key - String -是否必填：否- （过滤条件）按照标签键进行过滤。</li><li>tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。使用请参考示例2。</li><li>cdc-id - String - 是否必填：否 - （过滤条件）按照cdc信息进行过滤。过滤出来制定cdc下的子网。</li><li>is-cdc-subnet - String - 是否必填：否 - （过滤条件）按照是否是cdc子网进行过滤。取值：“0”-非cdc子网，“1”--cdc子网</li><li>ipv6-cidr-block - String - （过滤条件）IPv6子网网段，形如: 2402:4e00:1717:8700::/64 。</li><li>isp-type  - String - （过滤条件）运营商类型，形如: BGP 。</li><li>address-type - String - （过滤条件）IPv6 Cidr 的类型，精确匹配。<code>GUA</code>(全球单播地址), <code>ULA</code>(唯一本地地址)。</li>
     */
    public $Filters;

    /**
     * @var string <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var string <p>返回数量，默认为20，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>每次调用返回的最大结果数。如果查询返回的时候有NextToken返回，您可以使用NextToken值获取更多页结果， 当NextToke返回空或者返回的结果数量小于MaxResults时，表示没有更多数据了。允许的最大页面大小为 100。</p>
     */
    public $MaxResults;

    /**
     * @var string <p>如果NextToken返回非空字符串 ，表示还有更多可用结果。 NextToken是每个页面唯一的分页令牌。使用返回的令牌再次调用以检索下一页。需要保持所有其他参数不变。每个分页令牌在 24 小时后过期。</p>
     */
    public $NextToken;

    /**
     * @param array $SubnetIds <p>子网实例ID查询。形如：subnet-pxir56ns。每次请求的实例的上限为100（该参数指定的子网是否返回，需要结合分页拉取参数Limit和Offset）。参数不支持同时指定SubnetIds和Filters。</p>
     * @param array $Filters <p>过滤条件，参数不支持同时指定SubnetIds和Filters。</p><li>subnet-id - String - （过滤条件）Subnet实例名称。</li><li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li><li>cidr-block - String - （过滤条件）子网网段，形如: 192.168.1.0 。</li><li>is-default - Boolean - （过滤条件）是否是默认子网。</li><li>is-remote-vpc-snat - Boolean - （过滤条件）是否为VPC SNAT地址池子网。</li><li>subnet-name - String - （过滤条件）子网名称。</li><li>zone - String - （过滤条件）可用区。</li><li>tag-key - String -是否必填：否- （过滤条件）按照标签键进行过滤。</li><li>tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。使用请参考示例2。</li><li>cdc-id - String - 是否必填：否 - （过滤条件）按照cdc信息进行过滤。过滤出来制定cdc下的子网。</li><li>is-cdc-subnet - String - 是否必填：否 - （过滤条件）按照是否是cdc子网进行过滤。取值：“0”-非cdc子网，“1”--cdc子网</li><li>ipv6-cidr-block - String - （过滤条件）IPv6子网网段，形如: 2402:4e00:1717:8700::/64 。</li><li>isp-type  - String - （过滤条件）运营商类型，形如: BGP 。</li><li>address-type - String - （过滤条件）IPv6 Cidr 的类型，精确匹配。<code>GUA</code>(全球单播地址), <code>ULA</code>(唯一本地地址)。</li>
     * @param string $Offset <p>偏移量，默认为0。</p>
     * @param string $Limit <p>返回数量，默认为20，最大值为100。</p>
     * @param integer $MaxResults <p>每次调用返回的最大结果数。如果查询返回的时候有NextToken返回，您可以使用NextToken值获取更多页结果， 当NextToke返回空或者返回的结果数量小于MaxResults时，表示没有更多数据了。允许的最大页面大小为 100。</p>
     * @param string $NextToken <p>如果NextToken返回非空字符串 ，表示还有更多可用结果。 NextToken是每个页面唯一的分页令牌。使用返回的令牌再次调用以检索下一页。需要保持所有其他参数不变。每个分页令牌在 24 小时后过期。</p>
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
        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
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

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
