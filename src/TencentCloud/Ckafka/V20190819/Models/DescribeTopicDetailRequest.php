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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopicDetail请求参数结构体
 *
 * @method string getInstanceId() 获取<p>ckafka集群实例Id，可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id，可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
 * @method string getSearchWord() 获取<p>（过滤条件）按照topicName过滤，支持模糊查询</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>（过滤条件）按照topicName过滤，支持模糊查询</p>
 * @method integer getOffset() 获取<p>偏移量，不填默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，不填默认为0</p>
 * @method integer getLimit() 获取<p>返回数量，不填则默认 20，取值要大于0</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，不填则默认 20，取值要大于0</p>
 * @method string getAclRuleName() 获取<p>Acl预设策略名称</p>
 * @method void setAclRuleName(string $AclRuleName) 设置<p>Acl预设策略名称</p>
 * @method string getOrderBy() 获取<p>根据特定的属性排序(目前支持PartitionNum/CreateTime)，默认值为CreateTime。</p><p>该参数为空时，默认按CreateTime倒序排序</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>根据特定的属性排序(目前支持PartitionNum/CreateTime)，默认值为CreateTime。</p><p>该参数为空时，默认按CreateTime倒序排序</p>
 * @method integer getOrderType() 获取<p>0-顺序、1-倒序，默认值为0。</p>
 * @method void setOrderType(integer $OrderType) 设置<p>0-顺序、1-倒序，默认值为0。</p>
 * @method array getFilters() 获取<p>目前支持 ReplicaNum （副本数）筛选</p>
 * @method void setFilters(array $Filters) 设置<p>目前支持 ReplicaNum （副本数）筛选</p>
 */
class DescribeTopicDetailRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id，可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
     */
    public $InstanceId;

    /**
     * @var string <p>（过滤条件）按照topicName过滤，支持模糊查询</p>
     */
    public $SearchWord;

    /**
     * @var integer <p>偏移量，不填默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，不填则默认 20，取值要大于0</p>
     */
    public $Limit;

    /**
     * @var string <p>Acl预设策略名称</p>
     */
    public $AclRuleName;

    /**
     * @var string <p>根据特定的属性排序(目前支持PartitionNum/CreateTime)，默认值为CreateTime。</p><p>该参数为空时，默认按CreateTime倒序排序</p>
     */
    public $OrderBy;

    /**
     * @var integer <p>0-顺序、1-倒序，默认值为0。</p>
     */
    public $OrderType;

    /**
     * @var array <p>目前支持 ReplicaNum （副本数）筛选</p>
     */
    public $Filters;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id，可通过<a href="https://cloud.tencent.com/document/product/597/40835">DescribeInstances</a>接口获取</p>
     * @param string $SearchWord <p>（过滤条件）按照topicName过滤，支持模糊查询</p>
     * @param integer $Offset <p>偏移量，不填默认为0</p>
     * @param integer $Limit <p>返回数量，不填则默认 20，取值要大于0</p>
     * @param string $AclRuleName <p>Acl预设策略名称</p>
     * @param string $OrderBy <p>根据特定的属性排序(目前支持PartitionNum/CreateTime)，默认值为CreateTime。</p><p>该参数为空时，默认按CreateTime倒序排序</p>
     * @param integer $OrderType <p>0-顺序、1-倒序，默认值为0。</p>
     * @param array $Filters <p>目前支持 ReplicaNum （副本数）筛选</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AclRuleName",$param) and $param["AclRuleName"] !== null) {
            $this->AclRuleName = $param["AclRuleName"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
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
