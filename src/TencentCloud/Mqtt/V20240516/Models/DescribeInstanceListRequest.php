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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceList请求参数结构体
 *
 * @method array getFilters() 获取<p>查询条件列表,支持以下字段<br>InstanceName：集群名模糊搜索<br>InstanceId：集群id精确搜索<br>InstanceStatus：集群状态搜索（RUNNING-运行中，CREATING-创建中，MODIFYING-变配中，DELETING-删除中）<br>PayMode：付费模式搜索（PREPAID-包年包月，POSTPAID-按小时计费）<br>ExpiredBefore：按过期时间过滤：仅筛选包年包月（PREPAID）集群<br>注意：配置TagFilters时该查询条件不生效。</p>
 * @method void setFilters(array $Filters) 设置<p>查询条件列表,支持以下字段<br>InstanceName：集群名模糊搜索<br>InstanceId：集群id精确搜索<br>InstanceStatus：集群状态搜索（RUNNING-运行中，CREATING-创建中，MODIFYING-变配中，DELETING-删除中）<br>PayMode：付费模式搜索（PREPAID-包年包月，POSTPAID-按小时计费）<br>ExpiredBefore：按过期时间过滤：仅筛选包年包月（PREPAID）集群<br>注意：配置TagFilters时该查询条件不生效。</p>
 * @method integer getOffset() 获取<p>查询起始位置，默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>查询起始位置，默认0</p>
 * @method integer getLimit() 获取<p>查询结果限制数量，默认20，最大100</p>
 * @method void setLimit(integer $Limit) 设置<p>查询结果限制数量，默认20，最大100</p>
 * @method array getTagFilters() 获取<p>标签过滤器</p>
 * @method void setTagFilters(array $TagFilters) 设置<p>标签过滤器</p>
 */
class DescribeInstanceListRequest extends AbstractModel
{
    /**
     * @var array <p>查询条件列表,支持以下字段<br>InstanceName：集群名模糊搜索<br>InstanceId：集群id精确搜索<br>InstanceStatus：集群状态搜索（RUNNING-运行中，CREATING-创建中，MODIFYING-变配中，DELETING-删除中）<br>PayMode：付费模式搜索（PREPAID-包年包月，POSTPAID-按小时计费）<br>ExpiredBefore：按过期时间过滤：仅筛选包年包月（PREPAID）集群<br>注意：配置TagFilters时该查询条件不生效。</p>
     */
    public $Filters;

    /**
     * @var integer <p>查询起始位置，默认0</p>
     */
    public $Offset;

    /**
     * @var integer <p>查询结果限制数量，默认20，最大100</p>
     */
    public $Limit;

    /**
     * @var array <p>标签过滤器</p>
     */
    public $TagFilters;

    /**
     * @param array $Filters <p>查询条件列表,支持以下字段<br>InstanceName：集群名模糊搜索<br>InstanceId：集群id精确搜索<br>InstanceStatus：集群状态搜索（RUNNING-运行中，CREATING-创建中，MODIFYING-变配中，DELETING-删除中）<br>PayMode：付费模式搜索（PREPAID-包年包月，POSTPAID-按小时计费）<br>ExpiredBefore：按过期时间过滤：仅筛选包年包月（PREPAID）集群<br>注意：配置TagFilters时该查询条件不生效。</p>
     * @param integer $Offset <p>查询起始位置，默认0</p>
     * @param integer $Limit <p>查询结果限制数量，默认20，最大100</p>
     * @param array $TagFilters <p>标签过滤器</p>
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

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
