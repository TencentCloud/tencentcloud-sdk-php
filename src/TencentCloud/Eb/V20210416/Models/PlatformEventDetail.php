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
 * 平台事件名称
 *
 * @method string getEventName() 获取<p>事件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventName(string $EventName) 设置<p>事件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventType() 获取<p>事件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventType(string $EventType) 设置<p>事件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PlatformEventDetail extends AbstractModel
{
    /**
     * @var string <p>事件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventName;

    /**
     * @var string <p>事件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventType;

    /**
     * @param string $EventName <p>事件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventType <p>事件类型</p>
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

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }
    }
}
