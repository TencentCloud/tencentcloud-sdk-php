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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标服务实例实例标签信息
 *
 * @method string getLabelKey() 获取标签键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelKey(string $LabelKey) 设置标签键
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelValue() 获取标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelValue(string $LabelValue) 设置标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelType() 获取表达式类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelType(string $LabelType) 设置表达式类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelValueType() 获取值类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelValueType(string $LabelValueType) 设置值类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class RoutingDestinationRuleLabel extends AbstractModel
{
    /**
     * @var string 标签键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelKey;

    /**
     * @var string 标签值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelValue;

    /**
     * @var string 表达式类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelType;

    /**
     * @var string 值类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelValueType;

    /**
     * @param string $LabelKey 标签键
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelValue 标签值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelType 表达式类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelValueType 值类型
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
        if (array_key_exists("LabelKey",$param) and $param["LabelKey"] !== null) {
            $this->LabelKey = $param["LabelKey"];
        }

        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }

        if (array_key_exists("LabelType",$param) and $param["LabelType"] !== null) {
            $this->LabelType = $param["LabelType"];
        }

        if (array_key_exists("LabelValueType",$param) and $param["LabelValueType"] !== null) {
            $this->LabelValueType = $param["LabelValueType"];
        }
    }
}
