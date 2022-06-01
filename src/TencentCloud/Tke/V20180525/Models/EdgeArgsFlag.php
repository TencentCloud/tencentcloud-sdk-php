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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘容器参数描述
 *
 * @method string getName() 获取参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取参数类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置参数类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsage() 获取参数描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsage(string $Usage) 设置参数描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefault() 获取参数默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefault(string $Default) 设置参数默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConstraint() 获取参数可选范围（目前包含range和in两种，"[]"代表range，如"[1, 5]"表示参数必须>=1且 <=5, "()"代表in， 如"('aa', 'bb')"表示参数只能为字符串'aa'或者'bb'，该参数为空表示不校验）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConstraint(string $Constraint) 设置参数可选范围（目前包含range和in两种，"[]"代表range，如"[1, 5]"表示参数必须>=1且 <=5, "()"代表in， 如"('aa', 'bb')"表示参数只能为字符串'aa'或者'bb'，该参数为空表示不校验）
注意：此字段可能返回 null，表示取不到有效值。
 */
class EdgeArgsFlag extends AbstractModel
{
    /**
     * @var string 参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 参数类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 参数描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Usage;

    /**
     * @var string 参数默认值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Default;

    /**
     * @var string 参数可选范围（目前包含range和in两种，"[]"代表range，如"[1, 5]"表示参数必须>=1且 <=5, "()"代表in， 如"('aa', 'bb')"表示参数只能为字符串'aa'或者'bb'，该参数为空表示不校验）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Constraint;

    /**
     * @param string $Name 参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 参数类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Usage 参数描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Default 参数默认值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Constraint 参数可选范围（目前包含range和in两种，"[]"代表range，如"[1, 5]"表示参数必须>=1且 <=5, "()"代表in， 如"('aa', 'bb')"表示参数只能为字符串'aa'或者'bb'，该参数为空表示不校验）
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

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Constraint",$param) and $param["Constraint"] !== null) {
            $this->Constraint = $param["Constraint"];
        }
    }
}
