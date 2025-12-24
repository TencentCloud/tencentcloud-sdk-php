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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签值选择列表
 *
 * @method integer getLabelId() 获取标签ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelId(integer $LabelId) 设置标签ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelValue() 获取标签值ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelValue(string $LabelValue) 设置标签值ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class LabelValueSelection extends AbstractModel
{
    /**
     * @var integer 标签ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelId;

    /**
     * @var string 标签值ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelValue;

    /**
     * @param integer $LabelId 标签ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelValue 标签值ID
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

        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }
    }
}
