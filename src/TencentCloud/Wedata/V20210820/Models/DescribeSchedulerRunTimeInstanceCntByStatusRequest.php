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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSchedulerRunTimeInstanceCntByStatus请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getCycleUnit() 获取周期类型
 * @method void setCycleUnit(string $CycleUnit) 设置周期类型
 * @method string getTimeUnit() 获取时间单元 eg: 12h
 * @method void setTimeUnit(string $TimeUnit) 设置时间单元 eg: 12h
 * @method string getStartTime() 获取开始日期：2023-03-02
 * @method void setStartTime(string $StartTime) 设置开始日期：2023-03-02
 * @method string getEndTime() 获取结束日前：2023-03-20
 * @method void setEndTime(string $EndTime) 设置结束日前：2023-03-20
 * @method integer getTaskType() 获取任务类型
 * @method void setTaskType(integer $TaskType) 设置任务类型
 * @method string getInCharge() 获取责任人
 * @method void setInCharge(string $InCharge) 设置责任人
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getSortItem() 获取排序字段
 * @method void setSortItem(string $SortItem) 设置排序字段
 * @method string getSortType() 获取升序降序
 * @method void setSortType(string $SortType) 设置升序降序
 */
class DescribeSchedulerRunTimeInstanceCntByStatusRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 周期类型
     */
    public $CycleUnit;

    /**
     * @var string 时间单元 eg: 12h
     */
    public $TimeUnit;

    /**
     * @var string 开始日期：2023-03-02
     */
    public $StartTime;

    /**
     * @var string 结束日前：2023-03-20
     */
    public $EndTime;

    /**
     * @var integer 任务类型
     */
    public $TaskType;

    /**
     * @var string 责任人
     */
    public $InCharge;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 排序字段
     */
    public $SortItem;

    /**
     * @var string 升序降序
     */
    public $SortType;

    /**
     * @param string $ProjectId 项目ID
     * @param string $CycleUnit 周期类型
     * @param string $TimeUnit 时间单元 eg: 12h
     * @param string $StartTime 开始日期：2023-03-02
     * @param string $EndTime 结束日前：2023-03-20
     * @param integer $TaskType 任务类型
     * @param string $InCharge 责任人
     * @param string $WorkflowId 工作流ID
     * @param string $SortItem 排序字段
     * @param string $SortType 升序降序
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

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("SortItem",$param) and $param["SortItem"] !== null) {
            $this->SortItem = $param["SortItem"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }
    }
}
