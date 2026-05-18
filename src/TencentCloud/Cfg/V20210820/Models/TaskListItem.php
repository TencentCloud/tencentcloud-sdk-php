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
 * 任务列表信息
 *
 * @method integer getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(integer $TaskId) 设置<p>任务ID</p>
 * @method string getTaskTitle() 获取<p>任务标题</p>
 * @method void setTaskTitle(string $TaskTitle) 设置<p>任务标题</p>
 * @method string getTaskDescription() 获取<p>任务描述</p>
 * @method void setTaskDescription(string $TaskDescription) 设置<p>任务描述</p>
 * @method string getTaskTag() 获取<p>任务标签</p>
 * @method void setTaskTag(string $TaskTag) 设置<p>任务标签</p>
 * @method integer getTaskStatus() 获取<p>任务状态(1001 -- 未开始   1002 -- 进行中  1003 -- 暂停中   1004 -- 任务结束)</p>
 * @method void setTaskStatus(integer $TaskStatus) 设置<p>任务状态(1001 -- 未开始   1002 -- 进行中  1003 -- 暂停中   1004 -- 任务结束)</p>
 * @method string getTaskCreateTime() 获取<p>任务创建时间</p>
 * @method void setTaskCreateTime(string $TaskCreateTime) 设置<p>任务创建时间</p>
 * @method string getTaskUpdateTime() 获取<p>任务更新时间</p>
 * @method void setTaskUpdateTime(string $TaskUpdateTime) 设置<p>任务更新时间</p>
 * @method integer getTaskPreCheckStatus() 获取<p>0--未开始，1--进行中，2--已完成</p>
 * @method void setTaskPreCheckStatus(integer $TaskPreCheckStatus) 设置<p>0--未开始，1--进行中，2--已完成</p>
 * @method boolean getTaskPreCheckSuccess() 获取<p>环境检查是否通过</p>
 * @method void setTaskPreCheckSuccess(boolean $TaskPreCheckSuccess) 设置<p>环境检查是否通过</p>
 * @method integer getTaskExpect() 获取<p>演练是否符合预期 1-符合预期 2-不符合预期</p>
 * @method void setTaskExpect(integer $TaskExpect) 设置<p>演练是否符合预期 1-符合预期 2-不符合预期</p>
 * @method string getApplicationId() 获取<p>关联应用ID</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>关联应用ID</p>
 * @method string getApplicationName() 获取<p>关联应用名称</p>
 * @method void setApplicationName(string $ApplicationName) 设置<p>关联应用名称</p>
 * @method integer getVerifyId() 获取<p>验证项ID</p>
 * @method void setVerifyId(integer $VerifyId) 设置<p>验证项ID</p>
 * @method integer getTaskStatusType() 获取<p>状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止</p>
 * @method void setTaskStatusType(integer $TaskStatusType) 设置<p>状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止</p>
 * @method string getArchId() 获取<p>架构ID</p>
 * @method void setArchId(string $ArchId) 设置<p>架构ID</p>
 * @method string getArchName() 获取<p>架构名称</p>
 * @method void setArchName(string $ArchName) 设置<p>架构名称</p>
 * @method integer getTaskSource() 获取<p>来源</p>
 * @method void setTaskSource(integer $TaskSource) 设置<p>来源</p>
 * @method array getTags() 获取<p>云资源标签列表</p>
 * @method void setTags(array $Tags) 设置<p>云资源标签列表</p>
 */
class TaskListItem extends AbstractModel
{
    /**
     * @var integer <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务标题</p>
     */
    public $TaskTitle;

    /**
     * @var string <p>任务描述</p>
     */
    public $TaskDescription;

    /**
     * @var string <p>任务标签</p>
     */
    public $TaskTag;

    /**
     * @var integer <p>任务状态(1001 -- 未开始   1002 -- 进行中  1003 -- 暂停中   1004 -- 任务结束)</p>
     */
    public $TaskStatus;

    /**
     * @var string <p>任务创建时间</p>
     */
    public $TaskCreateTime;

    /**
     * @var string <p>任务更新时间</p>
     */
    public $TaskUpdateTime;

    /**
     * @var integer <p>0--未开始，1--进行中，2--已完成</p>
     */
    public $TaskPreCheckStatus;

    /**
     * @var boolean <p>环境检查是否通过</p>
     */
    public $TaskPreCheckSuccess;

    /**
     * @var integer <p>演练是否符合预期 1-符合预期 2-不符合预期</p>
     */
    public $TaskExpect;

    /**
     * @var string <p>关联应用ID</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>关联应用名称</p>
     */
    public $ApplicationName;

    /**
     * @var integer <p>验证项ID</p>
     */
    public $VerifyId;

    /**
     * @var integer <p>状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止</p>
     */
    public $TaskStatusType;

    /**
     * @var string <p>架构ID</p>
     */
    public $ArchId;

    /**
     * @var string <p>架构名称</p>
     */
    public $ArchName;

    /**
     * @var integer <p>来源</p>
     */
    public $TaskSource;

    /**
     * @var array <p>云资源标签列表</p>
     */
    public $Tags;

    /**
     * @param integer $TaskId <p>任务ID</p>
     * @param string $TaskTitle <p>任务标题</p>
     * @param string $TaskDescription <p>任务描述</p>
     * @param string $TaskTag <p>任务标签</p>
     * @param integer $TaskStatus <p>任务状态(1001 -- 未开始   1002 -- 进行中  1003 -- 暂停中   1004 -- 任务结束)</p>
     * @param string $TaskCreateTime <p>任务创建时间</p>
     * @param string $TaskUpdateTime <p>任务更新时间</p>
     * @param integer $TaskPreCheckStatus <p>0--未开始，1--进行中，2--已完成</p>
     * @param boolean $TaskPreCheckSuccess <p>环境检查是否通过</p>
     * @param integer $TaskExpect <p>演练是否符合预期 1-符合预期 2-不符合预期</p>
     * @param string $ApplicationId <p>关联应用ID</p>
     * @param string $ApplicationName <p>关联应用名称</p>
     * @param integer $VerifyId <p>验证项ID</p>
     * @param integer $TaskStatusType <p>状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止</p>
     * @param string $ArchId <p>架构ID</p>
     * @param string $ArchName <p>架构名称</p>
     * @param integer $TaskSource <p>来源</p>
     * @param array $Tags <p>云资源标签列表</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskTitle",$param) and $param["TaskTitle"] !== null) {
            $this->TaskTitle = $param["TaskTitle"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("TaskTag",$param) and $param["TaskTag"] !== null) {
            $this->TaskTag = $param["TaskTag"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskCreateTime",$param) and $param["TaskCreateTime"] !== null) {
            $this->TaskCreateTime = $param["TaskCreateTime"];
        }

        if (array_key_exists("TaskUpdateTime",$param) and $param["TaskUpdateTime"] !== null) {
            $this->TaskUpdateTime = $param["TaskUpdateTime"];
        }

        if (array_key_exists("TaskPreCheckStatus",$param) and $param["TaskPreCheckStatus"] !== null) {
            $this->TaskPreCheckStatus = $param["TaskPreCheckStatus"];
        }

        if (array_key_exists("TaskPreCheckSuccess",$param) and $param["TaskPreCheckSuccess"] !== null) {
            $this->TaskPreCheckSuccess = $param["TaskPreCheckSuccess"];
        }

        if (array_key_exists("TaskExpect",$param) and $param["TaskExpect"] !== null) {
            $this->TaskExpect = $param["TaskExpect"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("VerifyId",$param) and $param["VerifyId"] !== null) {
            $this->VerifyId = $param["VerifyId"];
        }

        if (array_key_exists("TaskStatusType",$param) and $param["TaskStatusType"] !== null) {
            $this->TaskStatusType = $param["TaskStatusType"];
        }

        if (array_key_exists("ArchId",$param) and $param["ArchId"] !== null) {
            $this->ArchId = $param["ArchId"];
        }

        if (array_key_exists("ArchName",$param) and $param["ArchName"] !== null) {
            $this->ArchName = $param["ArchName"];
        }

        if (array_key_exists("TaskSource",$param) and $param["TaskSource"] !== null) {
            $this->TaskSource = $param["TaskSource"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagWithDescribe();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
