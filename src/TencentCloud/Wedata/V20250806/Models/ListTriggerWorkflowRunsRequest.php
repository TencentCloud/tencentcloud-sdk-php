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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTriggerWorkflowRuns请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method array getFilters() 获取过滤参数, 工作流名称或ID查询名称: Keyword, 工作流ID查询名称: WorkflowId,文件夹查询名称: FolderId, 负责人查询名称: InChargeUin, 工作流执行id: ExecutionId, 计划调度时间区间: ScheduleTimeGreaterEqual, ScheduleTimeLessEqual
 * @method void setFilters(array $Filters) 设置过滤参数, 工作流名称或ID查询名称: Keyword, 工作流ID查询名称: WorkflowId,文件夹查询名称: FolderId, 负责人查询名称: InChargeUin, 工作流执行id: ExecutionId, 计划调度时间区间: ScheduleTimeGreaterEqual, ScheduleTimeLessEqual
 * @method array getOrderFields() 获取排序字段，排序字段名称	如下开始时间：CreateTime，结束时间：EndTime，计划调度时间：ScheduleTime
 * @method void setOrderFields(array $OrderFields) 设置排序字段，排序字段名称	如下开始时间：CreateTime，结束时间：EndTime，计划调度时间：ScheduleTime
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 */
class ListTriggerWorkflowRunsRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var array 过滤参数, 工作流名称或ID查询名称: Keyword, 工作流ID查询名称: WorkflowId,文件夹查询名称: FolderId, 负责人查询名称: InChargeUin, 工作流执行id: ExecutionId, 计划调度时间区间: ScheduleTimeGreaterEqual, ScheduleTimeLessEqual
     */
    public $Filters;

    /**
     * @var array 排序字段，排序字段名称	如下开始时间：CreateTime，结束时间：EndTime，计划调度时间：ScheduleTime
     */
    public $OrderFields;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @param string $ProjectId 项目ID
     * @param array $Filters 过滤参数, 工作流名称或ID查询名称: Keyword, 工作流ID查询名称: WorkflowId,文件夹查询名称: FolderId, 负责人查询名称: InChargeUin, 工作流执行id: ExecutionId, 计划调度时间区间: ScheduleTimeGreaterEqual, ScheduleTimeLessEqual
     * @param array $OrderFields 排序字段，排序字段名称	如下开始时间：CreateTime，结束时间：EndTime，计划调度时间：ScheduleTime
     * @param integer $PageNumber 页码
     * @param integer $PageSize 页大小
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
