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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOperateOpsTasks请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getFolderIdList() 获取文件夹id，多个文件夹以逗号分隔
 * @method void setFolderIdList(string $FolderIdList) 设置文件夹id，多个文件夹以逗号分隔
 * @method string getWorkFlowIdList() 获取工作流id，多个工作流id之间以英文字符逗号分隔
 * @method void setWorkFlowIdList(string $WorkFlowIdList) 设置工作流id，多个工作流id之间以英文字符逗号分隔
 * @method string getWorkFlowNameList() 获取工作流名称，多个工作流名称之间以英文字符逗号分隔
 * @method void setWorkFlowNameList(string $WorkFlowNameList) 设置工作流名称，多个工作流名称之间以英文字符逗号分隔
 * @method string getTaskNameList() 获取任务名称，多个任务名称之间以英文字符逗号分隔
 * @method void setTaskNameList(string $TaskNameList) 设置任务名称，多个任务名称之间以英文字符逗号分隔
 * @method string getTaskIdList() 获取任务id，多个任务id之间以英文字符逗号分隔
 * @method void setTaskIdList(string $TaskIdList) 设置任务id，多个任务id之间以英文字符逗号分隔
 * @method string getPageNumber() 获取页号
 * @method void setPageNumber(string $PageNumber) 设置页号
 * @method string getPageSize() 获取分页大小
 * @method void setPageSize(string $PageSize) 设置分页大小
 * @method string getSortItem() 获取排序字段，支持字段为FirstSubmitTime和FirstRunTime，标识最近提交和首次执行事件
 * @method void setSortItem(string $SortItem) 设置排序字段，支持字段为FirstSubmitTime和FirstRunTime，标识最近提交和首次执行事件
 * @method string getSortType() 获取排序类型。两种取值 DESC、ASC
 * @method void setSortType(string $SortType) 设置排序类型。两种取值 DESC、ASC
 * @method string getInChargeList() 获取责任人，多个责任人之间以英文字符逗号分隔
 * @method void setInChargeList(string $InChargeList) 设置责任人，多个责任人之间以英文字符逗号分隔
 * @method string getTaskTypeIdList() 获取任务类型Id字符串，多个任务类型id之间以英文字符逗号分隔
 * @method void setTaskTypeIdList(string $TaskTypeIdList) 设置任务类型Id字符串，多个任务类型id之间以英文字符逗号分隔
 * @method string getStatusList() 获取任务状态字符串，多个任务状态之间以英文字符逗号分隔
 * @method void setStatusList(string $StatusList) 设置任务状态字符串，多个任务状态之间以英文字符逗号分隔
 * @method string getTaskCycleUnitList() 获取任务周期类型字符串，多个任务周期之间以英文字符逗号分隔
 * @method void setTaskCycleUnitList(string $TaskCycleUnitList) 设置任务周期类型字符串，多个任务周期之间以英文字符逗号分隔
 * @method string getProductNameList() 获取任务所属产品类型
 * @method void setProductNameList(string $ProductNameList) 设置任务所属产品类型
 * @method string getSourceServiceId() 获取数据源id或（仅针对离线同步任务）来源数据源id
 * @method void setSourceServiceId(string $SourceServiceId) 设置数据源id或（仅针对离线同步任务）来源数据源id
 * @method string getSourceServiceType() 获取数据源类型或（仅针对离线同步任务）来源数据源类型
 * @method void setSourceServiceType(string $SourceServiceType) 设置数据源类型或（仅针对离线同步任务）来源数据源类型
 * @method string getTargetServiceId() 获取（仅针对离线同步任务）目标数据源id
 * @method void setTargetServiceId(string $TargetServiceId) 设置（仅针对离线同步任务）目标数据源id
 * @method string getTargetServiceType() 获取（仅针对离线同步任务）目标数据源类型
 * @method void setTargetServiceType(string $TargetServiceType) 设置（仅针对离线同步任务）目标数据源类型
 * @method string getAlarmType() 获取告警类型，多个类型以逗号分隔
 * @method void setAlarmType(string $AlarmType) 设置告警类型，多个类型以逗号分隔
 * @method string getExecutorGroupIdList() 获取资源组id,多个资源组id之间以英文字符逗号分隔
 * @method void setExecutorGroupIdList(string $ExecutorGroupIdList) 设置资源组id,多个资源组id之间以英文字符逗号分隔
 * @method array getTaskTags() 获取任务标签
 * @method void setTaskTags(array $TaskTags) 设置任务标签
 * @method string getKeyWord() 获取查询关键字
 * @method void setKeyWord(string $KeyWord) 设置查询关键字
 * @method string getInitStrategy() 获取实例生成方式
 * @method void setInitStrategy(string $InitStrategy) 设置实例生成方式
 * @method array getRequestResourceTypes() 获取额外请求的资源类型
 * @method void setRequestResourceTypes(array $RequestResourceTypes) 设置额外请求的资源类型
 * @method array getProjectIds() 获取项目ID列表
 * @method void setProjectIds(array $ProjectIds) 设置项目ID列表
 * @method array getBlackTaskIdList() 获取黑名单任务ID列表，传了该值在筛选的时候会将列表中的任务ID剔除
 * @method void setBlackTaskIdList(array $BlackTaskIdList) 设置黑名单任务ID列表，传了该值在筛选的时候会将列表中的任务ID剔除
 * @method string getScheduleTimeZone() 获取时区
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置时区
 * @method array getRunPriorityList() 获取根据任务优先级筛选
 * @method void setRunPriorityList(array $RunPriorityList) 设置根据任务优先级筛选
 */
class DescribeOperateOpsTasksRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 文件夹id，多个文件夹以逗号分隔
     */
    public $FolderIdList;

    /**
     * @var string 工作流id，多个工作流id之间以英文字符逗号分隔
     */
    public $WorkFlowIdList;

    /**
     * @var string 工作流名称，多个工作流名称之间以英文字符逗号分隔
     */
    public $WorkFlowNameList;

    /**
     * @var string 任务名称，多个任务名称之间以英文字符逗号分隔
     */
    public $TaskNameList;

    /**
     * @var string 任务id，多个任务id之间以英文字符逗号分隔
     */
    public $TaskIdList;

    /**
     * @var string 页号
     */
    public $PageNumber;

    /**
     * @var string 分页大小
     */
    public $PageSize;

    /**
     * @var string 排序字段，支持字段为FirstSubmitTime和FirstRunTime，标识最近提交和首次执行事件
     */
    public $SortItem;

    /**
     * @var string 排序类型。两种取值 DESC、ASC
     */
    public $SortType;

    /**
     * @var string 责任人，多个责任人之间以英文字符逗号分隔
     */
    public $InChargeList;

    /**
     * @var string 任务类型Id字符串，多个任务类型id之间以英文字符逗号分隔
     */
    public $TaskTypeIdList;

    /**
     * @var string 任务状态字符串，多个任务状态之间以英文字符逗号分隔
     */
    public $StatusList;

    /**
     * @var string 任务周期类型字符串，多个任务周期之间以英文字符逗号分隔
     */
    public $TaskCycleUnitList;

    /**
     * @var string 任务所属产品类型
     */
    public $ProductNameList;

    /**
     * @var string 数据源id或（仅针对离线同步任务）来源数据源id
     */
    public $SourceServiceId;

    /**
     * @var string 数据源类型或（仅针对离线同步任务）来源数据源类型
     */
    public $SourceServiceType;

    /**
     * @var string （仅针对离线同步任务）目标数据源id
     */
    public $TargetServiceId;

    /**
     * @var string （仅针对离线同步任务）目标数据源类型
     */
    public $TargetServiceType;

    /**
     * @var string 告警类型，多个类型以逗号分隔
     */
    public $AlarmType;

    /**
     * @var string 资源组id,多个资源组id之间以英文字符逗号分隔
     */
    public $ExecutorGroupIdList;

    /**
     * @var array 任务标签
     */
    public $TaskTags;

    /**
     * @var string 查询关键字
     */
    public $KeyWord;

    /**
     * @var string 实例生成方式
     */
    public $InitStrategy;

    /**
     * @var array 额外请求的资源类型
     */
    public $RequestResourceTypes;

    /**
     * @var array 项目ID列表
     */
    public $ProjectIds;

    /**
     * @var array 黑名单任务ID列表，传了该值在筛选的时候会将列表中的任务ID剔除
     */
    public $BlackTaskIdList;

    /**
     * @var string 时区
     */
    public $ScheduleTimeZone;

    /**
     * @var array 根据任务优先级筛选
     */
    public $RunPriorityList;

    /**
     * @param string $ProjectId 项目id
     * @param string $FolderIdList 文件夹id，多个文件夹以逗号分隔
     * @param string $WorkFlowIdList 工作流id，多个工作流id之间以英文字符逗号分隔
     * @param string $WorkFlowNameList 工作流名称，多个工作流名称之间以英文字符逗号分隔
     * @param string $TaskNameList 任务名称，多个任务名称之间以英文字符逗号分隔
     * @param string $TaskIdList 任务id，多个任务id之间以英文字符逗号分隔
     * @param string $PageNumber 页号
     * @param string $PageSize 分页大小
     * @param string $SortItem 排序字段，支持字段为FirstSubmitTime和FirstRunTime，标识最近提交和首次执行事件
     * @param string $SortType 排序类型。两种取值 DESC、ASC
     * @param string $InChargeList 责任人，多个责任人之间以英文字符逗号分隔
     * @param string $TaskTypeIdList 任务类型Id字符串，多个任务类型id之间以英文字符逗号分隔
     * @param string $StatusList 任务状态字符串，多个任务状态之间以英文字符逗号分隔
     * @param string $TaskCycleUnitList 任务周期类型字符串，多个任务周期之间以英文字符逗号分隔
     * @param string $ProductNameList 任务所属产品类型
     * @param string $SourceServiceId 数据源id或（仅针对离线同步任务）来源数据源id
     * @param string $SourceServiceType 数据源类型或（仅针对离线同步任务）来源数据源类型
     * @param string $TargetServiceId （仅针对离线同步任务）目标数据源id
     * @param string $TargetServiceType （仅针对离线同步任务）目标数据源类型
     * @param string $AlarmType 告警类型，多个类型以逗号分隔
     * @param string $ExecutorGroupIdList 资源组id,多个资源组id之间以英文字符逗号分隔
     * @param array $TaskTags 任务标签
     * @param string $KeyWord 查询关键字
     * @param string $InitStrategy 实例生成方式
     * @param array $RequestResourceTypes 额外请求的资源类型
     * @param array $ProjectIds 项目ID列表
     * @param array $BlackTaskIdList 黑名单任务ID列表，传了该值在筛选的时候会将列表中的任务ID剔除
     * @param string $ScheduleTimeZone 时区
     * @param array $RunPriorityList 根据任务优先级筛选
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

        if (array_key_exists("FolderIdList",$param) and $param["FolderIdList"] !== null) {
            $this->FolderIdList = $param["FolderIdList"];
        }

        if (array_key_exists("WorkFlowIdList",$param) and $param["WorkFlowIdList"] !== null) {
            $this->WorkFlowIdList = $param["WorkFlowIdList"];
        }

        if (array_key_exists("WorkFlowNameList",$param) and $param["WorkFlowNameList"] !== null) {
            $this->WorkFlowNameList = $param["WorkFlowNameList"];
        }

        if (array_key_exists("TaskNameList",$param) and $param["TaskNameList"] !== null) {
            $this->TaskNameList = $param["TaskNameList"];
        }

        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SortItem",$param) and $param["SortItem"] !== null) {
            $this->SortItem = $param["SortItem"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("InChargeList",$param) and $param["InChargeList"] !== null) {
            $this->InChargeList = $param["InChargeList"];
        }

        if (array_key_exists("TaskTypeIdList",$param) and $param["TaskTypeIdList"] !== null) {
            $this->TaskTypeIdList = $param["TaskTypeIdList"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("TaskCycleUnitList",$param) and $param["TaskCycleUnitList"] !== null) {
            $this->TaskCycleUnitList = $param["TaskCycleUnitList"];
        }

        if (array_key_exists("ProductNameList",$param) and $param["ProductNameList"] !== null) {
            $this->ProductNameList = $param["ProductNameList"];
        }

        if (array_key_exists("SourceServiceId",$param) and $param["SourceServiceId"] !== null) {
            $this->SourceServiceId = $param["SourceServiceId"];
        }

        if (array_key_exists("SourceServiceType",$param) and $param["SourceServiceType"] !== null) {
            $this->SourceServiceType = $param["SourceServiceType"];
        }

        if (array_key_exists("TargetServiceId",$param) and $param["TargetServiceId"] !== null) {
            $this->TargetServiceId = $param["TargetServiceId"];
        }

        if (array_key_exists("TargetServiceType",$param) and $param["TargetServiceType"] !== null) {
            $this->TargetServiceType = $param["TargetServiceType"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("ExecutorGroupIdList",$param) and $param["ExecutorGroupIdList"] !== null) {
            $this->ExecutorGroupIdList = $param["ExecutorGroupIdList"];
        }

        if (array_key_exists("TaskTags",$param) and $param["TaskTags"] !== null) {
            $this->TaskTags = [];
            foreach ($param["TaskTags"] as $key => $value){
                $obj = new TaskTag();
                $obj->deserialize($value);
                array_push($this->TaskTags, $obj);
            }
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("InitStrategy",$param) and $param["InitStrategy"] !== null) {
            $this->InitStrategy = $param["InitStrategy"];
        }

        if (array_key_exists("RequestResourceTypes",$param) and $param["RequestResourceTypes"] !== null) {
            $this->RequestResourceTypes = $param["RequestResourceTypes"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("BlackTaskIdList",$param) and $param["BlackTaskIdList"] !== null) {
            $this->BlackTaskIdList = $param["BlackTaskIdList"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("RunPriorityList",$param) and $param["RunPriorityList"] !== null) {
            $this->RunPriorityList = $param["RunPriorityList"];
        }
    }
}
