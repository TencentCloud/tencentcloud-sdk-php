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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTimerTask请求参数结构体
 *
 * @method integer getCreateSource() 获取
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 页面手动创建 |
| 2 | 自然语言对话创建 |
 * @method void setCreateSource(integer $CreateSource) 设置
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 页面手动创建 |
| 2 | 自然语言对话创建 |
 * @method string getInputContextSnapshot() 获取输入上下文
 * @method void setInputContextSnapshot(string $InputContextSnapshot) 设置输入上下文
 * @method string getModelId() 获取模型
 * @method void setModelId(string $ModelId) 设置模型
 * @method string getPrompt() 获取提示词
 * @method void setPrompt(string $Prompt) 设置提示词
 * @method TimerPushConfig getPushConfig() 获取推送配置
 * @method void setPushConfig(TimerPushConfig $PushConfig) 设置推送配置
 * @method TimerScheduleConfig getSchedule() 获取定时配置
 * @method void setSchedule(TimerScheduleConfig $Schedule) 设置定时配置
 * @method string getSkillSnapshot() 获取skill
 * @method void setSkillSnapshot(string $SkillSnapshot) 设置skill
 * @method string getSpaceId() 获取空间
 * @method void setSpaceId(string $SpaceId) 设置空间
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getToolSnapshot() 获取工具
 * @method void setToolSnapshot(string $ToolSnapshot) 设置工具
 * @method string getWorkspaceId() 获取工作空间
 * @method void setWorkspaceId(string $WorkspaceId) 设置工作空间
 * @method string getLoginUin() 获取主用户
 * @method void setLoginUin(string $LoginUin) 设置主用户
 * @method string getLoginSubAccountUin() 获取子用户
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置子用户
 */
class CreateTimerTaskRequest extends AbstractModel
{
    /**
     * @var integer 
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 页面手动创建 |
| 2 | 自然语言对话创建 |
     */
    public $CreateSource;

    /**
     * @var string 输入上下文
     */
    public $InputContextSnapshot;

    /**
     * @var string 模型
     */
    public $ModelId;

    /**
     * @var string 提示词
     */
    public $Prompt;

    /**
     * @var TimerPushConfig 推送配置
     */
    public $PushConfig;

    /**
     * @var TimerScheduleConfig 定时配置
     */
    public $Schedule;

    /**
     * @var string skill
     */
    public $SkillSnapshot;

    /**
     * @var string 空间
     */
    public $SpaceId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 工具
     */
    public $ToolSnapshot;

    /**
     * @var string 工作空间
     */
    public $WorkspaceId;

    /**
     * @var string 主用户
     */
    public $LoginUin;

    /**
     * @var string 子用户
     */
    public $LoginSubAccountUin;

    /**
     * @param integer $CreateSource 
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 页面手动创建 |
| 2 | 自然语言对话创建 |
     * @param string $InputContextSnapshot 输入上下文
     * @param string $ModelId 模型
     * @param string $Prompt 提示词
     * @param TimerPushConfig $PushConfig 推送配置
     * @param TimerScheduleConfig $Schedule 定时配置
     * @param string $SkillSnapshot skill
     * @param string $SpaceId 空间
     * @param string $TaskName 任务名称
     * @param string $ToolSnapshot 工具
     * @param string $WorkspaceId 工作空间
     * @param string $LoginUin 主用户
     * @param string $LoginSubAccountUin 子用户
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
        if (array_key_exists("CreateSource",$param) and $param["CreateSource"] !== null) {
            $this->CreateSource = $param["CreateSource"];
        }

        if (array_key_exists("InputContextSnapshot",$param) and $param["InputContextSnapshot"] !== null) {
            $this->InputContextSnapshot = $param["InputContextSnapshot"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("PushConfig",$param) and $param["PushConfig"] !== null) {
            $this->PushConfig = new TimerPushConfig();
            $this->PushConfig->deserialize($param["PushConfig"]);
        }

        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = new TimerScheduleConfig();
            $this->Schedule->deserialize($param["Schedule"]);
        }

        if (array_key_exists("SkillSnapshot",$param) and $param["SkillSnapshot"] !== null) {
            $this->SkillSnapshot = $param["SkillSnapshot"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ToolSnapshot",$param) and $param["ToolSnapshot"] !== null) {
            $this->ToolSnapshot = $param["ToolSnapshot"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
