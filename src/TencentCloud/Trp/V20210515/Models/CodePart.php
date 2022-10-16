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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 码段配置
 *
 * @method string getName() 获取码段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置码段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取码段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置码段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取码段内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置码段内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLength() 获取码段长度
 * @method void setLength(integer $Length) 设置码段长度
 * @method string getExt() 获取扩展字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExt(string $Ext) 设置扩展字段
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodePart extends AbstractModel
{
    /**
     * @var string 码段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 码段类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 码段内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var integer 码段长度
     */
    public $Length;

    /**
     * @var string 扩展字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ext;

    /**
     * @param string $Name 码段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 码段类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 码段内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Length 码段长度
     * @param string $Ext 扩展字段
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = $param["Ext"];
        }
    }
}
