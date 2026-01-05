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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流执行的业务枚举信息
 *
 * @method string getLabelKey() 获取标签key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelKey(string $LabelKey) 设置标签key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelValue() 获取标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelValue(string $LabelValue) 设置标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取标签总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置标签总数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class BizStateEnumInfoBrief extends AbstractModel
{
    /**
     * @var string 标签key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelKey;

    /**
     * @var string 标签值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelValue;

    /**
     * @var integer 标签总数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @param string $LabelKey 标签key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelValue 标签值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 标签总数量
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

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
