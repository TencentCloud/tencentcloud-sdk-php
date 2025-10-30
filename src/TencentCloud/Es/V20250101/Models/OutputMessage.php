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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话内容，按对话时间从旧到新在数组中排列，长度受模型窗口大小限制。
 *
 * @method string getRole() 获取角色
 * @method void setRole(string $Role) 设置角色
 * @method string getContent() 获取文本内容	
 * @method void setContent(string $Content) 设置文本内容	
 * @method string getReasoningContent() 获取推理内容	
 * @method void setReasoningContent(string $ReasoningContent) 设置推理内容	
 * @method array getToolCalls() 获取模型生成的工具调用
 * @method void setToolCalls(array $ToolCalls) 设置模型生成的工具调用
 */
class OutputMessage extends AbstractModel
{
    /**
     * @var string 角色
     */
    public $Role;

    /**
     * @var string 文本内容	
     */
    public $Content;

    /**
     * @var string 推理内容	
     */
    public $ReasoningContent;

    /**
     * @var array 模型生成的工具调用
     */
    public $ToolCalls;

    /**
     * @param string $Role 角色
     * @param string $Content 文本内容	
     * @param string $ReasoningContent 推理内容	
     * @param array $ToolCalls 模型生成的工具调用
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ReasoningContent",$param) and $param["ReasoningContent"] !== null) {
            $this->ReasoningContent = $param["ReasoningContent"];
        }

        if (array_key_exists("ToolCalls",$param) and $param["ToolCalls"] !== null) {
            $this->ToolCalls = [];
            foreach ($param["ToolCalls"] as $key => $value){
                $obj = new ToolCall();
                $obj->deserialize($value);
                array_push($this->ToolCalls, $obj);
            }
        }
    }
}
