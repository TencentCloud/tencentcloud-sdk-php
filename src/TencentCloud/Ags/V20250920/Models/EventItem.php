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
 * 用于描述事件中心中的一条事件记录，包含事件标识、所属资源、事件类型、级别、发生时间、原因及业务扩展信息。
 *
 * @method string getEventId() 获取<p>事件唯一标识，用于区分事件及识别重复投递。聚合模式下为该聚合结果代表事件的标识。</p>
 * @method void setEventId(string $EventId) 设置<p>事件唯一标识，用于区分事件及识别重复投递。聚合模式下为该聚合结果代表事件的标识。</p>
 * @method string getSource() 获取<p>事件来源。</p>
 * @method void setSource(string $Source) 设置<p>事件来源。</p>
 * @method string getObjectType() 获取<p>事件关联的对象类型。</p>
 * @method void setObjectType(string $ObjectType) 设置<p>事件关联的对象类型。</p>
 * @method string getObjectId() 获取<p>事件关联的对象 ID。</p>
 * @method void setObjectId(string $ObjectId) 设置<p>事件关联的对象 ID。</p>
 * @method string getEventLevel() 获取<p>事件级别。Normal 表示正常事件，Warning 表示告警事件。</p>
 * @method void setEventLevel(string $EventLevel) 设置<p>事件级别。Normal 表示正常事件，Warning 表示告警事件。</p>
 * @method string getEventType() 获取<p>事件类型。</p>
 * @method void setEventType(string $EventType) 设置<p>事件类型。</p>
 * @method string getReason() 获取<p>事件原因标识，无原因信息时不返回。例如 Manual 表示通过停止接口主动停止，包括人工、脚本或 SDK 调用，不代表一定由人工操作。</p>
 * @method void setReason(string $Reason) 设置<p>事件原因标识，无原因信息时不返回。例如 Manual 表示通过停止接口主动停止，包括人工、脚本或 SDK 调用，不代表一定由人工操作。</p>
 * @method string getMessage() 获取<p>事件的说明文本。建议使用 EventType 和 Reason 判断事件类型及原因，不依赖说明文本进行业务判断。</p>
 * @method void setMessage(string $Message) 设置<p>事件的说明文本。建议使用 EventType 和 Reason 判断事件类型及原因，不依赖说明文本进行业务判断。</p>
 * @method string getExtensions() 获取<p>事件扩展信息，以 JSON 字符串返回。当前 Sandbox 事件包含 ToolId、ToolType，以及可选的 ToolName。调用方需解析 JSON 字符串后读取扩展字段。</p>
 * @method void setExtensions(string $Extensions) 设置<p>事件扩展信息，以 JSON 字符串返回。当前 Sandbox 事件包含 ToolId、ToolType，以及可选的 ToolName。调用方需解析 JSON 字符串后读取扩展字段。</p>
 * @method string getOccurredAt() 获取<p>事件发生时间，RFC3339 格式。仅 Raw 模式返回。</p>
 * @method void setOccurredAt(string $OccurredAt) 设置<p>事件发生时间，RFC3339 格式。仅 Raw 模式返回。</p>
 * @method integer getCount() 获取<p>当前查询范围内，该聚合结果包含的去重事件数。仅 Aggregate 模式返回。当前生命周期事件逐条展示，该值为 1。</p>
 * @method void setCount(integer $Count) 设置<p>当前查询范围内，该聚合结果包含的去重事件数。仅 Aggregate 模式返回。当前生命周期事件逐条展示，该值为 1。</p>
 * @method string getFirstOccurredAt() 获取<p>当前查询范围内，该聚合结果中最早的事件发生时间，RFC3339 格式。仅 Aggregate 模式返回，不代表该对象历史上的首次事件时间。</p>
 * @method void setFirstOccurredAt(string $FirstOccurredAt) 设置<p>当前查询范围内，该聚合结果中最早的事件发生时间，RFC3339 格式。仅 Aggregate 模式返回，不代表该对象历史上的首次事件时间。</p>
 * @method string getLastOccurredAt() 获取<p>当前查询范围内，该聚合结果中最近的事件发生时间，RFC3339 格式。仅 Aggregate 模式返回，不代表该对象此后不会再发生事件。</p>
 * @method void setLastOccurredAt(string $LastOccurredAt) 设置<p>当前查询范围内，该聚合结果中最近的事件发生时间，RFC3339 格式。仅 Aggregate 模式返回，不代表该对象此后不会再发生事件。</p>
 */
class EventItem extends AbstractModel
{
    /**
     * @var string <p>事件唯一标识，用于区分事件及识别重复投递。聚合模式下为该聚合结果代表事件的标识。</p>
     */
    public $EventId;

    /**
     * @var string <p>事件来源。</p>
     */
    public $Source;

    /**
     * @var string <p>事件关联的对象类型。</p>
     */
    public $ObjectType;

    /**
     * @var string <p>事件关联的对象 ID。</p>
     */
    public $ObjectId;

    /**
     * @var string <p>事件级别。Normal 表示正常事件，Warning 表示告警事件。</p>
     */
    public $EventLevel;

    /**
     * @var string <p>事件类型。</p>
     */
    public $EventType;

    /**
     * @var string <p>事件原因标识，无原因信息时不返回。例如 Manual 表示通过停止接口主动停止，包括人工、脚本或 SDK 调用，不代表一定由人工操作。</p>
     */
    public $Reason;

    /**
     * @var string <p>事件的说明文本。建议使用 EventType 和 Reason 判断事件类型及原因，不依赖说明文本进行业务判断。</p>
     */
    public $Message;

    /**
     * @var string <p>事件扩展信息，以 JSON 字符串返回。当前 Sandbox 事件包含 ToolId、ToolType，以及可选的 ToolName。调用方需解析 JSON 字符串后读取扩展字段。</p>
     */
    public $Extensions;

    /**
     * @var string <p>事件发生时间，RFC3339 格式。仅 Raw 模式返回。</p>
     */
    public $OccurredAt;

    /**
     * @var integer <p>当前查询范围内，该聚合结果包含的去重事件数。仅 Aggregate 模式返回。当前生命周期事件逐条展示，该值为 1。</p>
     */
    public $Count;

    /**
     * @var string <p>当前查询范围内，该聚合结果中最早的事件发生时间，RFC3339 格式。仅 Aggregate 模式返回，不代表该对象历史上的首次事件时间。</p>
     */
    public $FirstOccurredAt;

    /**
     * @var string <p>当前查询范围内，该聚合结果中最近的事件发生时间，RFC3339 格式。仅 Aggregate 模式返回，不代表该对象此后不会再发生事件。</p>
     */
    public $LastOccurredAt;

    /**
     * @param string $EventId <p>事件唯一标识，用于区分事件及识别重复投递。聚合模式下为该聚合结果代表事件的标识。</p>
     * @param string $Source <p>事件来源。</p>
     * @param string $ObjectType <p>事件关联的对象类型。</p>
     * @param string $ObjectId <p>事件关联的对象 ID。</p>
     * @param string $EventLevel <p>事件级别。Normal 表示正常事件，Warning 表示告警事件。</p>
     * @param string $EventType <p>事件类型。</p>
     * @param string $Reason <p>事件原因标识，无原因信息时不返回。例如 Manual 表示通过停止接口主动停止，包括人工、脚本或 SDK 调用，不代表一定由人工操作。</p>
     * @param string $Message <p>事件的说明文本。建议使用 EventType 和 Reason 判断事件类型及原因，不依赖说明文本进行业务判断。</p>
     * @param string $Extensions <p>事件扩展信息，以 JSON 字符串返回。当前 Sandbox 事件包含 ToolId、ToolType，以及可选的 ToolName。调用方需解析 JSON 字符串后读取扩展字段。</p>
     * @param string $OccurredAt <p>事件发生时间，RFC3339 格式。仅 Raw 模式返回。</p>
     * @param integer $Count <p>当前查询范围内，该聚合结果包含的去重事件数。仅 Aggregate 模式返回。当前生命周期事件逐条展示，该值为 1。</p>
     * @param string $FirstOccurredAt <p>当前查询范围内，该聚合结果中最早的事件发生时间，RFC3339 格式。仅 Aggregate 模式返回，不代表该对象历史上的首次事件时间。</p>
     * @param string $LastOccurredAt <p>当前查询范围内，该聚合结果中最近的事件发生时间，RFC3339 格式。仅 Aggregate 模式返回，不代表该对象此后不会再发生事件。</p>
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

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("EventLevel",$param) and $param["EventLevel"] !== null) {
            $this->EventLevel = $param["EventLevel"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Extensions",$param) and $param["Extensions"] !== null) {
            $this->Extensions = $param["Extensions"];
        }

        if (array_key_exists("OccurredAt",$param) and $param["OccurredAt"] !== null) {
            $this->OccurredAt = $param["OccurredAt"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("FirstOccurredAt",$param) and $param["FirstOccurredAt"] !== null) {
            $this->FirstOccurredAt = $param["FirstOccurredAt"];
        }

        if (array_key_exists("LastOccurredAt",$param) and $param["LastOccurredAt"] !== null) {
            $this->LastOccurredAt = $param["LastOccurredAt"];
        }
    }
}
