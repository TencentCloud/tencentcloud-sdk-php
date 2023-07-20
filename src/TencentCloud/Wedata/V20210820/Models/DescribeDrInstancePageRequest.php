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
 * DescribeDrInstancePage请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getTaskSource() 获取任务来源 ADHOC || WORKFLOW
 * @method void setTaskSource(string $TaskSource) 设置任务来源 ADHOC || WORKFLOW
 * @method integer getPageIndex() 获取索引页码
 * @method void setPageIndex(integer $PageIndex) 设置索引页码
 * @method integer getPageSize() 获取页面大小
 * @method void setPageSize(integer $PageSize) 设置页面大小
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getStartTime() 获取提交开始时间 yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置提交开始时间 yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() 获取提交结束时间 yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置提交结束时间 yyyy-MM-dd HH:mm:ss
 * @method array getFolderIds() 获取文件夹id
 * @method void setFolderIds(array $FolderIds) 设置文件夹id
 * @method array getWorkflowIds() 获取工作流id
 * @method void setWorkflowIds(array $WorkflowIds) 设置工作流id
 * @method boolean getJustMe() 获取只看我的
 * @method void setJustMe(boolean $JustMe) 设置只看我的
 * @method array getTaskTypes() 获取任务类型
 * @method void setTaskTypes(array $TaskTypes) 设置任务类型
 * @method array getSubmitUsers() 获取试运行提交人userId列表
 * @method void setSubmitUsers(array $SubmitUsers) 设置试运行提交人userId列表
 * @method array getStatusList() 获取试运行状态
 * @method void setStatusList(array $StatusList) 设置试运行状态
 */
class DescribeDrInstancePageRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 任务来源 ADHOC || WORKFLOW
     */
    public $TaskSource;

    /**
     * @var integer 索引页码
     */
    public $PageIndex;

    /**
     * @var integer 页面大小
     */
    public $PageSize;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 提交开始时间 yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 提交结束时间 yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var array 文件夹id
     */
    public $FolderIds;

    /**
     * @var array 工作流id
     */
    public $WorkflowIds;

    /**
     * @var boolean 只看我的
     */
    public $JustMe;

    /**
     * @var array 任务类型
     */
    public $TaskTypes;

    /**
     * @var array 试运行提交人userId列表
     */
    public $SubmitUsers;

    /**
     * @var array 试运行状态
     */
    public $StatusList;

    /**
     * @param string $ProjectId 项目id
     * @param string $TaskSource 任务来源 ADHOC || WORKFLOW
     * @param integer $PageIndex 索引页码
     * @param integer $PageSize 页面大小
     * @param string $TaskName 任务名称
     * @param string $StartTime 提交开始时间 yyyy-MM-dd HH:mm:ss
     * @param string $EndTime 提交结束时间 yyyy-MM-dd HH:mm:ss
     * @param array $FolderIds 文件夹id
     * @param array $WorkflowIds 工作流id
     * @param boolean $JustMe 只看我的
     * @param array $TaskTypes 任务类型
     * @param array $SubmitUsers 试运行提交人userId列表
     * @param array $StatusList 试运行状态
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

        if (array_key_exists("TaskSource",$param) and $param["TaskSource"] !== null) {
            $this->TaskSource = $param["TaskSource"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FolderIds",$param) and $param["FolderIds"] !== null) {
            $this->FolderIds = $param["FolderIds"];
        }

        if (array_key_exists("WorkflowIds",$param) and $param["WorkflowIds"] !== null) {
            $this->WorkflowIds = $param["WorkflowIds"];
        }

        if (array_key_exists("JustMe",$param) and $param["JustMe"] !== null) {
            $this->JustMe = $param["JustMe"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("SubmitUsers",$param) and $param["SubmitUsers"] !== null) {
            $this->SubmitUsers = $param["SubmitUsers"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }
    }
}
