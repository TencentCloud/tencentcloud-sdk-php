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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks请求参数结构体
 *
 * @method integer getPageNumber() 获取分页序号，从1开始
 * @method void setPageNumber(integer $PageNumber) 设置分页序号，从1开始
 * @method integer getPageSize() 获取每个分页所包含的元素数量，最大为50
 * @method void setPageSize(integer $PageSize) 设置每个分页所包含的元素数量，最大为50
 * @method TaskFilter getTaskFilter() 获取任务过滤条件，相关限制参见TaskFilter
 * @method void setTaskFilter(TaskFilter $TaskFilter) 设置任务过滤条件，相关限制参见TaskFilter
 * @method SortBy getSortBy() 获取返回结果排序信息，By字段只支持CreateTimeStamp
 * @method void setSortBy(SortBy $SortBy) 设置返回结果排序信息，By字段只支持CreateTimeStamp
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var integer 分页序号，从1开始
     */
    public $PageNumber;

    /**
     * @var integer 每个分页所包含的元素数量，最大为50
     */
    public $PageSize;

    /**
     * @var TaskFilter 任务过滤条件，相关限制参见TaskFilter
     */
    public $TaskFilter;

    /**
     * @var SortBy 返回结果排序信息，By字段只支持CreateTimeStamp
     */
    public $SortBy;

    /**
     * @param integer $PageNumber 分页序号，从1开始
     * @param integer $PageSize 每个分页所包含的元素数量，最大为50
     * @param TaskFilter $TaskFilter 任务过滤条件，相关限制参见TaskFilter
     * @param SortBy $SortBy 返回结果排序信息，By字段只支持CreateTimeStamp
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TaskFilter",$param) and $param["TaskFilter"] !== null) {
            $this->TaskFilter = new TaskFilter();
            $this->TaskFilter->deserialize($param["TaskFilter"]);
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = new SortBy();
            $this->SortBy->deserialize($param["SortBy"]);
        }
    }
}
