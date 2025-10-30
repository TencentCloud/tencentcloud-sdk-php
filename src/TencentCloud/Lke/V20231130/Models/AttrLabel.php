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
 * 标签详情信息
 *
 * @method integer getSource() 获取标签来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(integer $Source) 设置标签来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttrBizId() 获取标签ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttrBizId(string $AttrBizId) 设置标签ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttrKey() 获取标签标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttrKey(string $AttrKey) 设置标签标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttrName() 获取标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttrName(string $AttrName) 设置标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置标签值
注意：此字段可能返回 null，表示取不到有效值。
 */
class AttrLabel extends AbstractModel
{
    /**
     * @var integer 标签来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 标签ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttrBizId;

    /**
     * @var string 标签标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttrKey;

    /**
     * @var string 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttrName;

    /**
     * @var array 标签值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @param integer $Source 标签来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttrBizId 标签ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttrKey 标签标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttrName 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 标签值
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
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

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
