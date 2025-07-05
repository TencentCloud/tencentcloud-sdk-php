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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks请求参数结构体
 *
 * @method string getStartTimeBegin() 获取任务开始时间起始值
 * @method void setStartTimeBegin(string $StartTimeBegin) 设置任务开始时间起始值
 * @method string getStartTimeEnd() 获取任务开始时间结束值
 * @method void setStartTimeEnd(string $StartTimeEnd) 设置任务开始时间结束值
 * @method array getFilters() 获取过滤条件，支持的搜索字段："ClusterId"、"ClusterName"、"InstanceId"、"InstanceName"、"Status"、"TaskId"、"TaskType"
 * @method void setFilters(array $Filters) 设置过滤条件，支持的搜索字段："ClusterId"、"ClusterName"、"InstanceId"、"InstanceName"、"Status"、"TaskId"、"TaskType"
 * @method integer getLimit() 获取查询列表长度
 * @method void setLimit(integer $Limit) 设置查询列表长度
 * @method integer getOffset() 获取查询列表偏移量
 * @method void setOffset(integer $Offset) 设置查询列表偏移量
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var string 任务开始时间起始值
     */
    public $StartTimeBegin;

    /**
     * @var string 任务开始时间结束值
     */
    public $StartTimeEnd;

    /**
     * @var array 过滤条件，支持的搜索字段："ClusterId"、"ClusterName"、"InstanceId"、"InstanceName"、"Status"、"TaskId"、"TaskType"
     */
    public $Filters;

    /**
     * @var integer 查询列表长度
     */
    public $Limit;

    /**
     * @var integer 查询列表偏移量
     */
    public $Offset;

    /**
     * @param string $StartTimeBegin 任务开始时间起始值
     * @param string $StartTimeEnd 任务开始时间结束值
     * @param array $Filters 过滤条件，支持的搜索字段："ClusterId"、"ClusterName"、"InstanceId"、"InstanceName"、"Status"、"TaskId"、"TaskType"
     * @param integer $Limit 查询列表长度
     * @param integer $Offset 查询列表偏移量
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
        if (array_key_exists("StartTimeBegin",$param) and $param["StartTimeBegin"] !== null) {
            $this->StartTimeBegin = $param["StartTimeBegin"];
        }

        if (array_key_exists("StartTimeEnd",$param) and $param["StartTimeEnd"] !== null) {
            $this->StartTimeEnd = $param["StartTimeEnd"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
