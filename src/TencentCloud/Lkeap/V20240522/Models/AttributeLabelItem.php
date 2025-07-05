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
 * 属性标签信息
 *
 * @method string getLabelId() 获取标签id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelId(string $LabelId) 设置标签id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelName() 获取标签名称，最大80个英文字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelName(string $LabelName) 设置标签名称，最大80个英文字符
注意：此字段可能返回 null，表示取不到有效值。
 */
class AttributeLabelItem extends AbstractModel
{
    /**
     * @var string 标签id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelId;

    /**
     * @var string 标签名称，最大80个英文字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelName;

    /**
     * @param string $LabelId 标签id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelName 标签名称，最大80个英文字符
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
        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }
    }
}
