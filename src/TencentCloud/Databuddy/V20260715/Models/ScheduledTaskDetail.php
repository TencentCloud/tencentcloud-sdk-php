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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时任务详情
 *
 * @method string getScheduledTaskId() 获取<p>定时任务唯一标识</p>
 * @method void setScheduledTaskId(string $ScheduledTaskId) 设置<p>定时任务唯一标识</p>
 * @method string getName() 获取<p>任务名称</p>
 * @method void setName(string $Name) 设置<p>任务名称</p>
 * @method string getPrompt() 获取<p>任务提示词</p>
 * @method void setPrompt(string $Prompt) 设置<p>任务提示词</p>
 * @method string getSchedule() 获取<p>六段 cron 表达式</p>
 * @method void setSchedule(string $Schedule) 设置<p>六段 cron 表达式</p>
 * @method integer getStatus() 获取<p>任务状态：1=ACTIVE，2=PAUSED</p>
 * @method void setStatus(integer $Status) 设置<p>任务状态：1=ACTIVE，2=PAUSED</p>
 * @method integer getSessionType() 获取<p>会话类型：1=数据分析，2=数据工程</p>
 * @method void setSessionType(integer $SessionType) 设置<p>会话类型：1=数据分析，2=数据工程</p>
 * @method string getAnalysisSpaceId() 获取<p>分析空间 ID</p>
 * @method void setAnalysisSpaceId(string $AnalysisSpaceId) 设置<p>分析空间 ID</p>
 * @method string getWorkspaceId() 获取<p>工作空间 ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间 ID</p>
 * @method string getCreateUserUin() 获取<p>创建人 UIN</p>
 * @method void setCreateUserUin(string $CreateUserUin) 设置<p>创建人 UIN</p>
 * @method string getCreateTime() 获取<p>创建时间，毫秒级 Unix 时间戳字符串</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，毫秒级 Unix 时间戳字符串</p>
 * @method string getModifyTime() 获取<p>最近修改时间，毫秒级 Unix 时间戳字符串</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>最近修改时间，毫秒级 Unix 时间戳字符串</p>
 * @method string getStartTime() 获取<p>生效开始时间，上海时区本地零点的毫秒时间戳字符串；0 表示不传</p>
 * @method void setStartTime(string $StartTime) 设置<p>生效开始时间，上海时区本地零点的毫秒时间戳字符串；0 表示不传</p>
 * @method string getEndTime() 获取<p>生效结束时间，上海时区本地零点的毫秒时间戳字符串；0 表示不传</p>
 * @method void setEndTime(string $EndTime) 设置<p>生效结束时间，上海时区本地零点的毫秒时间戳字符串；0 表示不传</p>
 * @method string getSkillIds() 获取<p>技能 ID 列表</p>
 * @method void setSkillIds(string $SkillIds) 设置<p>技能 ID 列表</p>
 * @method string getModelId() 获取<p>模型 ID</p>
 * @method void setModelId(string $ModelId) 设置<p>模型 ID</p>
 * @method integer getScheduleType() 获取<p>调度类型：1=每天，2=间隔，3=单次</p>
 * @method void setScheduleType(integer $ScheduleType) 设置<p>调度类型：1=每天，2=间隔，3=单次</p>
 * @method string getUpdateUserUin() 获取<p>最近修改人 UIN</p>
 * @method void setUpdateUserUin(string $UpdateUserUin) 设置<p>最近修改人 UIN</p>
 * @method string getMCPIds() 获取<p>mcpId列表（逗号分隔）</p>
 * @method void setMCPIds(string $MCPIds) 设置<p>mcpId列表（逗号分隔）</p>
 */
class ScheduledTaskDetail extends AbstractModel
{
    /**
     * @var string <p>定时任务唯一标识</p>
     */
    public $ScheduledTaskId;

    /**
     * @var string <p>任务名称</p>
     */
    public $Name;

    /**
     * @var string <p>任务提示词</p>
     */
    public $Prompt;

    /**
     * @var string <p>六段 cron 表达式</p>
     */
    public $Schedule;

    /**
     * @var integer <p>任务状态：1=ACTIVE，2=PAUSED</p>
     */
    public $Status;

    /**
     * @var integer <p>会话类型：1=数据分析，2=数据工程</p>
     */
    public $SessionType;

    /**
     * @var string <p>分析空间 ID</p>
     */
    public $AnalysisSpaceId;

    /**
     * @var string <p>工作空间 ID</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>创建人 UIN</p>
     */
    public $CreateUserUin;

    /**
     * @var string <p>创建时间，毫秒级 Unix 时间戳字符串</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最近修改时间，毫秒级 Unix 时间戳字符串</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>生效开始时间，上海时区本地零点的毫秒时间戳字符串；0 表示不传</p>
     */
    public $StartTime;

    /**
     * @var string <p>生效结束时间，上海时区本地零点的毫秒时间戳字符串；0 表示不传</p>
     */
    public $EndTime;

    /**
     * @var string <p>技能 ID 列表</p>
     */
    public $SkillIds;

    /**
     * @var string <p>模型 ID</p>
     */
    public $ModelId;

    /**
     * @var integer <p>调度类型：1=每天，2=间隔，3=单次</p>
     */
    public $ScheduleType;

    /**
     * @var string <p>最近修改人 UIN</p>
     */
    public $UpdateUserUin;

    /**
     * @var string <p>mcpId列表（逗号分隔）</p>
     */
    public $MCPIds;

    /**
     * @param string $ScheduledTaskId <p>定时任务唯一标识</p>
     * @param string $Name <p>任务名称</p>
     * @param string $Prompt <p>任务提示词</p>
     * @param string $Schedule <p>六段 cron 表达式</p>
     * @param integer $Status <p>任务状态：1=ACTIVE，2=PAUSED</p>
     * @param integer $SessionType <p>会话类型：1=数据分析，2=数据工程</p>
     * @param string $AnalysisSpaceId <p>分析空间 ID</p>
     * @param string $WorkspaceId <p>工作空间 ID</p>
     * @param string $CreateUserUin <p>创建人 UIN</p>
     * @param string $CreateTime <p>创建时间，毫秒级 Unix 时间戳字符串</p>
     * @param string $ModifyTime <p>最近修改时间，毫秒级 Unix 时间戳字符串</p>
     * @param string $StartTime <p>生效开始时间，上海时区本地零点的毫秒时间戳字符串；0 表示不传</p>
     * @param string $EndTime <p>生效结束时间，上海时区本地零点的毫秒时间戳字符串；0 表示不传</p>
     * @param string $SkillIds <p>技能 ID 列表</p>
     * @param string $ModelId <p>模型 ID</p>
     * @param integer $ScheduleType <p>调度类型：1=每天，2=间隔，3=单次</p>
     * @param string $UpdateUserUin <p>最近修改人 UIN</p>
     * @param string $MCPIds <p>mcpId列表（逗号分隔）</p>
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
        if (array_key_exists("ScheduledTaskId",$param) and $param["ScheduledTaskId"] !== null) {
            $this->ScheduledTaskId = $param["ScheduledTaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = $param["Schedule"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SessionType",$param) and $param["SessionType"] !== null) {
            $this->SessionType = $param["SessionType"];
        }

        if (array_key_exists("AnalysisSpaceId",$param) and $param["AnalysisSpaceId"] !== null) {
            $this->AnalysisSpaceId = $param["AnalysisSpaceId"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SkillIds",$param) and $param["SkillIds"] !== null) {
            $this->SkillIds = $param["SkillIds"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ScheduleType",$param) and $param["ScheduleType"] !== null) {
            $this->ScheduleType = $param["ScheduleType"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }

        if (array_key_exists("MCPIds",$param) and $param["MCPIds"] !== null) {
            $this->MCPIds = $param["MCPIds"];
        }
    }
}
