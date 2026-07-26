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
 * TimerProfile
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
 * @method string getInputContextSnapshot() 获取输入上下文快照
 * @method void setInputContextSnapshot(string $InputContextSnapshot) 设置输入上下文快照
 * @method string getModelId() 获取模型
 * @method void setModelId(string $ModelId) 设置模型
 * @method string getPrompt() 获取提示词
 * @method void setPrompt(string $Prompt) 设置提示词
 * @method string getSkillSnapshot() 获取skill快照
 * @method void setSkillSnapshot(string $SkillSnapshot) 设置skill快照
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getToolSnapshot() 获取工具快照
 * @method void setToolSnapshot(string $ToolSnapshot) 设置工具快照
 * @method string getWorkspaceId() 获取工作目录
 * @method void setWorkspaceId(string $WorkspaceId) 设置工作目录
 */
class TimerProfile extends AbstractModel
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
     * @var string 输入上下文快照
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
     * @var string skill快照
     */
    public $SkillSnapshot;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 工具快照
     */
    public $ToolSnapshot;

    /**
     * @var string 工作目录
     */
    public $WorkspaceId;

    /**
     * @param integer $CreateSource 
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 页面手动创建 |
| 2 | 自然语言对话创建 |
     * @param string $InputContextSnapshot 输入上下文快照
     * @param string $ModelId 模型
     * @param string $Prompt 提示词
     * @param string $SkillSnapshot skill快照
     * @param string $TaskName 任务名称
     * @param string $ToolSnapshot 工具快照
     * @param string $WorkspaceId 工作目录
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

        if (array_key_exists("SkillSnapshot",$param) and $param["SkillSnapshot"] !== null) {
            $this->SkillSnapshot = $param["SkillSnapshot"];
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
    }
}
