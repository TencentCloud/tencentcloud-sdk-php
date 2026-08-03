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
 * 单次对话记录统计信息
 *
 * @method string getRecordId() 获取<p>回复记录 ID，对应 messages 中回复消息的 record_id</p>
 * @method void setRecordId(string $RecordId) 设置<p>回复记录 ID，对应 messages 中回复消息的 record_id</p>
 * @method string getRelatedRecordId() 获取<p>用户提问记录 ID，对应 messages 中用户消息的 record_id</p>
 * @method void setRelatedRecordId(string $RelatedRecordId) 设置<p>用户提问记录 ID，对应 messages 中用户消息的 record_id</p>
 * @method ConversationRecordTimeUsage getTimeUsage() 获取<p>单次对话耗时信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeUsage(ConversationRecordTimeUsage $TimeUsage) 设置<p>单次对话耗时信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConversationRecordTokenUsage getTokenUsage() 获取<p>单次对话 token 消耗信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenUsage(ConversationRecordTokenUsage $TokenUsage) 设置<p>单次对话 token 消耗信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConversationRecordErrorInfo getErrorInfo() 获取<p>单次对话失败信息；成功时为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorInfo(ConversationRecordErrorInfo $ErrorInfo) 设置<p>单次对话失败信息；成功时为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>单次员工助理对话当前状态</p><p>枚举值：</p><ul><li>pending： 待处理</li><li>processing： 处理中</li><li>success： 成功</li><li>failed： 失败</li><li>stop： 停止</li></ul>
 * @method void setStatus(string $Status) 设置<p>单次员工助理对话当前状态</p><p>枚举值：</p><ul><li>pending： 待处理</li><li>processing： 处理中</li><li>success： 成功</li><li>failed： 失败</li><li>stop： 停止</li></ul>
 */
class ConversationRecordSummary extends AbstractModel
{
    /**
     * @var string <p>回复记录 ID，对应 messages 中回复消息的 record_id</p>
     */
    public $RecordId;

    /**
     * @var string <p>用户提问记录 ID，对应 messages 中用户消息的 record_id</p>
     */
    public $RelatedRecordId;

    /**
     * @var ConversationRecordTimeUsage <p>单次对话耗时信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeUsage;

    /**
     * @var ConversationRecordTokenUsage <p>单次对话 token 消耗信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenUsage;

    /**
     * @var ConversationRecordErrorInfo <p>单次对话失败信息；成功时为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorInfo;

    /**
     * @var string <p>单次员工助理对话当前状态</p><p>枚举值：</p><ul><li>pending： 待处理</li><li>processing： 处理中</li><li>success： 成功</li><li>failed： 失败</li><li>stop： 停止</li></ul>
     */
    public $Status;

    /**
     * @param string $RecordId <p>回复记录 ID，对应 messages 中回复消息的 record_id</p>
     * @param string $RelatedRecordId <p>用户提问记录 ID，对应 messages 中用户消息的 record_id</p>
     * @param ConversationRecordTimeUsage $TimeUsage <p>单次对话耗时信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConversationRecordTokenUsage $TokenUsage <p>单次对话 token 消耗信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConversationRecordErrorInfo $ErrorInfo <p>单次对话失败信息；成功时为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>单次员工助理对话当前状态</p><p>枚举值：</p><ul><li>pending： 待处理</li><li>processing： 处理中</li><li>success： 成功</li><li>failed： 失败</li><li>stop： 停止</li></ul>
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("RelatedRecordId",$param) and $param["RelatedRecordId"] !== null) {
            $this->RelatedRecordId = $param["RelatedRecordId"];
        }

        if (array_key_exists("TimeUsage",$param) and $param["TimeUsage"] !== null) {
            $this->TimeUsage = new ConversationRecordTimeUsage();
            $this->TimeUsage->deserialize($param["TimeUsage"]);
        }

        if (array_key_exists("TokenUsage",$param) and $param["TokenUsage"] !== null) {
            $this->TokenUsage = new ConversationRecordTokenUsage();
            $this->TokenUsage->deserialize($param["TokenUsage"]);
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = new ConversationRecordErrorInfo();
            $this->ErrorInfo->deserialize($param["ErrorInfo"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
