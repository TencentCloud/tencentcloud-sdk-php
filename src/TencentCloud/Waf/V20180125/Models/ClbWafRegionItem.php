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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Clb-waf地域信息
 *
 * @method string getId() 获取地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取地域中文说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置地域中文说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取地域英文全拼
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置地域英文全拼
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCode() 获取地域编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置地域编码
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClbWafRegionItem extends AbstractModel
{
    /**
     * @var string 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 地域中文说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 地域英文全拼
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 地域编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @param string $Id 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 地域中文说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 地域英文全拼
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Code 地域编码
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
