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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话详情
 *
 * @method string getRole() 获取角色
 * @method void setRole(string $Role) 设置角色
 * @method string getUserMessage() 获取用户消息
 * @method void setUserMessage(string $UserMessage) 设置用户消息
 * @method array getAssistantMessage() 获取助手消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssistantMessage(array $AssistantMessage) 设置助手消息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChatDetail extends AbstractModel
{
    /**
     * @var string 角色
     */
    public $Role;

    /**
     * @var string 用户消息
     */
    public $UserMessage;

    /**
     * @var array 助手消息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssistantMessage;

    /**
     * @param string $Role 角色
     * @param string $UserMessage 用户消息
     * @param array $AssistantMessage 助手消息
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("UserMessage",$param) and $param["UserMessage"] !== null) {
            $this->UserMessage = $param["UserMessage"];
        }

        if (array_key_exists("AssistantMessage",$param) and $param["AssistantMessage"] !== null) {
            $this->AssistantMessage = [];
            foreach ($param["AssistantMessage"] as $key => $value){
                $obj = new CreateChatCompletionRes();
                $obj->deserialize($value);
                array_push($this->AssistantMessage, $obj);
            }
        }
    }
}
