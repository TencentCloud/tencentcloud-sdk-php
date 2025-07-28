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
 * DescribeOpsWorkflows请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getProductNameList() 获取任务产品类型名称列表，以 ',' 号分割
 * @method void setProductNameList(string $ProductNameList) 设置任务产品类型名称列表，以 ',' 号分割
 * @method string getFolderIdList() 获取文件id列表，以 ',' 号分割
 * @method void setFolderIdList(string $FolderIdList) 设置文件id列表，以 ',' 号分割
 * @method string getWorkFlowIdList() 获取工作流id，以 ',' 号分割
 * @method void setWorkFlowIdList(string $WorkFlowIdList) 设置工作流id，以 ',' 号分割
 * @method string getWorkFlowNameList() 获取工作流名称列表，以 ',' 号分割
 * @method void setWorkFlowNameList(string $WorkFlowNameList) 设置工作流名称列表，以 ',' 号分割
 * @method string getTaskNameList() 获取任务名称列表，以 ',' 号分割
 * @method void setTaskNameList(string $TaskNameList) 设置任务名称列表，以 ',' 号分割
 * @method string getTaskIdList() 获取任务id列表，以 ',' 号分割
 * @method void setTaskIdList(string $TaskIdList) 设置任务id列表，以 ',' 号分割
 * @method string getStatusList() 获取状态列表，以 ',' 号分割
 * @method void setStatusList(string $StatusList) 设置状态列表，以 ',' 号分割
 * @method string getInChargeList() 获取负责人列表，以 ',' 号分割
 * @method void setInChargeList(string $InChargeList) 设置负责人列表，以 ',' 号分割
 * @method integer getPageNumber() 获取分页页码
 * @method void setPageNumber(integer $PageNumber) 设置分页页码
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method string getSortItem() 获取排序项
 * @method void setSortItem(string $SortItem) 设置排序项
 * @method string getSortType() 获取排序方式，DESC或ASC
 * @method void setSortType(string $SortType) 设置排序方式，DESC或ASC
 * @method array getProjectIds() 获取项目ID列表，用于多项目工作流筛选
 * @method void setProjectIds(array $ProjectIds) 设置项目ID列表，用于多项目工作流筛选
 * @method array getWorkflowTypeList() 获取工作流类型列表 多个用英文逗号连接 cycle,manual. 默认只查询 cycle
 * @method void setWorkflowTypeList(array $WorkflowTypeList) 设置工作流类型列表 多个用英文逗号连接 cycle,manual. 默认只查询 cycle
 * @method string getKeyWord() 获取工作流过滤keyword，支持工作流 id/name 模糊匹配， 多个用|分割
 * @method void setKeyWord(string $KeyWord) 设置工作流过滤keyword，支持工作流 id/name 模糊匹配， 多个用|分割
 * @method string getScheduleTimeZone() 获取**时区** timeZone, 默认UTC+8
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置**时区** timeZone, 默认UTC+8
 */
class DescribeOpsWorkflowsRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 任务产品类型名称列表，以 ',' 号分割
     */
    public $ProductNameList;

    /**
     * @var string 文件id列表，以 ',' 号分割
     */
    public $FolderIdList;

    /**
     * @var string 工作流id，以 ',' 号分割
     */
    public $WorkFlowIdList;

    /**
     * @var string 工作流名称列表，以 ',' 号分割
     */
    public $WorkFlowNameList;

    /**
     * @var string 任务名称列表，以 ',' 号分割
     */
    public $TaskNameList;

    /**
     * @var string 任务id列表，以 ',' 号分割
     */
    public $TaskIdList;

    /**
     * @var string 状态列表，以 ',' 号分割
     */
    public $StatusList;

    /**
     * @var string 负责人列表，以 ',' 号分割
     */
    public $InChargeList;

    /**
     * @var integer 分页页码
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var string 排序项
     */
    public $SortItem;

    /**
     * @var string 排序方式，DESC或ASC
     */
    public $SortType;

    /**
     * @var array 项目ID列表，用于多项目工作流筛选
     */
    public $ProjectIds;

    /**
     * @var array 工作流类型列表 多个用英文逗号连接 cycle,manual. 默认只查询 cycle
     */
    public $WorkflowTypeList;

    /**
     * @var string 工作流过滤keyword，支持工作流 id/name 模糊匹配， 多个用|分割
     */
    public $KeyWord;

    /**
     * @var string **时区** timeZone, 默认UTC+8
     */
    public $ScheduleTimeZone;

    /**
     * @param string $ProjectId 项目id
     * @param string $ProductNameList 任务产品类型名称列表，以 ',' 号分割
     * @param string $FolderIdList 文件id列表，以 ',' 号分割
     * @param string $WorkFlowIdList 工作流id，以 ',' 号分割
     * @param string $WorkFlowNameList 工作流名称列表，以 ',' 号分割
     * @param string $TaskNameList 任务名称列表，以 ',' 号分割
     * @param string $TaskIdList 任务id列表，以 ',' 号分割
     * @param string $StatusList 状态列表，以 ',' 号分割
     * @param string $InChargeList 负责人列表，以 ',' 号分割
     * @param integer $PageNumber 分页页码
     * @param integer $PageSize 分页大小
     * @param string $SortItem 排序项
     * @param string $SortType 排序方式，DESC或ASC
     * @param array $ProjectIds 项目ID列表，用于多项目工作流筛选
     * @param array $WorkflowTypeList 工作流类型列表 多个用英文逗号连接 cycle,manual. 默认只查询 cycle
     * @param string $KeyWord 工作流过滤keyword，支持工作流 id/name 模糊匹配， 多个用|分割
     * @param string $ScheduleTimeZone **时区** timeZone, 默认UTC+8
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

        if (array_key_exists("ProductNameList",$param) and $param["ProductNameList"] !== null) {
            $this->ProductNameList = $param["ProductNameList"];
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

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("InChargeList",$param) and $param["InChargeList"] !== null) {
            $this->InChargeList = $param["InChargeList"];
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

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("WorkflowTypeList",$param) and $param["WorkflowTypeList"] !== null) {
            $this->WorkflowTypeList = $param["WorkflowTypeList"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }
    }
}
