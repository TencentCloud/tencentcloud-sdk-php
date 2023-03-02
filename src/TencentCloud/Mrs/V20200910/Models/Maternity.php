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
 * 孕产报告
 *
 * @method MaternityDesc getDesc() 获取描述部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(MaternityDesc $Desc) 设置描述部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaternitySummary getSummary() 获取结论部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummary(MaternitySummary $Summary) 设置结论部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrText() 获取报告原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrText(string $OcrText) 设置报告原文
注意：此字段可能返回 null，表示取不到有效值。
 */
class Maternity extends AbstractModel
{
    /**
     * @var MaternityDesc 描述部分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var MaternitySummary 结论部分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Summary;

    /**
     * @var string 报告原文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrText;

    /**
     * @param MaternityDesc $Desc 描述部分
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaternitySummary $Summary 结论部分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrText 报告原文
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
        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = new MaternityDesc();
            $this->Desc->deserialize($param["Desc"]);
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new MaternitySummary();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("OcrText",$param) and $param["OcrText"] !== null) {
            $this->OcrText = $param["OcrText"];
        }
    }
}
