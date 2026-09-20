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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件信息
 *
 * @method string getEventId() 获取<p>事件 ID。为空时由服务生成。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventId(string $EventId) 设置<p>事件 ID。为空时由服务生成。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInvocationId() 获取<p>调用 ID，最大长度 128 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvocationId(string $InvocationId) 设置<p>调用 ID，最大长度 128 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthor() 获取<p>事件作者，最大长度 128 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthor(string $Author) 设置<p>事件作者，最大长度 128 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method EventContentInfo getContent() 获取<p>事件内容。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(EventContentInfo $Content) 设置<p>事件内容。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method EventActionsInfo getActions() 获取<p>事件动作信息。StateDelta 为 JSON 对象字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActions(EventActionsInfo $Actions) 设置<p>事件动作信息。StateDelta 为 JSON 对象字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetadata() 获取<p>事件元数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadata(string $Metadata) 设置<p>事件元数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtensions() 获取<p>事件扩展信息 JSON 对象字符串，最大长度 8192 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtensions(string $Extensions) 设置<p>事件扩展信息 JSON 对象字符串，最大长度 8192 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCode() 获取<p>错误码，最大长度 128 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCode(string $ErrorCode) 设置<p>错误码，最大长度 128 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取<p>错误信息，最大长度 2048 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>错误信息，最大长度 2048 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimestamp() 获取<p>事件时间。</p>
 * @method void setTimestamp(string $Timestamp) 设置<p>事件时间。</p>
 */
class EventInfo extends AbstractModel
{
    /**
     * @var string <p>事件 ID。为空时由服务生成。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventId;

    /**
     * @var string <p>调用 ID，最大长度 128 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvocationId;

    /**
     * @var string <p>事件作者，最大长度 128 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Author;

    /**
     * @var EventContentInfo <p>事件内容。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var EventActionsInfo <p>事件动作信息。StateDelta 为 JSON 对象字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Actions;

    /**
     * @var string <p>事件元数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadata;

    /**
     * @var string <p>事件扩展信息 JSON 对象字符串，最大长度 8192 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extensions;

    /**
     * @var string <p>错误码，最大长度 128 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCode;

    /**
     * @var string <p>错误信息，最大长度 2048 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string <p>事件时间。</p>
     */
    public $Timestamp;

    /**
     * @param string $EventId <p>事件 ID。为空时由服务生成。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InvocationId <p>调用 ID，最大长度 128 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Author <p>事件作者，最大长度 128 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param EventContentInfo $Content <p>事件内容。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param EventActionsInfo $Actions <p>事件动作信息。StateDelta 为 JSON 对象字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Metadata <p>事件元数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extensions <p>事件扩展信息 JSON 对象字符串，最大长度 8192 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCode <p>错误码，最大长度 128 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage <p>错误信息，最大长度 2048 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Timestamp <p>事件时间。</p>
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            $this->InvocationId = $param["InvocationId"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new EventContentInfo();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = new EventActionsInfo();
            $this->Actions->deserialize($param["Actions"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("Extensions",$param) and $param["Extensions"] !== null) {
            $this->Extensions = $param["Extensions"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}
