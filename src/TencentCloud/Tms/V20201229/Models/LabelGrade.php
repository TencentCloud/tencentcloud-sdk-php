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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内容审核多级标签结构
 *
 * @method string getCode() 获取内容审核结果客户定制标签码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置内容审核结果客户定制标签码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGrade1() 获取内容审核结果客户定制一级标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrade1(string $Grade1) 设置内容审核结果客户定制一级标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGrade2() 获取内容审核结果客户定制二级标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrade2(string $Grade2) 设置内容审核结果客户定制二级标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGrade3() 获取内容审核结果客户定制三级标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrade3(string $Grade3) 设置内容审核结果客户定制三级标签
注意：此字段可能返回 null，表示取不到有效值。
 */
class LabelGrade extends AbstractModel
{
    /**
     * @var string 内容审核结果客户定制标签码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 内容审核结果客户定制一级标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Grade1;

    /**
     * @var string 内容审核结果客户定制二级标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Grade2;

    /**
     * @var string 内容审核结果客户定制三级标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Grade3;

    /**
     * @param string $Code 内容审核结果客户定制标签码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Grade1 内容审核结果客户定制一级标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Grade2 内容审核结果客户定制二级标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Grade3 内容审核结果客户定制三级标签
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Grade1",$param) and $param["Grade1"] !== null) {
            $this->Grade1 = $param["Grade1"];
        }

        if (array_key_exists("Grade2",$param) and $param["Grade2"] !== null) {
            $this->Grade2 = $param["Grade2"];
        }

        if (array_key_exists("Grade3",$param) and $param["Grade3"] !== null) {
            $this->Grade3 = $param["Grade3"];
        }
    }
}
