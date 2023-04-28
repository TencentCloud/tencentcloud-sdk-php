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
 * DescribeOperateTasks请求参数结构体
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
 */
class DescribeOperateTasksRequest extends AbstractModel
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
    }
}
