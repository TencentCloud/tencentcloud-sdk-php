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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 医疗事例
 *
 * @method string getTime() 获取时间发生时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(string $Time) 设置时间发生时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取事件提取值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置事件提取值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取对应原文内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置对应原文内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class Case extends AbstractModel
{
    /**
     * @var string 时间发生时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var string 事件提取值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 类型描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var string 对应原文内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @param string $Time 时间发生时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 事件提取值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 类型描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 对应原文内容
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}
