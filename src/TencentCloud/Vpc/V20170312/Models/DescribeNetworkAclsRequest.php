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
 * DescribeNetworkAcls请求参数结构体
 *
 * @method array getFilters() 获取<p>过滤条件，参数不支持同时指定NetworkAclIds和Filters。</p><li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-12345678。</li><li>network-acl-id - String - （过滤条件）网络ACL实例ID，形如：acl-12345678。</li><li>network-acl-name - String - （过滤条件）网络ACL实例名称。</li>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，参数不支持同时指定NetworkAclIds和Filters。</p><li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-12345678。</li><li>network-acl-id - String - （过滤条件）网络ACL实例ID，形如：acl-12345678。</li><li>network-acl-name - String - （过滤条件）网络ACL实例名称。</li>
 * @method array getNetworkAclIds() 获取<p>网络ACL实例ID数组。形如：[acl-12345678]。每次请求的实例的上限为100。参数不支持同时指定NetworkAclIds和Filters。</p>
 * @method void setNetworkAclIds(array $NetworkAclIds) 设置<p>网络ACL实例ID数组。形如：[acl-12345678]。每次请求的实例的上限为100。参数不支持同时指定NetworkAclIds和Filters。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最小值为1，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最小值为1，最大值为100。</p>
 * @method string getOrderField() 获取<p>排序字段。支持：NetworkAclId,NetworkAclName,CreatedTime,ModifyTime</p>
 * @method void setOrderField(string $OrderField) 设置<p>排序字段。支持：NetworkAclId,NetworkAclName,CreatedTime,ModifyTime</p>
 * @method string getOrderDirection() 获取<p>排序方法。顺序：ASC，倒序：DESC。</p>
 * @method void setOrderDirection(string $OrderDirection) 设置<p>排序方法。顺序：ASC，倒序：DESC。</p>
 */
class DescribeNetworkAclsRequest extends AbstractModel
{
    /**
     * @var array <p>过滤条件，参数不支持同时指定NetworkAclIds和Filters。</p><li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-12345678。</li><li>network-acl-id - String - （过滤条件）网络ACL实例ID，形如：acl-12345678。</li><li>network-acl-name - String - （过滤条件）网络ACL实例名称。</li>
     */
    public $Filters;

    /**
     * @var array <p>网络ACL实例ID数组。形如：[acl-12345678]。每次请求的实例的上限为100。参数不支持同时指定NetworkAclIds和Filters。</p>
     */
    public $NetworkAclIds;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最小值为1，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var string <p>排序字段。支持：NetworkAclId,NetworkAclName,CreatedTime,ModifyTime</p>
     */
    public $OrderField;

    /**
     * @var string <p>排序方法。顺序：ASC，倒序：DESC。</p>
     */
    public $OrderDirection;

    /**
     * @param array $Filters <p>过滤条件，参数不支持同时指定NetworkAclIds和Filters。</p><li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-12345678。</li><li>network-acl-id - String - （过滤条件）网络ACL实例ID，形如：acl-12345678。</li><li>network-acl-name - String - （过滤条件）网络ACL实例名称。</li>
     * @param array $NetworkAclIds <p>网络ACL实例ID数组。形如：[acl-12345678]。每次请求的实例的上限为100。参数不支持同时指定NetworkAclIds和Filters。</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param integer $Limit <p>返回数量，默认为20，最小值为1，最大值为100。</p>
     * @param string $OrderField <p>排序字段。支持：NetworkAclId,NetworkAclName,CreatedTime,ModifyTime</p>
     * @param string $OrderDirection <p>排序方法。顺序：ASC，倒序：DESC。</p>
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

        if (array_key_exists("NetworkAclIds",$param) and $param["NetworkAclIds"] !== null) {
            $this->NetworkAclIds = $param["NetworkAclIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
