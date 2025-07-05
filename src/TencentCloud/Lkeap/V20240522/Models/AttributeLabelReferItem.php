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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 属性标签引用
 *
 * @method string getAttributeId() 获取属性id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttributeId(string $AttributeId) 设置属性id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelIds() 获取标签id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelIds(array $LabelIds) 设置标签id
注意：此字段可能返回 null，表示取不到有效值。
 */
class AttributeLabelReferItem extends AbstractModel
{
    /**
     * @var string 属性id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttributeId;

    /**
     * @var array 标签id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelIds;

    /**
     * @param string $AttributeId 属性id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelIds 标签id
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
        if (array_key_exists("AttributeId",$param) and $param["AttributeId"] !== null) {
            $this->AttributeId = $param["AttributeId"];
        }

        if (array_key_exists("LabelIds",$param) and $param["LabelIds"] !== null) {
            $this->LabelIds = $param["LabelIds"];
        }
    }
}
