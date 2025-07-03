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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopicDetail请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id
 * @method string getSearchWord() 获取（过滤条件）按照topicName过滤，支持模糊查询
 * @method void setSearchWord(string $SearchWord) 设置（过滤条件）按照topicName过滤，支持模糊查询
 * @method integer getOffset() 获取偏移量，不填默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，不填默认为0
 * @method integer getLimit() 获取返回数量，不填则默认 10，最大值20，取值要大于0
 * @method void setLimit(integer $Limit) 设置返回数量，不填则默认 10，最大值20，取值要大于0
 * @method string getAclRuleName() 获取Acl预设策略名称
 * @method void setAclRuleName(string $AclRuleName) 设置Acl预设策略名称
 * @method string getOrderBy() 获取根据特定的属性排序(目前支持PartitionNum/CreateTime)
 * @method void setOrderBy(string $OrderBy) 设置根据特定的属性排序(目前支持PartitionNum/CreateTime)
 * @method integer getOrderType() 获取0-顺序、1-倒序
 * @method void setOrderType(integer $OrderType) 设置0-顺序、1-倒序
 * @method array getFilters() 获取目前支持 ReplicaNum （副本数）筛选
 * @method void setFilters(array $Filters) 设置目前支持 ReplicaNum （副本数）筛选
 */
class DescribeTopicDetailRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id
     */
    public $InstanceId;

    /**
     * @var string （过滤条件）按照topicName过滤，支持模糊查询
     */
    public $SearchWord;

    /**
     * @var integer 偏移量，不填默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，不填则默认 10，最大值20，取值要大于0
     */
    public $Limit;

    /**
     * @var string Acl预设策略名称
     */
    public $AclRuleName;

    /**
     * @var string 根据特定的属性排序(目前支持PartitionNum/CreateTime)
     */
    public $OrderBy;

    /**
     * @var integer 0-顺序、1-倒序
     */
    public $OrderType;

    /**
     * @var array 目前支持 ReplicaNum （副本数）筛选
     */
    public $Filters;

    /**
     * @param string $InstanceId ckafka集群实例Id
     * @param string $SearchWord （过滤条件）按照topicName过滤，支持模糊查询
     * @param integer $Offset 偏移量，不填默认为0
     * @param integer $Limit 返回数量，不填则默认 10，最大值20，取值要大于0
     * @param string $AclRuleName Acl预设策略名称
     * @param string $OrderBy 根据特定的属性排序(目前支持PartitionNum/CreateTime)
     * @param integer $OrderType 0-顺序、1-倒序
     * @param array $Filters 目前支持 ReplicaNum （副本数）筛选
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
