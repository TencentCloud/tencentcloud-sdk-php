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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceList请求参数结构体
 *
 * @method array getFilters() 获取查询条件列表,支持以下字段
InstanceName：集群名模糊搜索
InstanceId：集群id精确搜索
InstanceStatus：集群状态搜索（RUNNING-运行中，CREATING-创建中，MODIFYING-变配中，DELETING-删除中）
注意：配置TagFilters时该查询条件不生效。
 * @method void setFilters(array $Filters) 设置查询条件列表,支持以下字段
InstanceName：集群名模糊搜索
InstanceId：集群id精确搜索
InstanceStatus：集群状态搜索（RUNNING-运行中，CREATING-创建中，MODIFYING-变配中，DELETING-删除中）
注意：配置TagFilters时该查询条件不生效。
 * @method integer getOffset() 获取查询起始位置，默认0
 * @method void setOffset(integer $Offset) 设置查询起始位置，默认0
 * @method integer getLimit() 获取查询结果限制数量，默认20，最大100
 * @method void setLimit(integer $Limit) 设置查询结果限制数量，默认20，最大100
 * @method array getTagFilters() 获取标签过滤器
 * @method void setTagFilters(array $TagFilters) 设置标签过滤器
 */
class DescribeInstanceListRequest extends AbstractModel
{
    /**
     * @var array 查询条件列表,支持以下字段
InstanceName：集群名模糊搜索
InstanceId：集群id精确搜索
InstanceStatus：集群状态搜索（RUNNING-运行中，CREATING-创建中，MODIFYING-变配中，DELETING-删除中）
注意：配置TagFilters时该查询条件不生效。
     */
    public $Filters;

    /**
     * @var integer 查询起始位置，默认0
     */
    public $Offset;

    /**
     * @var integer 查询结果限制数量，默认20，最大100
     */
    public $Limit;

    /**
     * @var array 标签过滤器
     */
    public $TagFilters;

    /**
     * @param array $Filters 查询条件列表,支持以下字段
InstanceName：集群名模糊搜索
InstanceId：集群id精确搜索
InstanceStatus：集群状态搜索（RUNNING-运行中，CREATING-创建中，MODIFYING-变配中，DELETING-删除中）
注意：配置TagFilters时该查询条件不生效。
     * @param integer $Offset 查询起始位置，默认0
     * @param integer $Limit 查询结果限制数量，默认20，最大100
     * @param array $TagFilters 标签过滤器
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
