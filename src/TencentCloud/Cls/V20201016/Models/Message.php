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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话内容
 *
 * @method string getRole() 获取<p>角色</p><p>枚举值：</p><ul><li>user： 用户</li><li>assistant： AI助手</li></ul>
 * @method void setRole(string $Role) 设置<p>角色</p><p>枚举值：</p><ul><li>user： 用户</li><li>assistant： AI助手</li></ul>
 * @method string getContent() 获取<p>文本内容</p>
 * @method void setContent(string $Content) 设置<p>文本内容</p>
 * @method string getReasoningContent() 获取<p>思维链内容。<br>用于展示模型思考过程，仅深度思考模式可用。仅作为输出参数返回，在进行多轮对话时，无需传入输入参数中。</p>
 * @method void setReasoningContent(string $ReasoningContent) 设置<p>思维链内容。<br>用于展示模型思考过程，仅深度思考模式可用。仅作为输出参数返回，在进行多轮对话时，无需传入输入参数中。</p>
 * @method array getToolCalls() 获取<p>模型生成的工具调用。仅支持输出参数返回。</p>
 * @method void setToolCalls(array $ToolCalls) 设置<p>模型生成的工具调用。仅支持输出参数返回。</p>
 */
class Message extends AbstractModel
{
    /**
     * @var string <p>角色</p><p>枚举值：</p><ul><li>user： 用户</li><li>assistant： AI助手</li></ul>
     */
    public $Role;

    /**
     * @var string <p>文本内容</p>
     */
    public $Content;

    /**
     * @var string <p>思维链内容。<br>用于展示模型思考过程，仅深度思考模式可用。仅作为输出参数返回，在进行多轮对话时，无需传入输入参数中。</p>
     */
    public $ReasoningContent;

    /**
     * @var array <p>模型生成的工具调用。仅支持输出参数返回。</p>
     */
    public $ToolCalls;

    /**
     * @param string $Role <p>角色</p><p>枚举值：</p><ul><li>user： 用户</li><li>assistant： AI助手</li></ul>
     * @param string $Content <p>文本内容</p>
     * @param string $ReasoningContent <p>思维链内容。<br>用于展示模型思考过程，仅深度思考模式可用。仅作为输出参数返回，在进行多轮对话时，无需传入输入参数中。</p>
     * @param array $ToolCalls <p>模型生成的工具调用。仅支持输出参数返回。</p>
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
