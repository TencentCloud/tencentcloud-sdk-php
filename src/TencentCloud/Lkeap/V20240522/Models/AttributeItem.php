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
 * 属性信息
 *
 * @method string getAttributeId() 获取属性id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttributeId(string $AttributeId) 设置属性id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttributeKey() 获取属性标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttributeKey(string $AttributeKey) 设置属性标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttributeName() 获取属性名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttributeName(string $AttributeName) 设置属性名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置标签名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AttributeItem extends AbstractModel
{
    /**
     * @var string 属性id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttributeId;

    /**
     * @var string 属性标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttributeKey;

    /**
     * @var string 属性名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttributeName;

    /**
     * @var array 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @param string $AttributeId 属性id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttributeKey 属性标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttributeName 属性名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 标签名称
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

        if (array_key_exists("AttributeKey",$param) and $param["AttributeKey"] !== null) {
            $this->AttributeKey = $param["AttributeKey"];
        }

        if (array_key_exists("AttributeName",$param) and $param["AttributeName"] !== null) {
            $this->AttributeName = $param["AttributeName"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new AttributeLabelItem();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
