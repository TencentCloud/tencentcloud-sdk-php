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
 * 体验配置
 *
 * @method AppAdvancedConf getAdvanced() 获取高级配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvanced(AppAdvancedConf $Advanced) 设置高级配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConversationExperience getConversation() 获取对话体验配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConversation(ConversationExperience $Conversation) 设置对话体验配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method RoleConfig getRole() 获取角色配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRole(RoleConfig $Role) 设置角色配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class AppExperienceConfig extends AbstractModel
{
    /**
     * @var AppAdvancedConf 高级配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Advanced;

    /**
     * @var ConversationExperience 对话体验配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conversation;

    /**
     * @var RoleConfig 角色配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Role;

    /**
     * @param AppAdvancedConf $Advanced 高级配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConversationExperience $Conversation 对话体验配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param RoleConfig $Role 角色配置
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
        if (array_key_exists("Advanced",$param) and $param["Advanced"] !== null) {
            $this->Advanced = new AppAdvancedConf();
            $this->Advanced->deserialize($param["Advanced"]);
        }

        if (array_key_exists("Conversation",$param) and $param["Conversation"] !== null) {
            $this->Conversation = new ConversationExperience();
            $this->Conversation->deserialize($param["Conversation"]);
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = new RoleConfig();
            $this->Role->deserialize($param["Role"]);
        }
    }
}
