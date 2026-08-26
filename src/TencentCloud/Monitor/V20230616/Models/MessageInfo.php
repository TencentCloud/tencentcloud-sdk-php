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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息实体
 *
 * @method string getEntryId() 获取<p>实体id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntryId(string $EntryId) 设置<p>实体id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取<p>会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRole() 获取<p>角色: user / assistant</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRole(string $Role) 设置<p>角色: user / assistant</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取<p>消息内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置<p>消息内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method array getContentBlocks() 获取<p>块内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentBlocks(array $ContentBlocks) 设置<p>块内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MessageInfo extends AbstractModel
{
    /**
     * @var string <p>实体id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntryId;

    /**
     * @var string <p>会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string <p>角色: user / assistant</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Role;

    /**
     * @var string <p>消息内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var array <p>块内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentBlocks;

    /**
     * @param string $EntryId <p>实体id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId <p>会话 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Role <p>角色: user / assistant</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content <p>消息内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>状态</p>
     * @param array $ContentBlocks <p>块内容</p>
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
        if (array_key_exists("EntryId",$param) and $param["EntryId"] !== null) {
            $this->EntryId = $param["EntryId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ContentBlocks",$param) and $param["ContentBlocks"] !== null) {
            $this->ContentBlocks = [];
            foreach ($param["ContentBlocks"] as $key => $value){
                $obj = new ContentBlockInfo();
                $obj->deserialize($value);
                array_push($this->ContentBlocks, $obj);
            }
        }
    }
}
