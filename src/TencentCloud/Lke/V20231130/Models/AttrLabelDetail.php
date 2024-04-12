<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 属性标签详情
 *
 * @method string getAttrBizId() 获取属性ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttrBizId(string $AttrBizId) 设置属性ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttrKey() 获取属性标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttrKey(string $AttrKey) 设置属性标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttrName() 获取属性名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttrName(string $AttrName) 设置属性名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelNames() 获取标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelNames(array $LabelNames) 设置标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsUpdating() 获取属性标签是否在更新中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUpdating(boolean $IsUpdating) 设置属性标签是否在更新中
注意：此字段可能返回 null，表示取不到有效值。
 */
class AttrLabelDetail extends AbstractModel
{
    /**
     * @var string 属性ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttrBizId;

    /**
     * @var string 属性标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttrKey;

    /**
     * @var string 属性名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttrName;

    /**
     * @var array 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelNames;

    /**
     * @var boolean 属性标签是否在更新中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUpdating;

    /**
     * @param string $AttrBizId 属性ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttrKey 属性标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttrName 属性名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelNames 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsUpdating 属性标签是否在更新中
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
        if (array_key_exists("AttrBizId",$param) and $param["AttrBizId"] !== null) {
            $this->AttrBizId = $param["AttrBizId"];
        }

        if (array_key_exists("AttrKey",$param) and $param["AttrKey"] !== null) {
            $this->AttrKey = $param["AttrKey"];
        }

        if (array_key_exists("AttrName",$param) and $param["AttrName"] !== null) {
            $this->AttrName = $param["AttrName"];
        }

        if (array_key_exists("LabelNames",$param) and $param["LabelNames"] !== null) {
            $this->LabelNames = $param["LabelNames"];
        }

        if (array_key_exists("IsUpdating",$param) and $param["IsUpdating"] !== null) {
            $this->IsUpdating = $param["IsUpdating"];
        }
    }
}
