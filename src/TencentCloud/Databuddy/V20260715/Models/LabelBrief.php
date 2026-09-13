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
 * 标签信息
 *
 * @method string getLabelKey() 获取标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelKey(string $LabelKey) 设置标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelValue() 获取标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelValue(string $LabelValue) 设置标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelKeyId() 获取标签名称ID，可通过标签相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelKeyId(string $LabelKeyId) 设置标签名称ID，可通过标签相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelValueId() 获取标签值ID，可通过标签相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelValueId(string $LabelValueId) 设置标签值ID，可通过标签相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
 */
class LabelBrief extends AbstractModel
{
    /**
     * @var string 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelKey;

    /**
     * @var string 标签值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelValue;

    /**
     * @var string 标签名称ID，可通过标签相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelKeyId;

    /**
     * @var string 标签值ID，可通过标签相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelValueId;

    /**
     * @param string $LabelKey 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelValue 标签值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelKeyId 标签名称ID，可通过标签相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelValueId 标签值ID，可通过标签相关接口获取
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

        if (array_key_exists("LabelKeyId",$param) and $param["LabelKeyId"] !== null) {
            $this->LabelKeyId = $param["LabelKeyId"];
        }

        if (array_key_exists("LabelValueId",$param) and $param["LabelValueId"] !== null) {
            $this->LabelValueId = $param["LabelValueId"];
        }
    }
}
