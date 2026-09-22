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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云 API 通用过滤结构。多个 Filter 之间为 AND 关系；同一 Filter 内多个 Values 为 OR 关系。
 *
 * @method string getName() 获取过滤属性名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置过滤属性名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取过滤值列表（同一 Filter 内多个值为 OR 关系）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置过滤值列表（同一 Filter 内多个值为 OR 关系）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getExactMatch() 获取是否精确匹配，默认 false（模糊匹配）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExactMatch(boolean $ExactMatch) 设置是否精确匹配，默认 false（模糊匹配）
注意：此字段可能返回 null，表示取不到有效值。
 */
class Filter extends AbstractModel
{
    /**
     * @var string 过滤属性名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 过滤值列表（同一 Filter 内多个值为 OR 关系）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @var boolean 是否精确匹配，默认 false（模糊匹配）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExactMatch;

    /**
     * @param string $Name 过滤属性名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values 过滤值列表（同一 Filter 内多个值为 OR 关系）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ExactMatch 是否精确匹配，默认 false（模糊匹配）
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}
