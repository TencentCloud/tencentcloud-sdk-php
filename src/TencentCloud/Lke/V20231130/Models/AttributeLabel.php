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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签值
 *
 * @method string getLabelBizId() 获取标准词ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelBizId(string $LabelBizId) 设置标准词ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelName() 获取标准词名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelName(string $LabelName) 设置标准词名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSimilarLabels() 获取同义词名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSimilarLabels(array $SimilarLabels) 设置同义词名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AttributeLabel extends AbstractModel
{
    /**
     * @var string 标准词ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelBizId;

    /**
     * @var string 标准词名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelName;

    /**
     * @var array 同义词名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SimilarLabels;

    /**
     * @param string $LabelBizId 标准词ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelName 标准词名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SimilarLabels 同义词名称
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
        if (array_key_exists("LabelBizId",$param) and $param["LabelBizId"] !== null) {
            $this->LabelBizId = $param["LabelBizId"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("SimilarLabels",$param) and $param["SimilarLabels"] !== null) {
            $this->SimilarLabels = $param["SimilarLabels"];
        }
    }
}
