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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 平台事件匹配规则
 *
 * @method string getEventName() 获取平台事件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventName(string $EventName) 设置平台事件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventPattern() 获取平台事件匹配规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventPattern(string $EventPattern) 设置平台事件匹配规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class PlatformEventSummary extends AbstractModel
{
    /**
     * @var string 平台事件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventName;

    /**
     * @var string 平台事件匹配规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventPattern;

    /**
     * @param string $EventName 平台事件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventPattern 平台事件匹配规则
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventPattern",$param) and $param["EventPattern"] !== null) {
            $this->EventPattern = $param["EventPattern"];
        }
    }
}
