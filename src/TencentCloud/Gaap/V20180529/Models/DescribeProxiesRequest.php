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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProxies请求参数结构体
 *
 * @method array getInstanceIds() 获取<p>（旧参数，请切换到ProxyIds）按照一个或者多个实例ID查询。每次请求的实例的上限为100。参数不支持同时指定InstanceIds和Filters。</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>（旧参数，请切换到ProxyIds）按照一个或者多个实例ID查询。每次请求的实例的上限为100。参数不支持同时指定InstanceIds和Filters。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。</p>
 * @method array getFilters() 获取<p>过滤条件。 <br />每次请求的Filters的上限为10，Filter.Values的上限为5。参数不支持同时指定InstanceIds和Filters。 ProjectId - String - 是否必填：否 -（过滤条件）按照项目ID过滤。 <br />AccessRegion - String - 是否必填：否 - （过滤条件）按照接入地域过滤。  <br />RealServerRegion - String - 是否必填：否 - （过滤条件）按照源站地域过滤。GroupId - String - 是否必填：否 - （过滤条件）按照通道组ID过滤。IPAddressVersion - String - 是否必填：否 - （过滤条件）按照IP版本过滤。PackageType - String - 是否必填：否 - （过滤条件）按照通道套餐类型过滤。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。 <br />每次请求的Filters的上限为10，Filter.Values的上限为5。参数不支持同时指定InstanceIds和Filters。 ProjectId - String - 是否必填：否 -（过滤条件）按照项目ID过滤。 <br />AccessRegion - String - 是否必填：否 - （过滤条件）按照接入地域过滤。  <br />RealServerRegion - String - 是否必填：否 - （过滤条件）按照源站地域过滤。GroupId - String - 是否必填：否 - （过滤条件）按照通道组ID过滤。IPAddressVersion - String - 是否必填：否 - （过滤条件）按照IP版本过滤。PackageType - String - 是否必填：否 - （过滤条件）按照通道套餐类型过滤。</p>
 * @method array getProxyIds() 获取<p>（新参数，替代InstanceIds）按照一个或者多个实例ID查询。每次请求的实例的上限为100。参数不支持同时指定InstanceIds和Filters。</p>
 * @method void setProxyIds(array $ProxyIds) 设置<p>（新参数，替代InstanceIds）按照一个或者多个实例ID查询。每次请求的实例的上限为100。参数不支持同时指定InstanceIds和Filters。</p>
 * @method array getTagSet() 获取<p>标签列表，当存在该字段时，拉取对应标签下的资源列表。最多支持5个标签，当存在两个或两个以上的标签时，满足其中任意一个标签时，通道会被拉取出来。</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签列表，当存在该字段时，拉取对应标签下的资源列表。最多支持5个标签，当存在两个或两个以上的标签时，满足其中任意一个标签时，通道会被拉取出来。</p>
 * @method integer getIndependent() 获取<p>当该字段为1时，仅拉取非通道组的通道，当该字段为0时，仅拉取通道组的通道，不存在该字段时，拉取所有通道，包括独立通道和通道组通道。</p>
 * @method void setIndependent(integer $Independent) 设置<p>当该字段为1时，仅拉取非通道组的通道，当该字段为0时，仅拉取通道组的通道，不存在该字段时，拉取所有通道，包括独立通道和通道组通道。</p>
 * @method string getOrder() 获取<p>输出通道列表的排列顺序。取值范围：asc：升序排列；desc：降序排列。默认为降序。</p>
 * @method void setOrder(string $Order) 设置<p>输出通道列表的排列顺序。取值范围：asc：升序排列；desc：降序排列。默认为降序。</p>
 * @method string getOrderField() 获取<p>通道列表排序的依据字段。取值范围：create_time：依据通道的创建时间排序；proxy_id：依据通道的ID排序；bandwidth：依据通道带宽上限排序；concurrent_connections：依据通道并发排序；默认按通道创建时间排序。</p>
 * @method void setOrderField(string $OrderField) 设置<p>通道列表排序的依据字段。取值范围：create_time：依据通道的创建时间排序；proxy_id：依据通道的ID排序；bandwidth：依据通道带宽上限排序；concurrent_connections：依据通道并发排序；默认按通道创建时间排序。</p>
 */
class DescribeProxiesRequest extends AbstractModel
{
    /**
     * @var array <p>（旧参数，请切换到ProxyIds）按照一个或者多个实例ID查询。每次请求的实例的上限为100。参数不支持同时指定InstanceIds和Filters。</p>
     */
    public $InstanceIds;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件。 <br />每次请求的Filters的上限为10，Filter.Values的上限为5。参数不支持同时指定InstanceIds和Filters。 ProjectId - String - 是否必填：否 -（过滤条件）按照项目ID过滤。 <br />AccessRegion - String - 是否必填：否 - （过滤条件）按照接入地域过滤。  <br />RealServerRegion - String - 是否必填：否 - （过滤条件）按照源站地域过滤。GroupId - String - 是否必填：否 - （过滤条件）按照通道组ID过滤。IPAddressVersion - String - 是否必填：否 - （过滤条件）按照IP版本过滤。PackageType - String - 是否必填：否 - （过滤条件）按照通道套餐类型过滤。</p>
     */
    public $Filters;

    /**
     * @var array <p>（新参数，替代InstanceIds）按照一个或者多个实例ID查询。每次请求的实例的上限为100。参数不支持同时指定InstanceIds和Filters。</p>
     */
    public $ProxyIds;

    /**
     * @var array <p>标签列表，当存在该字段时，拉取对应标签下的资源列表。最多支持5个标签，当存在两个或两个以上的标签时，满足其中任意一个标签时，通道会被拉取出来。</p>
     */
    public $TagSet;

    /**
     * @var integer <p>当该字段为1时，仅拉取非通道组的通道，当该字段为0时，仅拉取通道组的通道，不存在该字段时，拉取所有通道，包括独立通道和通道组通道。</p>
     */
    public $Independent;

    /**
     * @var string <p>输出通道列表的排列顺序。取值范围：asc：升序排列；desc：降序排列。默认为降序。</p>
     */
    public $Order;

    /**
     * @var string <p>通道列表排序的依据字段。取值范围：create_time：依据通道的创建时间排序；proxy_id：依据通道的ID排序；bandwidth：依据通道带宽上限排序；concurrent_connections：依据通道并发排序；默认按通道创建时间排序。</p>
     */
    public $OrderField;

    /**
     * @param array $InstanceIds <p>（旧参数，请切换到ProxyIds）按照一个或者多个实例ID查询。每次请求的实例的上限为100。参数不支持同时指定InstanceIds和Filters。</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。</p>
     * @param array $Filters <p>过滤条件。 <br />每次请求的Filters的上限为10，Filter.Values的上限为5。参数不支持同时指定InstanceIds和Filters。 ProjectId - String - 是否必填：否 -（过滤条件）按照项目ID过滤。 <br />AccessRegion - String - 是否必填：否 - （过滤条件）按照接入地域过滤。  <br />RealServerRegion - String - 是否必填：否 - （过滤条件）按照源站地域过滤。GroupId - String - 是否必填：否 - （过滤条件）按照通道组ID过滤。IPAddressVersion - String - 是否必填：否 - （过滤条件）按照IP版本过滤。PackageType - String - 是否必填：否 - （过滤条件）按照通道套餐类型过滤。</p>
     * @param array $ProxyIds <p>（新参数，替代InstanceIds）按照一个或者多个实例ID查询。每次请求的实例的上限为100。参数不支持同时指定InstanceIds和Filters。</p>
     * @param array $TagSet <p>标签列表，当存在该字段时，拉取对应标签下的资源列表。最多支持5个标签，当存在两个或两个以上的标签时，满足其中任意一个标签时，通道会被拉取出来。</p>
     * @param integer $Independent <p>当该字段为1时，仅拉取非通道组的通道，当该字段为0时，仅拉取通道组的通道，不存在该字段时，拉取所有通道，包括独立通道和通道组通道。</p>
     * @param string $Order <p>输出通道列表的排列顺序。取值范围：asc：升序排列；desc：降序排列。默认为降序。</p>
     * @param string $OrderField <p>通道列表排序的依据字段。取值范围：create_time：依据通道的创建时间排序；proxy_id：依据通道的ID排序；bandwidth：依据通道带宽上限排序；concurrent_connections：依据通道并发排序；默认按通道创建时间排序。</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
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

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("Independent",$param) and $param["Independent"] !== null) {
            $this->Independent = $param["Independent"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
