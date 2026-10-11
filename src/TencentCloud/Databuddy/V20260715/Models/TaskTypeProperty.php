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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务类型属性键值对
 *
 * @method string getPropertyKey() 获取<p>属性键名。用于TaskType内的入参时，若不传或为空，该属性项被服务端静默忽略（不报错），等同于该属性未配置。合法 PropertyKey 清单请参考TaskType中描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropertyKey(string $PropertyKey) 设置<p>属性键名。用于TaskType内的入参时，若不传或为空，该属性项被服务端静默忽略（不报错），等同于该属性未配置。合法 PropertyKey 清单请参考TaskType中描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPropertyValue() 获取<p>属性值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropertyValue(string $PropertyValue) 设置<p>属性值</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskTypeProperty extends AbstractModel
{
    /**
     * @var string <p>属性键名。用于TaskType内的入参时，若不传或为空，该属性项被服务端静默忽略（不报错），等同于该属性未配置。合法 PropertyKey 清单请参考TaskType中描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropertyKey;

    /**
     * @var string <p>属性值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropertyValue;

    /**
     * @param string $PropertyKey <p>属性键名。用于TaskType内的入参时，若不传或为空，该属性项被服务端静默忽略（不报错），等同于该属性未配置。合法 PropertyKey 清单请参考TaskType中描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PropertyValue <p>属性值</p>
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
        if (array_key_exists("PropertyKey",$param) and $param["PropertyKey"] !== null) {
            $this->PropertyKey = $param["PropertyKey"];
        }

        if (array_key_exists("PropertyValue",$param) and $param["PropertyValue"] !== null) {
            $this->PropertyValue = $param["PropertyValue"];
        }
    }
}
