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
 * 版本元数据的字符串名称和值。Name 必须非空、小写且在同一 Metadata 数组内唯一；重复名称不允许覆盖。
 *
 * @method string getName() 获取<p>元数据名称。</p><p>参数格式：非空小写字符串，同一 Metadata 数组内唯一，不自动转换大小写。重复名称返回 InvalidParameter，即使 Value 相同也拒绝。</p>
 * @method void setName(string $Name) 设置<p>元数据名称。</p><p>参数格式：非空小写字符串，同一 Metadata 数组内唯一，不自动转换大小写。重复名称返回 InvalidParameter，即使 Value 相同也拒绝。</p>
 * @method string getValue() 获取<p>元数据的字符串值。</p><p>参数格式：允许空字符串，保留大小写，不支持嵌套对象、数组、数字、布尔值或 null。publisher 的 Value 为发布者展示名称。</p>
 * @method void setValue(string $Value) 设置<p>元数据的字符串值。</p><p>参数格式：允许空字符串，保留大小写，不支持嵌套对象、数组、数字、布尔值或 null。publisher 的 Value 为发布者展示名称。</p>
 */
class MetadataEntry extends AbstractModel
{
    /**
     * @var string <p>元数据名称。</p><p>参数格式：非空小写字符串，同一 Metadata 数组内唯一，不自动转换大小写。重复名称返回 InvalidParameter，即使 Value 相同也拒绝。</p>
     */
    public $Name;

    /**
     * @var string <p>元数据的字符串值。</p><p>参数格式：允许空字符串，保留大小写，不支持嵌套对象、数组、数字、布尔值或 null。publisher 的 Value 为发布者展示名称。</p>
     */
    public $Value;

    /**
     * @param string $Name <p>元数据名称。</p><p>参数格式：非空小写字符串，同一 Metadata 数组内唯一，不自动转换大小写。重复名称返回 InvalidParameter，即使 Value 相同也拒绝。</p>
     * @param string $Value <p>元数据的字符串值。</p><p>参数格式：允许空字符串，保留大小写，不支持嵌套对象、数组、数字、布尔值或 null。publisher 的 Value 为发布者展示名称。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
