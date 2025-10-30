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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskList请求参数结构体
 *
 * @method integer getLimit() 获取分页Limit
 * @method void setLimit(integer $Limit) 设置分页Limit
 * @method integer getOffset() 获取分页Offset
 * @method void setOffset(integer $Offset) 设置分页Offset
 * @method string getTaskTitle() 获取演练名称
 * @method void setTaskTitle(string $TaskTitle) 设置演练名称
 * @method array getTaskTag() 获取标签键
 * @method void setTaskTag(array $TaskTag) 设置标签键
 * @method integer getTaskStatus() 获取任务状态(1001 -- 未开始 1002 -- 进行中 1003 -- 暂停中 1004 -- 任务结束)
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态(1001 -- 未开始 1002 -- 进行中 1003 -- 暂停中 1004 -- 任务结束)
 * @method string getTaskStartTime() 获取开始时间，固定格式%Y-%m-%d %H:%M:%S
 * @method void setTaskStartTime(string $TaskStartTime) 设置开始时间，固定格式%Y-%m-%d %H:%M:%S
 * @method string getTaskEndTime() 获取结束时间，固定格式%Y-%m-%d %H:%M:%S
 * @method void setTaskEndTime(string $TaskEndTime) 设置结束时间，固定格式%Y-%m-%d %H:%M:%S
 * @method string getTaskUpdateTime() 获取更新时间，固定格式%Y-%m-%d %H:%M:%S
 * @method void setTaskUpdateTime(string $TaskUpdateTime) 设置更新时间，固定格式%Y-%m-%d %H:%M:%S
 * @method array getTags() 获取标签对
 * @method void setTags(array $Tags) 设置标签对
 * @method array getFilters() 获取筛选条件
 * @method void setFilters(array $Filters) 设置筛选条件
 * @method array getTaskId() 获取演练ID
 * @method void setTaskId(array $TaskId) 设置演练ID
 * @method array getApplicationId() 获取关联应用ID筛选
 * @method void setApplicationId(array $ApplicationId) 设置关联应用ID筛选
 * @method array getApplicationName() 获取关联应用筛选
 * @method void setApplicationName(array $ApplicationName) 设置关联应用筛选
 * @method array getTaskStatusList() 获取任务状态筛选--支持多选 任务状态(1001 -- 未开始 1002 -- 进行中 1003 -- 暂停中 1004 -- 任务结束)
 * @method void setTaskStatusList(array $TaskStatusList) 设置任务状态筛选--支持多选 任务状态(1001 -- 未开始 1002 -- 进行中 1003 -- 暂停中 1004 -- 任务结束)
 * @method string getArchId() 获取架构ID
 * @method void setArchId(string $ArchId) 设置架构ID
 * @method string getArchName() 获取架构名称
 * @method void setArchName(string $ArchName) 设置架构名称
 */
class DescribeTaskListRequest extends AbstractModel
{
    /**
     * @var integer 分页Limit
     */
    public $Limit;

    /**
     * @var integer 分页Offset
     */
    public $Offset;

    /**
     * @var string 演练名称
     */
    public $TaskTitle;

    /**
     * @var array 标签键
     */
    public $TaskTag;

    /**
     * @var integer 任务状态(1001 -- 未开始 1002 -- 进行中 1003 -- 暂停中 1004 -- 任务结束)
     */
    public $TaskStatus;

    /**
     * @var string 开始时间，固定格式%Y-%m-%d %H:%M:%S
     */
    public $TaskStartTime;

    /**
     * @var string 结束时间，固定格式%Y-%m-%d %H:%M:%S
     */
    public $TaskEndTime;

    /**
     * @var string 更新时间，固定格式%Y-%m-%d %H:%M:%S
     */
    public $TaskUpdateTime;

    /**
     * @var array 标签对
     */
    public $Tags;

    /**
     * @var array 筛选条件
     */
    public $Filters;

    /**
     * @var array 演练ID
     */
    public $TaskId;

    /**
     * @var array 关联应用ID筛选
     */
    public $ApplicationId;

    /**
     * @var array 关联应用筛选
     */
    public $ApplicationName;

    /**
     * @var array 任务状态筛选--支持多选 任务状态(1001 -- 未开始 1002 -- 进行中 1003 -- 暂停中 1004 -- 任务结束)
     */
    public $TaskStatusList;

    /**
     * @var string 架构ID
     */
    public $ArchId;

    /**
     * @var string 架构名称
     */
    public $ArchName;

    /**
     * @param integer $Limit 分页Limit
     * @param integer $Offset 分页Offset
     * @param string $TaskTitle 演练名称
     * @param array $TaskTag 标签键
     * @param integer $TaskStatus 任务状态(1001 -- 未开始 1002 -- 进行中 1003 -- 暂停中 1004 -- 任务结束)
     * @param string $TaskStartTime 开始时间，固定格式%Y-%m-%d %H:%M:%S
     * @param string $TaskEndTime 结束时间，固定格式%Y-%m-%d %H:%M:%S
     * @param string $TaskUpdateTime 更新时间，固定格式%Y-%m-%d %H:%M:%S
     * @param array $Tags 标签对
     * @param array $Filters 筛选条件
     * @param array $TaskId 演练ID
     * @param array $ApplicationId 关联应用ID筛选
     * @param array $ApplicationName 关联应用筛选
     * @param array $TaskStatusList 任务状态筛选--支持多选 任务状态(1001 -- 未开始 1002 -- 进行中 1003 -- 暂停中 1004 -- 任务结束)
     * @param string $ArchId 架构ID
     * @param string $ArchName 架构名称
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("TaskTitle",$param) and $param["TaskTitle"] !== null) {
            $this->TaskTitle = $param["TaskTitle"];
        }

        if (array_key_exists("TaskTag",$param) and $param["TaskTag"] !== null) {
            $this->TaskTag = $param["TaskTag"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskStartTime",$param) and $param["TaskStartTime"] !== null) {
            $this->TaskStartTime = $param["TaskStartTime"];
        }

        if (array_key_exists("TaskEndTime",$param) and $param["TaskEndTime"] !== null) {
            $this->TaskEndTime = $param["TaskEndTime"];
        }

        if (array_key_exists("TaskUpdateTime",$param) and $param["TaskUpdateTime"] !== null) {
            $this->TaskUpdateTime = $param["TaskUpdateTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagWithDescribe();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ActionFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("TaskStatusList",$param) and $param["TaskStatusList"] !== null) {
            $this->TaskStatusList = $param["TaskStatusList"];
        }

        if (array_key_exists("ArchId",$param) and $param["ArchId"] !== null) {
            $this->ArchId = $param["ArchId"];
        }

        if (array_key_exists("ArchName",$param) and $param["ArchName"] !== null) {
            $this->ArchName = $param["ArchName"];
        }
    }
}
