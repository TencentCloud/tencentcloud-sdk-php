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
 * DescribeBatchOperateTask请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getPage() 获取页码
 * @method void setPage(string $Page) 设置页码
 * @method string getSize() 获取页号
 * @method void setSize(string $Size) 设置页号
 * @method array getStatusList() 获取状态列表
草稿：'NS'，'N','P','R'
运行：''Y'
停止：'F'
冻结：'O'
停止中：'T'
 * @method void setStatusList(array $StatusList) 设置状态列表
草稿：'NS'，'N','P','R'
运行：''Y'
停止：'F'
冻结：'O'
停止中：'T'
 * @method array getOwnerNameList() 获取责任人名列表
 * @method void setOwnerNameList(array $OwnerNameList) 设置责任人名列表
 * @method array getWorkflowIdList() 获取工作流列表
 * @method void setWorkflowIdList(array $WorkflowIdList) 设置工作流列表
 * @method string getTaskNameFilter() 获取任务名称搜索
 * @method void setTaskNameFilter(string $TaskNameFilter) 设置任务名称搜索
 * @method array getTaskTypeList() 获取任务类型列表
 * @method void setTaskTypeList(array $TaskTypeList) 设置任务类型列表
 * @method array getFordIdList() 获取文件夹列表
 * @method void setFordIdList(array $FordIdList) 设置文件夹列表
 * @method string getTaskIdFilter() 获取任务Id搜索
 * @method void setTaskIdFilter(string $TaskIdFilter) 设置任务Id搜索
 * @method string getOwnerNameFilter() 获取责任人搜索
 * @method void setOwnerNameFilter(string $OwnerNameFilter) 设置责任人搜索
 * @method string getSortItem() 获取排序字段：
UpdateTime
CreateTime
 * @method void setSortItem(string $SortItem) 设置排序字段：
UpdateTime
CreateTime
 * @method string getSortType() 获取asc:升序
desc:降序
 * @method void setSortType(string $SortType) 设置asc:升序
desc:降序
 * @method array getDataEngineList() 获取引擎类型列表：三种
SparkJob
SparkSql
presto
 * @method void setDataEngineList(array $DataEngineList) 设置引擎类型列表：三种
SparkJob
SparkSql
presto
 * @method string getUserId() 获取操作人名
 * @method void setUserId(string $UserId) 设置操作人名
 * @method string getOwnerId() 获取1
 * @method void setOwnerId(string $OwnerId) 设置1
 * @method string getTenantId() 获取1
 * @method void setTenantId(string $TenantId) 设置1
 */
class DescribeBatchOperateTaskRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 页码
     */
    public $Page;

    /**
     * @var string 页号
     */
    public $Size;

    /**
     * @var array 状态列表
草稿：'NS'，'N','P','R'
运行：''Y'
停止：'F'
冻结：'O'
停止中：'T'
     */
    public $StatusList;

    /**
     * @var array 责任人名列表
     */
    public $OwnerNameList;

    /**
     * @var array 工作流列表
     */
    public $WorkflowIdList;

    /**
     * @var string 任务名称搜索
     */
    public $TaskNameFilter;

    /**
     * @var array 任务类型列表
     */
    public $TaskTypeList;

    /**
     * @var array 文件夹列表
     */
    public $FordIdList;

    /**
     * @var string 任务Id搜索
     */
    public $TaskIdFilter;

    /**
     * @var string 责任人搜索
     */
    public $OwnerNameFilter;

    /**
     * @var string 排序字段：
UpdateTime
CreateTime
     */
    public $SortItem;

    /**
     * @var string asc:升序
desc:降序
     */
    public $SortType;

    /**
     * @var array 引擎类型列表：三种
SparkJob
SparkSql
presto
     */
    public $DataEngineList;

    /**
     * @var string 操作人名
     */
    public $UserId;

    /**
     * @var string 1
     */
    public $OwnerId;

    /**
     * @var string 1
     */
    public $TenantId;

    /**
     * @param string $ProjectId 项目Id
     * @param string $Page 页码
     * @param string $Size 页号
     * @param array $StatusList 状态列表
草稿：'NS'，'N','P','R'
运行：''Y'
停止：'F'
冻结：'O'
停止中：'T'
     * @param array $OwnerNameList 责任人名列表
     * @param array $WorkflowIdList 工作流列表
     * @param string $TaskNameFilter 任务名称搜索
     * @param array $TaskTypeList 任务类型列表
     * @param array $FordIdList 文件夹列表
     * @param string $TaskIdFilter 任务Id搜索
     * @param string $OwnerNameFilter 责任人搜索
     * @param string $SortItem 排序字段：
UpdateTime
CreateTime
     * @param string $SortType asc:升序
desc:降序
     * @param array $DataEngineList 引擎类型列表：三种
SparkJob
SparkSql
presto
     * @param string $UserId 操作人名
     * @param string $OwnerId 1
     * @param string $TenantId 1
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

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("OwnerNameList",$param) and $param["OwnerNameList"] !== null) {
            $this->OwnerNameList = $param["OwnerNameList"];
        }

        if (array_key_exists("WorkflowIdList",$param) and $param["WorkflowIdList"] !== null) {
            $this->WorkflowIdList = $param["WorkflowIdList"];
        }

        if (array_key_exists("TaskNameFilter",$param) and $param["TaskNameFilter"] !== null) {
            $this->TaskNameFilter = $param["TaskNameFilter"];
        }

        if (array_key_exists("TaskTypeList",$param) and $param["TaskTypeList"] !== null) {
            $this->TaskTypeList = $param["TaskTypeList"];
        }

        if (array_key_exists("FordIdList",$param) and $param["FordIdList"] !== null) {
            $this->FordIdList = $param["FordIdList"];
        }

        if (array_key_exists("TaskIdFilter",$param) and $param["TaskIdFilter"] !== null) {
            $this->TaskIdFilter = $param["TaskIdFilter"];
        }

        if (array_key_exists("OwnerNameFilter",$param) and $param["OwnerNameFilter"] !== null) {
            $this->OwnerNameFilter = $param["OwnerNameFilter"];
        }

        if (array_key_exists("SortItem",$param) and $param["SortItem"] !== null) {
            $this->SortItem = $param["SortItem"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("DataEngineList",$param) and $param["DataEngineList"] !== null) {
            $this->DataEngineList = $param["DataEngineList"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }
    }
}
