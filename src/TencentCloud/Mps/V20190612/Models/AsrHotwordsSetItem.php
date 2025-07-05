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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个热词信息
 *
 * @method integer getId() 获取热词的序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置热词的序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取热词文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置热词文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取词语权重，取值范围 1-10,11,100
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置词语权重，取值范围 1-10,11,100
注意：此字段可能返回 null，表示取不到有效值。
 */
class AsrHotwordsSetItem extends AbstractModel
{
    /**
     * @var integer 热词的序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 热词文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var integer 词语权重，取值范围 1-10,11,100
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @param integer $Id 热词的序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 热词文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight 词语权重，取值范围 1-10,11,100
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
