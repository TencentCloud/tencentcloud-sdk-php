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
 * 实例查询类型
 *
 * @method InstanceOpsDto getInstance() 获取单个查询条件
 * @method void setInstance(InstanceOpsDto $Instance) 设置单个查询条件
 * @method string getSortCol() 获取排序字段，目前包含：重试次数，实例数据时间，运行耗时
 * @method void setSortCol(string $SortCol) 设置排序字段，目前包含：重试次数，实例数据时间，运行耗时
 * @method array getTaskIdList() 获取任务id列表
 * @method void setTaskIdList(array $TaskIdList) 设置任务id列表
 * @method array getTaskNameList() 获取按照taskName模糊查询
 * @method void setTaskNameList(array $TaskNameList) 设置按照taskName模糊查询
 * @method array getFolderList() 获取文件夹列表
 * @method void setFolderList(array $FolderList) 设置文件夹列表
 * @method string getSort() 获取升序或者降序
 * @method void setSort(string $Sort) 设置升序或者降序
 * @method array getStateList() 获取实例状态列表
 * @method void setStateList(array $StateList) 设置实例状态列表
 * @method array getTaskTypeList() 获取实例类型列表
 * @method void setTaskTypeList(array $TaskTypeList) 设置实例类型列表
 * @method array getCycleList() 获取周期类型
 * @method void setCycleList(array $CycleList) 设置周期类型
 * @method array getOwnerList() 获取责任人
 * @method void setOwnerList(array $OwnerList) 设置责任人
 * @method string getDateFrom() 获取数据时间
 * @method void setDateFrom(string $DateFrom) 设置数据时间
 * @method string getDateTo() 获取数据时间
 * @method void setDateTo(string $DateTo) 设置数据时间
 * @method string getCreateTimeFrom() 获取实例入库时间
 * @method void setCreateTimeFrom(string $CreateTimeFrom) 设置实例入库时间
 * @method string getCreateTimeTo() 获取实例入库时间
 * @method void setCreateTimeTo(string $CreateTimeTo) 设置实例入库时间
 * @method string getStartFrom() 获取 开始执行时间
 * @method void setStartFrom(string $StartFrom) 设置 开始执行时间
 * @method string getStartTo() 获取 开始执行时间
 * @method void setStartTo(string $StartTo) 设置 开始执行时间
 * @method array getWorkflowIdList() 获取所属工作流
 * @method void setWorkflowIdList(array $WorkflowIdList) 设置所属工作流
 * @method array getWorkflowNameList() 获取按照workflowName模糊查询
 * @method void setWorkflowNameList(array $WorkflowNameList) 设置按照workflowName模糊查询
 * @method string getKeyword() 获取关键字模糊查询
 * @method void setKeyword(string $Keyword) 设置关键字模糊查询
 * @method array getSearchColumns() 获取searchColumns是搜索的字段名列表
 * @method void setSearchColumns(array $SearchColumns) 设置searchColumns是搜索的字段名列表
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getLimit() 获取限制
 * @method void setLimit(integer $Limit) 设置限制
 * @method array getTaskTypeMap() 获取任务类型映射关系, 存储任务类型id和任务类型描述信息
 * @method void setTaskTypeMap(array $TaskTypeMap) 设置任务类型映射关系, 存储任务类型id和任务类型描述信息
 * @method string getInstanceType() 获取0 补录类型 1 周期实例 2 非周期实例
 * @method void setInstanceType(string $InstanceType) 设置0 补录类型 1 周期实例 2 非周期实例
 * @method boolean getDagDeal() 获取是否dag
 * @method void setDagDeal(boolean $DagDeal) 设置是否dag
 * @method string getDagType() 获取 1 父实例 2 子实例
 * @method void setDagType(string $DagType) 设置 1 父实例 2 子实例
 * @method string getDagDependent() 获取1 自依赖 2 任务依赖  3 所有依赖
 * @method void setDagDependent(string $DagDependent) 设置1 自依赖 2 任务依赖  3 所有依赖
 * @method integer getDagDepth() 获取dag深度 默认为1，取值 1-6
 * @method void setDagDepth(integer $DagDepth) 设置dag深度 默认为1，取值 1-6
 * @method string getTenantId() 获取租户id
 * @method void setTenantId(string $TenantId) 设置租户id
 * @method string getDataTimeCycle() 获取根据当前数据时间或者是下一个数据时间查询, 默认当前数据时间
 * @method void setDataTimeCycle(string $DataTimeCycle) 设置根据当前数据时间或者是下一个数据时间查询, 默认当前数据时间
 * @method array getExecutorGroupIdList() 获取资源组id,多个资源组id用英文逗号分隔
 * @method void setExecutorGroupIdList(array $ExecutorGroupIdList) 设置资源组id,多个资源组id用英文逗号分隔
 * @method boolean getOnlyRerun() 获取true 只过滤重跑过的实例，false 忽略此过滤条件，结果集过滤条件中不包括是否重跑
 * @method void setOnlyRerun(boolean $OnlyRerun) 设置true 只过滤重跑过的实例，false 忽略此过滤条件，结果集过滤条件中不包括是否重跑
 * @method string getScheduleTimeZone() 获取时区
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置时区
 * @method string getScheduleTimeFrom() 获取计划调度时间
 * @method void setScheduleTimeFrom(string $ScheduleTimeFrom) 设置计划调度时间
 * @method string getScheduleTimeTo() 获取计划调度时间
 * @method void setScheduleTimeTo(string $ScheduleTimeTo) 设置计划调度时间
 */
class InstanceApiOpsRequest extends AbstractModel
{
    /**
     * @var InstanceOpsDto 单个查询条件
     */
    public $Instance;

    /**
     * @var string 排序字段，目前包含：重试次数，实例数据时间，运行耗时
     */
    public $SortCol;

    /**
     * @var array 任务id列表
     */
    public $TaskIdList;

    /**
     * @var array 按照taskName模糊查询
     */
    public $TaskNameList;

    /**
     * @var array 文件夹列表
     */
    public $FolderList;

    /**
     * @var string 升序或者降序
     */
    public $Sort;

    /**
     * @var array 实例状态列表
     */
    public $StateList;

    /**
     * @var array 实例类型列表
     */
    public $TaskTypeList;

    /**
     * @var array 周期类型
     */
    public $CycleList;

    /**
     * @var array 责任人
     */
    public $OwnerList;

    /**
     * @var string 数据时间
     */
    public $DateFrom;

    /**
     * @var string 数据时间
     */
    public $DateTo;

    /**
     * @var string 实例入库时间
     */
    public $CreateTimeFrom;

    /**
     * @var string 实例入库时间
     */
    public $CreateTimeTo;

    /**
     * @var string  开始执行时间
     */
    public $StartFrom;

    /**
     * @var string  开始执行时间
     */
    public $StartTo;

    /**
     * @var array 所属工作流
     */
    public $WorkflowIdList;

    /**
     * @var array 按照workflowName模糊查询
     */
    public $WorkflowNameList;

    /**
     * @var string 关键字模糊查询
     */
    public $Keyword;

    /**
     * @var array searchColumns是搜索的字段名列表
     */
    public $SearchColumns;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 限制
     */
    public $Limit;

    /**
     * @var array 任务类型映射关系, 存储任务类型id和任务类型描述信息
     */
    public $TaskTypeMap;

    /**
     * @var string 0 补录类型 1 周期实例 2 非周期实例
     */
    public $InstanceType;

    /**
     * @var boolean 是否dag
     */
    public $DagDeal;

    /**
     * @var string  1 父实例 2 子实例
     */
    public $DagType;

    /**
     * @var string 1 自依赖 2 任务依赖  3 所有依赖
     */
    public $DagDependent;

    /**
     * @var integer dag深度 默认为1，取值 1-6
     */
    public $DagDepth;

    /**
     * @var string 租户id
     */
    public $TenantId;

    /**
     * @var string 根据当前数据时间或者是下一个数据时间查询, 默认当前数据时间
     */
    public $DataTimeCycle;

    /**
     * @var array 资源组id,多个资源组id用英文逗号分隔
     */
    public $ExecutorGroupIdList;

    /**
     * @var boolean true 只过滤重跑过的实例，false 忽略此过滤条件，结果集过滤条件中不包括是否重跑
     */
    public $OnlyRerun;

    /**
     * @var string 时区
     */
    public $ScheduleTimeZone;

    /**
     * @var string 计划调度时间
     */
    public $ScheduleTimeFrom;

    /**
     * @var string 计划调度时间
     */
    public $ScheduleTimeTo;

    /**
     * @param InstanceOpsDto $Instance 单个查询条件
     * @param string $SortCol 排序字段，目前包含：重试次数，实例数据时间，运行耗时
     * @param array $TaskIdList 任务id列表
     * @param array $TaskNameList 按照taskName模糊查询
     * @param array $FolderList 文件夹列表
     * @param string $Sort 升序或者降序
     * @param array $StateList 实例状态列表
     * @param array $TaskTypeList 实例类型列表
     * @param array $CycleList 周期类型
     * @param array $OwnerList 责任人
     * @param string $DateFrom 数据时间
     * @param string $DateTo 数据时间
     * @param string $CreateTimeFrom 实例入库时间
     * @param string $CreateTimeTo 实例入库时间
     * @param string $StartFrom  开始执行时间
     * @param string $StartTo  开始执行时间
     * @param array $WorkflowIdList 所属工作流
     * @param array $WorkflowNameList 按照workflowName模糊查询
     * @param string $Keyword 关键字模糊查询
     * @param array $SearchColumns searchColumns是搜索的字段名列表
     * @param string $ProjectId 项目id
     * @param integer $Limit 限制
     * @param array $TaskTypeMap 任务类型映射关系, 存储任务类型id和任务类型描述信息
     * @param string $InstanceType 0 补录类型 1 周期实例 2 非周期实例
     * @param boolean $DagDeal 是否dag
     * @param string $DagType  1 父实例 2 子实例
     * @param string $DagDependent 1 自依赖 2 任务依赖  3 所有依赖
     * @param integer $DagDepth dag深度 默认为1，取值 1-6
     * @param string $TenantId 租户id
     * @param string $DataTimeCycle 根据当前数据时间或者是下一个数据时间查询, 默认当前数据时间
     * @param array $ExecutorGroupIdList 资源组id,多个资源组id用英文逗号分隔
     * @param boolean $OnlyRerun true 只过滤重跑过的实例，false 忽略此过滤条件，结果集过滤条件中不包括是否重跑
     * @param string $ScheduleTimeZone 时区
     * @param string $ScheduleTimeFrom 计划调度时间
     * @param string $ScheduleTimeTo 计划调度时间
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
        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = new InstanceOpsDto();
            $this->Instance->deserialize($param["Instance"]);
        }

        if (array_key_exists("SortCol",$param) and $param["SortCol"] !== null) {
            $this->SortCol = $param["SortCol"];
        }

        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("TaskNameList",$param) and $param["TaskNameList"] !== null) {
            $this->TaskNameList = $param["TaskNameList"];
        }

        if (array_key_exists("FolderList",$param) and $param["FolderList"] !== null) {
            $this->FolderList = $param["FolderList"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("StateList",$param) and $param["StateList"] !== null) {
            $this->StateList = $param["StateList"];
        }

        if (array_key_exists("TaskTypeList",$param) and $param["TaskTypeList"] !== null) {
            $this->TaskTypeList = $param["TaskTypeList"];
        }

        if (array_key_exists("CycleList",$param) and $param["CycleList"] !== null) {
            $this->CycleList = $param["CycleList"];
        }

        if (array_key_exists("OwnerList",$param) and $param["OwnerList"] !== null) {
            $this->OwnerList = $param["OwnerList"];
        }

        if (array_key_exists("DateFrom",$param) and $param["DateFrom"] !== null) {
            $this->DateFrom = $param["DateFrom"];
        }

        if (array_key_exists("DateTo",$param) and $param["DateTo"] !== null) {
            $this->DateTo = $param["DateTo"];
        }

        if (array_key_exists("CreateTimeFrom",$param) and $param["CreateTimeFrom"] !== null) {
            $this->CreateTimeFrom = $param["CreateTimeFrom"];
        }

        if (array_key_exists("CreateTimeTo",$param) and $param["CreateTimeTo"] !== null) {
            $this->CreateTimeTo = $param["CreateTimeTo"];
        }

        if (array_key_exists("StartFrom",$param) and $param["StartFrom"] !== null) {
            $this->StartFrom = $param["StartFrom"];
        }

        if (array_key_exists("StartTo",$param) and $param["StartTo"] !== null) {
            $this->StartTo = $param["StartTo"];
        }

        if (array_key_exists("WorkflowIdList",$param) and $param["WorkflowIdList"] !== null) {
            $this->WorkflowIdList = $param["WorkflowIdList"];
        }

        if (array_key_exists("WorkflowNameList",$param) and $param["WorkflowNameList"] !== null) {
            $this->WorkflowNameList = $param["WorkflowNameList"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("SearchColumns",$param) and $param["SearchColumns"] !== null) {
            $this->SearchColumns = $param["SearchColumns"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TaskTypeMap",$param) and $param["TaskTypeMap"] !== null) {
            $this->TaskTypeMap = [];
            foreach ($param["TaskTypeMap"] as $key => $value){
                $obj = new TaskTypeMap();
                $obj->deserialize($value);
                array_push($this->TaskTypeMap, $obj);
            }
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DagDeal",$param) and $param["DagDeal"] !== null) {
            $this->DagDeal = $param["DagDeal"];
        }

        if (array_key_exists("DagType",$param) and $param["DagType"] !== null) {
            $this->DagType = $param["DagType"];
        }

        if (array_key_exists("DagDependent",$param) and $param["DagDependent"] !== null) {
            $this->DagDependent = $param["DagDependent"];
        }

        if (array_key_exists("DagDepth",$param) and $param["DagDepth"] !== null) {
            $this->DagDepth = $param["DagDepth"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("DataTimeCycle",$param) and $param["DataTimeCycle"] !== null) {
            $this->DataTimeCycle = $param["DataTimeCycle"];
        }

        if (array_key_exists("ExecutorGroupIdList",$param) and $param["ExecutorGroupIdList"] !== null) {
            $this->ExecutorGroupIdList = $param["ExecutorGroupIdList"];
        }

        if (array_key_exists("OnlyRerun",$param) and $param["OnlyRerun"] !== null) {
            $this->OnlyRerun = $param["OnlyRerun"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("ScheduleTimeFrom",$param) and $param["ScheduleTimeFrom"] !== null) {
            $this->ScheduleTimeFrom = $param["ScheduleTimeFrom"];
        }

        if (array_key_exists("ScheduleTimeTo",$param) and $param["ScheduleTimeTo"] !== null) {
            $this->ScheduleTimeTo = $param["ScheduleTimeTo"];
        }
    }
}
