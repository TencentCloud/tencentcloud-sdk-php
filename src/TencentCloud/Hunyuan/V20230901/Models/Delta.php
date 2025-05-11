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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回的内容（流式返回）
 *
 * @method string getRole() 获取角色名称。
 * @method void setRole(string $Role) 设置角色名称。
 * @method string getContent() 获取内容详情。
 * @method void setContent(string $Content) 设置内容详情。
 * @method array getToolCalls() 获取模型生成的工具调用，仅 hunyuan-functioncall 模型支持
说明：
对于每一次的输出值应该以Id为标识对Type、Name、Arguments字段进行合并。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToolCalls(array $ToolCalls) 设置模型生成的工具调用，仅 hunyuan-functioncall 模型支持
说明：
对于每一次的输出值应该以Id为标识对Type、Name、Arguments字段进行合并。

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReasoningContent() 获取思维链内容。用于展示模型思考过程，仅 Hunyuan-T1 系列模型可用。注意：在进行多轮对话时，请不要将此字段拼接到 messages 中。请求 messages 的请求参数中包含 reasoning_content，接口将报错。
 * @method void setReasoningContent(string $ReasoningContent) 设置思维链内容。用于展示模型思考过程，仅 Hunyuan-T1 系列模型可用。注意：在进行多轮对话时，请不要将此字段拼接到 messages 中。请求 messages 的请求参数中包含 reasoning_content，接口将报错。
 */
class Delta extends AbstractModel
{
    /**
     * @var string 角色名称。
     */
    public $Role;

    /**
     * @var string 内容详情。
     */
    public $Content;

    /**
     * @var array 模型生成的工具调用，仅 hunyuan-functioncall 模型支持
说明：
对于每一次的输出值应该以Id为标识对Type、Name、Arguments字段进行合并。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToolCalls;

    /**
     * @var string 思维链内容。用于展示模型思考过程，仅 Hunyuan-T1 系列模型可用。注意：在进行多轮对话时，请不要将此字段拼接到 messages 中。请求 messages 的请求参数中包含 reasoning_content，接口将报错。
     */
    public $ReasoningContent;

    /**
     * @param string $Role 角色名称。
     * @param string $Content 内容详情。
     * @param array $ToolCalls 模型生成的工具调用，仅 hunyuan-functioncall 模型支持
说明：
对于每一次的输出值应该以Id为标识对Type、Name、Arguments字段进行合并。

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReasoningContent 思维链内容。用于展示模型思考过程，仅 Hunyuan-T1 系列模型可用。注意：在进行多轮对话时，请不要将此字段拼接到 messages 中。请求 messages 的请求参数中包含 reasoning_content，接口将报错。
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

        if (array_key_exists("ToolCalls",$param) and $param["ToolCalls"] !== null) {
            $this->ToolCalls = [];
            foreach ($param["ToolCalls"] as $key => $value){
                $obj = new ToolCall();
                $obj->deserialize($value);
                array_push($this->ToolCalls, $obj);
            }
        }

        if (array_key_exists("ReasoningContent",$param) and $param["ReasoningContent"] !== null) {
            $this->ReasoningContent = $param["ReasoningContent"];
        }
    }
}
